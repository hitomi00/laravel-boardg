<!-- header -->
<header class="section">
    <!-- header inner -->
    <div class="header" style="background-color: #136AF8">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"><a href="index.html"><img src="images/logo.png" alt="#"></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li><a href="index.html">Головна</a></li>
                                    <li><a href="about.html">Про нас</a></li>
                                    <li><a href="{{route('catalog')}}">Каталог</a></li>
                                    <li><a href="contact.html">Зв'язок з нами</a></li>
                                    <li>
                                        <a href="#"> Корзина <span class="badge badge-light">0</span>
                                        </a></li>
                                    @guest
                                        <li><a href="#" data-toggle="modal" data-target="#login_modal"> Вхід </a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#register-modal">
                                                Реєстрація </a></li>
                                    @endguest
                                    @auth

                                        <li>
                                            <div class="dropdown"><a href="#" class="dropdown-toggle" type="button"
                                                                     id="dropdownMenuButton" data-toggle="dropdown"
                                                                     aria-haspopup="true"
                                                                     aria-expanded="false"> {{ Auth::user()->name}} </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    @if(Auth::user()->is_admin)
                                                    <button class="dropdown-item" type="button" onclick="location.href='/admin'">Адмін-панель
                                                    </button>
                                                    <div class="dropdown-divider"></div>
                                                    @endif
                                                    <button class="dropdown-item" onclick="location.href='/history'" type="button">Мої замовлення
                                                    </button>
                                                    <button class="dropdown-item" onclick="$('#logout').submit();"
                                                            type="button">Вийти
                                                    </button>
                                                    <form method="POST" id="logout" action="{{ route('logout') }}">
                                                        @csrf
                                                    </form>
                                                </div>

                                            </div>
                                        </li>
                                    @endauth

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header inner -->
</header>
<!-- end header -->
