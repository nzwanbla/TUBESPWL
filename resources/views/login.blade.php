<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <style>
    body {
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-image: url("path/to/your/background.jpg");  /* Replace with your background image path */
      background-size: cover;
      background-position: center;
    }

    .login-form {
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      width: 400px;  /* Set a width for the form */
      transition: all 0.3s ease-in-out;  /* Add smooth transition effects */
    }

    .login-form:hover {
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);  /* Enhance shadow on hover */
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;  /* Set a color for the heading */
    }

    label {
      display: block;
      margin-bottom: 5px;
      color: #333;  /* Set a color for labels */
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 15px;
      transition: all 0.3s ease-in-out;  /* Add transition effects for inputs */
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
      outline: none;  /* Remove default outline on focus */
      border-color: #4CAF50;  /* Change border color on focus */
    }

    button[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      transition: all 0.3s ease-in-out;
    }

    button[type="submit"]:hover {
      opacity: 0.8;
    }

    .links {
      text-align: center;
      margin-top: 10px;
    }

    .links a {
      color: #4CAF50;
      text-decoration: none;
      transition: all 0.3s ease-in-out;
    }

    .links a:hover {
      color: #2e8b57;  /* Change link color on hover */
    }
  </style>
</head>
<body>
  <div class="login-form">
    <h1>Login</h1>
    <form method="POST" action="{{ route('login.run') }}" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <div class="links">
      <a href="#">Forgot Password?</a>
    </div>
  </div>
</body>
</html>
