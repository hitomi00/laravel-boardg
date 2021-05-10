@extends('layouts.app')


@section('body-content')
    <body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->

    <section >
        <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                <li data-target="#main_slider" data-slide-to="1"></li>
                <li data-target="#main_slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row marginii">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="carousel-caption ">
                                    <h1>Вітаємо в <strong class="color">нашому магазині</strong></h1>
                                    <p>Тут Ви знайдете будь-яку настільну гру, яку тільки забажаєте!</p>
                                    <a class="btn btn-lg btn-primary" href="{{route('catalog')}}" role="button">Каталог</a>
                                    <a class="btn btn-lg btn-primary" href="about.html" role="button">Про нас</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img src="images/boksing-gloves.png" alt="img"/></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row marginii">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="carousel-caption ">
                                    <h1>На Ваш вибір <strong class="color">ігри в самих різних жанрах</strong></h1>
                                    <p>Наш каталог постійно поповнюється новими товарами, тому Ви з нами не засумуєте.</p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Каталог</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box ">
                                    <figure><img src="images/boksing-gloves.png" alt="img"/></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="row marginii">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="carousel-caption ">
                                    <h1>Доставимо в<strong class="color"> будь-який куточок світу</strong></h1>
                                    <p>Завдяки тому, що мі співпрацюємо з поштовими компаніями, наша доставка простягається на великі відстані!</p>
                                    <a class="btn btn-lg btn-primary" href="#" role="button">Каталог</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="img-box">
                                    <figure><img src="images/boksing-gloves.png" alt="img"/></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                <i class='fa fa-angle-left'></i></a>
            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </section>
    <!-- plant -->
    <div id="plant" class="section  product">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2><strong class="black"> Наші </strong>  товари</h2>
                        <span> Різноманітність ігор - це наша гордість. Ми завжди можемо запропонувати Вам щось цікаве! </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clothes_main section ">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="sport_product">
                        <figure><img src="images/basketball.png" alt="img"/></figure>
                        <h3> <strong class="price_text">50</strong> грн</h3>
                        <h4>Якась гра</h4>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                    <div class="sport_product">
                        <figure><img src="images/t-shirt.png" alt="img"/></figure>
                        <h3> <strong class="price_text">50</strong> грн</h3>
                        <h4> Якась гра</h4>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                    <div class="sport_product">
                        <figure><img src="images/game.png" alt="img"/></figure>
                        <h3> <strong class="price_text">50</strong> грн</h3>
                        <h4>Якась гра</h4>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="sport_product">
                        <figure><img src="images/basketball.png" alt="img"/></figure>
                        <h3> <strong class="price_text">50</strong> грн</h3>
                        <h4>Якась гра</h4>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                    <div class="sport_product">
                        <figure><img src="images/t-shirt.png" alt="img"/></figure>
                        <h3> <strong class="price_text">50</strong> грн</h3>
                        <h4> Якась гра</h4>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                    <div class="sport_product">
                        <figure><img src="images/game.png" alt="img"/></figure>
                        <h3> <strong class="price_text">50</strong> грн</h3>
                        <h4>Якась гра</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- end plant -->
    <!--about -->
    <div class="section about ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="titlepage">
                        <h2><strong class="black"> Про </strong>  нас</h2>
                        <span> Наш магазин - це команда однодумців, які хочуть поділитися своїм захопленням з іншими. Якщо Ви теж хочете зануритися в цей чудовий світ - то ми готові Вам домоготи! </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->

    <div id="footer" class="Address layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="titlepage">
                        <div class="main">
                            <h1 class="address_text">Зв'язок</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="address_2">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon"><img src="images/map-icon.png" /></span>
                            <span style="margin-top: 10px;">Україна, місто Київ, вулиця Кібенка 14а</span></div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon"><img src="images/phone-icon.png" /></span>
                            <span style="margin-top: 21px;">( +38(099)-234-11-11 )</span></div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="site_info">
                            <span class="info_icon"><img src="images/email-icon.png" /></span>
                            <span style="margin-top: 21px;">mail@boardg.com</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu_main">
            <div class="menu_text">
                <ul>
                    <li class="active"><a href="#">Головна</a></li>
                    <li><a href="about.html">Про нас</a></li>
                    <li><a href="testmonial.html">Каталог</a></li>
                    <li><a href="contact.html">Зв'язок</a></li>
                </ul>
            </div>
        </div>
    </div>
    </div>

    <!-- end Contact Us-->
    <!-- footer start-->
    <div id="plant" class="footer layout_padding">
        <div class="container">
            <p>© 2021 Всі права захищено.</p>
        </div>
    </div>
@endsection
