   <div class="ab-news-grid ab-row ab-row-v-padding">
            @foreach($infographic as $pr)
            <div class="ab-col ab-col-desktop-3 ab-col-tablet-3 ab-col-phone-12" >
               <a href="{{url('infographics')}}/{{$pr->report_link}}" class="" style="background-color:#fff; color:#454748; min-height:200px;">
                  <div class="" >
                   <img src="{{ asset($pr->image) }}" alt="{{$pr->img_alt_tag}}" style="min-height:150px; min-width:100%"  class="img img-responsive" />
                  </div>
                  <div class="ab-news-grid-item-text" style="min-height: 170px">
                     
                     <div class="ab-news-grid-item-title"><?php echo substr($pr->title,0,80); ?></div>
                     <div class="ab-news-grid-item-date"><i class="fa fa-calendar" aria-hidden="true" style="color:#c00000"></i> {{ Carbon\Carbon::parse($pr->created_at)->format('M Y') }}</div>
                  </div>
              
               </a>
            </div>
            
            @endforeach

            
         </div>

         <ul class="pagination clearfix" id="paginationBottom">
               <li class="page-count"><strong><span>
                   
                   
                   {{count($infographic)}}</span> Results</strong> (Page {{ $infographic->currentPage() }} OF {{ $infographic->lastPage() }}  ) </li>

               <li class="pager-btn-container">
                  {{ $infographic->links('custom_pagination') }}
               </li>
            </ul>
