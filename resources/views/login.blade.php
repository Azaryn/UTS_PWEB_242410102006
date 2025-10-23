<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Log In Taskboard</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #EEEEEE;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">
    <div class="flex bg-white shadow-xl rounded-2xl overflow-hidden w-[1100px] max-w-full">
        <div class="w-1/2 bg-[#D4E8E1] flex items-center justify-center p-8 rounded-l-2xl relative">
            <img src="{{ asset('assets/Login-character.png') }}" alt="Character" class="w-[90%] object-contain drop-shadow-md">
        </div>
        <div class="w-1/2 p-16 flex flex-col justify-center bg-gray-50">
            <h1 class="text-5xl font-extrabold text-[#3B4C5A] mb-16 text-center">Login</h1>
            <form action="{{ route('login.post') }}" method="POST" class="flex flex-col gap-8 w-5/6 mx-auto">
                @csrf
                <div class="flex flex-col">
                    <label for="username" class="text-gray-700 font-semibold mb-3 text-2xl">Username</label>
                    <input id="username" name="username" type="text" placeholder="" class="w-full bg-[#D4E8E1] text-gray-700 rounded-lg py-4 px-5 border border-[#9DB8B1] text-lg focus:outline-none focus:ring-2 focus:ring-green-200" />
                </div>
                <div class="flex flex-col">
                    <label for="password" class="text-gray-700 font-semibold mb-3 text-2xl">Password</label>
                    <input id="password"  name="password"  type="password" placeholder="" class="w-full bg-[#D4E8E1] text-gray-700 rounded-lg py-4 px-5 border border-[#9DB8B1] text-lg focus:outline-none focus:ring-2 focus:ring-green-200" />
                </div>
                <button type="submit" class="mt-6 rounded-lg bg-[#3B4C5A] text-white py-4 font-semibold text-xl hover:opacity-90 transition"> Log In </button>
            </form>
        </div>
    </div>
</body>
</html>
