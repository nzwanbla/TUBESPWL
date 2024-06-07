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
    <link rel="stylesheet" href="{{ url('/css/headline.css') }}" />
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
          <div class="banner-top-thumb-wrap">
            <div class="row">
              <div id="latest" class="d-flex position-relative float-center">
                <h3 class="section-title">Headline</h3>
              </div>
              <div class="col-lg-12">
                
                <div
                  class="owl-carousel owl-theme owl-loaded owl-drag"
                  id="main-banner-carousel"
                >

                  <div class="owl-stage-outer">
                    <div
                      class="owl-stage"
                      style="
                        transform: translate3d(-2919px, 0px, 0px);
                        transition: all 2s ease 0s;
                        width: 5840px;
                      "
                    >
                      <div class="owl-item w-[730px]">
                        <div class="item">
                          <div class="carousel-content-wrapper mb-2">
                            <div class="carousel-content">
                              <h1 class="font-weight-bold">
                                <a href="{{ route('news.show', ['id' => $recent1->id]) }}">{{ $recent1->judul_berita }}</a>
                              </h1>
                              <p
                                class="text-color m-0 pt-2 d-flex align-items-center"
                              >
                              </p>
                            </div>
                            <div class="carousel-image">
                              <a href="{{ route('news.show', ['id' => $recent1->id]) }}"><img src="{{ url('/storage/') .'/'. $recent1->fileimage }}" alt="" class="w-full lg:h-[400px] sm:h-96 object-cover"/></a>

                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item w-[730px]">
                        <div class="item">
                          <div class="carousel-content-wrapper mb-2">
                            <div class="carousel-content">
                              <h1 class="font-weight-bold">
                                <a href="{{ route('news.show', ['id' => $recent2->id]) }}">{{ $recent2->judul_berita }}</a>
                              </h1>
                              <p
                                class="text-color m-0 pt-2 d-flex align-items-center"
                              >
                              </p>
                            </div>
                            <div class="carousel-image">
                              <a href="{{ route('news.show', ['id' => $recent2->id]) }}"><img src="{{ url('/storage/') .'/'. $recent2->fileimage }}" alt="" class="w-full lg:h-[400px] sm:h-96 object-cover"/></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item w-[730px]">
                        <div class="item">
                          <div class="carousel-content-wrapper mb-2">
                            <div class="carousel-content">
                              <h1 class="font-weight-bold">
                                <a href="{{ route('news.show', ['id' => $recent3->id]) }}">{{ $recent3->judul_berita }}</a>
                              </h1>
                              <p
                                class="text-color m-0 pt-2 d-flex align-items-center"
                              >
                              </p>
                            </div>
                            <div class="carousel-image">
                              <a href="{{ route('news.show', ['id' => $recent3->id]) }}"><img src="{{ url('/storage/') .'/'. $recent3->fileimage }}" alt="" class="w-full lg:h-[400px] sm:h-96 object-cover"/></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item w-[730px]">
                        <div class="item">
                          <div class="carousel-content-wrapper mb-2">
                            <div class="carousel-content">
                              <h1 class="font-weight-bold">
                                <a href="{{ route('news.show', ['id' => $recent4->id]) }}">{{ $recent4->judul_berita }}</a>
                              </h1>
                                <p
                                class="text-color m-0 pt-2 d-flex align-items-center"
                              >
                              </p>
                            </div>
                            <div class="carousel-image">
                              <a href="{{ route('news.show', ['id' => $recent4->id]) }}"><img src="{{ url('/storage/') .'/'. $recent4->fileimage }}" alt="" class="w-full lg:h-[400px] sm:h-96 object-cover"/></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev">
                      <span aria-label="Previous">‹</span></button
                    ><button type="button" role="presentation" class="owl-next">
                      <span aria-label="Next">›</span>
                    </button>
                  </div>
                  <div class="owl-dots">
                    <button role="button" class="owl-dot"><span></span></button
                    ><button role="button" class="owl-dot"><span></span></button
                    ><button role="button" class="owl-dot">
                      <span></span></button
                    ><button role="button" class="owl-dot"><span></span></button>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div id="International" class="d-flex position-relative float-left">
                  <h3 id = "International"class="section-title">Internasional</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                <a
                  href="{{ route('news.show', ['id' => $international1->id]) }}">
                  <img
                    src="{{ url('/storage/') .'/'. $international1->fileimage }}"
                    class="img-fluid w-full h-64 object-cover" 
                    alt="world-news"
                  /></a>
                  <span class="thumb-title">INTERNASIONAL</span>
                </div>
                <h5 class="font-weight-bold mt-3"><a
                  href="{{ route('news.show', ['id' => $international1->id]) }}"
                  class="font-weight-bold text-dark pt-2"
                  >
                  {{$international1->judul_berita}}</a
                >
                </h5>
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                <a
                  href="{{ route('news.show', ['id' => $international2->id]) }}"
                  class="font-weight-bold text-dark pt-2"
                  >
                  <img
                  src="{{ url('/storage/') .'/'. $international2->fileimage }}"
                    class="img-fluid w-full h-64 object-cover"
                    alt="world-news" 
                  /></a>
                  <span class="thumb-title">INTERNASIONAL</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                <a
                  href="{{ route('news.show', ['id' => $international2->id]) }}"
                  class="font-weight-bold text-dark pt-2"
                  >
                  {{$international2->judul_berita}}</a>
                </h5>
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <a
                  href="{{ route('news.show', ['id' => $international3->id]) }}"
                  class="font-weight-bold text-dark pt-2"
                  >
                  <img
                  src="{{ url('/storage/') .'/'. $international3->fileimage }}"
                    class="img-fluid w-full h-64 object-cover"
                    alt="world-news"
                  />
                  <span class="thumb-title">INTERNASIONAL</span>
                </div>
                <h5 class="font-weight-bold mt-3"><a
                  href="{{ route('news.show', ['id' => $international3->id]) }}"
                  class="font-weight-bold text-dark pt-2"
                  >
                  {{$international3->judul_berita}}</a>
                </h5>
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                <a
                href="{{ route('news.show', ['id' => $international4->id]) }}"
                  class="font-weight-bold text-dark pt-2"
                  >
                  <img
                  src="{{ url('/storage/') .'/'. $international4->fileimage }}"
                    class="img-fluid w-full h-64 object-cover"
                    alt="world-news"
                  /></a>
                  <span class="thumb-title">INTERNASIONAL</span>
                </div>
                <h5 class="font-weight-bold mt-3"><a
                href="{{ route('news.show', ['id' => $international4->id]) }}"
                  class="font-weight-bold text-dark pt-2"
                  >
                  {{$international4->judul_berita}}</a>
                </h5>
              </div>
            </div>
          </div>
          <div class="editors-news">
            <div class="row">
              <div class="col-lg-3">
                <div id="sport" class="d-flex position-relative float-left">
                  <h3 class="section-title">Sport News</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                <a href="{{ route('news.show', ['id' => $sport1->id]) }}">
                <img
                  src="{{ url('/storage/') .'/'. $sport1->fileimage }}"
                    class="img-fluid"
                    alt="world-news"
                  /></a>
                  <span class="thumb-title">SPORT</span>
                </div>
                <h1 class="font-weight-600 mt-3">
                  <a href="{{ route('news.show', ['id' => $sport1->id]) }}">{{$sport1->judul_berita}}</a>
                </h1>
              </div>
              <div class="col-lg-6 mb-5 mb-sm-2">
                <div class="row">
                  <div class="col-sm-6 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <a href="{{ route('news.show', ['id' => $sport2->id]) }}">
                      <img
                      src="{{ url('/storage/') .'/'. $sport2->fileimage }}"
                        class="img-fluid w-full h-64 object-cover"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">SPORT</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ route('news.show', ['id' => $sport2->id]) }}">{{$sport2->judul_berita}}</a>
                    </h5>
                  </div>
                  <div class="col-sm-6 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <a href="{{ route('news.show', ['id' => $sport3->id]) }}">
                      <img
                      src="{{ url('/storage/') .'/'. $sport3->fileimage }}"
                        class="img-fluid w-full h-64 object-cover"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">SPORT</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ route('news.show', ['id' => $sport3->id]) }}">{{$sport3->judul_berita}}</a>
                    </h5>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-6 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <a href="{{ route('news.show', ['id' => $sport4->id]) }}">
                      <img
                      src="{{ url('/storage/') .'/'. $sport4->fileimage }}"
                        class="img-fluid w-full h-64 object-cover"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">SPORT</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ route('news.show', ['id' => $sport4->id]) }}">{{$sport4->judul_berita}}</a>
                    </h5>
                  </div>
                  <div class="col-sm-6">
                    <div class="position-relative image-hover">
                    <a href="{{ route('news.show', ['id' => $sport5->id]) }}">
                      <img
                      src="{{ url('/storage/') .'/'. $sport5->fileimage }}"
                        class="img-fluid w-full h-64 object-cover"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">SPORT</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ route('news.show', ['id' => $sport5->id]) }}">{{$sport5->judul_berita}}</a>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="popular-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Other news</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <a href="{{ route('news.show', ['id' => $additionalRecent1->id]) }}">
                      <img
                      src="{{ url('/storage/') .'/'. $additionalRecent1->fileimage }}"
                        class="img-fluid w-full h-64 object-cover"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">{{$additionalRecent1->jenis_berita}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ route('news.show', ['id' => $additionalRecent1->id]) }}">{{$additionalRecent1->judul_berita}}</a>
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <a href="{{ route('news.show', ['id' => $additionalRecent2->id]) }}">
                      <img
                      src="{{ url('/storage/') .'/'. $additionalRecent2->fileimage }}"
                        class="img-fluid w-full h-64 object-cover"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">{{$additionalRecent2->jenis_berita}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ route('news.show', ['id' => $additionalRecent2->id]) }}">{{$additionalRecent2->judul_berita}}</a>
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <a href="{{ route('news.show', ['id' => $additionalRecent3->id]) }}">
                      <img
                      src="{{ url('/storage/') .'/'. $additionalRecent3->fileimage }}"
                        class="img-fluid w-full h-64 object-cover"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">{{$additionalRecent3->jenis_berita}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ route('news.show', ['id' => $additionalRecent3->id]) }}">{{$additionalRecent3->judul_berita}}</a>
                    </h5>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <a href="{{ route('news.show', ['id' => $additionalRecent4->id]) }}">
                      <img
                      src="{{ url('/storage/') .'/'. $additionalRecent4->fileimage }}"
                        class="img-fluid w-full h-64 object-cover"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">{{$additionalRecent4->jenis_berita}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ route('news.show', ['id' => $additionalRecent4->id]) }}">{{$additionalRecent4->judul_berita}}</a>
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <a href="{{ route('news.show', ['id' => $additionalRecent5->id]) }}">
                      <img
                      src="{{ url('/storage/') .'/'. $additionalRecent5->fileimage }}"
                        class="img-fluid w-full h-64 object-cover"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">{{$additionalRecent5->jenis_berita}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ route('news.show', ['id' => $additionalRecent5->id]) }}">{{$additionalRecent5->judul_berita}}</a>
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                    <a href="{{ route('news.show', ['id' => $additionalRecent6->id]) }}">
                      <img
                      src="{{ url('/storage/') .'/'. $additionalRecent6->fileimage }}"
                        class="img-fluid w-full h-64 object-cover"
                        alt="world-news"
                      /></a>
                      <span class="thumb-title">{{$additionalRecent6->jenis_berita}}</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      <a href="{{ route('news.show', ['id' => $additionalRecent6->id]) }}">{{$additionalRecent6->judul_berita}}</a>
                    </h5>
                  </div>
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
                      <h5  class="font-weight-600 mt-0 mb-0">
                        <a href="{{ route('news.show', ['id' => $recent1->id]) }}">{{ $recent1->judul_berita }}</a>
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        <a href="{{ route('news.show', ['id' => $recent2->id]) }}">{{ $recent2->judul_berita }}</a>
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">                        
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        <a href="{{ route('news.show', ['id' => $recent3->id]) }}">{{ $recent3->judul_berita }}</a>
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="pt-4">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        <a href="{{ route('news.show', ['id' => $recent4->id]) }}">{{ $recent4->judul_berita }}</a>
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
