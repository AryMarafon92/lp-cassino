@extends('site/layouts.default')

@section('content')


    <!-- Home Banner Start -->
    <section id="home" class="home-banner theme-bg">

      <!-- <div class="home-effect home-effect-1 theme-g-bg"></div>
      <div class="home-effect home-effect-2 theme-g-bg"></div>
      <div class="home-effect home-effect-3 theme-g-bg"></div>
      <div class="home-effect home-effect-4 theme-g-bg"></div> -->

      <div class="container-fluid header-ml">
        <div class="row full-screen align-items-center">
          <div class="col-md-12 col-lg-3 col-xl-3 p-80px-tb md-p-30px-b sm-p-40px-t">
            <div class="home-text-center theme-after m-50px-t">
              <h1 class="font-exbold">@lang('site/home.casino')</h1>
              <p class="pteste">@lang('site/home.uniting_crypto_casino')</p>
              <div class="app-btn-set">
                <a href="#" target="_blank" class="g-store header-btn">@lang('site/home.be_member_btn')</a>
              </div>

            </div> <!-- home-text-center -->
          </div> <!-- col -->
        </div>

      </div><!-- container -->
      
    </section>
    <!-- Home Banner End -->

     <!-- Service Start -->
    <section id="about" class="section gray-bg">
      <div class="container-fluid">
        <div class="row justify-content-center m-45px-b md-m-20px-b sm-m-15px-b">
          <div class="col-12 col-md-10 col-lg-8">
            <div class="section-title text-center">
              <h2 class="font-alt">@lang('site/home.about_us')</h2>
              <p class="mt-4">@lang('site/home.about_us_description')</p>
            </div>
          </div>
        </div> <!-- row -->

        <div class="row">
          <div class="col-md-9 m-auto">
            <div class="row">

              <div class="col-lg-4 col-md-12 m-30px-t">
                <div class="feature-box-02">
                  <div class="icon-bg m-auto">
                    <img src="assets/img/icons/settings.svg" width="50px" alt="">
                  </div>
                  <div class="feature-content mt-4">
                    <h5 class="font-alt">@lang('site/home.how_it_work')</h5>
                    <p>@lang('site/home.you_can_be_part_of_this_story').</p>
                  </div>
                </div> <!-- feature-box-02 -->
              </div> <!-- col -->

              <div class="col-lg-4 col-md-12 m-30px-t">
                <div class="feature-box-02">
                  <div class="icon-bg m-auto">
                    <img src="assets/img/icons/lock.svg" width="50px" alt="">
                  </div>
                  <div class="feature-content mt-4">
                    <h5 class="font-alt">@lang('site/home.security')</h5>
                    <p>@lang('site/home.blockchain_promising_technology')</p>
                  </div>
                </div> <!-- feature-box-02 -->
              </div> <!-- col -->

              <div class="col-lg-4 col-md-12 m-30px-t">
                <div class="feature-box-02">
                  <div class="icon-bg m-auto ">
                    <img src="assets/img/icons/module.svg" width="50px" alt="">
                  </div>
                  <div class="feature-content mt-4">
                    <h5 class="font-alt">@lang('site/home.interconnected_System')</h5>
                    <p>@lang('site/home.we_have_strong_functional_ecosystem')</p>
                  </div>
                </div> <!-- feature-box-02 -->
              </div> <!-- col -->

            </div>
          </div>
        </div> <!-- row -->
      </div> <!-- container -->
    </section>
    <!-- Service End -->

    <section class="section" id="expand">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-lg-5 col-md-12 text-center">
            <img src="../assets/img/icons/Ativo4.svg" class="ativo4">
          </div>
          <div class="col-lg-7 col-md-12 ml-auto ">
            <div class="about-text sm-p-30px-t">
              <ul>
                <li>
                  <h6 class="font-alt">@lang('site/home.expand_your_business_card')</h6>
                  <p>@lang('site/home.be_part_entertainment_market')</p>
                </li>

                <li>
                  <h6 class="font-alt adjust-card">@lang('site/home.profit_distribution_card')</h6>
                  <p>@lang('site/home.works_with_distribution_daily_profits')</p>
                </li>

                <li>
                  <h6 class="font-alt">@lang('site/home.increase_your_earnings_card')</h6>
                  <p>@lang('site/home.casino_market_growth')</p>
                </li>

              </ul>
            </div>
          </div> <!-- col -->

        </div> <!-- row -->

      </div> <!-- Container -->
    </section>

    <section id="casino" class="black-box feature-1 ">
        <div class="container">
            <div class="row">
                
              <div class="box col-lg-12 col-sm-12">
                <div class="row">
                  
                  <div class="img">
                      <img src="../assets/img/bg/Dados.png" /> 
                  </div>
                  <div class="col-lg-6 col-sm-12 info">      
                    <h4>@lang('site/home.casino_universe')</h4>
                    <p>@lang('site/home.casinos_far_beyond_la')</p>
                    <a href="#" class="m-btn m-btn-theme bg-3">
                      @lang('site/home.register_btn')
                    </a>
                  </div>

                </div>
              </div>
            </div>
        </div>
    </section>



    <section id="casino" class="feature-2 socio">

      <div class="container">
        <div class="row">
          
          <div class="info1 col-lg-6 col-sm-12">
            <h4 class="font-alt">@lang('site/home.casino_card')</h4>
              <p>@lang('site/home.has_partnership_with_casino')</p>
              <a href="#" target="_blank" class="m-btn m-btn-theme bg-3">
                
                    @lang('site/home.become_member_btn')
               
              </a>
           
          </div>

           <div class="img1 col-lg-6 col-sm-12">
                <img src="../assets/img/bg/coins.png" > 
          </div>

           <div id="chip" class="img2 col-lg-6 col-sm-12">
                  <img src="../assets/img/bg/.png">
          </div>


           <div class="info2 col-lg-6 col-sm-12">
             <h4 class="font-alt">@lang('site/home.chip_card')</h4>
              <p class="pr-0">@lang('site/home.our_exclusive_token')</p>
              <a href="#" target="_blank" class="m-btn m-btn-theme bg-3">@lang('site/home.go_to_site_btn')</a>
          </div>

        </div>
      </div>
      
    </section>

    <!-- Screenshot -->
    <section id="screenshot" class="section screenshot-section text-center">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <div class="md-m-50px-b">
              <h2 class="font-alt">@lang('site/home.become_member_casino')</h2>
              <p>@lang('site/home.come_part_revolution')</p>
              <img src="assets/img/bg/Back.jpg" class="imgRev">
              <a href="#" target="_blank" class="m-btn m-btn-theme bg-4">@lang('site/home.start_now_btn')</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / -->

@endsection

