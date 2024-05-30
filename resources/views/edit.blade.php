<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSIGHT - Edit</title>
    @vite('public/css/edit.css')
</head>
<body>
    @include('components.user-navbar')
    <div class="slider-container">
        <div class="slider">
            <input type="radio" name="slider" id="create" onclick="location.href='{{ route('create.show') }}'">
            <input type="radio" name="slider" id="edit" checked>
            <div class="slider-button"></div>
            <label for="create" class="slider-option">Create</label>
            <label for="edit" class="slider-option">Edit</label>
        </div>
    </div>

 
    <form id="editor-form" method="POST" action="{{ route('edit.update', ['id' => $selectedNews->id] ) }}">
        @csrf
        <input type="hidden" name="_method" id="form-method" value="POST">

        <div class="horizontal-group" >
            <div class="form-group" id="judul">
                <label for="judul_berita">Judul Berita</label>
                <input type="text" id="judul_berita" name="judul_berita" value="{{ $selectedNews->judul_berita ?? '' }}"  >
            </div>

            <div class="form-group" id="jenis">
                <label for="jenis_berita">Jenis Berita</label>
                    <select id="jenis_berita" name="jenis_berita">
                        @foreach ($types as $type)
                        <option value="{{ $type->jenis_berita }}" 
                            {{ $type->jenis_berita === $selectedNews->jenis_berita ? 'selected' : '' }}>{{ $type->jenis_berita }}</option>
                        @endforeach
                    </select>
            </div>
        </div>

        <div class="form-group">
            <label for="judul1">Judul 1</label>
            <input type="text" id="judul1" name="judul1" value="{{ $selectedNews->judul1 ?? '' }}"  >
        </div>

        <div class="form-group">
            <label for="isi1">Isi 1</label>
            <textarea id="isi1" name="isi1" rows="3" >{{ $selectedNews->isi1 ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="judul2">Judul 2</label>
            <input type="text" id="judul2" name="judul2" value="{{ $selectedNews->judul2 ?? '' }}">
        </div>

        <div class="form-group">
            <label for="isi2">Isi 2</label>
            <textarea id="isi2" name="isi2" rows="3" >{{ $selectedNews->isi2 ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="judul3">Judul 3</label>
            <input type="text" id="judul3" name="judul3" value="{{ $selectedNews->judul3 ?? '' }}">
        </div>

        <div class="form-group">
            <label for="isi3">Isi 3</label>
            <textarea id="isi3" name="isi3" rows="3" >{{ $selectedNews->isi3 ?? '' }}</textarea>
        </div>


        <div class="form-group" id="status-group">
            <label for="status">Jenis Berita</label>
            <select id="status" name="status">
                <option value="reject"                             
                {{ 'reject' === $selectedNews->status ? 'selected' : '' }}>Reject</option>
                <option value="accept" 
                {{ 'accept' === $selectedNews->status ? 'selected' : '' }}>Accept</option>
            </select>
        </div>

        <div id="buttons">
            <button id="post" type="button" onclick="submitForm('post')">Post</button>
            <button id="delete" type="button" onclick="submitForm('delete')">Delete</button>            
        </div>

    </form>
    @include('components.footer')
    <script>
        
        function submitForm(action) {
            const form = document.getElementById('editor-form');
            const methodInput = document.getElementById('form-method');
            if (action === 'post') {
                form.action = "{{ route('edit.update', ['id' => $selectedNews->id]) }}";
                methodInput.value = 'POST';
            } else if (action === 'delete') {
                form.action = "{{ route('edit.delete', ['id' => $selectedNews->id]) }}";
                methodInput.value = 'DELETE';
            }
            form.submit(); 
        }
        document.addEventListener("DOMContentLoaded", function() {
            const user_id = localStorage.getItem('user-id');
            if (user_id != "1") {
                document.getElementById('status-group').style.display = 'none';
            }
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ url('/js/auth.js') }}"></script>
    {{-- <script src="{{ url('/js/edit.js') }}"></script> --}}
</body>
</html>
