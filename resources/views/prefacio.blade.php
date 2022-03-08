@extends('layout')
@section('titulo','Prefacio')
@section('contenido')

<section class="container g-pt-100 g-pb-100">
<!-- Heading -->
<div class="row justify-content-center text-center g-mb-70">
  <div class="col-lg-9">
    <h1 class="h2 g-color-black g-font-weight-600 mb-2">{{ __('messages.page_detalle_write_prefacio_title') }}</h1>
    <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
  </div>
</div>
<!-- End Heading -->

<div class="row">
  <div class="col-lg-6">
    <div class="mb-4">
      <h2 class="h3 text-uppercase mb-3">{{ __('messages.page_detalle_write_prefacio_title') }}</h2>
      <div class="g-width-60 g-height-1 g-bg-black"></div>
    </div>
    <div class="mb-2">
      <p>{{ __('messages.page_detalle_write_prefacio_p1') }}</p><br>
      <p>{{ __('messages.page_detalle_write_prefacio_p2') }}</p>
      
    </div>
  </div>

  <div class="col-lg-6 g-mb-60">
    <img class="img-fluid" src="assets/img/texto1.jpg" alt="Image Description">
  </div>

  <div class="col">
      <p>{{ __('messages.page_detalle_write_prefacio_p3') }}</p><br>
      <p>{{ __('messages.page_detalle_write_prefacio_p4') }}</p><br>
      <p>{{ __('messages.page_detalle_write_prefacio_p5') }}</p><br>
      <p>{{ __('messages.page_detalle_write_prefacio_p6') }}</p>
      <p>{{ __('messages.page_detalle_write_prefacio_p7') }}</p>
      <p>{{ __('messages.page_detalle_write_prefacio_p8') }}</p>
      <p>{{ __('messages.page_detalle_write_prefacio_p9') }}</p>
      <p>{{ __('messages.page_detalle_write_prefacio_p10') }}</p><br>
      <p>{{ __('messages.page_detalle_write_prefacio_p11') }}</p>
  </div>
</div>
  <div class="float-right g-mt-30 g-mr-30">
    <a href="introduccion" >
    <button type="button" class="btn btn-md u-btn-outline-blue g-mr-10 g-mb-15" >{{ __('messages.page_detalle_write_readmore_bt') }}</button>
    </a>
  </div>

</section>
<script>
    window.onload = function(){
      document.getElementById("op3").classList.add('active');
    }
  </script>  


@endsection