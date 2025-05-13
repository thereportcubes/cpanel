@extends('layout/header')
@section('title','Cart')
@section('content')
<script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
<section class="mini-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="mb-0 mini-banner-title">Shopping-Basket & Checkout</h1>
         </div>
      </div>
   </div>
</section>
<!-- cart section start -->
<section class="report-details mt-4 mb-4">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="wrap-cart">
               <div class="report-heading d-flex align-items-center justify-content-between ">
                  <p class="mb-0 white">Reports Details</p>
                  <p class="mb-0 white">Total Price
                  </p>
               </div>

               <div class="row cart-row">
                  <div class="col-md-12">
                     <div class="cart-border">
                        <div class="row">

                           <?php $price = 0; ?>

                           @if (count((array) session('cart')) > 0 )

                           @php $total = 0 @endphp

                           @if(session('cart') )
                           @foreach(session('cart') as $id => $details)

                           @if(strpos($details['price'], ',') !== false)
                           @php
                           $price = str_replace(',','',$details['price']);
                           @endphp

                           @else
                           @php $price = $details['price']; @endphp


                           @endif

                           @php $price = intval($price);
                           $total += $price * $details['quantity'] @endphp


                           <div class="col-md-2 sm-100 mb-25">
                              <div class="ab-product-thumbnail-book-binder left ms-2">
                           <div class="product-img-box">
                                       <span class="report-image-report">Report</span>
                                     <h4 class="report-image-title">
                                       <?php echo substr(html_entity_decode(strip_tags($details['name'])),0,45); ?></h4>                      
                                       </h4>
                                       <span class="imag-pages" style="color: #000;font-size: 8px;left: 5px;bottom: 5px;">@php echo ($details['pages']) ? $details['pages'] : '0' @endphp pages</span>
                                       <span class="book-years" style="color: ;font-size: 9px;right: 14px;bottom: 3px;">{{ Carbon\Carbon::parse($details['date'])->format('M Y') }}</span>
                                    </div>
                                    <img loading="lazy" class="nonGenericproductSmallImage "src="{{asset('img/reportimg.jpg')}}"  width="107px" alt="<?php echo substr(html_entity_decode(strip_tags($details['name'])),0,30); ?>" >
                                 </div>
                           </div>
                           <div class="col-md-10 sm-100">
                              <div class="pro-title-price d-flex justify-content-between align-items-center mb-2" style="font-size:16px;">
                                 <div>
                                    <a href="{{url('report-store')}}/{{$details['page_url']}}">{{$details['name']}}</a>
                                 </div>
                                 <div>
                                    <p class="mb-0">USD {{$details['price']}}</p>
                                 </div>
                              </div>
                              <div class="row report-card align-items-center ">
                                 <div class="col-md-7 sm-100 mb-25">
                                    
                                    <div class="d-flex justify-content-between report-card-inner">
                                       <div class="col-md-3">
                                          <p class="mb-0" style="font-size:16px;"> License Type:</p>
                                       </div>
                                       <div class="col-md-9">
                                          <select class="form-select update-cart" aria-label="Default select example">

                                       <option value="{{$details['id']}},single_licence_price" @if($details['report_type']=='single_licence_price' ) {{"selected"}} @endif>Single User License
                                             </option>
                                             <option value="{{$details['id']}},multi_user_price" @if($details['report_type']=='multi_user_price' ) {{"selected"}} @endif>Multi User License
                                             </option>
                                             <option value="{{$details['id']}},custom_report_price" @if($details['report_type']=='custom_report_price' ) {{"selected"}} @endif>
                                                Enterprise License
                                             </option> 

                                          </select>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-5">
                                  <div class="card-close text-end">
                                          <a href="javascript:void()" class="remove-from-cart" onClick="remove_cart(<?php echo $details['id']; ?>)" ><i
                                             class="fa fa-trash" aria-hidden="true"></i></a>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-12">
                              <hr>
                           </div>

                           @endforeach

                           @endif

                           <?php $t = 0; ?>

                           <div class="col-md-12">
                              <div class="buy_now d-flex align-items-center justify-content-between">
                                 <div>
                                    <p class="mb-0">Total Amount: USD <?php echo number_format($total) ?></p>
                                 </div>
                                 <div>
                                    <button class="btns btn-primary" onclick="$('#billing_company_name').focus()">Buy Now</button>

                                    <a href="{{url('report-store')}}" class="btns btn-primary">Continue Shopping </a>
                                 </div>
                              </div>
                           </div>

                           @else
                           <div class="text-danger">
                              Your Basket is empty.
                           </div>
                           @endif


                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- cart section end -->
