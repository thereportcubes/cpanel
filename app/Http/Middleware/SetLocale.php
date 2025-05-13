<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->route('locale'); // Get locale from URL
        // Validate and set application locale
        if (!in_array($locale, config('app.available_languages'))) {
            $locale = config('app.fallback_locale'); // Default to fallback locale
        }
        App::setLocale($locale); // Set Laravel locale
        setlocale(LC_TIME, $locale . '.UTF-8'); // ✅ CORRECT USAGE
        return $next($request);
    }
}
