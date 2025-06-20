<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Account</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: #f4f6f8;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    form {
      background-color: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 400px;
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      color: #333;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      transition: border-color 0.3s;
    }

    input:focus {
      border-color: #007bff;
      outline: none;
    }

    .error {
      color: red;
      font-size: 0.9em;
      margin-bottom: 10px;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      border: none;
      color: white;
      font-weight: bold;
      border-radius: 6px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #0056b3;
    }

    .login-link {
      display: block;
      text-align: center;
      margin-top: 15px;
      color: #555;
    }

    .login-link a {
      color: #007bff;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <form action="{{ route('register') }}" method="POST">
    <h1>User Account</h1>
    @csrf

    <!-- Username -->
    <label for="names">Username</label>
    <input type="text" name="names" id="names">
    @error('names') <div class="error">{{ $message }}</div> @enderror

    <!-- Email -->
    <label for="email">Email</label>
    <input type="email" name="email" id="email">
    @error('email') <div class="error">{{ $message }}</div> @enderror

    <!-- Password -->
    <label for="password">Password</label>
    <input type="password" name="password" id="password">
    @error('password') <div class="error">{{ $message }}</div> @enderror

    <button type="submit">Register</button>

    <div class="login-link">
      Already have an account? <a href="/Login">Login</a>
    </div>
  </form>
</body>
</html>
