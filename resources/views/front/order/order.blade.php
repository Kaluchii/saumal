@extends('front.layout')
@section('content')
    @include('front.order.meta')
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
                <!-- form-rycle -->
                <div class="form--rycle">
                    <form action="/">
                        <fieldset>
                            <!-- items-list -->
                            <div class="items-list">
                                <div class="block-in">
                                    <!-- item -->
                                    <div class="item clearfix" data-price="30000" data-id="1">
                                        <div class="column column--img">
                                            <div class="item-img">
                                                <div class="block-table">
                                                    <div class="block-cell">
                                                        <div class="img--centered" data-img-loader> <img src="img/pic-good-01.png" srcset="img/pic-good-01.png 1x, img/pic-good-01@2x.png 2x" class="img--fluid" /> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column column--in clearfix">
                                            <div class="column column--title">
                                                <div class="item-title">Сухое кобылье<br /> молоко Саумал<br /> 500 г</div>
                                            </div>
                                            <div class="column column--calc">
                                                <div class="item-calc"> <label>Количество шт</label>
                                                    <div class="item-calc-in"> <button type="button" class="btn--unstyled btn--calc btn--minus"><i class="icon icon-minus"></i></button> <input type="text" class="form-control inp--calc" value="1" data-min="1" data-max="10" readonly /> <button type="button"
                                                                                                                                                                                                                                                                                                    class="btn--unstyled btn--calc btn--plus"><i class="icon icon-plus"></i></button> </div>
                                                </div>
                                            </div>
                                            <div class="column column--price">
                                                <div class="item-price"> <label>Стоимость</label> <strong data-output="price"></strong> <span class="tenge">n</span> </div>
                                            </div>
                                        </div> <button type="button" class="btn--unstyled btn--remove"><i class="icon icon-minus"></i></button> <input type="hidden" name="id" value="1" /> </div>
                                    <!-- /item -->
                                    <!-- item -->
                                    <div class="item clearfix" data-price="17000" data-id="2">
                                        <div class="column column--img">
                                            <div class="item-img">
                                                <div class="block-table">
                                                    <div class="block-cell">
                                                        <div class="img--centered" data-img-loader> <img src="img/pic-good-02.png" srcset="img/pic-good-02.png 1x, img/pic-good-02@2x.png 2x" class="img--fluid" /> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column column--in clearfix">
                                            <div class="column column--title">
                                                <div class="item-title">Сухое кобылье<br /> молоко Саумал<br /> 250 г</div>
                                            </div>
                                            <div class="column column--calc">
                                                <div class="item-calc"> <label>Количество шт</label>
                                                    <div class="item-calc-in"> <button type="button" class="btn--unstyled btn--calc btn--minus"><i class="icon icon-minus"></i></button> <input type="text" class="form-control inp--calc" value="1" data-min="1" data-max="10" readonly /> <button type="button"
                                                                                                                                                                                                                                                                                                    class="btn--unstyled btn--calc btn--plus"><i class="icon icon-plus"></i></button> </div>
                                                </div>
                                            </div>
                                            <div class="column column--price">
                                                <div class="item-price"> <label>Стоимость</label> <strong data-output="price"></strong> <span class="tenge">n</span> </div>
                                            </div>
                                        </div> <button type="button" class="btn--unstyled btn--add"><i class="icon icon-plus"></i></button> <input type="hidden" name="id" value="2" /> </div>
                                    <!-- /item -->
                                </div>
                                <div class="list-amount clearfix">
                                    <div class="pull-left"> <label>Выбрано</label> <strong data-output="count"></strong> </div>
                                    <div class="pull-right">
                                        <div class="div-inner text--right">
                                            <div class="div-in text--left"> <label>Итого к оплате</label> <strong data-output="amount"></strong> <span class="tenge">n</span> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /items-list -->
                        </fieldset>
                        <fieldset>
                            <h3>Оформление заказа</h3>
                            <div class="form-body">
                                <div class="form-in">
                                    <div class="form-group clearfix"> <label class="control-label">Как к вам обращаться</label>
                                        <div class="controls"> <input type="text" class="form-control" name="name" required /> </div>
                                    </div>
                                    <div class="form-group clearfix"> <label class="control-label">Адрес электронной почты</label>
                                        <div class="controls"> <input type="email" class="form-control" name="email" required /> </div>
                                    </div>
                                    <div class="form-group clearfix group--phone"> <label class="control-label">Номер телефона</label>
                                        <div class="controls"> <span class="prefix">+7</span> <input type="tel" class="form-control" name="phone" data-mask="(999) 999-99-99" required /> </div>
                                    </div>
                                    <div class="form-group clearfix group--city"> <label class="control-label">Город</label>
                                        <div class="controls"> <input type="text" class="form-control" name="city" required /> </div>
                                    </div>
                                    <div class="form-group clearfix group--address"> <label class="control-label">Адрес доставки</label>
                                        <div class="controls"> <input type="text" class="form-control" name="address" required /> </div>
                                    </div>
                                </div>
                                <div class="form-controls clearfix">
                                    <div class="pull-left"> <a href="/catalog" class="btn btn--white btn--back"><i class="icon icon-back"></i> <span>Вернуться к выбору продукта</span></a> </div>
                                    <div class="pull-right"> <button type="submit" class="btn btn--blue btn--shadow btn--submit"><span>Оформить заказ</span></button> </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- /form-rycle -->
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
