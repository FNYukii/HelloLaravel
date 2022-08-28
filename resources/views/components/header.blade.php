<header>
    <div class="large-container">
        <a href="/" class="logo">Hello Laravel</a>

        <ul>
            <li><a href="/">Read</a></li>
            <li><a href="/create">Create</a></li>

            @auth
            @else
            <li>
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            </li>

            @if (Route::has('register'))
            <li>
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            </li>
            @endif
            @endauth

            @auth
            <li>
                <form method="post" action="{{ route('logout') }}">
                    @csrf
                    <button onclick="event.preventDefault(); this.closest('form').submit();">Sign out</button>
                </form>
            </li>
            @endauth
        </ul>

    </div>
</header>