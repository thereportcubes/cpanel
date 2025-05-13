@extends('layout/header')
@section('title','Upcoming Report')

@section('content')
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
                
<style>
   #more {display: none;}
   .review-badge {
      display: flex;
      align-items: center;
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 12px 16px;
      max-width: 350px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      background: #fff;
      flex-wrap: wrap;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .review-badge:hover {
      transform: scale(1.02);
    }

    .google-logo {
      width: 40px;
      height: 40px;
      margin-right: 12px;
    }

    .review-content {
      display: flex;
      flex-direction: column;
    }

    .review-title {
      font-weight: bold;
      font-size: 14px;
      color: #555;
    }

    .review-score {
      display: flex;
      align-items: center;
      font-size: 18px;
      color: #f4b400;
    }

    .review-score span {
      margin-right: 6px;
      font-weight: bold;
    }

    .review-stars {
      color: #f4b400;
      font-size: 16px;
      margin-right: 8px;
    }

    .review-count {
      font-size: 14px;
      color: #888;
    }
.review-body p{
    text-align:justify;
}
    @media (max-width: 400px) {
      .review-badge {
        flex-direction: column;
        align-items: flex-start;
      }

      .google-logo {
        margin-bottom: 8px;
      }
    }

    /* Modal Styles */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 999;
    }

    .review-modal-content{
      background: white;
      padding: 2rem;
      border-radius: 10px;
      max-width: 50%;
      max-height: 90%;
      overflow-y: auto;
      text-align: center;
      position: relative;
    }

    .modal-close {
      position: absolute;
      top: 10px;
      right: 15px;
      font-size: 24px;
      color: #888;
      cursor: pointer;
    }

    @media (max-width: 600px) {
      .review-modal-content {
        padding: 1rem;
      }
    }
   .modern-review {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.review-card {
  background: #ebebeb;
  border-radius: 12px;
  padding: 20px;
  box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
  transition: transform 0.3s ease;
}

.review-card:hover {
  transform: translateY(-3px);
}

.user-info {
  display: flex;
  align-items: center;
  margin-bottom: 14px;
}

.avatar {
  background: linear-gradient(135deg, #5a5a5a, #2c2c2c);
  color: white;
  font-weight: bold;
  border-radius: 50%;
  width: 48px;
  height: 48px;
  font-size: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 12px;
  flex-shrink: 0;
}

.avatar.purple {
  background: linear-gradient(135deg, #b22cff, #6600cc);
}

.user-name {
  font-weight: bold;
  font-size: 16px;
  color: #333;
}

.review-meta {
  margin-top: 2px;
  font-size: 20px;         /* Increase size to match image */
  color: #f4b400;   
}

.review-body {
  font-size: 14px;
  color: #444;
  line-height: 1.6;
  margin-bottom: 14px;
}

.review-footer {
  display: flex;
  align-items: center;
  font-size: 13px;
  color: #888;
  border-top: 1px solid #eee;
  padding-top: 10px;
}

.review-footer img {
  height: 18px;
  margin-right: 6px;
}
.toc-main-container{
     background: #f9f9f9;
    border-radius: 30px;
    padding: 20px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}
.toc-main-container p{
    text-align:center;
    font-size:20px;
}
   .toc-container {
      display: flex;
      /*max-width: 1000px;*/
      margin: auto;
    }


    .chart-container {
      width: 50%;
      padding-right: 30px;
    }

    .info-container {
      width: 50%;
    }

    .info-container h3 {
      margin-bottom: 20px;
    }

    .info-container ul {
      list-style: none;
      padding: 0;
    }

    .info-container li {
      margin-bottom: 12px;
      font-size: 15px;
    }

    .info-container li b {
      color: #1e40af;
    }
     #barChart{
         height:200px!important;
     }
.custom-box {
  display: flex;
  max-width: 800px;
  margin: 20px auto;
  border: 2px solid #c0392b;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

.custom-box p {
  flex: 2;
  background: #fff;
  color: #c0392b;
  font-weight: 600;
  font-size: 16px;
  padding: 6px 20px;
  border: none;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background 0.3s;
 margin-bottom: 0px;
}

.left-button:hover {
  background: #fbe9e7;
}
.right-button:hover {
     color: white;
}
.right-button {
  flex: 1;
  background: #c0392b;
  color: white;
  font-weight: bold;
  font-size: 16px;
  text-align: center;
  padding: 6px 0;
  text-decoration: none;
  transition: background 0.3s;
}

.icon {
  margin-right: 10px;
  font-size: 20px;
}
</style>
 <link rel="stylesheet" media="all" href="{{asset('css/ab-product.css?v=2')}}"> 
<section class="mini-banner">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <p class="mb-0 mini-banner-title">Report Details</p>
            </div>
         </div>
      </div>
   </section>
   <!-- mini banner end -->
   <section class="main-content mb-5 mt-5">
        <div id="main" class="center products-wrapper">
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
      <div class="container">
         <div class="row">
            <div class="col-md-9 sm-100">
             
               <div class="box-shadow">

                  <div class="row  category-box">
                     <div class=" col-md-3">
                       
                           <div class="ab-product-thumbnail-book-binder left ms-2">
                           <div class="product-img-box details">
                                       <span class="report-image-report">Report</span>
                                     <p class="report-image-title">
                                     {{ \Illuminate\Support\Str::limit(strip_tags($datas->title), 45) }}</p>
                                       <span class="imag-pages" style="color: #000;font-size: 8px;left: 5px;bottom: 5px;">@php echo ($datas->no_of_page) ? $datas->no_of_page : '0' @endphp pages</span>
                                       <span class="book-years" style="color: ;font-size: 9px;right: 14px;bottom: 3px;">{{ Carbon\Carbon::parse($datas->report_post_date)->format('M Y') }}</span>
                                    </div>
                                    <img loading="lazy" class="nonGenericproductSmallImage "src="{{asset('img/reportimg.jpg')}}"  width="107px" alt="{{ \Illuminate\Support\Str::limit(strip_tags($datas->title), 30) }}" >
                                 </div>
                     </div>
                     <div class="col-md-9">
                        <h1 class="ab-product-title ab-color-primary ab-small-title">{{$datas->title}}</h1>
                  
                           <h2 class="title_descr">
                            {!! $datas->heading2 !!}
                              </span>

                              
                           </h2>
                    
                         <ul id="productDetails" class="ab-product-header-info">
                            <li><i class="fa fa-industry" aria-hidden="true" style="color:#c00000"></i>{{$datas->cat_name}}</li>                
                  
               
                  <li> Pages : {{$datas->no_of_page}}  </li>
                  <li id="publicationDateItemId_5395374" class="publicationDateItem" data-result="Thursday, April 6, 2023"><i class="fa fa-calendar" aria-hidden="true" style="color:#c00000"></i>{{ Carbon\Carbon::parse($datas->report_post_date)->format('M Y') }}</li>
                   
                  <li>
                    <p style="margin:0px"> Report Format : &nbsp;</p>
                     <!-- <img alt="PDF Icon" src="{{asset('/assets/images/icon-PDF.webp')}}"  width="25" alt="pdf">   -->
                    <img loading="lazy" width="5" height="5" src="{{asset('assets/icons/pdf.png')}}" alt="pdf">
                    <img loading="lazy" width="5" height="5" src="{{asset('assets/icons/ppt.png')}}" alt="ppt">
                    <img loading="lazy" width="5" height="5" src="{{asset('assets/icons/xls.png')}}" alt="xl">
                  </li>
               </ul>
                     </div>
                  </div>

                  
               </div>
               <div class="ab-product-grid box-shadow" style="margin-bottom:0rem !important;">
                <div class="ab-product-nav" style=" margin-left:-15px;margin-top: 8px;">
            <div class="ab-product-mobile-navigation ab-product-content-navigation">
               <div class="ab-product-content-navigation-label" tabindex="0"> <span class="ab-product-content-navigation-label-current">Report Details</span> <span class="ab-product-content-navigation-label-action">Jump to:</span> </div>
               <ul class="ab-product-content-navigation-links">
                  <li><a href="#product--description" class="ab-a">Report Overview</a></li>
                  <li><a href="#product--toc" class="ab-a">Table of Contents</a></li>
                  <li><a href="#product--lof" class="ab-a">List of Figures</a></li>
                  <li><a href="#product--lot" class="ab-a">List of Tables</a></li>
                  <li><a href="#product--adaptive" class="ab-a">Companies Mentioned</a></li>
                   <li><a href="#product--faqs" class="ab-a">Frequently Asked Questions</a></li>
                  <li><a href="#product--related-products" class="ab-a current">Related Reports</a></li>
                  <li><a href="{{ url('/request-sample') }}/{{request()->segment(2)}}" class="btn btn-primary  d-inline-block max-100 color-one mt-2">
                        Request
                        Sample</a>
                 <li style="margin-top:50px;"><a href="{{asset('img/Research_Methodology_The Report_Cubes.pdf')}}" class="ab-a current"  title="Download Research Methodology PDF" download>Research Methodology <i class="fa fa-download"></i></a></li>
                
                  
               </ul>
            </div>
          </div>
          <article class="ab-product-content">
            
            <div id="product--description" class="ab-product-content-section">
               <div class="ab-product-content-summary">
                  

                 {!! $datas->decription; !!}
                  <br>
                  @if($infographic_image !="")
                            @php
                                $res = "";
                                $exp_arr = explode('Market', $infographic_image->img_alt_tag); 
                                $res = $exp_arr[0]."";
                                
                            @endphp
                            <?php 
                                if($res == ""){
                                   $exp_arr =  explode('Market', $datas->title); 
                                   $res = $exp_arr[0];
                                }
                            ?>
                           <a href="{{url('/infographics')}}/{{request()->segment(2)}}" target="_blank">
                              <img src="{{ asset($infographic_image->image) }}" style="width:100%" class="img-responsive"  alt="{{$datas->title}}" loading="lazy" /></a>
                              <!--  -->
                           <br>
                           @endif
                  <p>{!!  $datas->description_last; !!}</p>
                  
               </div>
               <div class="ab-product-content-text">
                  <input id="supplierId" name="supplierId" type="hidden" value="1781"> <input id="hasExecSummary" name="hasExecSummary" type="hidden" value="True">    
                  <div class="badges-details-container">
                     <span class="tooltip-info tip-fixed tip-bottom tip-left" data-badge-id="4" style="top: 410.104px; left: 271.667px; display: none;">
                        <span class="tooltip-content">
                           <span class="title">1h Free Analyst Time</span> 
                           <p>Speak directly to the analyst to clarify any post sales queries you may have.</p>
                        </span>
                     </span>
                  </div>
                  
               </div>
               <br>
            </div>
            
            <div id="product--toc" class="ab-product-content-section ab-product-content-text">
               <div id="ab-more-content-3" class="ab-more-content " data-id="3">
                  <h3>Table of Contents</h3>
                  
                  <div class="toc-list">
                     <div class="chapter-content ml-3" id="Content">
                        <p>{!!  $datas->table_of_content; !!}</p>
                     </div>                  
                     
                  </div>
               </div>
            </div>
              <div id="product--lof" class="ab-product-content-section ab-product-content-text">
               <div id="ab-more-content-4" class="ab-more-content " data-id="4">
                  <h3>List of Figure</h3>
                  
                  <div class="toc-list">
                     <div class="chapter-content ml-3" id="Listoffigure">
                        <p>{!!  $datas->list_of_figure; !!}</p>
                     </div>                  
                     
                  </div>
               </div>
            </div>
              <div id="product--lot" class="ab-product-content-section ab-product-content-text">
               <div id="ab-more-content-5" class="ab-more-content " data-id="5">
                  <h3>List of Table</h3>
                  
                  <div class="toc-list">
                     <div class="chapter-content ml-3" id="ListofTable">
                        <p>{!!  $datas->list_of_table; !!}</p>
                     </div>                  
                     
                  </div>
               </div>
            </div>
            <div id="product--adaptive" class="ab-product-content-section ab-product-content-text ollist">
               <div id="ab-more-content-6" class="ab-more-content ab-product-content-section-with-read-more ab-collapsed" data-id="6" style="overflow: hidden;">
                 
                  <h3>Companies Mentioned</h3>
                  <p>{!! $datas->companies_mentioned !!} </p>
               
               </div>
            </div>
             <div id="product--faqs" class="ab-product-content-section ab-product-content-text ollist">
               <div id="ab-more-content-7" class="ab-more-content ab-product-content-section-with-read-more ab-collapsed" data-id="6" style=" overflow: hidden;">
                  <div class="accordion" id="accordionExample">
                  <h3>Frequently Asked Questions</h3>
                  <p>   <?php $faqs = json_decode($datas->faqs);  $size = count((array)$faqs->ques); ?>
                           @if($size>0)
                           @for($i=0 ; $i<$size; $i++)
                             @if (!empty($faqs->ques[$i]))
                              <div class="accordion-item">
                                 <h4 class="accordion-header" id="heading<?php echo $i; ?>">
                                    <button class="accordion-button <?php if($i != 0 ) {echo "collapsed";} ?>" type="button" data-bs-toggle="collapse"
                                       data-bs-target="#collapse<?php echo $i; ?>" aria-expanded="true" aria-controls="collapse<?php echo $i; ?>">
                                       Q. {{ $faqs->ques[$i] }} 
                                    </button>
                                 </h4>
                                 <div id="collapse<?php echo $i; ?>" class="accordion-collapse collapse <?php if($i == 0 ) {echo "show";} ?>"
                                    aria-labelledby="heading<?php echo $i; ?>" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                    &nbsp;&nbsp;  A. {{ $faqs->ans[$i] }} 
                                    </div>
                                 </div>
                              </div>
                              @endif
                           @endfor
                           @endif </p>
                  </div>
                
               </div>
            </div>
            
         </article>
             <div class="ab-product-related product-list-spacing-mobile">
            <div id="product--related-products" class="ab-product-content-section ab-product-content-related-items">
               <div class="relatedProducts">
                  <h3 class="delta mb-2">Related Reports</h3>
                  <div class="relatedProductsList">
                      @foreach($related_reports as $rep)

                     <div class="product-item-small product-item-mobile clearfix">
                        <div class="product-item-content">
                         
                           <div class="ab-product-thumbnail-book-binder left ms-2">
                           <div class="product-img-box product-img-new-box">
                                       <span class="detail-related-image-report">Report</span>
                                       <p class="detail-related-image-title">
                                       {{ \Illuminate\Support\Str::limit(strip_tags($rep->title), 30) }}</p>            
                                     <span class="book-years" style="color: ;font-size: 7px;right: 17px;bottom: -1px;">{{ Carbon\Carbon::parse($rep->report_post_date)->format('M Y') }}</span>
                                    </div>
                                    <img loading="lazy" class="nonGenericproductSmallImage "src="{{asset('img/reportimg.jpg')}}" alt="<?php echo substr(html_entity_decode(strip_tags($rep->title)),0,30); ?>" >
                                 </div>
                     
                         
                           <div class="content" style="text-align: left;">
                              <h4 class="title"><a href="{{url('report-store')}}/{{$rep->page_url}}" > {{ $rep->title}}</a></h4>
                             
                         <ul class="product-item-list">
                           <li> Pages : {{$rep->no_of_page}}  </li>
                            <li id="publicationDateItemId_5395374" class="publicationDateItem" data-result="Thursday, April 6, 2023"><i class="fa fa-calendar" aria-hidden="true" style="color:#c00000"></i> {{ Carbon\Carbon::parse($rep->report_post_date)->format('M Y') }}</li>
                   
                          <li>
                    Report Format : &nbsp;
                     <!-- <img alt="PDF Icon" src="{{asset('/assets/images/icon-PDF.webp')}}"  width="25" alt="pdf">   -->
                    <img loading="lazy" width="15" height="15" src="{{asset('assets/icons/pdf.png')}}" alt="Pdf">
                    <img loading="lazy" width="15" height="15" src="{{asset('assets/icons/ppt.png')}}" alt="PPt">
                    <img loading="lazy" width="15" height="15" src="{{asset('assets/icons/xls.png')}}" alt="Xl">
                  </li>
                  
               </ul>
                           </div>
                          
                        </div>
                        <div class="product-item-price-container">
                           <span class="from">From</span>   
                           <div class="standard-price-id">
                              <input type="hidden" class="defaultCurrencyId" value="2">  <input type="hidden" class="defaultPrice" value="3450.00000000000000">  
                              <div class="product-item-price"><span class="dynPrice" style=""><span class="currency-1"  content="3396">€</span><span class="currency-2" style="" content="3450">USD {{$rep->single_licence_price}}</span><span content="USD" style="display: none;">USD</span><span class="currency-3" style="display: none" content="2945">£2,926</span><span content="GBP" style="display: none;">GBP</span></span></div>
                           </div>
                        </div>
                     </div>
                        @endforeach
                  </div>
               </div>
            </div>
         </div>
              </div> 
            
            </div>
            <div class="col-md-3 sm-100 ">
               <div class="right-sidebar when-scroll">
                   <h3 class="fw-600 blue-title-bg text-center">PURCHASE OPTIONS <i class="fa fa-info-circle"></i></h3>
                  <div class=" side">

                  <div class="d-flex justify-content-between orders  mb-2">
                     <div class="form-check">
                        <input class=" single_user_license" name="price_type" type="radio" value="<?php  echo ($datas->special_single_licence_price !='') ? $datas->special_single_licence_price.'-single_licence_price' : $datas->single_licence_price.'-single_licence_price' ?> " id="flexCheckDefault<?php echo $datas->single_licence_price; ?>" checked>
                        <label class="form-check-label" for="flexCheckDefault<?php echo $datas->single_licence_price; ?>">
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
                        <input class="" type="radio" value="<?php echo ($datas->special_multi_user_price !='') ? $datas->special_multi_user_price.'-multi_user_price' : $datas->multi_user_price.'-multi_user_price' ?> " id="flexCheckDefault<?php echo $datas->multi_user_price; ?>" name="price_type">
                        <label class="form-check-label" for="flexCheckDefault<?php echo $datas->multi_user_price; ?>">
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
                        <input class="" type="radio" value="<?php echo ($datas->special_custom_report_price !='') ? $datas->special_custom_report_price.'-custom_report_price' : $datas->custom_report_price.'-custom_report_price' ?> " id="flexCheckDefault<?php echo $datas->custom_report_price; ?>" name="price_type">
                        <label class="form-check-label" for="flexCheckDefault<?php echo $datas->custom_report_price; ?>">
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
                     <button type="button" class="addtocart  max-100" onclick="add_to_cart()"><i class="fa"> </i> ADD TO BASKET</button>
                  </div>
                   <div class="">
                      <a href="{{ url('/request-sample') }}/{{request()->segment(2)}}" class="quote  max-100">NEED A QUOTE</a> 
                  </div>
                           <!-- Review Badge -->
<div class="review-badge" onclick="openModal()">
  <img class="google-logo" src="{{asset('assets/images/reviews/google-logo.svg')}}" alt="Google Logo" />
  <div class="review-content">
    <div class="review-title">GOOGLE REVIEWS</div>
    <div class="review-score">
      <span>4.8</span>
      <div class="review-stars">★★★★★</div>
      <div class="review-count">320 reviews</div>
    </div>
  </div>
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
      </div>
   </div>
   </section>
   <section class="ab-about-numbers ab-bg-subtle-gray">
         <div class="text-center center ram-about-brands ram-align-center" id="home-page-clients">
            <div class="mb-4 heading">
               <h3 class="beta ram-tiny-title">Few of Our Trusted Clients </h3>
            </div>
            <div class="clearfix">
               <ul class="clearfix">
                  <li><img loading="lazy" src="{{asset('assets/images/clients/3m.png')}}" alt="General_Electric" title="General_Electric"  style="margin-top: -21px"></li>
                  <li><img loading="lazy" src="{{asset('assets/images/clients/ge.png')}}" alt="nokia" title="nokia"  style="margin-top: -26px"></li>
                  <li><img loading="lazy" src="{{asset('assets/images/clients/pg.png')}}" alt="oppo" title="oppo" style="margin-top: -26px"></li>
                  <li><img loading="lazy" src="{{asset('assets/images/clients/siemens.png')}}" alt="Samsung" title="Samsung"style="margin-top: -21px"></li>
                  <li><img loading="lazy" src="{{asset('assets/images/clients/ongc.png')}}" alt="nokia" title="nokia" style="margin-top: -26px"></li>
                  <li><img loading="lazy" src="{{asset('assets/images/clients/honeywell.png')}}" alt="oppo" title="oppo" = style="margin-top: -26px"></li>

               </ul>
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
         dataType: "JSON",
success: function(response){
    if(response.status == true){
    window.location = "{{ url('/shopping-basket') }}";
 }else{
     alert("Already in Cart");
 }
 }
      }); 

   }
   </script>

