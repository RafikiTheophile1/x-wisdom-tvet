<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Update Trainee</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f6f6f6;
      margin: 0;
      padding: 0;
    }

    .form-container {
      max-width: 500px;
      margin: 60px auto;
      background-color: #ffffff;
      padding: 2rem 2.5rem;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      color: #2D3250;
      margin-bottom: 1.5rem;
    }

    label {
      font-weight: 600;
      display: block;
      margin-bottom: 6px;
      color: #333;
    }

    input[type="text"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 1rem;
      transition: 0.3s border-color;
    }

    input[type="text"]:focus {
      border-color: #7077A1;
      outline: none;
    }

    .error {
      color: red;
      font-size: 0.85rem;
      margin-top: -10px;
      margin-bottom: 10px;
    }

    .alert {
      padding: 10px;
      background-color: #e9f7ef;
      color: #2e7d32;
      border: 1px solid #c3e6cb;
      border-radius: 8px;
      margin-bottom: 1rem;
    }

    .alert.fail {
      background-color: #fcebea;
      color: #c0392b;
      border-color: #f5c6cb;
    }

    button {
      width: 100%;
      padding: 12px;
      background-color: #424769;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background-color: #2d3250;
    }

    @media (max-width: 576px) {
      .form-container {
        margin: 30px 1rem;
        padding: 1.5rem;
      }

      h2 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <x-nav></x-nav>

  <div class="form-container">
    <h2>Update Trainee</h2>

    <form action="{{ route('updatetrainee', $update2->id) }}" method="POST">
      @csrf
      @method('PUT')

      @if(Session::has('success'))
        <div class="alert">{{ Session::get('success') }}</div>
      @endif

      @if(Session::has('fail'))
        <div class="alert fail">{{ Session::get('fail') }}</div>
      @endif

      <label for="fname">Trainee First Name</label>
      <input type="text" name="fname" id="fname" value="{{ $update2->Traineelname }}">
      @error('fname')
        <div class="error">{{ $message }}</div>
      @enderror

      <label for="lname">Trainee Last Name</label>
      <input type="text" name="lname" id="lname" value="{{ $update2->Traineefname }}">
      @error('lname')
        <div class="error">{{ $message }}</div>
      @enderror

      <button type="submit">Update Trainee</button>
    </form>
  </div>

</body>
</html>
