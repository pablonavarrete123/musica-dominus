<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Title -->
  <title>@yield('titulo') | Musica Dominus</title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="../../favicon.ico">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A400%2C300%2C500%2C600%2C700%7CPlayfair+Display%7CRoboto%7CRaleway%7CSpectral%7CRubik">
  <!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Global Icons -->
  <link rel="stylesheet" href="assets/vendor/icon-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendor/icon-line/css/simple-line-icons.css">
  <link rel="stylesheet" href="assets/vendor/icon-etlinefont/style.css">
  <link rel="stylesheet" href="assets/vendor/icon-line-pro/style.css">
  <link rel="stylesheet" href="assets/vendor/icon-hs/style.css">
  <link rel="stylesheet" href="assets/vendor/animate.css">
  <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsparallaxer.css">
  <link rel="stylesheet" href="assets/vendor/dzsparallaxer/dzsscroller/scroller.css">
  <link rel="stylesheet" href="assets/vendor/dzsparallaxer/advancedscroller/plugin.css">
  <link rel="stylesheet" href="assets/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="assets/vendor/slick-carousel/slick/slick.css">
 <!-- <link  rel="stylesheet" href="assets/vendor/cubeportfolio-full/cubeportfolio/css/cubeportfolio.min.css"> -->
  <link rel="stylesheet" href="assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="assets/vendor/hamburgers/hamburgers.min.css">

  <!-- Revolution Slider -->
  <link rel="stylesheet" href="assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" href="assets/vendor/revolution-slider/revolution/css/settings.css">
  <link rel="stylesheet" href="assets/vendor/revolution-slider/revolution-addons/particles/css/revolution.addon.particles.css">

  <!-- CSS Unify -->
  <link rel="stylesheet" href="assets/css/unify-core.css">
  <link rel="stylesheet" href="assets/css/unify-components.css">
  <link rel="stylesheet" href="assets/css/unify-globals.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
  <main>



    <!-- Header -->
    <header id="js-header" class="u-header u-header--static--lg u-header--show-hide--lg u-header--change-appearance--lg u-shadow-v18" data-header-fix-moment="500" data-header-fix-effect="slide">
      <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10 g-py-0--lg" data-header-fix-moment-classes="u-shadow-v18">
        <nav class="js-mega-menu navbar navbar-expand-lg py-0">
          <div class="container">
            <!-- Responsive Toggle Button -->
            <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-right-0" style="top: -5px;" type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
              <span class="hamburger hamburger--slider">
            <span class="hamburger-box">
              <span class="hamburger-inner"></span>
              </span>
              </span>
            </button>
            <!-- End Responsive Toggle Button -->
            <!-- Logo -->
            <a href="/" class="navbar-brand">
              Musica-Dominus
            </a>
            <!-- End Logo -->

            <!-- Navigation -->
            <div class="collapse navbar-collapse align-items-center flex-sm-row" id="navBar">
              <ul class="navbar-nav ml-auto text-uppercase g-font-weight-600 u-main-nav-v4 u-sub-menu-v1">
                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg " id="op1">
                  <a href="/" class="nav-link">{{ __('messages.nav_home') }}
                  <span class="sr-only">(current)</span>
              </a>
                </li>
              
                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg " id="op2">
                  <a href="nosotros" class="nav-link" >{{ __('messages.nav_us') }}
                
              </a>
                </li>

                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg" id="op3">
                  <a href="escrituras" class="nav-link">{{ __('messages.nav_write') }}
                
              </a>
                </li>

                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg" id="op4">
                  <a href="galerias" class="nav-link">{{ __('messages.nav_gallery') }}
                
              </a>
                </li>
                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg" id="op5" >
                  <a href="contacto" class="nav-link">{{ __('messages.nav_contact') }}
                
              </a>
                </li>
                <li class="nav-item g-mx-2--md g-mx-5--xl g-mb-5 g-mb-0--lg" style="background: #4caf50;" id="op6">
                  <a href="donacion" class="nav-link" style="color: #fff;">{{ __('messages.nav_don') }}
                
              </a>
                </li>
              </ul>
             <!-- Right Side Of Navbar Language -->
                    <div class="dropdown">
                      <button type="button" class="btn dropdown-toggle text-uppercase g-font-weight-600" data-toggle="dropdown">
                        {{ __('messages.nav_lang') }}
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('locale/en')}}"><img src="assets/img/us.png" width="30px" height="20x">&nbsp; English</a>
                        <a class="dropdown-item" href="{{ url('locale/fr')}}"><img src="assets/img/fr.png" width="30px" height="20x">&nbsp; Français</a>
                        <a class="dropdown-item" href="{{ url('locale/es')}}"><img src="assets/img/es.png" width="30px" height="20x">&nbsp; Español</a>
                       <!--  <a class="dropdown-item" href="{{ url('locale/de')}}"><img src="assets/img/de.png" width="30px" height="20x"> Deutsch</a>
                        <a class="dropdown-item" href="{{ url('locale/pt')}}"><img src="assets/img/pt.png" width="30px" height="20x"> Português</a>-->
                      </div>
                    </div> 
            </div>
            <!-- End Navigation -->
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header -->



