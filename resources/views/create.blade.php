<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSIGHT - Create</title>
    @vite('public/css/dashboard.css') 
    @vite('public/css/tailwind.css')
    {{--  --}}

    <link rel="stylesheet" href="{{ url('/css/create.css') }}" />
</head>
<body class="bg-gray-100">

    @include('components.footer')
    @include('components.user-navbar')

    <div class="slider-container">
        <div class="slider">
            <input type="radio" name="slider" id="create" checked>
            <input type="radio" name="slider" id="edit" onclick="location.href='{{ route('dashboard') }}'">
            <div class="slider-button"></div>
            <label for="create" class="slider-option">Create</label>
            <label for="edit" class="slider-option">Dashboard</label>
        </div>
    </div>

    <div class="container mx-auto">
        <label for="user_name">User</label>
        <input type="text" id="user_name" name="user" value="{{Auth::user()?->name}}"disabled>
        {{-- method="POST" action="{{ route('create.store') }}"  --}}
        <form id="create-form" method="POST" action="{{ route('create.store') }}" class="mt-8" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @csrf
            <div class="horizontal-group" >
                <div class="form-group" id="judul">
                    <label for="judul_berita">Judul Berita</label>
                    <input type="text" id="judul_berita" name="judul_berita">
                </div> 

                <div class="form-group" id="jenis">
                    <label for="jenis_berita">Jenis Berita</label>
                    <select id="jenis_berita" name="jenis_berita">
                        @foreach ($types as $type)
                        <option value="{{ $type->jenis_berita }}">{{ $type->jenis_berita }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group" id="judul">
                    <label for="judul_berita">Gambar Berita</label>
                    <input type="file" class="file-input file-input-bordered w-full max-w-xs" name="fileimage" />
            </div>
            <div class="form-group">
                <label for="judul1">Judul 1</label>
                <input type="text" id="judul1" name="judul1">
            </div>
    
            <div class="form-group">
                <label for="isi1">Isi 1</label>
                <textarea id="isi1" name="isi1" rows="3"></textarea>
            </div>
    
            <div class="form-group">
                <label for="judul2">Judul 2</label>
                <input type="text" id="judul2" name="judul2">
            </div>
    
            <div class="form-group">
                <label for="isi2">Isi 2</label>
                <textarea id="isi2" name="isi2" rows="3"></textarea>
            </div>
    
            <div class="form-group">
                <label for="isi2">Judul 3</label>
                <input type="text" id="judul3" name="judul3">
            </div>
    
            <div class="form-group">
                <label for="isi3">Isi 3</label>
                <textarea id="isi3" name="isi3" rows="3"></textarea>
            </div>

            <input type="hidden" id="user_id" name="user_id" disabled>

            <button id="submit" type="submit">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
    $(document).ready(function() {
        @if(session('success'))
            alert("{{ session('success') }}");
        @endif
    });
</script>

</body>
</html>
