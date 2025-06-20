@extends('layouts.app')

@section('title', 'Report')

@section('content')
    <h1 style="text-align: center; margin-bottom: 30px; color: #2c3e50;">View Report</h1>

    <div style="overflow-x: auto; width: 100%;">
        <form method="GET" action="{{ route('viewReport') }}" style="margin-bottom: 20px; text-align: center;">
    <input type="text" name="query" value="{{ request('query') }}" placeholder="Search by trainee or trade name" 
           style="padding: 8px; width: 250px; border-radius: 5px; border: 1px solid #ccc;">
    <button type="submit" 
            style="padding: 8px 16px; background-color: #2c3e50; color: white; border: none; border-radius: 5px;">
        Search
    </button>
</form>

        <table style="width: 100%; border-collapse: collapse; box-shadow: 0 0 10px rgba(0,0,0,0.1); background: #fff; border-radius: 8px; overflow: hidden;">
            <thead style="background-color: #2c3e50; color: #fff;">
                <tr>
                    <th style="padding: 12px;">Marks ID</th>
                    <th style="padding: 12px;">First Name</th>
                    <th style="padding: 12px;">Last Name</th>
                    <th style="padding: 12px;">Trade Name</th>
                    <th style="padding: 12px;">Trade Level</th>
                    <th style="padding: 12px;">Module Name</th>
                    <th style="padding: 12px;">Formative</th>
                    <th style="padding: 12px;">Summative</th>
                    <th style="padding: 12px;">%</th>
                    <th style="padding: 12px;">Decision</th>
                    <th style="padding: 12px;" colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($select as $mark)
                    <tr style="text-align: center; border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">{{ $mark->id }}</td>
                        <td style="padding: 10px;">{{ $mark->trainee->Traineefname }}</td>
                        <td style="padding: 10px;">{{ $mark->trainee->Traineelname }}</td>
                        <td style="padding: 10px;">{{ $mark->trade->Trade_name }}</td>
                        <td style="padding: 10px;">{{ $mark->trade->Trade_level }}</td>
                        <td style="padding: 10px;">{{ $mark->trade->Module_name }}</td>
                        <td style="padding: 10px;">{{ $mark->formative_assessment }}</td>
                        <td style="padding: 10px;">{{ $mark->summative_assessment }}</td>
                        <td style="padding: 10px;">{{ $mark->percentage }}%</td>
                        <td style="padding: 10px;">{{ $mark->decision }}</td>
                        <td style="padding: 10px;">
                            <a href="{{ route('modify', ['id' => $mark->id]) }}" 
                               style="text-decoration: none; background-color: #3498db; color: white; padding: 6px 12px; border-radius: 4px;">
                               Update
                            </a>
                        </td>
                        <td style="padding: 10px;">
                            <form action="{{ route('delete3', $mark->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        style="background-color: #e74c3c; color: white; border: none; padding: 6px 12px; border-radius: 4px; cursor: pointer;">
                                    Remove
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
