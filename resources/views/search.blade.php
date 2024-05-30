<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
           text-align: center;
            margin: 0;
        }
        .search-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
            width: 80%;
            margin-left: 10%;
            margin-top: 50px;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 20px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        table {
            width: 80%;
            margin-left: 10%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
@include('components.guest-navbar')
<div class="search-container">
    <h1>Search News</h1>
    <form action="/search" method="POST" action="{{route('search.run')}}">
        @csrf
        <input type="text" name="query" id="query" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
</div>
<table>
    <thead>
        <tr>
            <th>Hasil pencarian</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($results as $result)
        <tr>
            <td>
            <a href="{{ route('news.show', ['id' => $result->id]) }}">{{$result->judul_berita}}</a>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

</body>
</html>
