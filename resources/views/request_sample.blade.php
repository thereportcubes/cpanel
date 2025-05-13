@extends('layout/header')
@section('title','Upcoming Report')

@section('content')
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<style>
   .iti--separate-dial-code{
      width:100%!important;
   }
   #more {display: none;}
</style>
 <link rel="stylesheet" media="all" href="{{asset('css/ab-product.css?v=2')}}"> 
<section class="mini-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h3 class="mb-0 mini-banner-title">Request Sample</h3>
         </div>
      </div>
   </div>
</section>
  <div id="main" class="center products-wrapper mt-4">
      <div id="breadCrumbs">
         <div class="container-breadcrumb">
            <div class="breadCrumbs clearfix">
               <ul>
                  <li><a href="{{url('/')}}"> <span><i class="fa fa-home"></i> Home</span> <span class="arrow">/</span> </a></li>
                  <li><a href="{{url('/report-store')}}"> <span>Report Store</span><span class="arrow">/</span>  </a>  </li>
                  <li><a href="javascript:void()"> <span>{{$datas->title}}</span>   </a>  </li>
                  
               </ul>
            </div>
         </div>
      </div>
   </div>
<section class="main-content mb-5 ">
      <div class="container">
         <div class="row">

            <div class="col-md-9 sm-100">
         <div class="box-shadow">

                  <div class="row  category-box">
                     <div class=" col-md-3">
                          <div class="ab-product-thumbnail-book-binder left ms-2">
                           <div class="product-img-box details">
                                       <span class="image-report" style="color:#fff;top: 10px;left: 3px;font-size: 8px;">Report</span>
                                       <h4 class="image-title" style="color: #000;top: 40px;font-size: 11px;text-align: left;width: 80px;left: 6px;">
                                       {{ Str::limit(strip_tags($datas->title), 45) }}</h4>                      
                                       </h4>
                                       <span class="imag-pages" style="color: #000;font-size: 8px;left: 5px;bottom: 5px;">@php echo ($datas->no_of_page) ? $datas->no_of_page : '0' @endphp pages</span>
                                       <span class="book-years" style="color: ;font-size: 9px;right: 14px;bottom: 3px;">{{ Carbon\Carbon::parse($datas->report_post_date)->format('M Y') }}</span>
                                    </div>
                                    <img loading="lazy" class="nonGenericproductSmallImage "src="{{asset('img/reportimg.jpg')}}" alt="<?php echo substr(html_entity_decode(strip_tags($datas->title)),0,30); ?>"width="107px"  >
                                 </div>
                     </div>
                     <div class="col-md-9">
                        <a class="fw-600 d-block blue pt-2" href="{{ url('report-store') }}/{{($datas->page_url)}}"target="_blank"><h1 class="ab-product-title ab-color-primary ab-small-title">{{$datas->title}}</h1></a>
                        <p class="fs-14 mb-2">
                           <h2 class="title_descr">
                              <?php echo substr($datas->heading2,0,1800); ?></span><span id="more"><?php echo trim(substr($datas->heading2,180,2000));  ?>
                              </span>

                              
                           </h2>
                        </p>
                            <ul id="productDetails" class="ab-product-header-info" style="list-style: none;">
                            <li><i class="fa fa-industry" aria-hidden="true" style="color:#c00000"></i>{{$datas->cat_name}}</li>                
                  
               
                  <li> Pages : {{$datas->no_of_page}}  </li>
                  <li id="publicationDateItemId_5395374" class="publicationDateItem" data-result="Thursday, April 6, 2023"><i class="fa fa-calendar" aria-hidden="true" style="color:#c00000"></i>{{ Carbon\Carbon::parse($datas->report_post_date)->format('M Y') }}</li>
                    <li>
                    <p style="margin:0px"
                    > Report Format : &nbsp;</p>
                    
                    <img loading="lazy" width="5" height="5" src="{{asset('assets/icons/pdf.png')}}" alt="PDF Icon">
                    <img loading="lazy" width="5" height="5" src="{{asset('assets/icons/ppt.png')}}" alt="PPT Icon">
                    <img loading="lazy" width="5" height="5" src="{{asset('assets/icons/xls.png')}}" alt="Excel Icon">
                  </li>
               </ul>
                     </div>
                  </div>

                  
               </div>
               

               <div class="box-shadow" style="position:relative;">
                <div class="row">
                    <div class="col-2">
                        <div class="ab-product-nav" style=" margin-left:-15px;margin-top: 8px;">
            <div class="ab-product-mobile-navigation ab-product-content-navigation">
               <div class="ab-product-content-navigation-label" tabindex="0"> 
               </div>
               <ul class="ab-product-content-navigation-links ml-5" style="margin-left: 10px;">
                  <li><a href="{{ url('report-store') }}/{{($datas->page_url)}}#product--description" class="ab-a">Report Overview</a></li>
                  <li><a href="{{ url('report-store') }}/{{($datas->page_url)}}#product--toc" class="ab-a">Table of Contents</a></li>
                  <li><a href="{{ url('report-store') }}/{{($datas->page_url)}}#product--lof" class="ab-a">List of Figure</a></li>
                  <li><a href="{{ url('report-store') }}/{{($datas->page_url)}}#product--lot" class="ab-a">List of Table</a></li>
                  <li><a href="{{ url('report-store') }}/{{($datas->page_url)}}#product--adaptive" class="ab-a">Companies Mentioned</a></li>
                   <li><a href="{{ url('report-store') }}/{{($datas->page_url)}}#product--faqs" class="ab-a">Frequently Asked Questions</a></li>
                  <li><a href="{{ url('report-store') }}/{{($datas->page_url)}}#product--related-products" class="ab-a current">Related Reports</a></li>  
                  <li><a href="{{asset('img/Research_Methodology_The Report_Cubes.pdf')}}" class="ab-a current"  title="Download Research Methodology PDF" download>Research Methodology <i class="fa fa-download"></i></a></li>
                
               </ul>
            </div>
          </div>
                        
                    </div>
                    <div class="col-10">
                  <div class="tab-content" id="myTabContent" style="margin-left: 50px;">
                     <div class="tab-pane fade" id="Overview" role="tabpanel"
                        aria-labelledby="Overview-tab">

                        <div class="tabs-content">
                           <?php echo $datas->decription;  ?>                          
                        </div>

                     </div>
                     <div class="tab-pane fade " id="Content" role="tabpanel" aria-labelledby="Content-tab">
                        <p><?php echo $datas->table_of_content;  ?> </p>
                     </div>
                     
                     <div class="tab-pane fade" id="Segmentation" role="tabpanel" aria-labelledby="Segmentation-tab">
                        <img loading="lazy" src="{{url('/')}}/{{$datas->segmentaion}}" /> 
                     </div>

                        
                     <div class="tab-pane fade show active" id="Request" role="tabpanel" aria-labelledby="Request-tab">

                     <div class="p-4">
                        @if(session()->has('success'))
                        <div class="alert-success" style="padding:18px;border-radius: 5px;">
                           <strong>Success!</strong> {{ session()->get('success') }}
                        </div>
                        <br>
                        @endif
                        @if(session()->has('error'))
                        <div class="alert-danger" style="padding:18px;border-radius: 5px;">
                           <strong>Warning!</strong> {{ session()->get('error') }}
                        </div>
                        <br>
                        @endif
                          <span class="date"></i> Please Share Your Details to Receive a Free Sample Copy</span>
                        <form action="{{ url('save-request-sample') }}" method="post" id="form_request">
                           @csrf
                           <input type="hidden" name="request_title" value="{{$datas->title}}" />
                        
                     <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 14px;">Full Name<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <input class="ab-input" type="text" name="full_name" style="height: 35px;" value="{{ old('full_name') }}" placeholder="Enter your name" required>
                     </div>
                  </div>
                  <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 14px;">Company Name<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <input class="ab-input" type="text" name="company_name" style="height: 35px;" placeholder="Enter your company name" value="{{ old('company_name') }}" required>
                     </div>
                  </div>
                       
                            <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 14px;">Business Email<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <input class="ab-input" type="email"  name="busniess_email" style="height: 35px;" placeholder="Enter your business email" value="{{ old('busniess_email') }}" required>
                     </div>
                  </div>
                 <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 14px;">Country Name<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <!-- <input class="ab-input " type="text" maxlength="13" style="height:49px;"  name="country_name" value="{{ old('country_name') }}" placeholder="Enter Your country" required> -->
                         <select class="ab-input"  name="country_name" placeholder="Select Country" required style="height: 37px;">
