
@extends('layout/header')
@section('title','Research Report')

@section('content')

<style>
.modal-content{
   margin-top:100px;
}
.modal-body {
   font-weight: normal;
}
.filter h3{
  font-size: 18px; padding-bottom: 15px; font-weight:bold; color: var(--primary-color);
  }
</style>


<section class="mini-banner">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="mb-0 mini-banner-title">Report Store </h1>
            <h2 style="font-size: 18px; padding-bottom: 2px; color: white;">Explore a Wide Range of Market Research Reports</h2>
         </div>
      </div>
   </div>
</section>

<section class="main-content mb-5 mt-5">
      <div class="container">
         <div class="row">
            <div class="col-md-3">
              <div class="filter when-scroll">
                 <h3>Target Industries </h3>
                   @foreach($category as $cat)
                  <div class="filter-item">
                     <a href="{{url('report-store')}}/{{$cat->category_url}}" class="filter-cate-tilte" data-toggle="collapse" data-parent="#accordionMenu" aria-expanded="false" aria-controls="collapse_{{$cat->id}}">
                     <input type="checkbox" name="mainecategory" value="{{$cat->id}}" onclick="toggleSubCategories(this, {{$cat->id}}, 'category')"> {{$cat->cat_name}}
                   </a>
                  <div id="collapse_{{$cat->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_{{$cat->id}}" style="display:none;">
                       <div class="panel-body">
                         @php $sub_category = \DB::table('sub_category')->where('cat_id',$cat->id)->get(); @endphp
                           @if(count($sub_category)>0)
                            @foreach($sub_category as $sub_cat)
                            <ul style="margin:0px;">
                          <li>
                             <input type="checkbox" name="category" data-maincategory="{{$cat->id}}" value="{{$sub_cat->id}}" onchange="updateResults()">
                           <a href="{{url('report-store/')}}/{{$sub_cat->page_url}}">{{$sub_cat->sub_cat_name}}</a>
                          </li>
                       </ul>
                         @endforeach
                         @endif
                     </div>
                   </div>
                 </div>
                @endforeach
         
            <div class="filter mt-4">
              <h3>Target Countries</h3>
                @foreach($region as $cat)
                 <div class="filter-item">
                  <a href="#" class="filter-cate-tilte" data-toggle="collapse" data-parent="#accordionMenu" aria-expanded="false" aria-controls="collapse_{{$cat->id}}">
                   <input type="checkbox" name="region" value="{{ $cat->id }}" onclick="toggleSubCategories(this, {{$cat->id}}, 'region')"> {{$cat->region_name}}
               </a>
                 <div id="collapse_{{$cat->id}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_{{$cat->id}}" style="display:none;">
                <div class="panel-body">
                  @php $country = \DB::table('country')->where('region_id',$cat->id)->get(); @endphp
                    @if(count($country)>0)
                      @foreach($country as $country)
                      <ul style="margin:0px;">
                      <li>
                        <input type="checkbox" name="country" data-country="{{$cat->id}}" value="{{$country->id}}" onchange="updateResults()">
                         <a href="{{url('report-store/')}}/{{$country->page_url}}">{{$country->country_name}}</a>
                     </li>
                  </ul>
                     @endforeach
                   @endif
                   </div>
                </div>
               </div>
              @endforeach
              </div>
           </div>
            </div>  
            <div class="col-md-9">
               <div class="relatedProductsList box-shadow" id="items-container">
   @include('research_report_main_list')
                     </div>
                  </div>          
         </div>         
      </div>      
   </div>

   <!-- Model !-->

   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
               <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel">Place an order</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  <div class="d-flex justify-content-between orders fs-14 mb-3">
                     <div class="form-check">
                           <input class="form-check-input excel_data_pack" type="radio" value="" id="flexCheckDefault" name="price_type" checked>
                           <label class="form-check-label" for="flexCheckDefault">
                              Excel Data Pack
                           </label>
                              <span class="tooltips"><i class="fa fa-info-circle"></i><span class="tooltipstext">
                                 This is a Only market data will be provided in the excel spreadsheet.
                                 <span class="caret"></span></span></span>
                     </div>
                     <div>
                           <p class="mb-0" >USD <span id="excel_data_pack"></span></p>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between orders fs-14 mb-3">
                     <div class="form-check">
                           <input class="form-check-input single_user_license" type="radio" value="" id="flexCheckDefault" name="price_type" >
                           <label class="form-check-label" for="flexCheckDefault" >
                              Single User License
                           </label>
                           <span class="tooltips"><i class="fa fa-info-circle"></i><span class="tooltipstext">This
                                 is a
                                 The report will be delivered in PDF format without printing rights. It is
                                 advised for a
                                 single user.<span class="caret"></span></span></span>
                     </div>
                     <div>
                           <p class="mb-0">USD <span id="single_user_license"></span></p>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between orders fs-14 mb-3">
                     <div class="form-check">
                           <input class="form-check-input multi_user_license" type="radio" value="" id="flexCheckDefault" name="price_type">
                           <label class="form-check-label" for="flexCheckDefault">
                              Multi User License
                           </label>
                           <span class="tooltips"><i class="fa fa-info-circle"></i><span class="tooltipstext">This
                                 is a
                                 The report will be delivered in PDF format with printing rights. It is advised
                                 for up
                                 to five users.<span class="caret"></span></span></span>
                     </div>
                     <div>
                           <p class="mb-0">USD <span id="multi_user_license"></span> </p>
                     </div>
                  </div>
                  <div class="d-flex justify-content-between orders fs-14 mb-3">
                     <div class="form-check">
                           <input class="form-check-input enterprise_license" type="radio" value="" name="price_type" id="flexCheckDefault">
                           <label class="form-check-label" for="flexCheckDefault">
                              Enterprise License
                           </label>
                           <span class="tooltips"><i class="fa fa-info-circle"></i><span class="tooltipstext">This
                                 is a
                                 The report will be delivered in PDF format with printing rights and excel sheet.
                                 It is
                                 advised for companies where multiple users would like to access the report from
                                 multiple locations<span class="caret"></span></span></span>
                     </div>
                     <div>
                           <p class="mb-0">USD <span id="enterprise_license"></span></p>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <input type="hidden" name="idH" value="" id="idH" />
                  <button type="button" class="btn btn-primary" onClick="add_to_cart()">Add To Cart</button>
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
         dataType: "JSON",
         success: function(response){
            if(response.status == true){
            window.location = "{{ url('/cart') }}";
         }else{
             alert("Already in Cart");
         }
         }
      }); 

   }

     $(document).ready(function() {
    $('.filter-cate-tilte').click(function(event) {
      event.preventDefault(); 
      

      $(this).attr('aria-expanded', function(_, attr) {
        return attr === 'true' ? 'false' : 'true';
      });
 
      $(this).next('.panel-collapse').slideToggle();
    });
  });

</script>
@endsection