@yield('contenido');


    
    <!-- Call to Action -->
    <section class="g-color-white g-pa-30" style="background: #8bc34a;">
  <div class="d-md-flex justify-content-md-center text-center">
    <div class="align-self-md-center">
      <p class="lead g-font-weight-400 g-mr-20--md g-mb-15 g-mb-0--md">{{ __('messages.footer_text') }}</p>
    </div>
    <div class="align-self-md-center">
      <a class="btn btn-md u-btn-white" href="donacion">{{ __('messages.footer_button') }}</a>
    </div>
  </div>
</section>
    <!-- End Call to Action -->

    <!-- Footer -->
<footer class="container g-pt-100 g-pb-70">
  <div class="row">
    <div class="col-md-2 text-center text-md-left g-mb-30">
    


    </div>

    <div class="col-md-8 text-center g-mb-30">
      

      <!-- Footer - List -->
      <ul class="list-inline mb-5">
        <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-black g-color-primary--hover g-font-weight-500" href="index">{{ __('messages.nav_home') }}</a>
        </li>
        <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-black g-color-primary--hover g-font-weight-500" href="nosotros">{{ __('messages.nav_us') }}</a>
        </li>
        <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-black g-color-primary--hover g-font-weight-500" href="escrituras">{{ __('messages.nav_write') }}</a>
        </li>
        <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-black g-color-primary--hover g-font-weight-500" href="galerias">{{ __('messages.nav_gallery') }}</a>
        </li>
        <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-black g-color-primary--hover g-font-weight-500" href="contacto">{{ __('messages.nav_contact') }}</a>
        </li>
        <li class="list-inline-item mx-3"><a class="u-link-v5 g-color-black g-color-primary--hover g-font-weight-500" href="donacion">{{ __('messages.nav_don') }}</a>
        </li>
      </ul>
      <!-- End Footer - List -->

      <span class="d-block g-color-gray-dark-v5 g-font-size-13 mb-4">{{ __('messages.footer_copyright') }}<a href="https://www.codde.cl/" target="_blank">{{ __('messages.footer_copyright_link') }}</a></span>
    </div>

    <div class="col-md-2 text-center g-mb-30">
     
    </div>
  </div>
