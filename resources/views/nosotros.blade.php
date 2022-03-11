@extends('layout')
@section('titulo','Nosotros')
@section('contenido')

    <!-- Icon Blocks -->
    <section class="container g-pt-100 g-pb-100">
      <!-- Heading -->
      <div class="row justify-content-center text-center g-mb-70">
        <div class="col-lg-9">
          <h1 class="h2 g-color-black g-font-weight-600 mb-2">{{ __('messages.page_home_title_what') }}</h1>
          <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
          <p class="lead mb-0">{{ __('messages.page_home_subtitle_what') }}</p>
        </div>
      </div>
      <!-- End Heading -->

      <div class="row">

        <div class="col-lg-4 g-mb-30">
          
          <img src="assets/img/nosotros2.jpg" class="img-fluid u-shadow-v29" style="border-radius: 3px; -webkit-filter: grayscale(100%);" />
        </div>

        <div class="col-lg-8 g-mb-30">

          <p style="padding-top: 5px;">{{ __('messages.page_us_body_p0') }}<br><br>
          
          <b>{{ __('messages.page_home_what_p2_b') }}</b>{{ __('messages.page_us_body_p1') }}<br><br>

          {{ __('messages.page_us_body_p2') }}<br><br>

          {{ __('messages.page_us_body_p3') }}<br><br>

          <i>{{ __('messages.page_us_body_p4') }}</i><br><br>

          {{ __('messages.page_us_body_p5') }}<br><br>

          {{ __('messages.page_us_body_p6') }}<br>
          {{ __('messages.page_us_body_p7') }}</p>
    
        </div>

        

      </div>
    </section>
    <!-- End Icon Blocks -->

    <!-- News Block -->
    <section class="g-pt-100 g-pb-100" style="background: #f5f5f5;">
      <div class="container">

        <!-- Heading -->
      <div class="row justify-content-center text-center g-mb-70">
        <div class="col-lg-9">
          <h1 class="h2 g-color-black g-font-weight-600 mb-2">{{ __('messages.page_us_title_about') }}</h1>
          <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
          <p class="lead mb-0">{{ __('messages.page_us_subtitle_about') }}</p>
        </div>
      </div>
      <!-- End Heading -->
      
      <div class="row">

        

        <div class="col-lg-8 g-mb-10">

          <p style="padding-top: 5px;">{{ __('messages.page_us_p00_about') }}<br><br>

           <b>{{ __('messages.page_us_p0_about') }}</b>{{ __('messages.page_us_p1_about') }}<br><br>

           {{ __('messages.page_us_p2_about') }}<br><br>

           {{ __('messages.page_us_p3_about') }}<br><br>

           {{ __('messages.page_us_p4_about') }}
          
          </p>
    
        </div>

        <div class="col-lg-4 g-mb-30">
          
          <img src="assets/img/vincent3.jpg" class="img-fluid u-shadow-v29" style="border-radius: 50%; margin-top: 60px; border: 5px solid #fff;" />
        </div>
        
        <div class="col-lg-12 g-mb-30">

          <p>
            {{ __('messages.page_us_p5_about') }}<br><br>

            {{ __('messages.page_us_p6_about') }}<br><br>

            {{ __('messages.page_us_p7_about') }}<br><br>

            {{ __('messages.page_us_p8_about') }}<br><br>

            {{ __('messages.page_us_p9_about') }}<br><br>

            {{ __('messages.page_us_p10_about') }}<br>
            {{ __('messages.page_us_p11_about') }}<br><br>

            {{ __('messages.page_us_p12_about') }}<br><br>

            {{ __('messages.page_us_p13_about') }}<br><br>

            {{ __('messages.page_us_p14_about') }}<br><br>

            {{ __('messages.page_us_p15_about') }}<br><br>

            {{ __('messages.page_us_p16_about') }}<br><br>

            {{ __('messages.page_us_p17_about') }}<br><br>

          <i>{{ __('messages.page_us_p18_about') }}</i>{{ __('messages.page_us_p19_about') }}<br><br>

          {{ __('messages.page_us_p20_about') }}<br><br><br>


          </p>

        </div>

      </div>
      
    </div>
    </section>
    <!-- End News Block -->

    <script>
  window.onload = function(){
    document.getElementById("op2").classList.add('active');
  }
</script>  
@endsection