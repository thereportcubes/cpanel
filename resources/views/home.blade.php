@extends('layout/header')
@section('title','R Cube')
@section('content')
<!-- banner slider start -->

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "WebSite",
      "name": "The Report Cube",
      "url": "https://www.thereportcubes.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://www.thereportcubes.com/search/search-result?search_form={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },
    {
      "@type": "Organization",
      "name": "The Report Cube",
      "description": "The Report cube is a leading market research and business consulting company that offers market research reports, syndicated services, customized services, competitive, company profile and biographies.",
      "image": "https://www.thereportcubes.com/public/img/rcube-logo.png",
      "alternateName": "Report Cube",
      "telephone": "+971 564468112",
      "email": "sales@thereportcubes.com",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "C/Burjuman Business Tower - Dubai - United Arab Emirates",
        "addressLocality": "Dubai",
        "addressRegion": "GCC",
        "addressCountry": "UAE",
        "postalCode": "121828"
      },
      "url": "https://www.thereportcubes.com/",
      "sameAs": [
        "https://www.facebook.com/people/The-Report-Cube/61561130759640/",
        "https://twitter.com/thereportcube",
        "https://www.linkedin.com/company/the-report-cube/"
      ]
    }
  ]
}
</script>

@foreach($data_banner as $key => $data)
<section class="hero_top-1">
    <style>
        .hero_top-1 {
            background-image: url('{{ asset('/uploads/banner/' . $data->banner_image) }}');
            background-size: cover;
            background-position: center;
        }
        @media (max-width: 767px) {
            .hero_top-1 {
                background-image: url('{{ asset('/uploads/banner/' . $data->banner_mobile_image) }}');
            }
        }
    </style>
    <div class="container">
        <div class="content">
            <h1 class="ab-large-title">
                The Report Cube: {{$data->banner_title}}
            </h1>
            <div class="full-width-search">
                <form action="{{ url('search/search-result') }}" method="get" class="search" id="mainsearch">
                    <input type="text" placeholder="{{ __('home.search_placeholder') }}" class="search-box1" id="search_123" name="search_form" autocomplete="off">
                    <button type="submit" class="search-button1"><i class="fa fa-search" aria-hidden="true"></i></button>
                    <div id="search_result" class="search_result_data" style="display:none"></div>
                </form>
            </div>
        </div>
    </div>
</section>
@break
@endforeach
  
