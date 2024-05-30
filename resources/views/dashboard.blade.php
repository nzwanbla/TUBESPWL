<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWSIGHT - Dashboard</title>
    
    @vite('public/css/dashboard.css') 
    @vite('public/css/tailwind.css')
    {{--  --}}
</head>
<body class="p-10 bg-gray-100">
  @include('components.footer')
  @include('components.user-navbar')
  
  <div class="slider-container">
      <div class="slider">
          <input type="radio" name="slider" id="create" onclick="location.href='{{ route('create.show') }}'">
          <input type="radio" name="slider" id="edit" checked>
          <div class="slider-button"></div>
          <label for="create" class="slider-option">Create</label>
          <label for="edit" class="slider-option">Dashboard</label>
      </div>
  </div>
<br>
<br>
<br>



  <div id="table-container">

    <table class="divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
            Judul berita
          </th>
          <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
            Jenis
          </th>
          <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
            Tanggal Dibuat
          </th>
          <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
            Tanggal Diubah
          </th>
          <th scope="col" class="px-6 py-3 text-right">
            <span class="sr-only">Edit</span>
          </th>
        </tr>
      </thead>
      @foreach ($news as $new)
        <tbody class="bg-white divide-y divide-gray-200" penulis="{{ $new->user_id }}" status="{{ $new->status }}">
          <tr class="hover:bg-gray-100">
            <td class="px-6 py-4 whitespace-normal">
              <div class="flex items-center">
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">
                    {{ $new->judul_berita }}
                  </div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap">
              <div class="text-sm text-gray-900">{{ $new->jenis_berita }}</div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $new->created_at }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $new->created_at }}
            </td>
            <td class="px-6 py-4 text-right whitespace-nowrap">
              <a href="{{ route('edit.show', ['id' => $new->id]) }}" class="text-indigo-600 hover:text-indigo-900"> Edit </a>
            </td>
            
          </tr>
        </tbody>
      @endforeach
    </table>
  </div>
  
  

  
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="{{ url('/js/auth.js') }}"></script>
  <script src="{{ url('/js/dashboard.js') }}"></script>

</body>

</html>
