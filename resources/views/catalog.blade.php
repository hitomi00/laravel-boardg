@extends('layouts.app')

@section('title')
    Каталог
@endsection

@section('body-style')
    main-layout product_pagr
@endsection

@section('body-content')



    <div id="plant" class="section product">
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="titlepage">
                        <h2><strong class="black"> Our</strong> Products</h2>
                        <span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected randomised words which don't look even slightly believable</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clothes_main section">
            <div class="container">
                <div class="row">
                    @for($i = 0; $i < 3; $i++)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="sport_product">
                            <figure><img src="images/basketball.png" alt="img"/></figure>
                            <h3 class="text-center"><strong class="price_text">50</strong> грн</h3>
                            <h4 class="text-center">Якась гра</h4>
                            <h5>
                                <p> <span class="font-weight-bold">Кількість гравців: </span> 100 </p>
                                <p> <span class="font-weight-bold">Вік: </span> 3+</p>
                                <p> <span class="font-weight-bold">Час гри: </span> 60 хв</p>
                            </h5>

                            <div class="row btn-group">
                            <div class="col-6 float-left">
                                <button type="button" class="btn btn-info"> Детальніше </button>
                            </div>
                            <div class="col-6 float-right">
                                <button type="button" class="btn btn-success"> В корзину </button>
                            </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
