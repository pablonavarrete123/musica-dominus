@extends('layout')
@section('titulo','Mi camino')
@section('contenido')

<section class="container g-pt-100 g-pb-100">
<!-- Heading -->
<div class="row justify-content-center text-center g-mb-70">
  <div class="col-lg-9">
    <h1 class="h2 g-color-black g-font-weight-600 mb-2">{{ __('messages.page_detalle_write_micamino_title') }}</h1>
    <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
  </div>
</div>
<!-- End Heading -->

<div class="row">
  <div class="col-lg-6">
    <div class="mb-2">
      <p>{{ __('messages.page_detalle_write_micamino_p1') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p2') }}</p>
      
    </div>
  </div>

  <div class="col-lg-6 g-mb-60">
    <img class="img-fluid" src="assets/img/vincent2.jpg" alt="Image Description">
  </div>

  <div class="col">
      <p>{{ __('messages.page_detalle_write_micamino_p3') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p4') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p5') }}</p><br>
      <b><u><p>{{ __('messages.page_detalle_write_micamino_p6') }}</p></u></b><br>
      <p>{{ __('messages.page_detalle_write_micamino_p7') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p8') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p9') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p10') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p11') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p12') }}</p><br>
      <b><u><p>{{ __('messages.page_detalle_write_micamino_p13') }}</p></u></b><br>
      <p>{{ __('messages.page_detalle_write_micamino_p14') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p15') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p16') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p17') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p18') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p19') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p20') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p20') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p21') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p22') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p23') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p24') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p25') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p26') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p27') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p28') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p29') }}</p><br>
      <b><u><p>{{ __('messages.page_detalle_write_micamino_p30') }}</p></u></b><br>
      <p>{{ __('messages.page_detalle_write_micamino_p31') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p32') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p33') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p34') }}</p><br>
      <b><u><p>{{ __('messages.page_detalle_write_micamino_p35') }}</p></u></b><br>
      <p>{{ __('messages.page_detalle_write_micamino_p36') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p37') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p38') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p39') }}</p><br>
      <b><u><p>{{ __('messages.page_detalle_write_micamino_p40') }}</p></u></b><br>
      <p>{{ __('messages.page_detalle_write_micamino_p41') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p42') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p43') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p44') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p45') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p46') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p47') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p48') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p49') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p50') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p51') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p52') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p53') }}</p><br>
      <p>{{ __('messages.page_detalle_write_micamino_p54') }}</p>
      <p><i>{{ __('messages.page_detalle_write_micamino_p55') }}</i></p><br>

  </div>
</div>
  <div class="float-right g-mt-30 g-mr-30">
    <a href="/" >
    <button type="button" class="btn btn-md u-btn-outline-blue g-mr-10 g-mb-15">{{ __('messages.page_detalle_write_backhome_bt') }}</button>
    </a>
  </div>

</section>
<script>
    window.onload = function(){
      document.getElementById("op3").classList.add('active');
    }
  </script>  


@endsection