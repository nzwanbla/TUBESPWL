<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Berita</title>
    
    @vite('public/css/dashboard.css') 
    @vite('public/css/tailwind.css')
    {{--  --}}
</head>
<body class="bg-gray-100">
  @include('components.footer')
  @include('components.usermanagement')
  
<p class ="p-4 text-2xl text-center mt-4 mb-12">User Management</p>

  <div id="table-container">

    <table class="divide-y divide-gray-200" id="table-dashboard">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
            E-Mail
          </th>
          <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
            Nama
          </th>
          <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
            Tanggal Dibuat
          </th>
          <th scope="col" class="px-6 py-3 text-xs font-medium text-gray-500 uppercase tracking-wider">
            Jumlah Berita yang di Posting
          </th>
          <th scope="col" class="px-6 py-3 text-right">
            <span class="sr-only">Hapus User</span>
          </th>
        </tr>
      </thead>
      @foreach ($user as $users)
        <tbody class="bg-white divide-y divide-gray-200" penulis="" status="">
          <tr class="hover:bg-gray-100">
            <td class="px-6 py-4 whitespace-normal">
              <div class="flex items-center">
                <div class="ml-4">
                  <div class="text-sm font-medium text-gray-900">
                  {{ $users->email }}
                  </div>
                </div>
              </div>
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-center">
              <div class="text-sm text-gray-900"></div>
              {{ $users->name }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
            {{ $users->created_at }}
            </td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
              {{ $users->jumlah_berita}}  
            </td>
            <td class="px-6 py-4 text-right whitespace-nowrap">
            <form action="{{ route('user.delete', $users->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus user ini?')">Hapus</button>
            </form>
            </td>
          </tr>
        </tbody>
        @endforeach

    </table>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="{{ url('/js/dashboard.js') }}"></script>

</body>

</html>