<script>

 $(document).ready(function () {
      // $('.ab-product-content-navigation-links li').click ( function(){
      //    $('.ab-product-content-navigation-links li').removeClass('current')
      //    $(this).addClass('current')
      // })
    $(window).scroll(function () {
        var scrollPosition = $(window).scrollTop();

        // Update active tab based on scroll position
        $('div[id^="product--"]').each(function () {
            var sectionOffset = $(this).offset().top - 30;
            //console.log(sectionOffset);

            if (scrollPosition >= sectionOffset) {
                var sectionId = $(this).attr('id');
                $('a[href="#' + sectionId + '"]').parent().addClass('current').siblings().removeClass('current');
            }
        });
    });
});
</script>

<!-- Modal -->
<div class="modal-overlay" id="modal">
  <div class="review-modal-content">
    <span class="modal-close" onclick="closeModal()">&times;</span>
   <!-- Add inside .modal-content from previous example -->
<h3 style="margin-bottom: 1rem;">GOOGLE REVIEWS</h3>

<div class="modern-review">
     @foreach($testimonials as $testimonial)
  <div class="review-card">
    <div class="user-info">
      <div class="avatar">{{ strtoupper(substr($testimonial->client_name, 0, 1)) }}</div>
      <div>
        <div class="user-name">{{ $testimonial->client_name }}</div>
 @php
    $full = '★'; $half = '⯨'; $empty = '☆';
    $stars = '';
    $rating = $testimonial->rating; // ✅ define the rating first

    for ($i = 1; $i <= 5; $i++) {
        if ($rating >= $i) $stars .= $full;
        elseif ($rating >= $i - 0.5) $stars .= $half;
        else $stars .= $empty;
    }
    
@endphp
        <div class="review-meta"> {!! $stars !!} </div>
      </div>
    </div>
    <div class="review-body">
       {!! $testimonial->description !!}
    </div>
    <div class="review-footer">
      <img src="{{asset('assets/images/reviews/google-logo.svg')}}" alt="Google logo" />
      <span>Posted on Google</span>
    </div>
  </div>

@endforeach
  
</div>


  </div>
</div>

<script>
  function openModal() {
    document.getElementById("modal").style.display = "flex";
  }

  function closeModal() {
    document.getElementById("modal").style.display = "none";
  }

  // Close on outside click
  window.addEventListener('click', function (e) {
    const modal = document.getElementById("modal");
    if (e.target === modal) {
      closeModal();
    }
  });
</script>
{!! html_entity_decode($datas->script_code) !!}

@endsection

