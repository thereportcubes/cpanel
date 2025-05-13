@extends('layout/header')
@section('title','Upcoming Report')
@section('content')
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
 
<section class="mini-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <p class="mb-0 mini-banner-title">Infographics</p>
            <h1 style="font-size: 18px; padding-bottom: 2px; color: white;">The Report Cube Infographics: Transforming Numbers into Visual Stories</h1>
         </div>
      </div>
   </div>
</section>
<?php
$res = "";
    // if($infographic->img_alt_tag != ''){
    //     $res = $infographic->img_alt_tag;
    // }
    // else{
    if(isset($report->title)){
        $exp_arr = explode('Market', @$report->title);
        $res = $exp_arr[0]."Market";
    }
        
   // }

?>

<section class="main-content mb-5 mt-5">
      <div class="container">
         <div class="row">
         
            <div class="col-md-8 sm-100">
                  <div class="product-item-small product-item-mobile  press-item">
                        <span class="date"><i class="fa fa-calendar"></i> {{ Carbon\Carbon::parse($infographic->created_at)->format('d M Y') }} </span>
                        <div class="product-item-content" style=" margin-top: 15px;">
                           <div class="content margin-zero" style="text-align: left;">
                              <h2 class="title"><a href="#" style="color:var(--primary-color);">{{$infographic->title}}</a></h2>
                              <img loading="lazy"  src="{{ asset($infographic->image) }}"  style="max-width:100%!important" alt="{{$infographic->img_alt_tag}}">
                              <br/><br/>
                              <div class="press-btn-div">
                                 <ul class="press-btn-list">
                                    <li ><a class="press-btn" href="{{url('/report-store')}}/{{@$infographic->slug}}">View Report</a></li>
                                   
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>

            </div>
            <div class="col-md-4">

   <div class="shadow p-0">

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
            <h4 class="fw-600 red-title-bg text-center" style="back-ground-color:red;">Request Sample</h4>

            <div class="p-3">
               <form action="{{url('save-infographic-request')}}" method="post" >
                  @csrf
                  <input type hidden name="request_title" value="{{@$infographic->title}}" />
                  
                    <div class="row" style="align-items: center;">
                     
                     <div class="col-md-12">
                        <input class="ab-input" type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Enter your Name" required>
                     </div>
                  </div>
           
                  <div class="row mt-2" style="align-items: center; ">
                     
                     <div class="col-md-12">
                        <input class="ab-input" type="text" name="company_name" value="{{ old('company_name') }}" placeholder="Enter Company Name" required>
                     </div>
                  </div>
                   <div class="row mt-2" style="align-items: center; ">
                     
                     <div class="col-md-12">
                        <input class="ab-input" type="email" name="busniess_email" value="{{ old('busniess_email') }}" placeholder="Enter your business Email" required>
                     </div>
                  </div>
                   <div class="row mt-2" style="align-items: center; ">
                     
                     <div class="col-md-12">
                     
                        <select class="ab-input" id="country_name" name="country_name" placeholder="Select Country" required>
<option value="">Select Country</option>
@foreach(config('countries') as $country => $code)
    <option value="{{ $country }} {{ $code }}">{{ $country }} {{ $code }}</option>
@endforeach
</select>
                     </div>
                  </div>
                  <div class="row mt-2" style="align-items: center; ">
                     
                     <div class="col-md-12">
                        <input class="ab-input" type="text" name="contact_number" value="{{ old('contact_number') }}" placeholder="Enter your Phone Number" required>
                     </div>
                  </div>

                  <div class="row mt-2" style="align-items: center; ">
                  
                     <div class="col-md-12">
                        <textarea class="ab-input"  name="message" cols="10" rows="1" placeholder="Type Your Message " required></textarea> 
                     </div>
                  </div>
                  
                  <div class="col-12 mt-1">

                   
                     <!--<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                  </div>
                  <div class="col-12 mt-2">                     
              
                    @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif -->
                                <div class="cf-turnstile"
     data-sitekey="{{ config('services.cloudflare.turnstile.site_key') }}"
     data-callback="onTurnstileSuccess"
></div>
                  </div>
                 
                  <div class="form-group text-center"><button class="btns btn-primary market-btn text-white mt-3" type="submit" >Submit</button></div>
               </form>
               </div>           
            </div>
         </div>
         </div>
      </div>
   </section>

<!-- plugins -->
<script src="{{asset('assets/js/vendors.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom app -->
    <script src="{{asset('assets/js/app.js')}}"></script>
	
	<script type="text/javascript">
      let base_url_info = {!! json_encode(url('/')) !!};
		$('#reload').click(function () {
			$.ajax({
				type: 'GET',
				url: base_url_info + '/reload-captcha',
				success: function (data) {
					$(".captcha span").html(data.captcha);
				}
			});
		});
	</script>
@endsection

