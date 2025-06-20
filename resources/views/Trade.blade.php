@extends('layouts.app')

@section('title', 'Add Trade')

@section('styles')
<style>
    .form-container {
        background: #fff;
        padding: 40px 30px;
        border-radius: 10px;
        box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 500px;
    }

    h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #2c3e50;
    }

    label {
        display: block;
        margin-bottom: 6px;
        font-weight: bold;
        color: #34495e;
    }

    input[type="text"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 1em;
    }

    .error {
        color: red;
        font-size: 0.9em;
        margin-top: -10px;
        margin-bottom: 10px;
    }

    .message {
        margin-bottom: 15px;
        padding: 10px;
        border-radius: 5px;
        text-align: center;
        font-weight: bold;
    }

    .success {
        background-color: #d4edda;
        color: #155724;
    }

    .fail {
        background-color: #f8d7da;
        color: #721c24;
    }

    button {
        width: 100%;
        padding: 12px;
        background-color: #3498db;
        color: white;
        font-size: 1em;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background-color: #2980b9;
    }
</style>
@endsection

@section('content')
<div class="form-container">
    <h2>Add Trade</h2>
    
    <form action="{{ route('trade') }}" method="POST">
        @csrf

        @if(Session::has('success'))
            <div class="message success">{{ Session::get('success') }}</div>
        @endif
        @if(Session::has('fail'))
            <div class="message fail">{{ Session::get('fail') }}</div>
        @endif

        <label for="name">Trade Name</label>
        <input type="text" name="name" id="name">
        @error('name') <div class="error">{{ $message }}</div> @enderror

        <label for="level">Levels</label>
        <input type="text" name="level" id="level">
        @error('level') <div class="error">{{ $message }}</div> @enderror

        <label for="module_name">Module Name</label>
        <input type="text" name="module_name" id="module_name">
        @error('module_name') <div class="error">{{ $message }}</div> @enderror

        <button type="submit">Add Trade</button>
    </form>
</div>
@endsection
