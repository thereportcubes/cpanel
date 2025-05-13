<div class="relatedProductsList" style=" margin-top: 50px;">
                     @if(count($press) > 0)
                        @foreach($press as $p)
                        @php
                                     $button_ref = $p->button_refrence;
                                     $but_ref = explode('/', $button_ref);
                                     $report_url1 = $but_ref[4] ?? '';
                                       @endphp
                           <div class="product-item-small product-item-mobile  press-item">
                           <span class="date"><i class="fa fa-calendar"></i> {{ Carbon\Carbon::parse($p->post_date)->format('d M Y') }} </span>
                           <div class="product-item-content" style=" margin-top: 15px;">
                              <div class="content margin-zero" style="text-align: left;">
                                 <h3 class="title"><a href="{{url('press-release')}}/{{$p->press_release_url}}" style="color:var(--primary-color);">{{$p->heading}}</a></h3>
                                 <p style="margin-bottom: 10px;">{{ Str::limit(strip_tags($p->description), 250) }} 
                                 </p>
                                 <div class="press-btn-div">
                                    <ul class="press-btn-list">
                                       <li ><a class="press-btn" href="{{url('press-release')}}/{{$p->press_release_url}}">Read More</a></li>
                                       <li ><a class="press-btn" href="{{url('/report-store')}}/{{$report_url1}}">View Report</a></li>
                                       <li ><a class="press-btn" href="{{ url('/request-sample') }}/{{$report_url1}}">Request Sample</a></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           </div>
                        @endforeach
                     @endif
                     
                     <ul class="pagination clearfix" id="paginationBottom">
                        <li class="page-count"><strong><span>{{count($press)}}</span> Results</strong>(Page {{ $press->currentPage() }} of {{ $press->lastPage() }})  </li>

                        <li class="pager-btn-container">
                           {{ $press->links('custom_pagination') }}
                        </li>
                     </ul>

                  </div>