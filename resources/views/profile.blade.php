@extends('layouts.app')

@section('title', 'Taskboard - Profile')

@section('content')
    <style>
        .input-style {
            background-color: #D4E8E1;
            border: 2px solid #A0BDB5;
            color: #3B4C5A;
        }
        .button-save {
            background-color: #3B4C5A;
            color: white;
        }
        .image-bg {
            background-color: #D4E8E1;
        }
    </style>

    <div class="bg-white p-6 shadow-lg rounded-xl">
        <div class="flex">
            <div class="w-7/12 p-6 flex flex-col justify-start">
                <h1 class="text-4xl font-extrabold text-gray-800">{{ $data['username'] ?? 'Azaryn' }}</h1>
                <p class="text-lg text-gray-600 font-medium mb-8">{{ $data['status'] ?? 'Student' }}</p>
                <form action="#" method="POST" class="flex flex-col gap-5 w-full">
                    @csrf
                    <div>
                        <label for="username" class="block text-gray-700 font-semibold mb-2">Username</label>
                        <input id="username" name="username"  type="text" value="{{ $data['username'] ?? '' }}" class="w-full input-style rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-green-200" readonly/>
                    </div>
                    <div>
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                        <input id="password" name="password" type="password" value="{{ $data['password'] ?? '********' }}" class="w-full input-style rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-green-200"/>
                    </div>
                    <div>
                        <label for="location" class="block text-gray-700 font-semibold mb-2">Location</label>
                        <input id="location" name="location"  type="text" value="{{ $data['location'] ?? '' }}" class="w-full input-style rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-green-200"/>
                    </div>
                    <div>
                        <label for="status" class="block text-gray-700 font-semibold mb-2">Status</label>
                        <input id="status" name="status" type="text" value="{{ $data['status'] ?? '' }}" class="w-full input-style rounded-lg py-3 px-4 focus:outline-none focus:ring-2 focus:ring-green-200" />
                    </div>
                    <button type="submit" class="mt-6 rounded-lg button-save py-3 font-semibold text-lg hover:opacity-95 transition w-full"> Save Changes </button>
                </form>
            </div>
            <div class="w-5/12 image-bg rounded-xl flex items-center justify-center p-6 ml-6">
                <img src="{{ asset('assets/Login-character.png') }}" alt="Profile Character" class="w-full object-contain">
            </div>
        </div>
        <div class="pt-6"></div>
    </div>
@endsection
