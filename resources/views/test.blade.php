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
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            padding: 20px;
        }
        .search-container {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            margin-bottom: 20px;
            width: 100%;
            max-width: 600px;
        }
        input[type="text"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            padding: 10px 20px;
            border: none;
            background-color: #5cb85c;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        table {
            width: 100%;
            max-width: 600px;
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

<div class="search-container">
    <h1>Search Page</h1>
    <form action="/search" method="GET">
        <input type="text" name="query" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
</div>

<table>
    <thead>
        <tr>
            <th>Suggested Queries</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Weather forecast</td>
        </tr>
        <tr>
            <td>News today</td>
        </tr>
        <tr>
            <td>Best restaurants nearby</td>
        </tr>
        <tr>
            <td>Movie showtimes</td>
        </tr>
        <tr>
            <td>Latest tech news</td>
        </tr>
    </tbody>
</table>

</body>
</html>
