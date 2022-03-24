@extends('layout')
@section('titulo','Contacto')
@section('contenido')

<!-- Contact Form -->
<section class="container g-py-100">
    <div class="row g-mb-20">
      <div class="col-lg-6 g-mb-50">
        <!-- Heading -->
        <h2 class="h2 g-color-black g-font-weight-600 mb-2">{{ __('messages.page_contacto_title') }}</h2>
        <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
        <p class="lead mb-0">{{ __('messages.page_contacto_subtitle') }}</p>
        <!-- End Heading -->
      </div>
      <div class="col-lg-3 align-self-end ml-auto g-mb-50">
      </div>

      <div class="col-lg-3 align-self-end ml-auto g-mb-50">
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-md-5">
        <form action="{{route('contact.store')}}" method="POST">
            @csrf
            <div class="g-mb-20">
              <label class="g-color-gray-dark-v2 g-font-size-13">{{ __('messages.page_contacto_label_firstname') }}</label>
              <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15  {{ $errors->has('name') ? 'error' : '' }}" value="{{ old('name') }}" type="text" name="name" id="name" placeholder="" required>
              @if ($errors->has('name'))
              <div class="error">
                  {{ $errors->first('name') }}
              </div>
              @endif
            </div>

          <div class="g-mb-20">
            <label class="g-color-gray-dark-v2 g-font-size-13">{{ __('messages.page_contacto_label_email') }}</label>
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15 {{ $errors->has('email') ? 'error' : '' }}" value="{{ old('email') }}" type="email" name="email" id="email" placeholder="" required>
            @if ($errors->has('email'))
              <div class="error">
                  {{ $errors->first('email') }}
              </div>
            @endif
          </div>

          <div class="g-mb-20">
            <label class="g-color-gray-dark-v2 g-font-size-13">{{ __('messages.page_contacto_label_number') }}</label>
            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus rounded-3 g-py-13 g-px-15 {{ $errors->has('phone') ? 'error' : '' }}" value="{{ old('phone') }}" type="tel" id="phone" name="phone" placeholder="" required>
            @if ($errors->has('phone'))
              <div class="error">
                  {{ $errors->first('phone') }}
              </div>
            @endif
         </div>

        
      </div>
      <div class="col-md-7">
        <div class="g-mb-40">
          <label class="g-color-gray-dark-v2 g-font-size-13">{{ __('messages.page_contacto_label_message') }}</label>
          <textarea class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--focus g-resize-none rounded-3 g-py-13 g-px-15 {{ $errors->has('message') ? 'error' : '' }}" rows="12" placeholder="" name="message" id="message" required>{{ old('message') }}</textarea>
          @if ($errors->has('message'))
              <div class="error">
                  {{ $errors->first('message') }}
              </div>
          @endif
        </div>

        <div class="text-right">
          <button class="btn btn-md u-btn-outline-blue g-font-weight-600 g-font-size-13 text-uppercase rounded-3 g-py-12 g-px-35" type="submit" role="button">{{ __('messages.page_contacto_label_send') }}</button>
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