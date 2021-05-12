<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('admin_res/images/favicon_1.ico') }}">

    <title>Статистика</title>

    <!--Morris Chart CSS -->

    <link href="{{ asset('admin_res/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin_res/css/core.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin_res/css/components.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin_res/css/icons.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin_res/css/pages.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin_res/css/responsive.css') }}" rel="stylesheet" type="text/css"/>

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <script src="{{ asset('admin_res/js/modernizr.min.js') }}"></script>


</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="text-center">
                <a href="index.html" class="logo"><i class="icon-arrow icon-c-logo"></i><span style="color: white">board<span
                            style="color: black">g</span></span></a>
            </div>
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation" style="background-color: #136AF8 ">
            <div class="container">
                <div class="">
                    <div class="pull-left">
                        <button class="button-menu-mobile open-left">
                            <i class="ion-navicon"></i>
                        </button>
                        <span class="clearfix"></span>
                    </div>


                    <ul class="nav navbar-nav navbar-right pull-right">
                        <li class="hidden-xs">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i
                                    class="icon-size-fullscreen"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img
                                    src="{{asset('admin_res/images/users/avatar-1.jpg')}}" alt="user-img"
                                    class="img-circle"> </a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-5"></i> Повернутись на головну</a></li>
                                <li><a href="javascript:void(0)"><i class="ti-power-off m-r-5"></i> Вийти</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <div class="left side-menu" >
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li class="text-muted menu-title">Статистика</li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect active"><i class="ti-home"></i> <span> Статистика </span> </a>
                        <ul class="list-unstyled">
                            <li class="active"><a href="index.html">Основна статистика</a></li>
                        </ul>
                    </li>

                    <div class="clearfix"></div>
                    <li class="text-muted menu-title">Навігація</li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="ti-home"></i> <span> Продукти </span> </a>
                        <ul class="list-unstyled">
                            <li class="active"><a href="index.html">Всі продукти</a></li>
                            <li><a href="dashboard_2.html">Додати продукт</a></li>
                        </ul>
                    </li>

                    <div class="clearfix"></div>
                    <li class="text-muted menu-title">Керування</li>

                    <li class="has_sub">
                        <a href="#" class="waves-effect"><i class="ti-home"></i> <span> Ролі </span> </a>
                        <ul class="list-unstyled">
                            <li class=""><a href="index.html">Дати роль користувачу</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- Left Sidebar End -->


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Статистика</h4>
                        <p class="text-muted page-title-alt">Вітаємо, {{ Auth::user()->name }} !</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 col-lg-6">
                        <div class="widget-bg-color-icon card-box fadeInDown animated">
                            <div class="bg-icon bg-icon-info pull-left">
                                <i class="md md-attach-money text-info"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter">31,570</b></h3>
                                <p class="text-muted">Загальний прибуток</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-pink pull-left">
                                <i class="md md-add-shopping-cart text-pink"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter">280</b></h3>
                                <p class="text-muted">Продажів сьогодні</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-purple pull-left">
                                <i class="md md-equalizer text-purple"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter">32</b></h3>
                                <p class="text-muted">Не підверджених замовлень</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6">
                        <div class="widget-bg-color-icon card-box">
                            <div class="bg-icon bg-icon-success pull-left">
                                <i class="md md-remove-red-eye text-success"></i>
                            </div>
                            <div class="text-right">
                                <h3 class="text-dark"><b class="counter">1320</b></h3>
                                <p class="text-muted">Прибутку сьогодні</p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>


                <!-- end row -->


                <div class="row">

                    <div class="col-lg-12">
                        <div class="card-box">
                            <a href="#" class="pull-right btn btn-default btn-sm waves-effect waves-light">Показати всі</a>
                            <h4 class="text-dark header-title m-t-0">Нещодавні замовлення</h4>

                            <div class="table-responsive">
                                <table class="table table-actions-bar m-b-0">
                                    <thead>
                                    <tr>
                                        <th>Назва продукту</th>
                                        <th>Ціна</th>
                                        <th style="min-width: 80px;">Керування</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><img src="{{ asset('admin_res/images/products/iphone.jpg') }}"
                                                 class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone
                                        </td>
                                        <td><span class="text-custom">+$230</span></td>
                                        <td>
                                            <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                            <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="{{ asset('admin_res/images/products/samsung.jpg') }}"
                                                 class="thumb-sm pull-left m-r-10" alt=""> Samsung Phone
                                        </td>
                                        <td><span class="text-danger">-$154</span></td>
                                        <td>
                                            <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                            <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td><img src="{{ asset('admin_res/images/products/imac.jpg') }}"
                                                 class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone
                                        </td>
                                        <td><span class="text-custom">+$1850</span></td>
                                        <td>
                                            <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                            <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td><img src="{{ asset('admin_res/images/products/macbook.jpg') }}"
                                                 class="thumb-sm pull-left m-r-10" alt=""> Apple iPhone
                                        </td>
                                        <td><span class="text-danger">-$560</span></td>
                                        <td>
                                            <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                            <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                        </td>
                                    </tr>

                                    <tr>

                                        <td><img src="{{ asset('admin_res/images/products/lumia.jpg') }}"
                                                 class="thumb-sm pull-left m-r-10" alt=""> Lumia iPhone
                                        </td>
                                        <td><span class="text-custom">+$230</span></td>
                                        <td>
                                            <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                            <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!-- end col -->


                </div>
                <!-- end row -->


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            {{ Carbon\Carbon::now()->format('Y') }}| ©BoardG Всі права захищено
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->
    <div class="side-bar right-bar nicescroll">
        <h4 class="text-center">Chat</h4>
        <div class="contact-list nicescroll">
            <ul class="list-group contacts-list">
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('admin_res/images/users/avatar-1.jpg') }}" alt="">
                        </div>
                        <span class="name">Chadengle</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('admin_res/images/users/avatar-2.jpg') }}" alt="">
                        </div>
                        <span class="name">Tomaslau</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('admin_res/images/users/avatar-3.jpg') }}" alt="">
                        </div>
                        <span class="name">Stillnotdavid</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('admin_res/images/users/avatar-4.jpg') }}" alt="">
                        </div>
                        <span class="name">Kurafire</span>
                        <i class="fa fa-circle online"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('admin_res/images/users/avatar-5.jpg') }}" alt="">
                        </div>
                        <span class="name">Shahedk</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('admin_res/images/users/avatar-6.jpg') }}" alt="">
                        </div>
                        <span class="name">Adhamdannaway</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('admin_res/images/users/avatar-7.jpg') }}" alt="">
                        </div>
                        <span class="name">Ok</span>
                        <i class="fa fa-circle away"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('admin_res/images/users/avatar-8.jpg') }}" alt="">
                        </div>
                        <span class="name">Arashasghari</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('admin_res/images/users/avatar-9.jpg') }}" alt="">
                        </div>
                        <span class="name">Joshaustin</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
                <li class="list-group-item">
                    <a href="#">
                        <div class="avatar">
                            <img src="{{ asset('admin_res/images/users/avatar-10.jpg') }}" alt="">
                        </div>
                        <span class="name">Sortino</span>
                        <i class="fa fa-circle offline"></i>
                    </a>
                    <span class="clearfix"></span>
                </li>
            </ul>
        </div>
    </div>
    <!-- /Right-bar -->

