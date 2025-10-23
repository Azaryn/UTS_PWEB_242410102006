@php
    $currentRoute = Route::currentRouteName();
@endphp

<nav class="max-w-5xl mx-auto mt-4 mb-4 flex items-center justify-between p-4 bg-white shadow-lg rounded-xl border border-gray-200">
    <div class="flex items-center justify-between w-full">
        <div class="flex items-center space-x-3">
            <div class="w-10 h-10 bg-[#3B4C5A] rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6 text-[#70A39C]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                </svg>
            </div>
            <span class="text-3xl font-extrabold text-[#3B4C5A]">Taskboard</span>
        </div>
        <div class="flex space-x-6 text-lg font-semibold">
            <a href="{{ route('dashboard') }}" class="{{ $currentRoute === 'dashboard' ? 'text-[#70A39C] font-bold' : 'text-[#3B4C5A] opacity-60 hover:opacity-100' }}">Dashboard</a>
            <a href="{{ route('pengelolaan') }}" class="{{ $currentRoute === 'pengelolaan' ? 'text-[#70A39C] font-bold' : 'text-[#3B4C5A] opacity-60 hover:opacity-100' }}">Pengelolaan</a>
            <a href="{{ route('profile') }}" class="{{ $currentRoute === 'profile' ? 'text-[#70A39C] font-bold' : 'text-[#3B4C5A] opacity-60 hover:opacity-100' }}">Profile</a>
            <a href="{{ route('login') }}" class="text-[#3B4C5A] opacity-60 hover:opacity-100">Log Out</a>
        </div>
    </div>
</nav>
