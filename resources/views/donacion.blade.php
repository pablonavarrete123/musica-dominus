@extends('layout')
@section('titulo','Donacion')
@section('contenido')




<!-- Features -->
<section class="container g-pt-100 g-pb-40">
  <!-- Heading -->
  <div class="text-center g-mb-60">
    <h2 class="h2 g-color-black g-font-weight-600 mb-2">{{ __('messages.page_donacion_title') }}</h2>
    <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
    <p class="lead mb-0">{{ __('messages.page_donacion_subtitle') }}</p>
  </div>
  <!-- End Heading -->

  <div class="row justify-content-between">
    <div class="col-md-6 align-self-center g-mb-60">
      <img class="img-fluid img-thumbnail" src="assets/img/05 - Santa Barbara - Colombia/003.jpg" alt="Image Description">
    </div>

    <div class="col-md-5 align-self-center g-mb-30">
      <!-- Icon Blocks -->
      <div class="g-mb-30">
        <div class="media mb-2">
          <div class="d-flex align-self-center mr-3">
            <span class="u-icon-v1 g-color-primary g-font-size-26">
                <i class="icon-directions"></i>
              </span>
          </div>
          <div class="media-body align-self-center">
            <h3 class="h5 mb-0">{{ __('messages.page_donacion_title_p1') }}</h3>
          </div>
        </div>
        <p class="g-color-gray-dark-v4">{{ __('messages.page_donacion_p_p1') }}</p>
      </div>
      <!-- End Icon Blocks -->

      <!-- Icon Blocks -->
      <div class="g-mb-40">
        <div class="media mb-2">
          <div class="d-flex align-self-center mr-3">
            <span class="u-icon-v1 g-color-primary g-font-size-26">
                <i class="fa fa-group"></i>
              </span>
          </div>
          <div class="media-body align-self-center">
            <h3 class="h5 mb-0">{{ __('messages.page_donacion_title_p2') }}</h3>
          </div>
        </div>
        <p class="g-color-gray-dark-v4">{{ __('messages.page_donacion_p_p2') }}</p>
      </div>
      <!-- End Icon Blocks -->

      <form action="https://www.paypal.com/donate" method="post" target="_top">
            <!-- Paypal Button -->
        </form>
    </div>
  </div>
</section>
<!-- End Features -->
    

<script>
    window.onload = function(){
      document.getElementById("op6").classList.add('active');
    }
  </script>  

@endsection