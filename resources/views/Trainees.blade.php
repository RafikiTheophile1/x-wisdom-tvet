@extends('layouts.app')

@section('title', 'Add Trainee')

@section('content')
    <div style="max-width: 500px; width: 100%; background: #fff; padding: 40px 30px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); margin-top: 20px;">
        <h2 style="text-align: center; color: #2c3e50; margin-bottom: 25px;">Add Trainee</h2>

        @if(Session::has('success'))
            <div style="background: #d4edda; color: #155724; padding: 10px; border-radius: 6px; margin-bottom: 15px; text-align: center;">
                {{ Session::get('success') }}
            </div>
        @endif
        @if(Session::has('fail'))
            <div style="background: #f8d7da; color: #721c24; padding: 10px; border-radius: 6px; margin-bottom: 15px; text-align: center;">
                {{ Session::get('fail') }}
            </div>
        @endif

        <form id="traineeForm" action="{{ route('Trainee') }}" method="POST" onsubmit="return validateForm();">
            @csrf

            <label for="fname" style="font-weight: bold; color: #34495e;">Trainee First Name</label>
            <input type="text" name="fname" id="fname" style="width: 100%; padding: 12px; margin-top: 6px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 6px;">
            <div id="fnameError" style="color: red; font-size: 0.9em; margin-bottom: 10px;"></div>

            <label for="lname" style="font-weight: bold; color: #34495e;">Trainee Last Name</label>
            <input type="text" name="lname" id="lname" style="width: 100%; padding: 12px; margin-top: 6px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 6px;">
            <div id="lnameError" style="color: red; font-size: 0.9em; margin-bottom: 10px;"></div>

            <button type="submit"
                    style="width: 100%; padding: 12px; background-color: #3498db; color: white; border: none; border-radius: 6px; font-weight: bold; transition: background 0.3s ease;">
                Add Trainee
            </button>
        </form>
    </div>

    <script>
        function validateForm() {
            let fname = document.getElementById('fname').value.trim();
            let lname = document.getElementById('lname').value.trim();
            let isValid = true;

            document.getElementById('fnameError').innerText = '';
            document.getElementById('lnameError').innerText = '';

            if (fname === '') {
                document.getElementById('fnameError').innerText = 'First name is required.';
                isValid = false;
            }
            if (lname === '') {
                document.getElementById('lnameError').innerText = 'Last name is required.';
                isValid = false;
            }

            return isValid;
        }
    </script>
@endsection
