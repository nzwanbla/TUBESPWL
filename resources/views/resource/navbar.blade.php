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
        .navbar a, .dropdown {
            float: left;
            display: block;
            color: white;
            text-align: center;
            padding: 20px 16px;
            text-decoration: none;
            margin-left: 20px; 
        }
        .navbar a:hover, .dropdown:hover .dropbtn {
            background-color: #ddd;
            color: black;
        }
        .dropdown {
            overflow: hidden;
        }
        .dropdown .dropbtn {
            font-size: 16px;
            border: none;
            outline: none;
            color: white;
            /* padding: 14px 16px; */
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }
        .dropdown:hover .dropdown-content {
            display: block;
        }
        .form-group {
            margin-bottom: 20px;
            margin-left: 10%;
            margin-right: 10%   
        }
        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .form-row .form-group {
            flex: 1;
            margin-right: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], textarea, select {
            width: 90%;
            padding: 8px;
            box-sizing: border-box;
            max-width: 90%;
        }
        textarea {
            resize: both; /* Allows both horizontal and vertical resizing */
            overflow: auto; /* Adds scrollbars when needed */
            max-width: 90%; /* Constrains resizing to fit within the parent container */
        }
        #judul_berita {
            resize: none;
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
            <div class="dropdown">
                <button class="dropbtn">Dropdown 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="#link1">Link 1</a>
                    <a href="#link2">Link 2</a>
                    <a href="#link3">Link 3</a>
                </div>
            </div> 
        </div>
    </div>

    <form method="POST" action="{{ route('news.store') }}">
        <!-- CSRF Token -->
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label for="judul_berita">Judul Berita</label>
            <input type="text" id="judul_berita" name="judul_berita">
        </div>
        
        <div class="form-group">
            <label for="jenis_berita">Jenis Berita</label>
            <select id="jenis_berita" name="jenis_berita">
                <option value="option1">Option 1</option>
                <option value="option2">Option 2</option>
                <option value="option3">Option 3</option>
            </select>
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
            <label for="judul3">Judul 3</label>
            <input type="text" id="judul3" name="judul3">
        </div>

        <div class="form-group">
            <label for="isi3">Isi 3</label>
            <textarea id="isi3" name="isi3" rows="3"></textarea>
        </div>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
