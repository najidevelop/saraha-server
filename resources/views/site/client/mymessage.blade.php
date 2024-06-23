@extends('site.layouts.layout')
@section('content')
<section class="section">
    <div class="container">
        <div class="box-main-foo">
    <section class="section-about mb-4 mt-3">
        
       
        <div class="box-about-unviersity p-2">
            <div class="container main-about-box">
  <!-- Section atRight -->
  <div class="box-serach-about-university p-3 m">
                     
 
    <div class="mapp">
        <div class="mapouter">
           
                <div class="gmap_canvas">
                    <h4>{{ Auth::guard('client')->user()->name }}</h4>
                </div>
          
        </div>
    </div>
    <hr>
    <div class="info-more">
        <p><a href="{{ $client_url['link_client'] }}">{{ $client_url['href_client'] }}</a></p>
        <h5>لكي تستقبل الرسائل</h5>
        <div class="box-right d-flex align-items-flex-start flex-column">
           
           
                   
                        <div class="locationn d-flex">
                            <i class="fa fa-facebook-f"></i>
                            <p> شارك حسابك على  
                                <span> فايسبوك  </span>                                              
                            </p>
                        </div>   
                        

                
           
        </div>
    </div>
</div>
                <!-- End Section atRight -->
                <!-- Section atLeft -->
                <div class="background-about mm">
                   
                    <div class="about-detials mb-3 socaill">
                      
                                 <h4 class="mb-4  " style="margin-bottom: 0px"  >رسائلي<hr style="margin-bottom: 0px"></h4>
                                   <div class="col-md-offset-2 col-md-2" style="margin-bottom: 50px" >
                       </div>

 <div class="descrip w-100 message-box"  >   
                                    <p>انت جيد </p> 
                                    <small class="text-muted" data-utcdate=" "></small>
                                    <div class="clearfix"></div>
                                    <div  class="pull-left" >
                                        <a href="javascript:;" data-add-reply="" data-id="35512634" style="font-weight: bold; color: red;" title="إضافة رد">
                                        <span style="font-size: x-large" class="icon icon-reply"></span>
                                        </a>
                                        &nbsp;
                                        <a id="ctl00_body_RpMessages_ctl00_lbShare" data-source="facebook" title="مشاركة على الفيسبوك" data-id="35512634" href="javascript:__doPostBack('ctl00$body$RpMessages$ctl00$lbShare','')">
                                        <span style="font-size: x-large" class="icon icon-facebook"></span>مشاركة على الفيسبوك"
                                        </a>
                                        &nbsp;
                                        <a id="ctl00_body_RpMessages_ctl00_lbShare2" data-source="twitter" title="مشاركة على تويتر" data-id="35512634" href="javascript:__doPostBack('ctl00$body$RpMessages$ctl00$lbShare2','')">
                                        <span style="font-size: x-large" class="icon icon-twitter"></span>مشاركة على تويتر"
                                        </a>
                                        </div>

                                        <div class="pull-right" style="color: #f00 !important; font-weight: bold !important; position: relative; right: 20px;">
                                            <span class="checkbox" data-id="35512634"><input id="ctl00_body_RpMessages_ctl00_cbPublic" type="checkbox" name="ctl00$body$RpMessages$ctl00$cbPublic" onclick="javascript:setTimeout('__doPostBack(\'ctl00$body$RpMessages$ctl00$cbPublic\',\'\')', 0)"><label for="ctl00_body_RpMessages_ctl00_cbPublic">إظهار للعامة</label></span>
                                            </div>
                                         </div>
   <!-- start message  -->
   @foreach ($messages as $mymsg)
 <div class="descrip w-100 message-box"  >   
                                    <p>{{ $mymsg->content }}</p> 
                                    <small class="text-muted" data-utcdate="{{ $mymsg->created_at }}"></small>
                                    <div class="clearfix"></div>
                                    <div  class="pull-left" >
                                        <a href="javascript:;" data-add-reply="" data-id="35512634" style="font-weight: bold; color: red;" title="إضافة رد">
                                        <span style="font-size: x-large" class="icon icon-reply"></span>
                                        </a>
                                        &nbsp;
                                        <a id="ctl00_body_RpMessages_ctl00_lbShare" data-source="facebook" title="مشاركة على الفيسبوك" data-id="35512634" href="javascript:__doPostBack('ctl00$body$RpMessages$ctl00$lbShare','')">
                                        <span style="font-size: x-large" class="icon icon-facebook"></span>مشاركة على الفيسبوك"
                                        </a>
                                        &nbsp;
                                        <a id="ctl00_body_RpMessages_ctl00_lbShare2" data-source="twitter" title="مشاركة على تويتر" data-id="35512634" href="javascript:__doPostBack('ctl00$body$RpMessages$ctl00$lbShare2','')">
                                        <span style="font-size: x-large" class="icon icon-twitter"></span>مشاركة على تويتر"
                                        </a>
                                        </div>

                                        <div class="pull-right" style="color: #f00 !important; font-weight: bold !important; position: relative; right: 20px;">
                                            <span class="checkbox" data-id="35512634"><input id="ctl00_body_RpMessages_ctl00_cbPublic" type="checkbox" name="ctl00$body$RpMessages$ctl00$cbPublic" onclick="javascript:setTimeout('__doPostBack(\'ctl00$body$RpMessages$ctl00$cbPublic\',\'\')', 0)"><label for="ctl00_body_RpMessages_ctl00_cbPublic">إظهار للعامة</label></span>
                                            </div>
                                         </div>
                                         @endforeach
                                         <!-- end message  -->
                                        
                    </div>
                </div>
                
                <!-- End Section atLeft -->
            </div>
        </div>         
    </section>
</div></div>
</section>
@endsection
@section('css')
<link rel="stylesheet" href="{{ url('assets/site/assets/css/custom.css') }}" />
@endsection
@section('js')  
<script src="{{URL::asset('assets/site/assets/js/account.js')}}"></script>
 

@endsection
