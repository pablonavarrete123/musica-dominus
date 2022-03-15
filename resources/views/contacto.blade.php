@extends('layout')
@section('titulo','Contacto')
@section('contenido')

<!-- Contact Form -->
<section class="container g-py-100">
    <div class="row g-mb-20">
      <div class="col-lg-6 g-mb-50">
        <!-- Heading -->
        <h2 class="h1 g-color-black g-font-weight-700 mb-4">{{ __('messages.page_contacto_title') }}</h2>
        <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
        <p class="g-font-size-18 mb-0">{{ __('messages.page_contacto_subtitle') }}</p>
        <!-- End Heading -->
      </div>
      <div class="col-lg-3 align-self-end ml-auto g-mb-50">
        <div class="media">
          <div class="d-flex align-self-center">
            <span class="u-icon-v2 u-icon-size--sm g-color-white g-bg-primary rounded-circle mr-3">
                <i class="g-font-size-16 icon-communication-033 u-line-icon-pro"></i>
              </span>
          </div>
          <div class="media-body align-self-center">
            <h3 class="h6 g-color-black g-font-weight-700 text-uppercase mb-0">Phone Number</h3>
            <p class="mb-0">+32 (0) 333 444 555</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 align-self-end ml-auto g-mb-50">
        <div class="media">
          <div class="d-flex align-self-center">
            <span class="u-icon-v2 u-icon-size--sm g-color-white g-bg-primary rounded-circle mr-3">
                <i class="g-font-size-16 icon-communication-062 u-line-icon-pro"></i>
              </span>
          </div>
          <div class="media-body align-self-center">
            <h3 class="h6 g-color-black g-font-weight-700 text-uppercase mb-0">Email Address</h3>
            <p class="mb-0">htmlstream@support.com</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-5">
        <form action="{{route('contact.store')}}" method="POST">
            @csrf
          <div class="row">
            <div class="col-md-6 form-group g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">{{ __('messages.page_contacto_label_firstname') }}</label>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" name="name" id="name" placeholder="John">
              @error('name')
                  <p class="text-danger col-lg-8">{{$message}}</p>
             @enderror
            </div>

            <div class="col-md-6 form-group g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">{{ __('messages.page_contacto_label_lastname') }}</label>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="text" name="lastname" id="lastname" placeholder="Doe">
              @error('lastname')
              <p class="text-danger col-lg-8">{{$message}}</p>
              @enderror
            </div>
          </div>

          <div class="g-mb-20">
            <label class="g-color-gray-dark-v2 g-font-size-13">{{ __('messages.page_contacto_label_email') }}</label>
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="email" name="email" id="email" placeholder="johndoe@gmail.com">
            @error('email')
            <p class="text-danger col-lg-8">{{$message}}</p>
            @enderror
          </div>

          <div class="g-mb-20">
            <label class="g-color-gray-dark-v2 g-font-size-13">{{ __('messages.page_contacto_label_number') }}</label>
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15" type="tel" id="phone" name="phone" placeholder="+ (01) 222 33 44">
            @error('number')
            <p class="text-danger col-lg-8">{{$message}}</p>
            @enderror 
         </div>

        
      </div>
      <div class="col-md-7">
        <div class="g-mb-40">
          <label class="g-color-gray-dark-v2 g-font-size-13">{{ __('messages.page_contacto_label_message') }}</label>
          <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15" rows="12" placeholder="" name="message" id="message"></textarea>
          @error('message')
            <p class="text-danger col-lg-8">{{$message}}</p>
         @enderror
        </div>

        <div class="text-right">
          <button class="btn u-btn-primary g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" type="submit" role="button">{{ __('messages.page_contacto_label_send') }}</button>
        </div>
      </div>
    </form>
    </div>
  </section>
  <!-- End Contact Form -->

    @if (session('info'))
          <script>
            alert("{{session('info')}}")
          </script>
      @endif

  <script>
    window.onload = function(){
      document.getElementById("op5").classList.add('active');
    }
  </script>  


@endsection