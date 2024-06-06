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
            <input type="radio" name="slider" id="create" onclick="location.href='{{ route('create') }}'">
            <input type="radio" name="slider" id="edit" checked>
            <div class="slider-button"></div>
            <label for="create" class="slider-option">Create</label>
            <label for="edit" class="slider-option">Edit</label>
        </div>
    </div>

 
    <form id="editor-form" method="POST" action="{{ route('edit.update', ['id' => $selectedNews->id] ) }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" id="form-method" value="POST">
<p class="mb-8 font-bold text-md">Penulis : {{$selecteduser}}</p>
        <div class="horizontal-group" >
            <div class="form-group" id="judul">
                <label for="judul_berita">Judul Berita</label>
                <input type="text" @if(auth()->user()->moderator == 1) disabled @endif class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" id="judul_berita" name="judul_berita" value="{{ $selectedNews->judul_berita ?? '' }}" >
            </div>

            <div class="form-group" id="jenis">
                <label for="jenis_berita">Jenis Berita</label>
                    <select id="jenis_berita" @if(auth()->user()->moderator == 1) disabled @endif class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" name="jenis_berita">
                        @foreach ($types as $type)
                        <option value="{{ $type->jenis_berita }}" 
                            {{ $type->jenis_berita === $selectedNews->jenis_berita ? 'selected' : '' }}>{{ $type->jenis_berita }}</option>
                        @endforeach
                    </select>
            </div>
            
        </div>
        <div class="form-group" id="judul">
                    <label for="judul_berita">Gambar Berita</label>
                    <input type="file" @if(auth()->user()->moderator == 1) disabled @endif class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" class="file-input file-input-bordered w-full max-w-xs" name="fileimage" />
            </div>

        <div class="form-group">
            <label for="judul1">Judul 1</label>
            <input type="text"@if(auth()->user()->moderator == 1) disabled @endif class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none"  id="judul1" name="judul1" value="{{ $selectedNews->judul1 ?? '' }}"  >
        </div>

        <div class="form-group">
            <label for="isi1">Isi 1</label>
            <textarea id="isi1" @if(auth()->user()->moderator == 1) disabled @endif class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" name="isi1" rows="3" >{{ $selectedNews->isi1 ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="judul2">Judul 2</label>
            <input type="text" @if(auth()->user()->moderator == 1) disabled @endif class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" id="judul2" name="judul2" value="{{ $selectedNews->judul2 ?? '' }}">
        </div>

        <div class="form-group">
            <label for="isi2">Isi 2</label>
            <textarea id="isi2" @if(auth()->user()->moderator == 1) disabled @endif class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" name="isi2" rows="3" >{{ $selectedNews->isi2 ?? '' }}</textarea>
        </div>

        <div class="form-group">
            <label for="judul3">Judul 3</label>
            <input type="text" @if(auth()->user()->moderator == 1) disabled @endif class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" id="judul3" name="judul3" value="{{ $selectedNews->judul3 ?? '' }}">
        </div>

        <div class="form-group">
            <label for="isi3">Isi 3</label>
            <textarea id="isi3" @if(auth()->user()->moderator == 1) disabled @endif class="disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" name="isi3" rows="3" >{{ $selectedNews->isi3 ?? '' }}</textarea>
        </div>


        <div class="form-group" id="status-group">
            <label for="status">Status Berita</label>
            <select id="status" name="status">
                <option value="reject"                             
                {{ 'reject' === $selectedNews->status ? 'selected' : '' }}>Reject</option>
                <option value="accept" 
                {{ 'accept' === $selectedNews->status ? 'selected' : '' }}>Accept</option>
            </select>
        </div>

        <div id="buttons">
            <button id="post" type="button" onclick="submitForm('post')">Post</button>
            @if(auth()->user()->moderator !== 1)<button id="delete" type="button" onclick="submitForm('delete')">Delete</button>@endif         
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
    @if(session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
@endif
    {{-- <script src="{{ url('/js/edit.js') }}"></script> --}}
</body>
</html>
