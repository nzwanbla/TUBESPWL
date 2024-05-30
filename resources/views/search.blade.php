<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Berita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #333;
            overflow: hidden;
            
        }
        .links{
            margin-left: 20%
        }
        .navbar .title {
            float: left;
            color: white;
            text-align: center;
            padding: 20px 20px;
            text-decoration: none;
            font-size: 18px;
        }
        .navbar a{
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 20px 16px;
            text-decoration: none;
            margin-left: 20px; 
        }
        .navbar a:hover{
            background-color: #ddd;
            color: black;
        }

        .slider-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100px;
        }

        .slider {
            position: relative;
            width: 200px;
            height: 50px;
            background-color: #ddd;
            border-radius: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .slider input {
            display: none;
        }

        .slider-option {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 50%;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
            transition: color 0.3s;
        }

        #edit:checked ~ .slider-button {
            transform: translateX(100%);
        }

        .slider-button {
            position: absolute;
            top: 5px;
            left: 5px;
            width: 90px;
            height: 40px;
            background-color: #007bff;
            border-radius: 20px;
            transition: transform 0.3s ease-in-out;
        }

        #edit:checked ~ .slider-option[for="create"] {
            color: #666;
        }

        #edit:checked ~ .slider-option[for="edit"] {
            color: #fff;
        }

        #edit:checked ~ .slider-button {
            background-color: #28a745;
        }

        .slider-option[for="create"] {
            left: 5px;
        }

        .slider-option[for="edit"] {
            right: 5px;
        }
        .horizontal-group {
            display: flex;
            gap: 4%; 
        }

        #editor-form{
            margin-top: 50px;
            margin-left: 10%;
            margin-right: 10%;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .form-row .form-group {
            flex: 1;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], textarea, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
            max-width: 100%;
        }



        
        textarea {
            resize: both; 
            overflow: auto; 
            max-width: 100%;  
        }
        #judul, #jenis{
            min-width: 48%;
            margin-left: 0;
            margin-right: 0;
        }


        #search{
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 50px;
            display: block;
            padding: 10px 20px; /* Add padding for space inside the button */
            font-size: 16px; /* Increase font size for better readability */
            font-weight: bold; /* Make the text bold */
            color: #fff; /* White text color */
            background-color: #007bff; /* Blue background color */
            border: none; /* Remove default border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s, transform 0.3s; /* Smooth transitions */
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="title">Buat Berita Anda!</div>
        <div class="links">
            <a href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>      
        </div>
    </div>
    
    <div class="slider-container">
        <div class="slider">
            <input type="radio" name="slider" id="create" onclick="location.href='{{ route('create.show') }}'">
            <input type="radio" name="slider" id="edit" checked>
            <div class="slider-button"></div>
            <label for="create" class="slider-option">Create</label>
            <label for="edit" class="slider-option">Edit</label>
        </div>
    </div>

 
    <form id="editor-form" method="POST" action="{{ route('search.run') }}">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="horizontal-group" >
            <div class="form-group" id="judul">
                <label for="judul_berita">Judul Berita</label>
                <select id="judul_berita" name="id">
                    @foreach ($news as $new)
                    <option value="{{ $new->id }}">  {{ $new->judul_berita }}   </option>
                    @endforeach
                </select>
            </div>

        <button id="search" type="search">Search</button>
    </form>

</body>

</html>
