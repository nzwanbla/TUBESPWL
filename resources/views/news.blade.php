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
    style="">
    <div class="container-scroller">
      <div class="main-panel">
        @include('components.guest-navbar')
        <div class="container">
          <div class="news-content">
            <div class="row">
              <div class="col-lg-9">
                <h1 class="web-title">{{ $news->judul_berita }}</h1>
                <h1>{{ $news->created_at }} - {{ $penulis }}</h1>
                <br>
                
                <div class="image-holder">
                  <div class="position-relative">
                    <img
                      src="{{ url('/storage/') .'/'. $news->fileimage }}"
                      class="img-fluid"
                    />
                  </div>
                </div>
                <br>
                <hr>

                <div class="news-content">

                  <h1 class="judul-paragraf">{{ $news->judul1 }}</h1>
                  <h1 class="isi-paragraf">{{ $news->isi1 }}</h1>
  
                  <h1 class="judul-paragraf">{{ $news->judul2 }} </h1>
                  <h1 class="isi-paragraf">{{ $news->isi2 }}</h1>
  
                  <h1 class="judul-paragraf">{{ $news->judul3 }}</h1>
                  <h1 class="isi-paragraf">{{ $news->isi3 }}</h1>
                  <p class="text-xl	mt-12">Komentar : </p>
                  <div class="mt-4 space-y-4">
                    @foreach($komentar as $comment)
        <div class="comment bg-white rounded-lg p-4 shadow-md relative">
            <div class="flex items-center justify-between mb-2">
                <div>
                    <strong class="text-gray-800">{{ $comment->username }}</strong>
                    <span class="text-gray-500 text-sm ml-2">{{ $comment->tanggal }}</span>
                </div>
                @if ($user = auth()->user())
                  <div class="flex space-x-2">
                  @if($comment->username == auth()->user()->name or auth()->user()->id == 1) 
                  <button type="button" class="text-blue-500 hover:text-blue-700 edit-comment-button" data-comment-id="{{ $comment->id }}">Edit</button>
                  @endif
                  @if($comment->username == auth()->user()->name or auth()->user()->id == 1 or auth()->user()->moderator == 1) 
                      <form action="{{ route('news.komentar.destroy', ['id' => $comment->id]) }}" method="POST" class="inline">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Apakah Anda yakin ingin menghapus komentar ini?')">Hapus</button>
                      </form>
                      @endif
                  </div>
                @endif
            </div>
            <p class="text-gray-700">{{ $comment->isi_komentar }}</p>
        </div>
        @endforeach
        @if ($user = auth()->user())
        <form action="{{ route('news.komentar.store', ['id' => $news->id]) }}" method="POST" class="mt-4">
          @csrf
        <div class="mb-4">
            <label for="isi_komentar" class="block text-gray-700 text-sm font-bold mb-2">Tulis Komentar:</label>
            <textarea name="isi_komentar" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Tulis komentar Anda di sini"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            Kirim Komentar
        </button>
        </form>
        @endif
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
                      <h5 class="font-weight-600 mt-0 mb-0">
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
    <script src="jquery-3.7.1.min.js"></script>
    <script>
      $(document).ready(function () {
    $('.edit-comment-button').click(function () {
        var commentId = $(this).data('comment-id');
        var $commentContainer = $(this).closest('.comment');
        var $commentParagraph = $commentContainer.find('.text-gray-700');

        $commentParagraph.hide();
        $(this).hide();

        var $textarea = $('<textarea>')
            .addClass('shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline')
            .val($commentParagraph.text());

        var $saveButton = $('<button>')
            .text('Simpan')
            .addClass('bg-blue-500 hover:bg-blue-700 text-white font-bold mt-2 py-2 px-4 rounded focus:outline-none focus:shadow-outline');

        $commentContainer.append($textarea);
        $commentContainer.append($saveButton);

        $saveButton.click(function () {
            var newCommentContent = $textarea.val();
            var commentId = $(this).closest('.comment').find('.edit-comment-button').data('comment-id');

            $.ajax({
                url: '{{ route("news.komentar.update", ":id") }}'.replace(':id', commentId),
                type: 'PUT',
                data: {
                    isi_komentar: newCommentContent,
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                $commentContainer.find('.text-gray-700').text(newCommentContent).show();

                $textarea.remove();
                $saveButton.remove();

                $commentContainer.find('.edit-comment-button').show(); 

                },
                error: function (xhr) {
                  alert('Terjadi kesalahan saat menyimpan komentar.');
                }
            });
        });
    });
});
</script>
  </body>

</html>