</footer>
<!-- End Footer -->

    <a class="js-go-to u-go-to-v1" href="#" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
      <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
  </main>

  <div class="u-outer-spaces-helper"></div>


  <!-- JS Global Compulsory -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
  <script src="assets/vendor/popper.js/popper.min.js"></script>
  <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>


  <!-- JS Implementing Plugins -->
  <script src="assets/vendor/appear.js"></script>
  <script src="assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>
  <script src="assets/vendor/dzsparallaxer/dzsscroller/scroller.js"></script>
  <script src="assets/vendor/dzsparallaxer/advancedscroller/plugin.js"></script>
  <script src="assets/vendor/fancybox/jquery.fancybox.min.js"></script>
    <!-- <script src="assets/vendor/cubeportfolio-full/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>-->

  <!-- JS Revolution Slider -->
  <script src="assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script src="assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

  <script src="assets/vendor/revolution-slider/revolution-addons/particles/js/revolution.addon.particles.min.js"></script>

  <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

  <!-- JS Unify -->
  <script src="assets/js/hs.core.js"></script>
  <script src="assets/js/components/hs.carousel.js"></script>
  <script src="assets/js/components/hs.header.js"></script>
  <script src="assets/js/helpers/hs.hamburgers.js"></script>
  <script src="assets/js/components/hs.tabs.js"></script>
  <script src="assets/js/components/hs.popup.js"></script>
  <script src="assets/js/components/hs.counter.js"></script>
  <!-- <script src="assets/js/components/hs.cubeportfolio.js"></script>-->
  <script src="assets/js/components/hs.go-to.js"></script>

  <!-- JS Customization -->
  <script src="assets/js/custom.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    // initialization of slider revolution
      var tpj = jQuery,
        revapi1174;

      tpj(document).ready(function () {
        if (tpj("#rev_slider_1174_1").revolution == undefined) {
          revslider_showDoubleJqueryError("#rev_slider_1174_1");
        } else {
          revapi1174 = tpj("#rev_slider_1174_1").show().revolution({
            sliderType: "hero",
            jsFileLocation: "assets/vendor/revolution-slider/revolution/js/",
            sliderLayout: "fullscreen",
            dottedOverlay: "none",
            delay: 9000,
            navigation: {},
            responsiveLevels: [1240, 1024, 778, 480],
            visibilityLevels: [1240, 1024, 778, 480],
            gridwidth: [1240, 1024, 778, 480],
            gridheight: [868, 768, 960, 720],
            lazyType: "none",
            parallax: {
              type: "scroll",
              origo: "slidercenter",
              speed: 400,
              levels: [10, 15, 20, 25, 30, 35, 40, -10, -15, -20, -25, -30, -35, -40, -45, 55]
            },
            shadow: 0,
            spinner: "off",
            autoHeight: "off",
            fullScreenAutoWidth: "off",
            fullScreenAlignForce: "off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "60px",
            disableProgressBar: "on",
            hideThumbsOnMobile: "off",
            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            debugMode: false,
            fallbacks: {
              simplifyAll: "off",
              disableFocusListener: false
            }
          });
        }
      });

      $(document).on('ready', function () {
        // initialization of carousel
        $.HSCore.components.HSCarousel.init('.js-carousel');

         // initialization of cubeportfolio
        //$.HSCore.components.HSCubeportfolio.init('.cbp');

        // initialization of tabs
        $.HSCore.components.HSTabs.init('[role="tablist"]');

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox');

        // initialization of counters
        var counters = $.HSCore.components.HSCounter.init('[class*="js-counter"]');

        // initialization of go to
        $.HSCore.components.HSGoTo.init('.js-go-to');
      });

      $(window).on('load', function () {
        // initialization of header
        $.HSCore.components.HSHeader.init($('#js-header'));
        $.HSCore.helpers.HSHamburgers.init('.hamburger');
      });

        // initialization of HSMegaMenu component
        $('.js-mega-menu').HSMegaMenu({
          event: 'hover',
          pageContainer: $('.container'),
          breakpoint: 991
        });


      $(window).on('resize', function () {
        setTimeout(function () {
          $.HSCore.components.HSTabs.init('[role="tablist"]');
        }, 200);
      });
  </script>




</body>

</html>
