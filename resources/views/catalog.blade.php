@extends('layouts.app')

@section('body-content')
    <body class="main-layout product_pagr">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{asset('images/loading.gif')}}" alt="#" /></div>
    </div>
    <!-- end loader -->
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

@endsection