<!-- select payment option -->
<section class="pay-option mb-5">
   <div class="container">
      <div class="row">
         <div class="col-md-8 sm-100 mb-25">
            <div class="wrap-cart">
               <div class="report-heading">
                  <p class="mb-0 white">Select Payment Options</p>
               </div>
               <div class="row cart-row">
                  <div class="col-md-12">
                     <div class="cart-border">
                        <div class="row pb-4">
                           <div class="col-md-6">
                              <div class="login-box text-center">
                                 <h4>Continue as Guest</h4>
                                 <button class="btns btn-primary" onclick="$('#billing_company_name').focus()">Buy Now</button>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="login-box text-center">
                                 <h4>Already have an Account</h4>
                                 <button class="btns btn-primary">Click Here to Sign In</button>
                              </div>
                           </div>
                        </div>
                        <form method="post" action="{{url('save_cart_payment')}}" id="payForm">
                           @csrf
                           <div class="row mb-4">
                              <div class="col-md-12">
                                 <div class="option-payments">

                                    <!--  <label class="radio-inline pe-2">
                                       <input type="radio" onchange="paymentType('CC Avanue')"
                                          name="payment_type"  value="CC Avanue"> Credit / Debit Card Payment
                                       </label> -->
                                    <label class="radio-inline pe-2">
                                       <input type="radio" onchange="paymentType('Wire Transfer')" name="payment_type" value="Wire Transfer" checked="">
                                       Bank Transfer
                                    </label>
                                    <!--  <label class="radio-inline">
                                       <input type="radio" onchange="paymentType('paypal')"
                                          name="payment_type" value="paypal" checked=""> Paypal
                                       </label> -->

                                 </div>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">
                                 <h5 class="mb-0">Enter your Billing Details</h5>
                                 <hr>
                              </div>
                           </div>
                           <div class="row">
                              <div class="col-md-12">

                                 <div class="row" style="align-items: center;">
                                    <div class="col-md-3">
                                       <p style="font-size: 16px;">Full Name<span style="color:var(--primary-color)">*</span></p>
                                    </div>
                                    <div class="col-md-9">
                                       <input class="ab-input" type="text" name="billing_name" id="billing_name" placeholder="Full Name"  value="{{ old('billing_name') }}"  required>
                                    </div>
                                 </div>

                              </div>
                              <div class="col-md-12">

                                 <div class="row" style="align-items: center;">
                                    <div class="col-md-3">
                                       <p style="font-size: 16px;">Company Name<span style="color:var(--primary-color)">*</span></p>
                                    </div>
                                    <div class="col-md-9">
                                       <input class="ab-input" type="text"  value="{{ old('billing_company_name') }}"  name="billing_company_name" id="billing_company_name" placeholder="Company Name" required>
                                    </div>
                                 </div>

                              </div>


                              <div class="col-md-12">

                                 <div class="row" style="align-items: center;">
                                    <div class="col-md-3">
                                       <p style="font-size: 16px;">Email Address<span style="color:var(--primary-color)">*</span></p>
                                    </div>
                                    <div class="col-md-9">
                                       <input class="ab-input" type="text" placeholder="Email Address " required name="billing_email"  value="{{ old('billing_email') }}" >
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">

                                 <div class="row" style="align-items: center;">
                                    <div class="col-md-3">
                                       <p style="font-size: 16px;">Contact Number<span style="color:var(--primary-color)">*</span></p>
                                    </div>
                                    <div class="col-md-9">
                                       <input class="ab-input" type="text" placeholder="Contact Number " value="{{ old('billing_tel') }}" name="billing_tel" required>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-12">
                                 <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        <p style="font-size: 16px;">Country Name<span style="color:var(--primary-color)">*</span></p>
                     </div>
                     <div class="col-md-9">
                        <!-- <input class="ab-input " type="text" maxlength="13" style="height:49px;"  name="country_name" value="{{ old('country_name') }}" placeholder="Enter Your country" required> -->
                         <select class="ab-input"  name="country_name" placeholder="Select Country" value="{{ old('country_name') }}">
<option value="">Select Country</option>
@foreach(config('countries') as $country => $code)
    <option value="{{ $country }} {{ $code }}">{{ $country }} {{ $code }}</option>
