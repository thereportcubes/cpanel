@extends('layout/header')
@section('title','Search Result')
@section('content')
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<style>
   .iti--separate-dial-code{
      width:100%!important;
   }
</style>

<section class="mini-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="mb-0 mini-banner-title">Search Result</h1>
         </div>
      </div>
   </div>
</section>
<section class="main-content mb-5 mt-5">
   <div class="container">
      <div class="row">
         <div class="col-md-9 sm-100">
            <div class="box-shadow">
               <h6 class="fw-600 red-title-bg ps-4">Search Result For: {{e($search_keyword)}}</h6>
               <div class="box-content p-1">
               <div class="tab-content" id="myTabContent">
                     
                     <div class="tab-pane fade show active" id="Request" role="tabpanel" aria-labelledby="Request-tab">
                     <div class="p-4">
                        <form action="{{ url('service-query') }}" method="post">
                           @csrf

                           <input type="hidden" name="search_keyword" value="{{$search_keyword}}">        
                         
                           <div class="row" style="align-items: center;">
                            <div class="col-md-3">
                              <p style="font-size: 16px;">Full Name<span style="color:var(--primary-color)">*</span></p>
                          </div>
                          <div class="col-md-9">
                          <input class="ab-input"type="text" name="full_name" value="{{ old('full_name') }}" placeholder="Enter your name" required>
                        </div>
                        </div>
                        <div class="row" style="align-items: center;">
                            <div class="col-md-3">
                              <p style="font-size: 16px;">Company Name<span style="color:var(--primary-color)">*</span></p>
                          </div>
                          <div class="col-md-9">
                          <input class="ab-input"type="text" name="comp_name" value="{{ old('comp_name') }}"  placeholder="Enter your company name"  required>
                        </div>
                        </div>
                       
                           <div class="row" style="align-items: center;">
                            <div class="col-md-3">
                              <p style="font-size: 16px;">Business Email<span style="color:var(--primary-color)">*</span></p>
                          </div>
                          <div class="col-md-9">
                          <input class="ab-input" type="email" name="buss_email" value="{{ old('buss_email') }}"placeholder="Enter your Business Email" required>
                        </div>
                        </div>
                        
                            <div class="row" style="align-items: center;">
                            <div class="col-md-3">
                              <p style="font-size: 16px;">Country Number<span style="color:var(--primary-color)">*</span></p>
                          </div>
                          <div class="col-md-9">
                         <select class="ab-input" id="country" name="country_name" >
<option value="">Select Country</option>
@foreach(config('countries') as $country => $code)
    <option value="{{ $country }} {{ $code }}">{{ $country }} {{ $code }}</option>
@endforeach
</select>
                        </div>
                        </div>
                             <div class="row" style="align-items: center;">
                            <div class="col-md-3">
                              <p style="font-size: 16px;">Contact Number<span style="color:var(--primary-color)">*</span></p>
                          </div>
                          <div class="col-md-9">
                          <input class="ab-input" name="phone_no" type="text"  value="{{ old('phone_no') }}" required placeholder="Enter Your Contact Number">
                        </div>
                        </div>
                 
                           
                        <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 16px;">Message<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <textarea class="ab-input"  name="message" cols="10" rows="1">{{ old('message') }}</textarea> 
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
                           </div> 
                           
                           <div class="text-left pt-4">
                              <button type="submit" class="btns btn-primary">Submit Request</button>
                           </div>
                     </div>

                  </div>

                           
                        </form>
                     </div>  
                      </div>
                  </div>
               </div>
            </div>
         </div>
       
      </div>
   </div>
</section>



<!-- plugins -->
<script src="{{asset('assets/js/vendors.js')}}"></script>
    <!-- custom app -->
    <script src="{{asset('/assets/js/app.js')}}"></script>
	


@endsection