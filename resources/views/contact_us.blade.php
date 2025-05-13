@extends('layout/header')
@section('title','Contact Us')
@section('content')
<script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<section class="mini-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="mb-0 mini-banner-title">Contact Us </h1>
         </div>
      </div>
   </div>
</section>

	  <section class="ab-about-hero ab-section background-gray" style=" padding: 10px 0px !important;">
      <div class="ab-wrapper box-shadow" style="background-color:white">
         <div class="ab-row ab-row-gap-huge">
            <div class="ab-col col-md-8 " style="text-align: left;">
               <h2 class="ab-title">Send a Message </h2>
                @if (count($errors) > 0)
                      <div class = "alert alert-danger">
                        <ul>
                         @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                      </ul>
                  </div>
                   @endif
               <form action="{{route('save_contact')}}" class="ab-contact-form"  method="post" novalidate="novalidate">
                     @csrf
                  <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 16px;">Full Name<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <input class="ab-input" type="text" name="name" value="{{ old('name') }}" placeholder="Enter your name" required>
                         
                     </div>
                  </div>
                  <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 16px;">Company Name<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <input class="ab-input" type="text" name="comp_name" value="{{ old('comp_name') }}" placeholder="Enter your company name" required>
                     </div>
                  </div>
                  
                  <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 16px;">Business Email<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <input class="ab-input" type="email" name="business_email" value="{{ old('business_email') }}" placeholder="Enter your business email" required>
                     </div>
                  </div>
                  <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 16px;">Country<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <select class="ab-input" id="country" name="country_name" >
<option value="">Select Country</option>
@foreach(config('countries') as $country => $code)
    <option value="{{ $country }} {{ $code }}" {{ old('country_name') == "$country $code" ? 'selected' : '' }}> {{ $country }} {{ $code }}</option>
@endforeach
</select>
                     </div>
                  </div>
                  <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 16px;">Phone<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <input class="ab-input" id="phone"  name="phone" type="tel"  value="{{ old('phone') }}"  maxlength="13" placeholder="Enter Your Phone Number" required>
                     </div>
                  </div>

                  
                    <div class="row formPolicy" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 16px;">Message<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <textarea class="ab-input"  name="message" cols="10" rows="1" placeholder="Type Your Message" required>{{ old('message') }}</textarea> 
                     </div>
                  </div>
                   <div class="row formPolicy" >
                     <div class="col-md-9">
                       
                                <div class="cf-turnstile"
     data-sitekey="{{ config('services.cloudflare.turnstile.site_key') }}"
     data-callback="onTurnstileSuccess"
></div>
                             </div>
                     </div>

                
                  <div class="row formPolicy" >
                     <div class="col-md-3">
                     </div>
                     <div class="col-md-9">
                        <input type="checkbox" name="privacy_policy"class="styled"  required>
                        <span style="font-size: 16px;">I have read and accept the <a href="https://www.thereportcubes.com/privacy-policy" style="color:var(--primary-color); text-decoration: none;">Privacy Policy *</a></span>
                     </div>
                  </div>
                  <div class="row formPolicy">
                     <div class="col-md-3">
                     </div>
                     <div class="col-md-9">
                        <button id="submitEnqiry"  class="ab-button ab-button-primary ab-button-large " type="submit" >Send</button>
                     </div>
                  </div>
               </form>
            </div>
             
            <div class="ab-col col-md-4 " style="text-align: left;">
               
               <div class="offic-div">
                  <p class="aside-title ab-mini-heading" style="color:#000; margin-top: 30px;"> OFFICE</p>
                  <h3 class="office-tilte">
                   Proficient Report Cube
                  </h3>
                  <p class="address-p">  The Report Cube, Burjuman Business Tower, Burjuman, Dubai </p>
                                    <p class="office-number"><a href="tel:+971 564468112 (WhatsApp)">Tel : <span>+971 564468112 (WhatsApp)</span> </a></p>
                  <p class="office-email"><a href="mailto:sales@thereportcubes.com">Email : <span>sales@thereportcubes.com</span> </a></p>
               </div>
               
            </div>
         </div>
      </div>
   </section>
	
<script>

window.onTurnstileSuccess = function (code) {
    document.querySelector('form button[type="submit"]').disabled = false;
}
</script>
@endsection