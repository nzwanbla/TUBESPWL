<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Form</title>
    <style>
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
            margin-right: 20px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], textarea, select {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
        textarea {
            resize: both; /* Allows both horizontal and vertical resizing */
            overflow: auto; /* Adds scrollbars when needed */
            max-width: 100%; /* Constrains resizing to fit within the parent container */
        }
        #judul_berita {
            resize: none;
        }
    </style>
</head>
<body>
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
