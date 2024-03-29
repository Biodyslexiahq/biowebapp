<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-end z-10">
    @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-white-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 text-white" wire:navigate>Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="text-decoration-none px-3 py-1 rounded-4 text-white" style="background-color: #8ecae6" wire:navigate>Register</a>
        @endif
    @endauth
</div>