@endforeach
</select>
                     </div>
                  </div>
                              </div>
                              <div class="col-md-12">

                                 <div class="row" style="align-items: center;">
                                    <div class="col-md-3">
                                       <p style="font-size: 16px;">Billing Address<span style="color:var(--primary-color)">*</span></p>
                                    </div>
                                    <div class="col-md-9">
                                       <input class="ab-input" type="text"   placeholder="Billing Address " name="billing_address"  value="{{ old('billing_address') }}"  required>
                                    </div>
                                 </div>
                              </div>

 
                           </div>
                              <div class="row" style="align-items: center;">
                     <div class="col-md-3">
                        
                     </div>
                     <div class="col-md-9">
                       <div class="col-12 mt-2">
                             
                               <!--<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.key') }}"></div>
                           </div>
                           <div class="col-12 mt-2">
                           
                           @if ($errors->has('g-recaptcha-response'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                           </div> -->
                            <div class="cf-turnstile"
     data-sitekey="{{ config('services.cloudflare.turnstile.site_key') }}"
     data-callback="onTurnstileSuccess"
></div>
                     </div>
                  </div>



                           <div class="col-md-12">
                              <div class="row" style="align-items: center;">
                                 <div class="col-md-3">
                                 </div>
                                 <div class="col-md-9">
                                    <div class="mb-3">
                                       <div class="checkbox">
                                          <label><input type="checkbox" required="true"> By selecting the
                                             check box you agree to our<a target="_blank" href="{{url('terms-conditions')}}">
                                                Terms and Conditions</a> &amp; <a target="_blank" href="{{url('/privacy-policy')}}" >Privacy Policy
                                                </a></label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <center>
                              <div class="col-md-12">
                                 <button type="submit" class="btns btn-primary btn-payment submitbtn">Submit</button>
                              </div>
                           </center>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
            </div>
        </div>
         <div class="col-md-4 sm-100">
            <div class="box-shadow p-0">


               <h6 class="fw-600 red-title-bg mb-0 text-center"><i class="fa fa-user fs-14" aria-hidden="true"></i> Need
                  Assistance?
               </h6>
               <div class="p-3">
                  <div class="mb-2">
                     <p class="mb-0 fs-14">
                        <i class="fa fa-envelope me-2 orrange" aria-hidden="true"></i> WRITE AN EMAIL
                     </p>
                     <a href="mailto:sales@thereportcube.com">sales@thereportcube.com</a>
                  </div>
                  <div>
                     <p class="mb-0 fs-14"><i class="fa fa-phone me-2 orrange" aria-hidden="true"></i>CALL US</p>
                     <a class="fs-14" href="tel:+971 564468112 (WhatsApp)">+971 564468112 (WhatsApp)</a>
                  </div>

               </div>
            </div>
            <div class="box-shadow p-0">


               <h6 class="fw-600 red-title-bg text-center mb-0"><i class="fa fa-lock me-2 fs-14 "></i>100% Safe &amp; Secure
               </h6>
               <div class="p-3">
                  <hr>
                  <p class="fs-14">
                     Strongest encryption on the website to make your purchase safe and secure
                  </p>
                  <!-- <img  loading="lazy" src="{{asset('img/paypal-logo.png')}}" class="img-fluid" alt="paypal"> -->
               </div>



            </div>
         </div>
      </div>
   </div>
</section>

<!--<script src="{{asset('assets/js/vendors.js')}}"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.21.0/jquery.validate.min.js"></script>

    <!-- custom app -->
    <script src="{{asset('assets/js/app.js')}}"></script>
   
   <script type="text/javascript">
   function reloadCaptha(){
        let base_url = {!! json_encode(url('/')) !!};
      $.ajax({
            type: 'GET',
            url: base_url + '/reload-captcha',
            success: function (data) {
               $(".captcha span").html(data.captcha);
            }
         });  
   }
   </script>
<script type="text/javascript">
 
function paymentType(type) {
    if (type == "paypal") {
        document.getElementById("payForm").action = '{{url('paypal')}}';
    }else{
        document.getElementById("payForm").action = '{{url('save_cart_payment')}}'; 
    }
}

    $(".update-cart").change(function (e) {
      
        e.preventDefault();
  
        var selectedVal = $(this).val();
       
        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "post",
            data: {
               _token: '{{ csrf_token() }}',
               selectedVal : selectedVal
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
  
    function remove_cart(id){
        
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: id
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    }
  
</script>






@endsection