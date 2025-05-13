@extends('layout.header')
@yield('title')
@section('content') 
<main class="background-gray">
 <section class="mini-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
               <h1 class="mb-0 mini-banner-title">Infographics</h1>
               <h2 style="font-size: 18px; padding-bottom: 2px; color: white;">The Report Cube Infographics: Transforming Numbers into Visual Stories</h2>
               </div>
         </div>
      </section>
      <div class="banner-triangle"></div>
   </section>

   <section class="ab-home-news ab-section">
      <div class="ab-wrapper" id="items-container">
          @include('infographics-list')
         
            
      </div>
   </section>
</div>
@endsection

