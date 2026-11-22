<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tasks for Today') | Laravel</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f9;
            color: #263238;
        }
        header {
            background: #245c4f;
            padding: 20px 8%;
            color: white;
        }
        nav a {
            color: white;
            text-decoration: none;
            margin-right: 22px;
            font-weight: bold;
        }
        nav a:hover { text-decoration: underline; }
        main {
            max-width: 1000px;
            margin: 35px auto;
            padding: 0 20px;
        }
        .panel {
            background: white;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(0,0,0,.06);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            text-align: left;
            padding: 13px;
            border-bottom: 1px solid #ddd;
        }
        th { background: #e8f1ed; }
        .status {
            color: #245c4f;
            font-weight: bold;
            text-transform: capitalize;
        }
        footer {
            text-align: center;
            padding: 25px;
            color: #777;
        }
    </style>
</head>
<body>
    <header>
        <h2>Tasks for Today</h2>
        <nav>
            <a href="{{ route('home') }}">Welcome</a>
            <a href="{{ route('tasks.index') }}">Task List</a>
            <a href="{{ route('profile') }}">Profile</a>
            <a href="{{ route('about') }}">About</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        IT0049 - Web System Technologies | Tasks for Today
    </footer>
</body>
</html>
