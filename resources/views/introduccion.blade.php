@extends('layout')
@section('titulo','introduccion')
@section('contenido')

<section class="container g-pt-100 g-pb-100">
<!-- Heading -->
<div class="row justify-content-center text-center g-mb-70">
  <div class="col-lg-9">
    <h1 class="h2 g-color-black g-font-weight-600 mb-2">{{ __('messages.page_detalle_write_introduccion_title') }}</h1>
    <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
  </div>
</div>
<!-- End Heading -->

<div class="row">
  <div class="col-lg-6">
    <div class="mb-4">
      <h2 class="h3 text-uppercase mb-3">{{ __('messages.page_detalle_write_introduccion_subtitle') }}</h2>
      <div class="g-width-60 g-height-1 g-bg-black"></div>
    </div>
    <div class="mb-2">
      <p>{{ __('messages.page_detalle_write_introduccion_p1') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p2') }}</p>
      
    </div>
  </div>

  <div class="col-lg-6 g-mb-60">
    <img class="img-fluid" src="assets/img/texto2.jpg" alt="Image Description">
  </div>

  <div class="col">
      <p>{{ __('messages.page_detalle_write_introduccion_p3') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p4') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p5') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p6') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p7') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p8') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p9') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p10') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p11') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p12') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p13') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p14') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p15') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p16') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p17') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p18') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p19') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p20') }}</p><br>
      <p>{{ __('messages.page_detalle_write_introduccion_p20') }}</p><br>
  </div>
</div>
  <div class="float-right g-mt-30 g-mr-30">
    <a href="significado" >
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