<option value="">Select Country</option>
@foreach(config('countries') as $country => $code)
    <option value="{{ $country }} {{ $code }}">{{ $country }} {{ $code }}</option>
@endforeach

</select>
                     </div> 
                  </div>
                            <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 14px;">Contact Number<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <input class="ab-input mobivali" type="text" maxlength="13" style="height:35px;"  name="phone" value="{{ old('phone') }}" placeholder="Enter Your Contact Number" required> 
                     </div>
                  </div>
                                              
                  <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 14px;">Message<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <textarea class="ab-input"  name="message" cols="10" rows="1" required>{{ old('message') }}</textarea> 
                     </div>
                  </div>
                   <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        
                     </div>
                     <div class="col-md-9">
                       <div class="col-12">
                              <div class="cf-turnstile"
     data-sitekey="{{ config('services.cloudflare.turnstile.site_key') }}"
     data-callback="onTurnstileSuccess"
></div>
                               <!--<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>-->
                           </div>
                          <!-- <div class="col-12 mt-2">
                           
                           @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                           </div> -->
                     </div>
                  </div>
                          
                             
                           <div class="text-center pt-4">
                              <button type="submit" class="btns btn-primary">Submit Request</button>
                           </div>
                        </form>
                     </div>  
                      </div>
                  </div>
               </div>
               </div>
               </div>
            </div>
            <div class="col-md-3 sm-100 ">
               <div class="right-sidebar when-scroll">
                   <h6 class="fw-600 blue-title-bg text-center">PURCHASE OPTIONS <i class="fa fa-info-circle"></i></h6>
                  <div class=" side">                   
                  <div class="d-flex justify-content-between orders  mb-2">
                     <div class="form-check">
                        <input class=" single_user_license" name="price_type" type="radio" value="<?php  echo ($datas->special_single_licence_price !='') ? $datas->special_single_licence_price.'-single_licence_price' : $datas->single_licence_price.'-single_licence_price' ?> " id="flexCheckDefault" checked>
                        <label class="form-check-label" for="flexCheckDefault">
                           Single User License
                        </label>
                        <span class="tooltips"><i class="fa fa-info-circle"></i><span class="tooltipstext">  
                              The report will be delivered in PDF format without printing rights. It is advised for a
                              single user.<span class="caret"></span></span></span>
                     </div>
                     <div>
                        <p class="mb-0">
                           @if($datas->special_single_licence_price !='' )
                              <s> USD  {{$datas->single_licence_price}} </s> <br> {{'USD ' .$datas->special_single_licence_price}} 
                              
                              @else 
                              USD  {{$datas->single_licence_price}}
                           @endif   
                        </p>
                     </div>
                  </div>

                  <div class="d-flex justify-content-between orders  mb-2">
                     <div class="form-check">
                        <input class="" type="radio" value="<?php echo ($datas->special_multi_user_price !='') ? $datas->special_multi_user_price.'-multi_user_price' : $datas->multi_user_price.'-multi_user_price' ?> " id="flexCheckDefault" name="price_type">
                        <label class="form-check-label" for="flexCheckDefault">
                           Multi User License
                        </label>
                        <span class="tooltips"><i class="fa fa-info-circle"></i><span class="tooltipstext">  
                              The report will be delivered in PDF format with printing rights. It is advised for up
                              to five users.<span class="caret"></span></span></span>
                     </div>
                     <div>
                        <p class="mb-0">
                           @if($datas->special_multi_user_price !='' )
                              <s> USD  {{$datas->multi_user_price}} </s> <br> {{'USD ' .$datas->special_multi_user_price}} 
                              
                              @else 
                              USD  {{$datas->multi_user_price}}
                           @endif
                        </p>
                     </div>
                  </div>


                  <div class="d-flex justify-content-between orders  mb-2">
                     <div class="form-check">
                        <input class="" type="radio" value="<?php echo ($datas->special_custom_report_price !='') ? $datas->special_custom_report_price.'-custom_report_price' : $datas->custom_report_price.'-custom_report_price' ?> " id="flexCheckDefault" name="price_type">
                        <label class="form-check-label" for="flexCheckDefault">
                           Enterprise License
                        </label>
                        <span class="tooltips"><i class="fa fa-info-circle"></i><span class="tooltipstext">  
                              The report will be delivered in PDF format with printing rights and excel sheet. It is
                              advised for companies where multiple users would like to access the report from
                              multiple locations<span class="caret"></span></span></span>
                     </div>
                     <div>
                        <p class="mb-0">
                           @if($datas->special_custom_report_price !='' )
                              <s> USD  {{$datas->custom_report_price}} </s> <br> {{'USD ' .$datas->special_custom_report_price}} 
                              
                              @else 
                              USD  {{$datas->custom_report_price}}
                           @endif
                        </p>
                     </div>
                  </div>   
               </div>
                <input type="hidden" name="idH" value="{{$datas->id}}" id="idH" />
                  <div class="">
                     <button type="button" class="addtocart  max-100" onclick="add_to_cart()"><i class="fa"> </i> Add To Basket</button>
                  </div>
                   <div class="">
                      <a href="{{ url('/request-sample') }}/{{request()->segment(2)}}" class="quote  max-100">NEED A QUOTE</a> 
                  </div>
                                          <div class="licence_right fullReportRight full mt-3" >
