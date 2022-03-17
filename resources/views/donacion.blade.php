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
                <i class="icon-finance-009 u-line-icon-pro"></i>
              </span>
          </div>
          <div class="media-body align-self-center">
            <h3 class="h5 mb-0">Modern design</h3>
          </div>
        </div>
        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
      </div>
      <!-- End Icon Blocks -->

      <!-- Icon Blocks -->
      <div class="g-mb-40">
        <div class="media mb-2">
          <div class="d-flex align-self-center mr-3">
            <span class="u-icon-v1 g-color-primary g-font-size-26">
                <i class="icon-science-020 u-line-icon-pro"></i>
              </span>
          </div>
          <div class="media-body align-self-center">
            <h3 class="h5 mb-0">Extensive documentation</h3>
          </div>
        </div>
        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
      </div>
      <!-- End Icon Blocks -->

      <form action="https://www.paypal.com/donate" method="post" target="_top">
        <input type="hidden" name="hosted_button_id" value="3Y2G4NY9NUDPL" />
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
        <img alt="" border="0" src="https://www.paypal.com/en_CL/i/scr/pixel.gif" width="1" height="1" />
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