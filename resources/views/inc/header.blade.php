<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link active" aria-current="page">Главная</a></li>
            @auth
                <li class="nav-item"><span class="nav-link">Welcome, {{ auth()->user()->name }}!</span></li>
                <form action="/logout" method="post">
                    @csrf
                    <button class="nav-link" style="color: white" type="submit">Log out</button>
                </form>
            @else
                <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Регистрация</a></li>
                <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Вход</a></li>
            @endauth
        </ul>
    </header>
</div>