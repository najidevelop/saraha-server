<body>
  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
          <a href="{{ url('/') }}"><img src="{{ url('assets/site/uploads/logo.png') }}" alt=""></a>
          {{-- <h2><a class="navbar-brand" href="{{ url('/') }}"><span style="color:#F2AF2F;">جمرايا </span>دليل
                  الجامعات</a></h2> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
              aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="display: flex;justify-content: space-between;">
              <div class="navbar-nav" style="width:auto;">
                  <a class="nav-link active" aria-current="page" href="{{ url('/') }}">الرئيسية</a>
                  {{-- <a class="nav-link menu-search" aria-current="page" href="{{ route('page.search') }}">بحث</a> --}}
                  <a class="nav-link active" aria-current="page" href="{{ url('/') }}">التأسيس</a>
                  {{-- @isset($pineed)<a class="nav-link" href="{{route('viewpinned', $pineed->href)}}">عن الموقع</a>@endisset --}}
               
                 
                  {{-- <a class="nav-link" href="{{ url('quesans/') }}">سؤال و جواب</a> --}}
                  <a class="nav-link" href="{{ url('/') }}">الاخبار</a>
                  
              </div>
              <!-- Example single danger button -->
              <div class="btn-group btn-group-change">
                  <div class="left-nav" style="width: 100%;">
 
                      @if (Auth::check())
                              <div class="div-profile d-inline-flex">
                                  @if (isset(Auth::user()->photo))
                                  <a class="btn btn-secondary dropdown-toggle link-one text-decoration-none link-mid profile-login" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                      <img src="{{url('./public/uploading/'. Auth::user()->photo)}}" alt="{{ Auth::user()->name }}">
                                  </a>
                                  @else
                                      <a class="btn btn-secondary dropdown-toggle link-one text-decoration-none link-mid profile-login" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                          <img src="{{url('./public/assets/images/person-silhouette-glasses-profile.jpg')}}" alt="{{ Auth::user()->name }}">
                                      </a>
                                  @endif
                                  <ul class="dropdown-menu options-profile" aria-labelledby="dropdownMenuLink" id="profile">
                                    <li class="li"><a class="dropdown-item" href="{{ route('HomePage.user', Auth::user()->en_name) }}">بروفايل<i class="fa-solid fa-user" style="margin-left:.5rem;margin-right:-0.5rem;"></i></a></li>
                                    <li class="li"><a class="dropdown-item" href="{{ route('profile', Auth::user()->en_name) }}">معلومات الشخصية<i class="fa-solid fa-circle-info" style="margin-left:.5rem;margin-right:-0.5rem;"></i></a></li>
                                    {{-- <li><a class="dropdown-item" href="#"></a></li> --}}
                                    <li class="li"><a href="{{route('mainPageSetting.userr', Auth::user()->en_name)}}" class="dropdown-item text-decoration-none"><span>إعدادات الحساب<i class="fa-solid fa-gear" style="margin-left:.5rem; margin-right:-0.5rem;"></i></span></a></li>
                                    <hr style="margin:0;padding:0;">
                                    <li class="li"><a href="{{ route('logout') }}" class="dropdown-item text-decoration-none"><span>خروج<i class="fa-solid fa-right-from-bracket" style="margin-left:.5rem; margin-right:-0.5rem;"></i></span></a></li>
                                  </ul>
                              </div>

                      @else
                          <a href="{{ route('login') }}" class="link-one text-decoration-none link-mid">
                              <span>دخول</span>
                          </a>

                          <a href="/registerr" class="link-two text-decoration-none link-mid">
                              <span>حساب جديد</span>
                          </a>
                          <a href="/registerr" class="link-one text-decoration-none link-mid">
                            <span>تسجيل الدخول عن طريق الفيسبوك</span>
                        </a>
                   
                      @endif
                      <a href="/" class="link-two text-decoration-none link-mid">
                        <span> اتصل بنا</span>
                    </a>
                  </div>
              </div>
          </div>
      </div>
  </nav>