</div>
<!-- END wrapper -->


<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('admin_res/js/jquery.min.js')}}"></script>
<script src="{{ asset('admin_res/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin_res/js/detect.js')}}"></script>
<script src="{{ asset('admin_res/js/fastclick.js') }}"></script>
<script src="{{ asset('admin_res/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('admin_res/js/jquery.blockUI.js') }}"></script>
<script src="{{ asset('admin_res/js/waves.js') }}"></script>
<script src="{{ asset('admin_res/js/wow.min.js') }}"></script>
<script src="{{ asset('admin_res/js/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('admin_res/js/jquery.scrollTo.min.js') }}"></script>

<script src="{{ asset('admin_res/plugins/peity/jquery.peity.min.js') }}"></script>

<!-- jQuery  -->
<script src="{{ asset('admin_res/plugins/waypoints/lib/jquery.waypoints.js') }}"></script>
<script src="{{ asset('admin_res/plugins/counterup/jquery.counterup.min.js') }}"></script>


<script src="{{ asset('admin_res/plugins/morris/morris.min.js') }}"></script>
<script src="{{ asset('admin_res/plugins/raphael/raphael-min.js') }}"></script>

<script src="{{ asset('admin_res/plugins/jquery-knob/jquery.knob.js') }}"></script>

<script src="{{ asset('admin_res/pages/jquery.dashboard.js') }}"></script>

<script src="{{ asset('admin_res/js/jquery.core.js') }}"></script>
<script src="{{ asset('admin_res/js/jquery.app.js') }}"></script>

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.counter').counterUp({
            delay: 100,
            time: 1200
        });

        $(".knob").knob();

    });
</script>


</body>
</html>
