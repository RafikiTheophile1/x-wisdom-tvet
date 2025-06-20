<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>@yield('title', 'X-WISEDOM TVET')</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 220px;
            background-color: #2c3e50;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 30px 10px;
        }

        .sidebar h2 { margin-bottom: 40px; font-size: 1.2em; }

        .nav-links {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .nav-links a {
            text-decoration: none;
            color: white;
            padding: 12px 15px;
            margin: 5px 0;
            background-color: #34495e;
            border-radius: 5px;
            text-align: center;
            transition: background 0.3s;
        }

        .nav-links a:hover { background-color: #1abc9c; }

        .logout-form {
            margin-top: auto;
            width: 100%;
            text-align: center;
        }

        .logout-form button {
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #e74c3c;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .logout-form button:hover { background-color: #c0392b; }

        .main-content {
            flex: 1;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        @media (max-width: 768px) {
            body { flex-direction: column; }

            .sidebar {
                width: 100%;
                flex-direction: row;
                justify-content: space-around;
                padding: 10px;
            }

            .nav-links {
                flex-direction: row;
                flex-wrap: wrap;
                gap: 10px;
                justify-content: center;
            }

            .nav-links a {
                flex: 1 1 auto;
                min-width: 100px;
                margin: 0;
            }

            .logout-form { margin-top: 10px; }
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="sidebar">
        <h2>X-WISEDOM</h2>
        <div class="nav-links">
            <a href="{{ url('/Trade') }}">Record Trade</a>
            <a href="{{ url('/Trainees') }}">Record Trainees</a>
            <a href="{{ url('/Marks') }}">Record Assessment</a>
            <a href="{{ url('/Viewreport') }}">View Report</a>
        </div>
        <form action="{{ route('logout') }}" method="POST" class="logout-form">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>

    <div class="main-content">
        @yield('content')
    </div>
</body>
</html>