<h3>Buy Chapters or Sections</h3>
<div class="why_c_us_inner " style="padding-top: 15px;">
<p>
Avail customized purchase options to meet your exact research needs:
</p><ul style="margin-left: 26px;">
<li>Buy sections of this report</li>
<li>Buy country level reports</li>
<li>Request for historical data</li>
<li>Request discounts available for Start-Ups &amp; Universities</li>
</ul>
<p></p>
</div>
<a href="{{ url('/request-sample') }}/{{request()->segment(2)}}"><input type="button" value="Request for Special Pricing" class="buy_now1 buy_now_3"></a>
</div>
               </div>
            </div>
         </div>
      </div>
   </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
   <script>
      function add_to_cart(){
      
      let report_type_price = $("input[name='price_type']:checked").val();
      
      if(report_type_price == "" || report_type_price === 'undefined'){
         alert('Please Select At-least One Licence Price');
         return false;
      }
      let id = $("#idH").val();
      
      $.ajax({
			url : '{{route("add-to-cart-new") }}' ,
			type: 'get',
         data: {'id':id, report_type_price: report_type_price},
         dataType: "text",
         success: function(response){
            //location.reload(true)
            window.location = "{{ url('/shopping-basket') }}";
         }
      }); 

   }
   </script>

<!-- plugins -->
<!--<script src="{{url('public/assets/js/vendors.js')}}"></script>-->

<!-- custom app -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>

<script src="{{url('public/assets/js/app.js')}}"></script>

<script type="text/javascript">
let base_url_req_sample = {!! json_encode(url('/')) !!};
$('#reload').click(function () {
   $.ajax({
      type: 'GET',
      url: base_url_req_sample + '/reload-captcha',
      success: function (data) {
         $(".captcha span").html(data.captcha);
      }
   });
});
</script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn2");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

@endsection



