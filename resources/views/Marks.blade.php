@extends('layouts.app')

@section('title', 'Record Marks')

@section('content')
    <div style="max-width: 600px; margin: 30px auto; padding: 30px; background: #fff; border-radius: 12px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
        <h2 style="text-align:center; color:#2c3e50;">Record Trainee Marks</h2>

        <form action="{{ route('marks') }}" method="POST">
            @csrf

            <!-- Trainee Name -->
            <label for="trainee_id" style="font-weight: bold;">Trainee Name</label>
            <select name="trainee_id" style="width:100%; padding:10px; margin-bottom:10px; border-radius:6px; border:1px solid #ccc;">
                <option value="">-- Select trainee name --</option>
                @foreach($view as $trainee)
                    <option value="{{ $trainee->id }}">{{ $trainee->Traineefname }}</option>
                @endforeach
            </select>
            <span style="color:red">@error('trainee_id'){{ $message }}@enderror</span><br>

            <!-- Trade Name -->
            <label for="trade_id" style="font-weight: bold;">Trade Name</label>
            <select name="trade_id" style="width:100%; padding:10px; margin-bottom:10px; border-radius:6px; border:1px solid #ccc;">
                <option value="">-- Select trade --</option>
                @foreach($select as $trade)
                    <option value="{{ $trade->id }}">{{ $trade->Trade_name }}</option>
                @endforeach
            </select>
            <span style="color:red">@error('trade_id'){{ $message }}@enderror</span><br>

            <!-- Trade Level -->
            <label style="font-weight: bold;">Trade Level</label>
            <select disabled style="width:100%; padding:10px; margin-bottom:10px; border-radius:6px; border:1px solid #ccc;">
                <option value="">(Auto-selected based on Trade)</option>
                @foreach($select as $trade)
                    <option value="{{ $trade->id }}">{{ $trade->Trade_level }}</option>
                @endforeach
            </select>

            <!-- Module Name -->
            <label style="font-weight: bold;">Module Name</label>
            <select disabled style="width:100%; padding:10px; margin-bottom:10px; border-radius:6px; border:1px solid #ccc;">
                <option value="">(Auto-selected based on Trade)</option>
                @foreach($select as $trade)
                    <option value="{{ $trade->id }}">{{ $trade->Module_name }}</option>
                @endforeach
            </select>

            <!-- Formative Assessment -->
            <label for="formative_assessment" style="font-weight: bold;">Formative Assessment</label>
            <input type="number" name="formative_assessment" style="width:100%; padding:10px; margin-bottom:10px; border-radius:6px; border:1px solid #ccc;">
            <span style="color:red">@error('formative_assessment'){{ $message }}@enderror</span><br>

            <!-- Summative Assessment -->
            <label for="summative_assessment" style="font-weight: bold;">Summative Assessment</label>
            <input type="number" name="summative_assessment" style="width:100%; padding:10px; margin-bottom:15px; border-radius:6px; border:1px solid #ccc;">
            <span style="color:red">@error('summative_assessment'){{ $message }}@enderror</span><br>

            <button type="submit"
                    style="width:100%; padding:12px; background:#3498db; color:white; border:none; border-radius:6px; font-weight:bold;">
                Save Marks
            </button>
        </form>
    </div>
@endsection
