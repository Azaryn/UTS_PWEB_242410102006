<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Taskboard App')</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #EEEEEE;
        }
    </style>
</head>
<body style="background-color: #EEEEEE;">

    <x-navbar/>

    <main class="max-w-5xl mx-auto">
        @yield('content')
    </main>

    @include('components.footer')
</body>
</html>
