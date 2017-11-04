@extends('front.layout')
@section('content')
    @include('front.mission.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h2 class="title-1">О компании</h2>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li class="active"> <a href="/mission">Миссия компании</a> </li>
                    <li> <a href="/factory">Завод</a> </li>
                    <li> <a href="/process">Процесс производства</a> </li>
                    <li> <a href="/news">Новости</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <!-- section-mission -->
                <section class="section section--mission">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-7">
                                <h1 class="title-3">Миссия компании</h1>
                                <p>Производство нашего продукта&nbsp;&mdash; это возвращение к&nbsp;истокам. Мы&nbsp;хотим показать всему миру, что Казахстан&nbsp;&mdash; это не&nbsp;просто нефтегазовая страна, а&nbsp;родина кобыльего молока. SAUMAL&reg; обязан
                                    стать нашим новым национальным брендом, таким, как французское вино и&nbsp;немецкое пиво.</p>
                                <p><big>Казахстан&nbsp;&mdash; не&nbsp;столько нефтяная страна, сколько страна, которая может производить собственный <strong>национальный продукт</strong>.</big></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-5">
                                <!-- item -->
                                <div class="item text--center">
                                    <div class="item-img">
                                        <div class="img--centered" data-img-loader> <img src="img/pic-author.png" class="img--fluid" /> </div>
                                    </div>
                                    <div class="item-title">Галымжан Мейрамбеков</div>
                                    <div class="item-meta"> один из учредителей<br /> компании Saumal </div>
                                </div>
                                <!-- /item -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /section-mission -->
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
