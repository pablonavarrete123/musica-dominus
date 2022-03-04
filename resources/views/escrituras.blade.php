@extends('layout')
@section('titulo','escrituras')
@section('contenido')

    <!-- Icon Blocks -->
    <section class="container g-pt-100 g-pb-100">
      <!-- Heading -->
      <div class="row justify-content-center text-center g-mb-70">
        <div class="col-lg-9">
          <h1 class="h2 g-color-black g-font-weight-600 mb-2">{{ __('messages.page_home_title_write') }}</h1>
          <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
          <p class="lead mb-0">{{ __('messages.page_home_subtitle_write') }}</p>
        </div>
      </div>
      <!-- End Heading -->

      <div class="row">
  <div class="col-lg-12">
    <!-- Article -->
    <div class="row g-mx-5--sm g-mb-30">
      <!-- Article Image -->
      <div class="col-sm-3 g-px-0--sm">
        <div class="g-height-200 g-bg-size-cover" style="background-image: url(assets/img/texto1.jpg); -webkit-filter: grayscale(100%);"></div>
      </div>
      <!-- End Article Image -->

      <!-- Article Content -->
      <div class="col-sm-9 g-px-0--sm">
        <div class="u-info-v1-1 g-height-200 g-bg-gray-light-v5 g-bg-gray-light-gradient-v1--after g-pa-20-30-0">
          <h3 class="h6 g-font-weight-600 text-uppercase">
            <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">{{ __('messages.page_home_title_p0_write') }}</a>
          </h3>
          <p class="small g-color-primary">
            <time>{{ __('messages.page_home_date_p0_write') }}</time>
          </p>

          <p>
            {{ __('messages.page_home_body_p0_write') }}</p>
        </div>
      </div>
      <!-- End Article Content -->
    </div>
    <!-- End Article -->
  </div>

  <div class="col-lg-12">
    <!-- Article -->
    <div class="row g-mx-5--sm g-mb-30">
      <!-- Article Image -->
      <div class="col-sm-3 g-px-0--sm">
        <div class="g-height-200 g-bg-size-cover" style="background-image: url(assets/img/texto2.jpg); -webkit-filter: grayscale(100%);"></div>
      </div>
      <!-- End Article Image -->

      <!-- Article Content -->
      <div class="col-sm-9 g-px-0--sm">
        <div class="u-info-v1-1 g-height-200 g-bg-gray-light-v5 g-bg-gray-light-gradient-v1--after g-pa-20-30-0">
          <h3 class="h6 g-font-weight-600 text-uppercase">
            <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!"> {{ __('messages.page_home_title_p1_write') }}</a>
          </h3>
          <p class="small g-color-primary">
            <time> {{ __('messages.page_home_date_p1_write') }}</time>
          </p>

          <p>{{ __('messages.page_home_body_p1_write') }}</p>
        </div>
      </div>
      <!-- End Article Content -->
    </div>
    <!-- End Article -->
  </div>

  <div class="col-lg-12">
    <!-- Article -->
    <div class="row g-mx-5--sm g-mb-30">
      <!-- Article Image -->
      <div class="col-sm-3 g-px-0--sm">
        <div class="g-height-200 g-bg-size-cover" style="background-image: url(assets/img/texto3.jpg); -webkit-filter: grayscale(100%);"></div>
      </div>
      <!-- End Article Image -->

      <!-- Article Content -->
      <div class="col-sm-9 g-px-0--sm">
        <div class="u-info-v1-1 g-height-200 g-bg-gray-light-v5 g-bg-gray-light-gradient-v1--after g-pa-20-30-0">
          <h3 class="h6 g-font-weight-600 text-uppercase">
            <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">I{{ __('messages.page_home_title_p2_write') }}</a>
          </h3>
          <p class="small g-color-primary">
            <time>{{ __('messages.page_home_date_p2_write') }}</time>
          </p>

          <p>{{ __('messages.page_home_body_p2_write') }}</p>
        </div>
      </div>
      <!-- End Article Content -->
    </div>
    <!-- End Article -->
  </div>

  <div class="col-lg-12">
    <!-- Article -->
    <div class="row g-mx-5--sm g-mb-30">
      <!-- Article Image -->
      <div class="col-sm-3 g-px-0--sm">
        <div class="g-height-200 g-bg-size-cover" style="background-image: url(assets/img/texto4.jpg); -webkit-filter: grayscale(100%);"></div>
      </div>
      <!-- End Article Image -->

      <!-- Article Content -->
      <div class="col-sm-9 g-px-0--sm">
        <div class="u-info-v1-1 g-height-200 g-bg-gray-light-v5 g-bg-gray-light-gradient-v1--after g-pa-20-30-0">
          <h3 class="h6 g-font-weight-600 text-uppercase">
            <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">{{ __('messages.page_home_title_p3_write') }}</a>
          </h3>
          <p class="small g-color-primary">
            <time>{{ __('messages.page_home_date_p3_write') }}</time>
          </p>

          <p>{{ __('messages.page_home_body_p3_write') }}</p>
        </div>
      </div>
      <!-- End Article Content -->
    </div>
    <!-- End Article -->
  </div>

  <div class="col-lg-12">
    <!-- Article -->
    <div class="row g-mx-5--sm g-mb-30">
      <!-- Article Image -->
      <div class="col-sm-3 g-px-0--sm">
        <div class="g-height-200 g-bg-size-cover" style="background-image: url(assets/img/texto5.jpg); -webkit-filter: grayscale(100%);"></div>
      </div>
      <!-- End Article Image -->

      <!-- Article Content -->
      <div class="col-sm-9 g-px-0--sm">
        <div class="u-info-v1-1 g-height-200 g-bg-gray-light-v5 g-bg-gray-light-gradient-v1--after g-pa-20-30-0">
          <h3 class="h6 g-font-weight-600 text-uppercase">
            <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">{{ __('messages.page_home_title_p4_write') }}</a>
          </h3>
          <p class="small g-color-primary">
            <time>{{ __('messages.page_home_date_p4_write') }}</time>
          </p>

          <p>{{ __('messages.page_home_body_p4_write') }}</p>
        </div>
      </div>
      <!-- End Article Content -->
    </div>
    <!-- End Article -->
  </div>

  <div class="col-lg-12">
    <!-- Article -->
    <div class="row g-mx-5--sm g-mb-30">
      <!-- Article Image -->
      <div class="col-sm-3 g-px-0--sm">
        <div class="g-height-200 g-bg-size-cover" style="background-image: url(assets/img/vincent2.jpg); -webkit-filter: grayscale(100%);"></div>
      </div>
      <!-- End Article Image -->

      <!-- Article Content -->
      <div class="col-sm-9 g-px-0--sm">
        <div class="u-info-v1-1 g-height-200 g-bg-gray-light-v5 g-bg-gray-light-gradient-v1--after g-pa-20-30-0">
          <h3 class="h6 g-font-weight-600 text-uppercase">
            <a class="u-link-v5 g-color-black g-color-primary--hover" href="#!">{{ __('messages.page_home_title_p5_write') }}</a>
          </h3>
          <p class="small g-color-primary">
            <time>{{ __('messages.page_home_date_p5_write') }}</time>
          </p>

          <p>{{ __('messages.page_home_body_p5_write') }}</p>
        </div>
      </div>
      <!-- End Article Content -->
    </div>
    <!-- End Article -->
  </div>

</div>
    </section>
    <!-- End Icon Blocks -->


    <script>
  window.onload = function(){
    document.getElementById("op3").classList.add('active');
  }
</script>  




@endsection
