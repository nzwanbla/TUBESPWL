<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    @foreach ($berita as $news)
    <h1> {{ $news ['judul_berita']}} </h1>
    <h1> {{ $news ['jenis_berita']}} </h1>
    <h1> {{ $news ['judul1']}} </h1>
    <h1> {{ $news ['isi1']}} </h1>
    <h1> {{ $news ['judul2']}} </h1>
    <h1> {{ $news ['isi2']}} </h1>
    <h1> {{ $news ['judul3']}} </h1>
    <h1> {{ $news ['isi3']}} </h1>
        <hr>
    @endforeach

    
</body>
</html>