<!-- about us section gose here -->
 <section class="ab-reviews-publishers industry-services" style="background-color: #fff !important;">
      <div class="ab-wrapper">
         <h2 class="ab-title ab-align-center">{{ __('home.industries_served') }}</h2>
         <div class="row">
            
            <div class="col-md-3 col-sm-6">
               <div class="ab-reviews-publishers-row-left industry-served" >                  
                  <div class="col-md-6 industry-served-logo">
                     <a href="{{url('report-store/healthcare')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="60" height="27" src="{{asset('assets/icons/healthcare.webp')}}" alt="Healthcare Industry Icon for Market Research Reports"></a>
                     <p class="mt-2">{{ __('home.Healthcare') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-3  col-sm-6">
               <div class="ab-reviews-publishers-row-left industry-served" >                  
                  <div class="col-md-6 industry-served-logo">
                     <a href="{{url('report-store/energy-natural-resources')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="60" height="27" src="{{asset('assets/icons/energy.webp')}}" alt="Energy Industry Icon"></a>
                     <p class="mt-2">{{ __('home.energy_natural_resources') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="ab-reviews-publishers-row-left industry-served" >                  
                  <div class="col-md-6 industry-served-logo">
                     <a href="{{url('report-store/information-technology')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="60" height="27" src="{{asset('assets/icons/it.webp')}}" alt="Information Technology Icon"></a>
                     <p class="mt-2">{{ __('home.information_technology') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="ab-reviews-publishers-row-left industry-served">                  
                  <div class="col-md-6 industry-served-logo">
                     <a href="{{url('report-store/chemicals-materials')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="60" height="27" src="{{asset('assets/icons/chemical.webp')}}" alt="Chemicals Industry Icon"></a>
                     <p class="mt-2">{{ __('home.chemicals_materials') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="ab-reviews-publishers-row-left industry-served" >                  
                  <div class="col-md-6 industry-served-logo">
                     <a href="{{url('report-store/food-beverages')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="60" height="27" src="{{asset('assets/icons/food.webp')}}" alt="Food Industry Icon"></a>
                     <p class="mt-2">{{ __('home.food_beverage') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="ab-reviews-publishers-row-left industry-served" >                  
                  <div class="col-md-6 industry-served-logo">
                     <a href="{{url('report-store/manufacturing-construction')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="60" height="27" src="{{asset('assets/icons/menufecture.webp')}}" alt="Manufacturing Industry Icon"></a>
                     <p class="mt-2">{{ __('home.building_manufacturing_construction') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="ab-reviews-publishers-row-left industry-served" >                  
                  <div class="col-md-6 industry-served-logo">
                     <a href="{{url('report-store/automotive-transport')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="60" height="27" src="{{asset('assets/icons/automotive.webp')}}" alt="Automotive Industry Icon"></a>
                     <p class="mt-2">{{ __('home.automotive_transport') }}</p>
                  </div>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div class="ab-reviews-publishers-row-left industry-served" >                  
                  <div class="col-md-6 industry-served-logo">
                     <a href="{{url('report-store/consumer-goods-services')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="60" height="27" src="{{asset('assets/icons/consumer.webp')}}" alt="Consumer Goods Industry Icon"></a>
                     <p class="mt-2">{{ __('home.consumer_goods_services') }}</p>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
  <section class="ab-home-products ab-bg-subtle-gray ab-section">
      <div id="productListContainer" class="ab-wrapper">
         <h3 class="ab-title ab-align-center">{{ __('home.recently_viewed_related_market_research_eports') }}</h3>
         <ul class="ab-products-grid" style="list-style: none;">
            
            <!-- item -->
            @if(count($report_data) > 0)
            @foreach($report_data as $rt)
            <li>
               <a href="{{ url('report-store') }}/{{$rt->page_url}}" class="ab-products-grid-item">
                  <div class="ab-products-grid-item-image ab-product-thumbnail ab-product-thumbnail-3d ">
                     <div class="ab-product-thumbnail-3d-book ab-product-thumbnail-3d-book-reverse">
                        <img class="ab-product-thumbnail-image-front" src="{{asset('img/reportimg.jpg')}}" style="width:115px;height:165px;" alt="{{ \Illuminate\Support\Str::limit(strip_tags($rt->title), 30) }}">
                        <div class="product-img-box home">
                           <span class="image-report" style="color:#fff">Report</span>
                           <h4 class="image-title" style="color: #000;">{{ \Illuminate\Support\Str::limit(strip_tags($rt->title), 40) }}</h4>
                           <span class="imag-pages" style="color: #000;font-weight:bold;">{{$rt->no_of_page}} Pages</span>
                           <span class="book-years" style="color: #000;font-size:10px;" >{{ Carbon\Carbon::parse($rt->report_post_date)->format('M Y') }}</span>
                        </div>
                        <div class="ab-product-thumbnail-image-inside"></div>
                        <img class="ab-product-thumbnail-image-back" src="{{asset('img/reportimg.jpg')}}" style="width:115px;height:165px;" alt="<?php echo substr(html_entity_decode(strip_tags($rt->title)),0,30); ?>">
                     </div>
                  </div>
                  <div class="ab-products-grid-item-text">
                     <div class="ab-products-grid-item-type">{{ __('home.report') }}</div>
                     <div class="ab-products-grid-item-title">{{$rt->title}}</div>
                     <ul class="ab-products-grid-item-info" style="list-style: none;">
                        <li> {{ Carbon\Carbon::parse($rt->report_post_date)->format('M Y') }}</li>
                        <li>{{$rt->no_of_page}} Pages </li>
                     </ul>
                     <ul class="ab-products-grid-item-info" style="list-style: none;">
                        <li class="ab-products-list-item-info-price-home"> From <span class="ab-products-list-item-info-price-amount-home">
                           <span class="dynPrice" style=""><span class="currency-2" style="color:#c00000;">USD {{$rt->single_licence_price}}</span><span content="USD" style="display: none;">USD</span></span></span>
                        </li>
                     </ul>
                  </div>
               </a>
            </li>
            @endforeach
            @endif
            
            <!-- /item -->
            
         </ul>
      </div>
   </section>
<section class="ab-reviews-publishers" style="background-color: #fff !important;">
    <div class="ab-wrapper">
        <div class="row">
      <div class="col-md-4">
                <h3 class="ab-title text-center">{{ __('home.our_client') }}</h3>
                <div class="ab-reviews-publishers-row-left mt-3">
                    <div class="row">
                        @foreach($clients as $cl)
                        <div class="col-md-5 text-center client mb-2 me-4 p-2" style="border:1px solid #ddd; margin: 0 auto; height: 94px;  border-radius: 10px; box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;">
                           <div >
                            <img loading="lazy"  width="120" height="90" src="{{ asset('uploads/clients/' . $cl->client_image) }}" alt="Client Logo">
                        </div>
                     </div>
                        @endforeach
                    </div>
                </div>
            </div> 
         
            <div class="col-md-8">
                <h3 class="ab-title text-center">{{ __('home.client_testimonials') }}</h3>
                <div class="ab-reviews-publishers-row-left">
                    @if(count($testimonials) > 0)
                    <div class="row">
                        @foreach($testimonials as $test)
                        <div class="col-md-6">
                            <div class="review-box">
                                <p class="icon"><i class="fa fa-quote-left" aria-hidden="true"></i></p>
                                <p class="review-p">{!! $test->description !!}</p>
                                <span>{{ strip_tags($test->client_name) }}</span>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="ab-about-hero ab-bg-subtle-gray ab-section">
         <div class="ab-wrapper">
            <div class="ab-row ab-row-gap-huge">
               <div class="ab-col ab-col-desktop-6 ab-col-tablet-12" style="text-align: left;">
                     <h3 class="ab-title ">{{ __('home.about.title') }}</h3>
                     
                     <div class="ab-about-hero-description" style="margin-top:30px;text-align:justify">
                        <p class="ab-p" >{{ __('home.about.para1') }}</p>
                        <p class="ab-p">{{ __('home.about.para2') }}</p>
                        <p class="ab-p">{{ __('home.about.para3') }}</p>
                     </div>
               </div>
               <div class="ab-col ab-col-desktop-6 ab-col-tablet-12 mt-5 pt-1">
                     <div class="ab-about-hero-images">
                        <div class="ab-about-hero-images-item-1 ab-about-hero-images-item"><img loading="lazy"
                                 src="{{asset('images/about-3.jpg')}}" alt="About Us Image"
                                 width="450" height="300"></div>
                        
                     </div>
               </div>
            </div>
         </div>
   </section>
<section class="ab-reviews-publishers" style="background-color: #fff !important;">
      <div class="ab-wrapper">
         <h3 class="ab-title ab-align-center">{{ __('home.services_offered.title') }}</h3>
         <div class="row">
            
            <div class="col">
               <div class="ab-reviews-publishers-row-left ">                  
                  <div class="col-md-12 industry-served-logo">
                     <a href="{{url('syndicated-research')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="78" height="26" src="{{asset('assets/icons/syndicated-research.webp')}}" alt="{{ __('home.services_offered.sub_title1') }}">
                     <p class="ab-color-primary mt-2">{{ __('home.services_offered.sub_title1') }}</p>
                     <p class="mt-2">{{ __('home.services_offered.para1') }}</p>
                     </a>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="ab-reviews-publishers-row-left ">                  
                  <div class="col-md-6 industry-served-logo">
                     <a href="{{url('customized-research')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="60" height="32" src="{{asset('assets/icons/customised-research.webp')}}" alt="{{ __('home.services_offered.sub_title2') }}">
                     <p class="ab-color-primary mt-2">{{ __('home.services_offered.sub_title2') }} </p>
                     <p class="mt-2">{{ __('home.services_offered.para2') }}</p></a>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="ab-reviews-publishers-row-left ">                  
                  <div class="col-md-6 industry-served-logo">
                     <a href="{{url('competitive-analysis')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="60" height="32" src="{{asset('assets/icons/it.webp')}}" alt="{{ __('home.services_offered.sub_title3') }}">
                     <p class="ab-color-primary mt-2"> {{ __('home.services_offered.sub_title3') }} </p>
                     <p class="mt-2">{{ __('home.services_offered.para3') }}</p></a>
                  </div>
               </div>
            </div>
            <div class="col">
               <div class="ab-reviews-publishers-row-left ">                  
                  <div class="col-md-12 industry-served-logo">
                     <a href="{{url('company-profile')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="127" height="127" src="{{asset('assets/icons/company-profile.webp')}}" alt="{{ __('home.services_offered.sub_title4') }}">
                     <p class="ab-color-primary mt-2"> {{ __('home.services_offered.sub_title4') }}</p>
                     <p class="mt-2">{{ __('home.services_offered.para4') }}</p></a>
                  </div>
               </div>
            </div>

            <div class="col">
               <div class="ab-reviews-publishers-row-left ">                  
                  <div class="col-md-12 industry-served-logo">
                     <a href="{{url('biographies')}}" class="ab-reviews-publishers-image-hyperlink-float" target="_blank">
                     <img loading="lazy" width="70" height="32" src="{{asset('assets/icons/biography.webp')}}" alt="{{ __('home.services_offered.sub_title5') }}">
                     <p class="ab-color-primary">{{ __('home.services_offered.sub_title5') }} </p>
                     <p class="mt-2">{{ __('home.services_offered.para5') }}</p></a>
                  </div>
               </div>
            </div>
          

         </div>
      </div>
   </section>
<section class="ab-home-news ab-section">
      <div class="ab-wrapper">
         <div class="ab-clearfix" style="padding: 0px 15px;">
            <h3 class="ab-title ab-align-center">{{ __('home.latest_press_release') }}</h3>            
         </div>
         <div class="ab-news-grid ab-row ab-row-v-padding">
            @foreach($press_release as $pr)
            <div class="ab-col ab-col-desktop-3 ab-col-tablet-3 ab-col-phone-12">
               <a href="{{url('press-release')}}/{{$pr->press_release_url}}" class="ab-news-grid-item">
                  <div class="ab-news-grid-item-image" style="background-image: url('{{ asset('uploads/press_release/' . $pr->image) }}');">
                  </div>
                  <div class="ab-news-grid-item-text">
                     <div class="ab-news-grid-item-date">{{ Carbon\Carbon::parse($pr->post_date)->format('D, M Y') }} </div>
                     <div class="ab-news-grid-item-title">{{$pr->heading}}
                     </div>
                  </div>
                  <div class="ab-news-grid-item-excerpt"> <?php echo substr(html_entity_decode(strip_tags($pr->description)),0,260).'...'; ?> 
                  </div>
               </a>
            </div>
            
            @endforeach
         </div>
      </div>
   </section>
 
@endsection