@extends('front.layout')
@section('content')
    @include('front.process.meta')
    <!-- page -->
    <div class="page">
        <div class="page-promo">
            <div class="container">
                <div class="page-title text--center">
                    <h2 class="title-1">О компании</h2>
                </div>
                <div class="nav-content text--center">
                    <ul class="list--inline">
                        <li> <a href="/mission">Миссия компании</a> </li>
                        <li> <a href="/factory">Завод</a> </li>
                        <li class="active"> <a href="/process">Процесс производства</a> </li>
                        <li> <a href="/news">Новости</a> </li>
                    </ul>
                </div>
                <div class="page-promo-text">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <h3>Сохраняя полезность</h3>
                            <p>Когда-то кобылье молоко было средством для ничтожно малой части людей, живущих непосредственно в&nbsp;местах разведения лошадей</p>
                            <p>Парное молоко является уникальным продуктом всего около получаса, теряя по&nbsp;прошествии этого времени большую часть своих качеств и&nbsp;свойств. Сублимирование позволяет сохранить оздоравливающие свойства кобыльего молока и&nbsp;многократно
                                продлить их&nbsp;действие.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-promo-cover bg--cover" style="background-image: url(img/page-promo-01.png);"></div>
        </div>
        <div class="page-content">
            <div class="container">
                <!-- step-items-list -->
                <div class="step-items-list">
                    <div class="block-in">
                        <!-- step-item -->
                        <div class="step-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <h3 class="visible-xs"><span>1</span> Подготовка молока</h3>
                                    <div class="item-viewport">
                                        <div class="item-slider">
                                            <div class="carousel owl-carousel">
                                                <div class="slide">
                                                    <div class="slide-img">
                                                        <div class="img--centered"> <img data-src="img/pic-slide-1-1.png" class="img--fluid owl-lazy" /> </div>
                                                    </div>
                                                    <div class="hidden" data-source="desc">
                                                        <div class="slide-in text--center">
                                                            <div class="slide-index">1.1</div>
                                                            <div class="slide-title text--uppercase">Доение кобылиц</div>
                                                            <div class="slide-text">Производится доильным аппаратом,<br /> без доступа кислорода к&nbsp;продукту<br /> во&nbsp;избежание его окисления</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <div class="slide-img">
                                                        <div class="img--centered"> <img data-src="img/pic-slide-1-2.png" class="img--fluid owl-lazy" /> </div>
                                                    </div>
                                                    <div class="hidden" data-source="desc">
                                                        <div class="slide-in text--center">
                                                            <div class="slide-index">1.2</div>
                                                            <div class="slide-title text--uppercase">Пастеризация</div>
                                                            <div class="slide-text">Проводится в&nbsp;щедящем режиме для<br /> обеспечения безопасности конечного<br /> продукта</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-desc">
                                            <div class="carousel owl-carousel"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <div class="item-in">
                                        <h3 class="hidden-xs"><span>1</span> Подготовка молока</h3>
                                        <div class="item-text">
                                            <p>На&nbsp;каждой стадии производства SAUMAL&reg; осуществляется лабораторный контроль&nbsp;&mdash; всего пять раз в&nbsp;день. После первичной очистки надоенного молока, жидкость попадает в&nbsp;большие чаны, где охлаждается,
                                                и&nbsp;начинается пастеризация с&nbsp;дальнейшей сублимацией и&nbsp;упаковкой продукта.</p>
                                            <p>Используемое нами высокотехнологичное оборудование было привезено из&nbsp;Германии и&nbsp;полностью соответствует экологическим и&nbsp;санитарным нормам. Оно гарантирует не&nbsp;только высокое качество и&nbsp;безопасность
                                                продукта, но&nbsp;и&nbsp;является гарантом экологичности обращения с&nbsp;кобылицами.</p>
                                        </div>
                                        <div class="item-meta"> <big>Для производства саумала используются казахские лошади породы <strong>Джабе</strong></big> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /step-item -->
                        <!-- step-item -->
                        <div class="step-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <h3 class="visible-xs"><span>2</span> Процесс сублимации</h3>
                                    <div class="item-viewport">
                                        <div class="item-slider">
                                            <div class="carousel owl-carousel">
                                                <div class="slide">
                                                    <div class="slide-img">
                                                        <div class="img--centered"> <img data-src="img/pic-slide-2-1.png" class="img--fluid owl-lazy" /> </div>
                                                    </div>
                                                    <div class="hidden" data-source="desc">
                                                        <div class="slide-in text--center">
                                                            <div class="slide-index">2.1</div>
                                                            <div class="slide-title text--uppercase">Замораживание</div>
                                                            <div class="slide-text">Противень с&nbsp;жидким сырьём помещают<br /> в&nbsp;скороморозильный шкаф и&nbsp;замораживают<br /> при температуре &minus;500&nbsp;С в&nbsp;течении 2&nbsp;часов</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <div class="slide-img">
                                                        <div class="img--centered"> <img data-src="img/pic-slide-2-2.png" class="img--fluid owl-lazy" /> </div>
                                                    </div>
                                                    <div class="hidden" data-source="desc">
                                                        <div class="slide-in text--center">
                                                            <div class="slide-index">2.2</div>
                                                            <div class="slide-title text--uppercase">Сушка под давлением</div>
                                                            <div class="slide-text">Замороженное сырьё высушивают в&nbsp;камере<br /> при температуре +250 под давлением<br /> 60-75 Пав течении 10-15 часов</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-desc">
                                            <div class="carousel owl-carousel"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <div class="item-in">
                                        <h3 class="hidden-xs"><span>2</span> Процесс сублимации</h3>
                                        <div class="item-text">
                                            <p>Суть процесса сублимирования (вакуумной сушки) заключается в&nbsp;высушивании продуктов при очень низких температурах.<br /> В&nbsp;результате продукт переходит в&nbsp;сухое порошкообразное состояние, сохраняя качества свежего.
                                                Однако срок хранения в&nbsp;таком виде существенно возрастает.<br /> Это технологическое чудо поможет нам сберечь для вас полезные свойства кобыльего молока.</p>
                                        </div>
                                        <div class="item-meta"> <big>с&nbsp;<strong>1&nbsp;литра</strong> молока сублимируется<br /> <strong>95&nbsp;грамм</strong> продукта</big> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /step-item -->
                        <!-- step-item -->
                        <div class="step-item">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <h3 class="visible-xs"><span>3</span> Надёжная упаковка</h3>
                                    <div class="item-viewport">
                                        <div class="item-slider">
                                            <div class="carousel owl-carousel">
                                                <div class="slide">
                                                    <div class="slide-img">
                                                        <div class="img--centered"> <img data-src="img/pic-slide-3-1.png" class="img--fluid owl-lazy" /> </div>
                                                    </div>
                                                    <div class="hidden" data-source="desc">
                                                        <div class="slide-in text--center">
                                                            <div class="slide-index">3.1</div>
                                                            <div class="slide-title text--uppercase">Вакуумная упаковка</div>
                                                            <div class="slide-text">Защищает продукт от&nbsp;воздействия кислорода,<br /> влаги и&nbsp;проникновения бактерий;<br /> обеспечивает длительный срок хранения</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="slide">
                                                    <div class="slide-img">
                                                        <div class="img--centered"> <img data-src="img/pic-slide-3-2.png" class="img--fluid owl-lazy" /> </div>
                                                    </div>
                                                    <div class="hidden" data-source="desc">
                                                        <div class="slide-in text--center">
                                                            <div class="slide-index">3.2</div>
                                                            <div class="slide-title text--uppercase">Конечная упаковка</div>
                                                            <div class="slide-text">Дополнительно защищает вакуумную<br /> упаковку от&nbsp;внешних повреждений<br /> и&nbsp;содержит информацию о&nbsp;продукте</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item-desc">
                                            <div class="carousel owl-carousel"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <div class="item-in">
                                        <h3 class="hidden-xs"><span>3</span> Надёжная упаковка</h3>
                                        <div class="item-text">
                                            <p>После процесса обработки сухое молоко помещается в&nbsp;герметичную вакуумную упаковку, защищенную от&nbsp;доступа влаги, воздуха и&nbsp;света.<br /> Вакуумный пакет, в&nbsp;свою очередь, помещается в&nbsp;картонную влагоустойчивую
                                                тубу, которая предохраняет его от&nbsp;механических повреждений.</p>
                                            <p>Уникальные свойства кобыльего молока очень хрупки, поэтому мы&nbsp;используем самую надежную упаковку, сохраняющую все свойства и&nbsp;качества кобыльего молока в&nbsp;неизменном виде.</p>
                                        </div>
                                        <div class="item-meta"> <big>Из&nbsp;одной 500-граммовой банки SAUMAL получается <strong>4,5 литров</strong> молока</big> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /step-item -->
                    </div>
                </div>
                <!-- /step-items-list -->
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
