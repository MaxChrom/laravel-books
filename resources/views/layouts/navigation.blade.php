<nav>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('about')}}">About</a>

        @auth
            <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button>Logout</button>
            </form>
        @endauth

        @auth
            Logged in as {{auth()->user()->name}}, id {{auth()->id()}}
        @endauth

        @guest
            <h1>you are guest!!!</h1>
        @endguest
</nav>