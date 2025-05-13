@extends('./layout/header')
@section('title','Market Advisor')
@section('content')

<section class="mini-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="mb-0 mini-banner-title">{{ __('login.reset_password') }}</h1>
         </div>
      </div>
   </div>
</section>
<main class="login-form mt-5">
  <div class="cotainer" style="min-height: 350px;">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('login.reset_password') }}</div>
                  <div class="card-body">
  
                    @if (Session::has('message'))
                         <div class="alert alert-success" role="alert">
                            {{ Session::get('message') }}
                        </div>
                    @endif
  
                      <form action="{{ route('forget.password.post', ['locale' => app()->getLocale()]) }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">{{ __('login.email') }}</label>
                              <div class="col-md-12">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          
                          <div class="col-md-2 mt-1">
                              <button type="submit" class="ab-button ab-button-primary">
                                  {{ __('login.submit') }}
                              </button>
                          </div>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection

