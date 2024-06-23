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

 <div class="descrip w-100 message-box text-center"    >   
    <p>اجعل رسالتك بناءة :)</p>
                                    <textarea> </textarea> 
                                    <small class="text-muted" data-utcdate=" "></small>
                                    <div class="clearfix"></div>
                                  

                                        <div  style="color: #f00 !important; font-weight: bold !important; position: relative; right: 20px;">
                                            <span class="checkbox" data-id="35512634"><input id="ctl00_body_RpMessages_ctl00_cbPublic" type="checkbox" name="ctl00$body$RpMessages$ctl00$cbPublic" onclick="javascript:setTimeout('__doPostBack(\'ctl00$body$RpMessages$ctl00$cbPublic\',\'\')', 0)"><label for="ctl00_body_RpMessages_ctl00_cbPublic">إظهار للعامة</label></span>
                                            </div>

                                            <a id="ctl00_body_btnSend" class="btn btn-primary-outline" href="javascript:__doPostBack('ctl00$body$btnSend','')" style="margin-top: 10px"><span class="icon icon-pencil"></span>&nbsp; أرسل</a>
                                         </div>
   
   
                                        
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
