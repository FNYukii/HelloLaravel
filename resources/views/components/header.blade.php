<header>
  <div class="large-container">
    <a href="/" class="logo">Hello Laravel</a>

    <ul>
      <li><a href="/">Read</a></li>
      <li><a href="/create">Create</a></li>

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