<nav class="headers">
    <div class="row justify-content-around">
        <div class="col-3">
            <div class="align-items-center  p-3">
                @auth("web")
                    <a href="{{route('posts.index')}}">Главная страница</a>
                @endauth
                @guest("web")
                    <a href="{{route('home')}}">Главная страница</a>
                @endguest
            </div>
        </div>
        <div class="col-3" style="text-align:right;">
            <div class="align-items-center  p-3">
                @auth("web")
                    <a href="{{route('information')}}">Личный кабинет</a>
                    <a href="{{route('logout')}}">Выйти</a>
                @endauth
                @guest("web")
                    <a href="{{route('login')}}">Войти</a>
                @endguest
            </div>
        </div>
    </div>
</nav>