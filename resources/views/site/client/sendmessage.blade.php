@extends('site.layouts.layout')
@section('content')
<section class="section">
    <div class="container">
        <div class="box-main-foo">
    <section class="section-about mb-4 mt-3">
        
       
        <div class="box-about-unviersity p-2">
            <div class="container main-about-box">
  <!-- Section atRight -->
  <div  >
                     
  

</div>
                <!-- End Section atRight -->
                <!-- Section atLeft -->
                <div class="background-about mm">
                   
                    <div class="about-detials mb-3 socaill">
                      
                                 <h4 class="mb-4  " style="margin-bottom: 0px"  >ارسل<hr style="margin-bottom: 0px"></h4>
                                   <div class="col-md-offset-2 col-md-2" style="margin-bottom: 50px" >
                       </div>

 <div class="descrip w-100  text-center"    >   
    <p>اجعل رسالتك بناءة :)</p>
    <form action="{{ url('u/sendmessage') }}" method="POST"  name="register-form" class="form-sign"
    autocomplete="off" enctype="multipart/form-data">
    @csrf
     
                                    <textarea class="message-box" style="width: 100%"></textarea> 
                                    <p style="font-weight: bold; color: #c61717">رفع فيديو أو صورة أو مقطع صوتي مع الرسالة حيث يتم حذف المرفق تلقائيا بعد 24 ساعة</p>
                                    <input type="file" class="form-control" name="image" id="image" aria-label="name">
                                    <div class="clearfix"></div>
                                    <button type="submit" name="btn-send" class="theme-btn primary-btn btn-sign w-100">أرسل</button>
         
                                            </form>
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
