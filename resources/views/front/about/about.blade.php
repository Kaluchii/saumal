@extends('front.layout')
@section('content')
    @include('front.about.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h1 class="title-1">О продукте</h1>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li class="active"> <a href="/about">О продукте</a> </li>
                    <li> <a href="/composition">Состав</a> </li>
                    <li> <a href="/utility">Кому полезен Саумал</a> </li>
                    <li> <a href="/influence">Влияние на организм</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>Что такое SAUMAL<sup>&reg;</sup>?</h3>
                        <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит &laquo;скот&raquo;,
                            а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый).</p>
                        <p>SAUMAL&reg;&nbsp;&mdash; сухое белое вещество, структурой напоминающее порошок, полученное из&nbsp;цельного кобыльего молока, методом сублимации (высушивания при низкой температуре). Уникальный оздоравливающий продукт широкого применения.</p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="img"> <img src="img/pic-06.png" class="img--fluid" /> </div>
                    </div>
                </div>
            </div>
            <!-- section-howto -->
            <section class="sectio section--howto">
                <div class="container">
                    <div class="section-content">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <h3 class="title-1"> Как приготовить<br /> SAUMAL<sup>&reg;</sup>? </h3>
                                <p>Чтобы восстановить естественный состав кобыльего молока, рекомендуется разбавить SAUMAL<sup>&reg;</sup> с&nbsp;водой в&nbsp;следующих пропорциях</p>
                                <!-- items-list -->
                                <div class="items-list">
                                    <div class="row block-in">
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- item -->
                                            <div class="item">
                                                <div class="item-img">
                                                    <div class="img--centered"> <img src="img/pic-how-01.png" class="img--fluid" /> </div>
                                                </div>
                                                <div class="item-text text--center">3 столовые<br /> ложки порошка<br /> <b>20-22 г.</b></div>
                                            </div>
                                            <!-- /item -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- item -->
                                            <div class="item">
                                                <div class="item-img">
                                                    <div class="img--centered"> <img src="img/pic-how-02.png" class="img--fluid" /> </div>
                                                </div>
                                                <div class="item-text text--center">1 стакан<br /> тёплой воды (36<sup>0</sup>)<br /> <b>200 мл.</b></div>
                                            </div>
                                            <!-- /item -->
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4">
                                            <!-- item -->
                                            <div class="item">
                                                <div class="item-img">
                                                    <div class="img--centered"> <img src="img/pic-how-03.png" class="img--fluid" /> </div>
                                                </div>
                                                <div class="item-text text--center">Готовый<br /> SAUMAL<sup>&reg;</sup></div>
                                            </div>
                                            <!-- /item -->
                                        </div>
                                    </div>
                                </div>
                                <!-- /items-list -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-howto -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="img"> <img src="img/pic-07.png" class="img--fluid" /> </div>
                    </div>
                    <div class="col-lg-6 col-md-6"> <br /><br />
                        <h3> Экологически чистый продукт<br /> в&nbsp;надёжной упаковке </h3>
                        <p>Одним из&nbsp;немногих недостатков свежевыдоенного кобыльего молока (саумал), является его неспособность сохранять свои полезные свойства длительное время. Саумал &laquo;живет&raquo; только в&nbsp;течение нескольких часов после дойки
                            (!).</p>
                        <p>Однако современные достижения в&nbsp;области сублимирования (сублимационная сушка) кобыльего молока хранения помогают эффективно устранить этот недостаток, тем самым сохранив полезные свойства и&nbsp;свежесть лечебного продукта. А&nbsp;стерильная
                            вакуумная упаковка SAUMAL<sup class="reg">&reg;</sup> сохраняет все волшебные качества продукта до&nbsp;момента его приготовления и&nbsp;употребления.</p>
                        <p>Именно эти технологии позволяют нам донести и&nbsp;до&nbsp;городских жителей кобылье молоко со&nbsp;всей полнотой его уникальных природных качеств.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
