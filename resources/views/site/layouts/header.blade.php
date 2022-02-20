@if(App::getLocale() == 'es')
  <style>
   .header-nav .navbar-nav .nav-link {font-size: 13px;}
  </style>
@endif
  <!-- Header -->
  <header>
    <nav class="navbar header-nav fixed-top navbar-expand-lg">
      <div class="container-fluid prl_header">
        <a class="navbar-brand" href="#"><img src="/assets/img/Logo.svg" width="100px" alt="logo"></a>
        <!-- / -->

        <!-- Mobile Toggle -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarRedBell" aria-controls="navbarRedBell" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <!-- / -->

        <!-- Top Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarRedBell">
          <div class="container-fluid">
           <ul class="navbar-nav" style="white-space:nowrap;">
            <li><a class="nav-link active teste" href="#home">@lang('site/home.header_home')</a></li>
            <li><a class="nav-link teste" href="#about">@lang('site/home.header_about')</a></li>
            <li><a class="nav-link teste" href="#casino">@lang('site/home.header_casino')</a></li>
            <li><a class="nav-link" href="#cassino">@lang('site/home.header_cassino')</a></li>
            <li><a class="nav-link" href="#chip">@lang('site/home.header_chip')</a></li>           
            <li><a class="nav-link" href="#" target="_blank">@lang('site/home.header_register')</a></li>
            <li><a class="nav-link" href="" target="_blank">@lang('site/home.header_login')</a></li>
            <li>
              <div class="btn-group dropdown">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="/assets/img/flag/{{App::getLocale()}}.png" alt="" width="32px"></button>
                <div class="dropdown-menu">
                  <a href="{{URL::to('/changeLocale/en')}}" ><img src="/assets/img/flag/en.png" alt="" width="32px"></a>
                  <a href="{{URL::to('/changeLocale/es')}}" ><img src="/assets/img/flag/es.png" alt="" width="32px"></a>
                  <a href="{{URL::to('/changeLocale/pt')}}" ><img src="/assets/img/flag/pt.png" alt="" width="32px"></a>
                  <a href="{{URL::to('/changeLocale/ch')}}" ><img src="/assets/img/flag/ch.png" alt="" width="32px"></a>
                  <a href="{{URL::to('/changeLocale/kr')}}" ><img src="/assets/img/flag/kr.png" alt="" width="32px"></a>
                  <a href="{{URL::to('/changeLocale/ru')}}" ><img src="/assets/img/flag/ru.png" alt="" width="32px"></a>
                  <a href="{{URL::to('/changeLocale/fl')}}" ><img src="/assets/img/flag/fl.png" alt="" width="32px"></a>
                  <a href="{{URL::to('/changeLocale/jp')}}" ><img src="/assets/img/flag/jp.png" alt="" width="32px"></a>
                </div>
               </div>
              </li>
           </ul>
         </div>
        </div>
        <!-- / -->

      </div><!-- Container -->
    </nav> <!-- Navbar -->
  </header>
  <!-- Header End -->