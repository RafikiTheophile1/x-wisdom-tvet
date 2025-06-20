@extends('layouts.app')

@section('title', 'View Trades')

@section('content')
<style>
/* Custom CSS for View Trades Page */
.container {
    max-width: 1100px;
    margin: auto;
    padding: 2rem;
    background-color: #f9f9f9;
    border-radius: 12px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    font-family: 'Segoe UI', sans-serif;
}

h2 {
    font-size: 2rem;
    margin-bottom: 1.5rem;
    color: #2D3250;
    border-bottom: 3px solid #7077A1;
    padding-bottom: 0.5rem;
}

.table-container {
    overflow-x: auto;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 1rem;
}

thead {
    background-color: #2D3250;
    color: white;
}

th, td {
    border: 1px solid #ccc;
    padding: 12px 15px;
    text-align: center;
}

td.text-start {
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f1f1f1;
}

tr:hover {
    background-color: #e4f0ff;
}

.btn {
    padding: 6px 12px;
    font-size: 0.9rem;
    border: none;
    border-radius: 6px;
    cursor: pointer;
}

.btn-primary {
    background-color: #424769;
    color: white;
}

.btn-primary:hover {
    background-color: #30344e;
}

.btn-danger {
    background-color: #dc3545;
    color: white;
}

.btn-danger:hover {
    background-color: #bb2d3b;
}

@media (max-width: 768px) {
    th, td {
        font-size: 0.85rem;
        padding: 8px;
    }

    h2 {
        font-size: 1.5rem;
    }
}
</style>

<div class="container">
    <h2>📋 View Trade Details</h2>

    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Trade ID</th>
                    <th>Trade Name</th>
                    <th>Trade Level</th>
                    <th>Module Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $grouped = $select->groupBy('Trade_name');
                @endphp

                @foreach($grouped as $tradeName => $tradeGroup)
                    @php
                        $levels = $tradeGroup->groupBy('Trade_level');
                    @endphp

                    @foreach($levels as $level => $levelGroup)
                        @foreach($levelGroup as $index => $item)
                            <tr>
                                <td>{{ $item->id }}</td>

                                @if ($loop->first && $loop->parent->first)
                                    <td rowspan="{{ $tradeGroup->count() }}">{{ $tradeName }}</td>
                                @endif

                                @if ($loop->first)
                                    <td rowspan="{{ $levelGroup->count() }}">{{ $level }}</td>
                                @endif

                                <td class="text-start">{{ $item->Module_name }}</td>
                                <td>
                                    <a href="{{ route('edit', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('delete', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this trade?')">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
