@extends('layouts.app')

@section('title', 'Taskboard - Dashboard')

@section('content')
    <style>
        .text-priority-color { color: #2C6E4A; }
        .text-upcoming-color { color: #5B48A9; }
        .text-overdue-color  { color: #A83A64; }
        .text-pending-color  { color: #A52A2A; }

        .task-priority { background: linear-gradient(135deg, #E6F8F0 0%, #A6FACD 100%); box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); }
        .task-upcoming { background: linear-gradient(135deg, #E3E6FF 0%, #A6AEFA 100%); box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); }
        .task-overdue { background: linear-gradient(135deg, #F9E6F5 0%, #C5A6FA 100%); box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); }
        .task-pending { background: linear-gradient(135deg, #FEEEEE 0%, #FAA6A7 100%); box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05); }
    </style>

    <div class="bg-white p-6 shadow-lg rounded-xl">
        <div class="flex items-center border-b border-gray-200 pb-4 mb-4">
            <div class="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center mr-3 border border-gray-300 overflow-hidden">
                <img src="{{ asset('assets/Dashboard-profile.png') }}" alt=" " class="w-full h-full object-cover">
            </div>
            <div>
                <h2 class="text-xl font-bold text-gray-800">Hai {{ $username ?? 'Mahasiswa' }}</h2>
                <p class="text-base text-gray-600 font-medium">Semangat mengerjakan tugas!</p>
            </div>
        </div>
        <h3 class="text-lg font-bold text-gray-800 mb-4">My Task</h3>
        <div class="grid grid-cols-4 gap-4 mb-8">
            <div class="task-priority p-4 rounded-xl flex flex-col justify-start">
                <div class="flex items-center justify-start mb-4">
                    <div class="w-6 h-6 rounded-full bg-white flex items-center justify-center mr-2 shadow-sm border border-gray-100 overflow-hidden">
                        <img src="{{ asset('assets/Icon-1.png') }}" alt=" " class="w-full h-full object-contain p-1">
                    </div>
                    <span class="text-base font-semibold text-gray-800">{{ $tasks[0]['type'] ?? 'Priority Task' }}</span>
                </div>
                <p class="text-3xl font-extrabold text-priority-color">
                    {{ $tasks[0]['done'] ?? 23 }}/{{ $tasks[0]['total'] ?? 34 }} Task
                </p>
            </div>
            <div class="task-upcoming p-4 rounded-xl flex flex-col justify-start">
                <div class="flex items-center justify-start mb-4">
                    <div class="w-6 h-6 rounded-full bg-white flex items-center justify-center mr-2 shadow-sm border border-gray-100 overflow-hidden">
                        <img src="{{ asset('assets/Icon-2.png') }}" alt=" " class="w-full h-full object-contain p-1">
                    </div>
                    <span class="text-base font-semibold text-gray-800">{{ $tasks[1]['type'] ?? 'Upcoming Task' }}</span>
                </div>
                <p class="text-3xl font-extrabold text-upcoming-color">
                    {{ $tasks[1]['done'] ?? 3 }}/{{ $tasks[1]['total'] ?? 34 }} Task
                </p>
            </div>
            <div class="task-overdue p-4 rounded-xl flex flex-col justify-start">
                <div class="flex items-center justify-start mb-4">
                    <div class="w-6 h-6 rounded-full bg-white flex items-center justify-center mr-2 shadow-sm border border-gray-100 overflow-hidden">
                        <img src="{{ asset('assets/Icon-3.png') }}" alt=" " class="w-full h-full object-contain p-1">
                    </div>
                    <span class="text-base font-semibold text-gray-800">{{ $tasks[2]['type'] ?? 'Overdue Task' }}</span>
                </div>
                <p class="text-3xl font-extrabold text-overdue-color">
                    {{ $tasks[2]['done'] ?? 10 }}/{{ $tasks[2]['total'] ?? 34 }} Task
                </p>
            </div>
            <div class="task-pending p-4 rounded-xl flex flex-col justify-start">
                <div class="flex items-center justify-start mb-4">
                    <div class="w-6 h-6 rounded-full bg-white flex items-center justify-center mr-2 shadow-sm border border-gray-100 overflow-hidden">
                        <img src="{{ asset('assets/Icon-4.png') }}" alt=" " class="w-full h-full object-contain p-1">
                    </div>
                    <span class="text-base font-semibold text-gray-800">{{ $tasks[3]['type'] ?? 'Pending Task' }}</span>
                </div>
                <p class="text-3xl font-extrabold text-pending-color">
                    {{ $tasks[3]['done'] ?? 2 }}/{{ $tasks[3]['total'] ?? 34 }} Task
                </p>
            </div>
        </div>
        <h3 class="text-lg font-bold text-gray-800 mb-4">Recently Visit</h3>
        <div class="grid grid-cols-3 gap-4">
            @foreach ($recentlyVisit as $key => $visit)
            <div class="rounded-xl overflow-hidden shadow-lg border border-gray-100">
                <div class="w-full h-32 bg-gray-200 flex items-center justify-center text-gray-500 font-semibold overflow-hidden">
                    <img src="{{ asset('assets/Dashboard-Task-' . $key . '.png') }}" alt=" " class="w-full h-full object-cover">
                </div>
                <div class="p-3">
                    <p class="text-xs font-semibold text-gray-500 mb-1">{{ $visit['category'] }}</p>
                    <h4 class="text-base font-extrabold text-gray-800 mb-1">{{ $visit['title'] }}</h4>
                    <p class="text-xs text-gray-600 leading-snug line-clamp-2">{{ $visit['desc'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
