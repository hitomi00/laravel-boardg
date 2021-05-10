<!-- header -->
<header class="section">
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10">
                    <div class="menu-area">
                        <div class="limit-box">
                            <nav class="main-menu">
                                <ul class="menu-area-main">
                                    <li> <a href="index.html">Головна</a> </li>
                                    <li> <a href="about.html">Про нас</a> </li>
                                    <li><a href="{{route('catalog')}}">Каталог</a></li>
                                    <li><a href="contact.html">Зв'язок з нами</a></li>
                                    <li>
                                        <a href="#"> Корзина <span class="badge badge-light">0</span>
                                        </a></li>
                                    @guest
                                        <li><a href="#" data-toggle="modal" data-target="#login_modal"> Вхід </a> </li>
                                        <li><a href="#" data-toggle="modal" data-target="#register-modal"> Реєстрація </a> </li>
                                    @endguest
                                    @auth
                                        <li><a href="#"> {{ Auth::user()->name() }} </a> </li>
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
