<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>User Login</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      margin: 0;
      height: 100vh;
      background: linear-gradient(135deg, #dceefb, #e0f7fa);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-container {
      background-color: #ffffff;
      padding: 40px 30px;
      border-radius: 16px;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
      width: 90%;
      max-width: 420px;
    }

    h1 {
      text-align: center;
      color: #2c3e50;
      margin-bottom: 25px;
      font-size: 28px;
    }

    label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #333;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 18px;
      font-size: 15px;
      transition: border-color 0.3s ease, box-shadow 0.2s;
    }

    input:focus {
      border-color: #3498db;
      box-shadow: 0 0 4px rgba(52, 152, 219, 0.4);
      outline: none;
    }

    .error {
      color: #e74c3c;
      font-size: 13px;
      margin-top: -12px;
      margin-bottom: 10px;
    }

    .message {
      padding: 12px;
      margin-bottom: 15px;
      border-radius: 8px;
      font-size: 14px;
    }

    .success {
      background-color: #e0f8e9;
      color: #2d862d;
      border-left: 5px solid #2ecc71;
    }

    .fail {
      background-color: #fdecea;
      color: #a94442;
      border-left: 5px solid #e74c3c;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #2980b9;
    }

    @media (max-width: 500px) {
      .login-container {
        padding: 30px 20px;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h1>User Login</h1>
    <form action="{{ route('login') }}" method="POST">
      @csrf

      @if(Session::has('success'))
        <div class="message success">{{ Session::get('success') }}</div>
      @endif

      @if(Session::has('fail'))
        <div class="message fail">{{ Session::get('fail') }}</div>
      @endif

      <!-- Username -->
      <label for="names">Username</label>
      <input type="text" name="names" id="names" value="{{ old('names') }}">
      @error('names') <div class="error">{{ $message }}</div> @enderror

      <!-- Password -->
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
      @error('password') <div class="error">{{ $message }}</div> @enderror

      <!-- Submit -->
      <button type="submit">Login</button>
      Don't have an account? <a href="/User">Register</a>
    </form>
  </div>
</body>
</html>
