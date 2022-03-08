@extends('layout')
@section('titulo','razones')
@section('contenido')

<section class="container g-pt-100 g-pb-100">
<!-- Heading -->
<div class="row justify-content-center text-center g-mb-70">
  <div class="col-lg-9">
    <h1 class="h2 g-color-black g-font-weight-600 mb-2">{{ __('messages.page_detalle_write_razones_title') }}</h1>
    <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
  </div>
</div>
<!-- End Heading -->

<div class="row">
  <div class="col-lg-6">
    <div class="mb-4">
      <h2 class="h3 text-uppercase mb-3">{{ __('messages.page_detalle_write_razones_subtitle') }}</h2>
      <div class="g-width-60 g-height-1 g-bg-black"></div>
    </div>
    <div class="mb-2">
      <p>{{ __('messages.page_detalle_write_razones_p1') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p2') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p3') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p4') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p4') }}</p><br>
      
    </div>
  </div>

  <div class="col-lg-6 g-mb-60">
    <img class="img-fluid" src="assets/img/texto4.jpg" alt="Image Description">
  </div>

  <div class="col">
      <p>{{ __('messages.page_detalle_write_razones_p4') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p5') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p6') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p7') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p8') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p9') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p10') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p11') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p12') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p13') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p14') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p15') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p16') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p17') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p18') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p19') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p20') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p20') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p21') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p22') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p23') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p24') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p25') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p26') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p27') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p28') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p29') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p30') }}</p><br>
      <p>{{ __('messages.page_detalle_write_razones_p31') }}</p><br>
  </div>
</div>
  <div class="float-right g-mt-30 g-mr-30">
    <a href="musicotherapie">
    <button type="button" class="btn btn-md u-btn-outline-blue g-mr-10 g-mb-15">{{ __('messages.page_detalle_write_readmore_bt') }}</button>
    </a>
  </div>

</section>
<script>
    window.onload = function(){
      document.getElementById("op3").classList.add('active');
    }
  </script>  


@endsection