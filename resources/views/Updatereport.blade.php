@extends('layouts.app')

@section('title', 'Update Report')

@section('content')
    <div style="max-width: 600px; width: 100%;">
        <h2 style="color: #2c3e50; margin-bottom: 20px;"> Update Report</h2>

        <form action="{{ route('updatereport', $modify->id) }}" method="POST" style="background: #ffffff; padding: 25px; border-radius: 10px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
            @csrf
            @method('PUT')

            <div style="margin-bottom: 15px;">
                <label for="trainee_id" style="font-weight: bold;">Trainee Name</label>
                <select name="trainee_id" id="trainee_id" style="width: 100%; padding: 8px; margin-top: 5px;">
                    @foreach($view as $trainee)
                        <option value="{{ $trainee->id }}" {{ $trainee->id == $modify->trainee_id ? 'selected' : '' }}>
                            {{ $trainee->Traineefname }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="trade_id" style="font-weight: bold;">Trade</label>
                <select name="trade_id" id="trade_id" style="width: 100%; padding: 8px; margin-top: 5px;">
                    @foreach($select as $trade)
                        <option value="{{ $trade->id }}" {{ $trade->id == $modify->trade_id ? 'selected' : '' }}>
                            {{ $trade->Trade_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="trade_level" style="font-weight: bold;">Level</label>
                <select name="trade_level" id="trade_level" style="width: 100%; padding: 8px; margin-top: 5px;">
                    @foreach($select as $trade)
                        <option value="{{ $trade->Trade_level }}" {{ $trade->Trade_level == $modify->trade->Trade_level ? 'selected' : '' }}>
                            {{ $trade->Trade_level }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="module_name" style="font-weight: bold;">Module Name</label>
                <select name="module_name" id="module_name" style="width: 100%; padding: 8px; margin-top: 5px;">
                    @foreach($select as $trade)
                        <option value="{{ $trade->Module_name }}" {{ $trade->Module_name == $modify->trade->Module_name ? 'selected' : '' }}>
                            {{ $trade->Module_name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="formative_assessment" style="font-weight: bold;">Formative Assessment</label>
                <input type="number" name="formative_assessment" id="formative_assessment" value="{{ $modify->formative_assessment }}" style="width: 100%; padding: 8px;">
                <span style="color:red;">@error('formative_assessment'){{ $message }}@enderror</span>
            </div>

            <div style="margin-bottom: 15px;">
                <label for="summative_assessment" style="font-weight: bold;">Summative Assessment</label>
                <input type="number" name="summative_assessment" id="summative_assessment" value="{{ $modify->summative_assessment }}" style="width: 100%; padding: 8px;">
                <span style="color:red;">@error('summative_assessment'){{ $message }}@enderror</span>
            </div>

            <button type="submit" style="padding: 10px 20px; background-color: #2c3e50; color: white; border: none; border-radius: 5px;">Update Marks</button>
        </form>
    </div>
@endsection
