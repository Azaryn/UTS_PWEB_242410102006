@extends('layouts.app')

@section('title', 'Taskboard - Pengelolaan')

@section('content')
    <style>
        .status-priority { background-color: #C3F7D6; color: #2C6E4A; }
        .status-overdue  { background-color: #F8B4B4; color: #A52A2A; }
        .status-upcoming { background-color: #CCCCFF; color: #5B48A9; }
        .task-list-bg { background-color: #E6F8F0; }
    </style>

    <div class="bg-white p-6 shadow-lg rounded-xl relative">
        <div class="flex items-center border-b border-gray-200 pb-4 mb-4">
            <div class="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center mr-3 border border-gray-300 overflow-hidden">
                <img src="{{ asset('assets/Pengelolaan-profile.png') }}" alt="Profile Picture" class="w-full h-full object-cover">
            </div>
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Pengelolaan Tugas Azaryn</h2>
                <p class="text-base text-gray-600 font-medium">Kelola dan pantau semua tugasmu!</p>
            </div>
        </div>
        <div class="flex flex-col gap-4 pr-2 max-h-[50vh] overflow-y-auto">
            @foreach ($tugas as $task)
                @php
                    $statusClass = '';
                    if ($task['status'] == 'Priority Task') {
                        $statusClass = 'status-priority';
                    } elseif ($task['status'] == 'Overdue Task') {
                        $statusClass = 'status-overdue';
                    } elseif ($task['status'] == 'Upcoming Task') {
                        $statusClass = 'status-upcoming';
                    }
                @endphp
                <div class="p-4 rounded-xl shadow-md border border-gray-100 task-list-bg">
                    <div class="flex items-start justify-between">
                        <div class="flex grow">
                            <div class="flex items-center mb-2">
                                <svg class="w-6 h-6 mr-3 text-gray-700" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm9 1a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V6a1 1 0 00-1-1h-3zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm9 1a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1v-3a1 1 0 00-1-1h-3z" clip-rule="evenodd"></path></svg>
                                <h4 class="text-xl font-bold text-gray-800">{{ $task['judul'] }}</h4>
                            </div>
                            <div class="ml-9 text-base text-gray-700 space-y-1">
                                <p class="font-medium">Deadline : <span class="font-normal">{{ $task['deadline'] }}</span></p>
                                <p class="font-medium">Status : <span class="font-bold text-sm px-2 py-0.5 rounded {{ $statusClass }}">{{ $task['status'] }}</span></p>
                                @if (!empty($task['deskripsi']))
                                    <p class="font-medium">Description : <span class="font-normal">{{ $task['deskripsi'] }}</span></p>
                                @else
                                    <p class="font-medium">Description :</p>
                                @endif
                            </div>
                        </div>
                        <div class="flex items-center space-x-2 text-gray-500">
                            <button class="hover:text-gray-800 transition">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.232 5.232z"></path></svg>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="absolute bottom-6 right-6 w-14 h-14 bg-[#3B4C5A] rounded-full shadow-xl flex items-center justify-center hover:bg-[#5A6C7F] transition">
            <svg class="w-7 h-7 text-[#C3F7D6]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
        </button>
    </div>
@endsection
