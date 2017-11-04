@extends('front.layout')
@section('content')
    @include('front.catalog.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <!-- rycle-informer -->
            <div class="rycle-informer rycle--empty"> <a href="/order" class="link--block link--rycle">
                    <i class="icon icon-rycle"></i>
                    <sup data-count>0</sup>
                </a> </div>
            <!-- /rycle-informer -->
            <div class="page-title text--center">
                <h1 class="title-1">Заказ продукта</h1>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <!-- section-catalog -->
                <section class="section section--catalog">
                    <div class="section-content">
                        <!-- items-list -->
                        <div class="items-list">
                            <div class="block-in" data-grid>
                                <!-- item -->
                                <div class="item item--large">
                                    <div class="item-body">
                                        <div class="item-title">Сухое кобылье молоко Саумал 500 г</div>
                                        <div class="item-price"> <strong>30 000</strong> <span class="tenge">n</span> </div>
                                        <div class="item-img">
                                            <div class="img--centered" data-img-loader> <img src="img/pic-good-01.png" srcset="img/pic-good-01.png 1x, img/pic-good-01@2x.png 2x" class="img--fluid" /> </div>
                                        </div>
                                        <div class="item-controls text--center"> <button type="button" class="btn btn--blue btn--shadow btn--large btn--add" data-id="1"><span>Добавить в корзину</span></button> <a href="/order" class="btn btn--blue btn--shadow btn--large btn--rycle">Уже в корзине</a>                              </div>
                                    </div>
                                </div>
                                <!-- /item -->
                                <!-- item -->
                                <div class="item item--medium">
                                    <div class="item-body">
                                        <div class="item-title">Сухое кобылье молоко Саумал 250 г</div>
                                        <div class="item-price"> <strong>17 000</strong> <span class="tenge">n</span> </div>
                                        <div class="item-img">
                                            <div class="img--centered" data-img-loader> <img src="img/pic-good-02.png" srcset="img/pic-good-02.png 1x, img/pic-good-02@2x.png 2x" class="img--fluid" /> </div>
                                        </div>
                                        <div class="item-controls text--center"> <button type="button" class="btn btn--blue btn--shadow btn--large btn--add" data-id="2"><span>Добавить в корзину</span></button> <a href="/order" class="btn btn--blue btn--shadow btn--large btn--rycle">Уже в корзине</a>                              </div>
                                    </div>
                                </div>
                                <!-- /item -->
                                <!-- item -->
                                <div class="item item--small">
                                    <div class="item-body">
                                        <div class="item-title">Сухое кобылье молоко Саумал 200 г</div>
                                        <div class="item-price"> <strong>13 000</strong> <span class="tenge">n</span> </div>
                                        <div class="item-img"> </div>
                                        <div class="item-controls text--center"> <button type="button" class="btn btn--blue btn--shadow btn--large btn--add" data-id="3"><span>Добавить в корзину</span></button> <a href="/order" class="btn btn--blue btn--shadow btn--large btn--rycle">Уже в корзине</a>                              </div>
                                    </div>
                                </div>
                                <!-- /item -->
                            </div>
                        </div>
                        <!-- /items-list -->
                    </div>
                </section>
                <!-- /section-catalog -->
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
