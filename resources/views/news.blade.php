<!DOCTYPE html>

<html lang="zxx">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>NEWSIGHT</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ url('/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/owl.theme.default.min.css') }}"/>
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="https://demo.bootstrapdash.com/world-vision/assets/images/favicon.png"
    />
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('/css/news.css') }}" />
    <!-- endinject -->
  </head>

  <body
    data-new-gr-c-s-check-loaded="14.1172.0"
    data-gr-ext-installed=""
    style=""
  >
    <div class="container-scroller">
      <div class="main-panel">
        @include('components.guest-navbar')
        <div class="container">
          <div class="news-content">
            <div class="row">
              <div class="col-lg-9">
                <h1 class="web-title">{{ $news->judul_berita }} -  {{ $news->date_created }}</h1>
                <br>
                <div class="image-holder">
                  <div class="position-relative">
                    <img
                      src="{{ url('/images/star-magazine-14.jpg ') }}"
                      class="img-fluid"
                    />
                  </div>
                </div>
                <br>
                <hr>

                <div class="news-content">
                  <h1 class="web-title">{{ $news->judul_berita }}</h1>

                  <h1 class="judul-paragraf">{{ $news->judul1 }}</h1>
                  <h1 class="isi-paragraf">{{ $news->isi1 }}</h1>
  
                  <h1 class="judul-paragraf">{{ $news->judul2 }} </h1>
                  <h1 class="isi-paragraf">{{ $news->isi2 }}</h1>
  
                  <h1 class="judul-paragraf">{{ $news->judul3 }}</h1>
                  <h1 class="isi-paragraf">{{ $news->isi3 }}</h1>
                </div>

              </div>
              <div class="col-lg-3">
                <div class="position-relative mb-3">
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="d-flex position-relative float-left">
                      <h3 class="section-title">Latest News</h3>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        {{ $recent1->judul_berita }}
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        {{ $recent2->judul_berita }}
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">                        
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        {{ $recent3->judul_berita }}
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="pt-4">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        {{ $recent4->judul_berita }}
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                      </p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                  <img
                    src="{{ url('/images/logo.svg ') }}"
                    class="footer-logo"
                    alt=""
                  />


                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div
                  class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                >
                  <ul class="footer-horizontal-menu">
                    <li>
                      <a
                        href=""
                        >Terms of Use.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >Privacy Policy.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >Accessibility &amp; CC.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >AdChoices.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >Advertise with us Transcripts.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >License.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >Sitemap</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script  src="{{ url('/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script  src="{{ url('/js/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script  src="{{ url('/js/demo.js') }}"></script>
    <!-- End custom js for this page-->
  </body>

</html>
