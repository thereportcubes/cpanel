@extends('layout.header')
@yield('title')
@section('content')

<main class="background-gray">
 <section class="mini-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
         <h1 class="mb-0 mini-banner-title">Press Releases</h1>
         <h2 style="font-size: 18px; padding-bottom: 2px; color: white;">The Report Cube Solution to stay updated in the market with the latest releases published</h2> 
         </div>
      </div>
   </div>
</section>
   <section class="on-going-report ab-section ">
      <div class="ab-wrapper">
         <div class=" product-list-spacing-mobile">
            <div id="product--related-products" class="ab-product-content-section ab-product-content-related-items">
               <div class="relatedProducts" id="items-container">
                    @include('press_list')
                  
               </div>
            </div>
         </div>
      </div>
   </section>
</main>
<?php 
function truncate_html($string, $length, $postfix = '', $isHtml = true) {
    $string = trim($string);
    $postfix = (strlen(strip_tags($string)) > $length) ? $postfix : '';
    $i = 0;
    $tags = []; // change to array() if php version < 5.4

    if($isHtml) {
        preg_match_all('/<[^>]+>([^<]*)/', $string, $tagMatches, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
        foreach($tagMatches as $tagMatch) {
            if ($tagMatch[0][1] - $i >= $length) {
                break;
            }

            $tag = substr(strtok($tagMatch[0][0], " \t\n\r\0\x0B>"), 1);
            if ($tag[0] != '/') {
                $tags[] = $tag;
            }
            elseif (end($tags) == substr($tag, 1)) {
                array_pop($tags);
            }

            $i += $tagMatch[1][1] - $tagMatch[0][1];
        }
    }

    return substr($string, 0, $length = min(strlen($string), $length + $i)) . (count($tags = array_reverse($tags)) ? '</' . implode('></', $tags) . '>' : '') . $postfix;
}
?>
@endsection