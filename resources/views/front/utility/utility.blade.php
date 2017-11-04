@extends('front.layout')
@section('content')
    @include('front.utility.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h1 class="title-1">О продукте</h1>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li> <a href="/about">О продукте</a> </li>
                    <li> <a href="/composition">Состав</a> </li>
                    <li class="active"> <a href="/utility">Кому полезен Саумал</a> </li>
                    <li> <a href="/influence">Влияние на организм</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3> Польза молока<br /> для жителей городов </h3>
                        <p>Можно долго и&nbsp;с&nbsp;пристрастием рассказывать о&nbsp;том, насколько полезным может быть кобылье молоко. Каждый покупатель, которых пользуется этой продукцией, и&nbsp;так знает насколько оно полезно, а&nbsp;вот особенности именно
                            нашего продукта следует раскрыть несколько подробнее.</p>
                        <p>С&nbsp;нами все эти риски минимальны, ведь мы&nbsp;несем ответственность за&nbsp;качество и&nbsp;пользу своего товара, поэтому производим его на&nbsp;самом технологичном и&nbsp;эффективном оборудовании, сохраняя его состав в&nbsp;целости.</p>
                        <p> <big>
                                Произведенная нами <a href="#">сухая смесь</a> просто<br />
                                разводится водой и&nbsp;полностью соответствует<br />
                                по&nbsp;своей структуре, вкусу и&nbsp;пользе<br />
                                <a href="#">свежему молоку</a>.
                            </big> </p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <!-- preamble-items-list -->
                        <div class="preamble-items-list">
                            <div class="row block-in">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!-- preamble-item -->
                                    <div class="preamble-item">
                                        <div class="item-icon">
                                            <div class="img--centered"> <img src="img/icon-quality.png" srcset="img/icon-quality.png 1x, img/icon-quality@2x.png 2x" class="img--fluid" /> </div>
                                        </div>
                                        <h4>Качество</h4>
                                        <div class="item-text">Щадящая технология обработки сохраняет все микроэлементы в&nbsp;продукте без малейшей их&nbsp;утери.</div>
                                    </div>
                                    <!-- /preamble-item -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!-- preamble-item -->
                                    <div class="preamble-item">
                                        <div class="item-icon">
                                            <div class="img--centered"> <img src="img/icon-availability.png" srcset="img/icon-availability.png 1x, img/icon-availability@2x.png 2x" class="img--fluid" /> </div>
                                        </div>
                                        <h4>Доступность</h4>
                                        <div class="item-text">Нет необходимости выезжать за&nbsp;город в&nbsp;поиске свежего кобыльего молока. Теперь его можно купить в&nbsp;магазине</div>
                                    </div>
                                    <!-- /preamble-item -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!-- preamble-item -->
                                    <div class="preamble-item">
                                        <div class="item-icon">
                                            <div class="img--centered"> <img src="img/icon-expiry.png" srcset="img/icon-expiry.png 1x, img/icon-expiry@2x.png 2x" class="img--fluid" /> </div>
                                        </div>
                                        <h4>Срок годности</h4>
                                        <div class="item-text">Свежее кобылье молоко утрачивает свои полезные свойства уже через 2&nbsp;часа.<br /> Сухое кобылье молоко может хранится более 2х&nbsp;лет</div>
                                    </div>
                                    <!-- /preamble-item -->
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <!-- preamble-item -->
                                    <div class="preamble-item">
                                        <div class="item-icon">
                                            <div class="img--centered"> <img src="img/icon-economy.png" srcset="img/icon-economy.png 1x, img/icon-economy@2x.png 2x" class="img--fluid" /> </div>
                                        </div>
                                        <h4>Экономия</h4>
                                        <div class="item-text">Покупка Saumal обходится дешевле, чем выезд за&nbsp;город на&nbsp;поиски свежего молока.<br /> При этом полезные свойства у&nbsp;2х&nbsp;продуктов не&nbsp;отличаются.</div>
                                    </div>
                                    <!-- /preamble-item -->
                                </div>
                            </div>
                        </div>
                        <!-- /preamble-items-list -->
                    </div>
                </div>
                <!-- category-items-list -->
                <div class="category-items-list">
                    <div class="block-in">
                        <!-- category-item -->
                        <div class="category-item" id="children">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <div class="item-img">
                                        <div class="img--centered" data-img-loader> <img src="img/pic-01.png" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <h3>Детям и&nbsp;подросткам</h3>
                                    <div class="item-text">
                                        <p>Для тех, кто не&nbsp;мыслит своей жизни без спортзала, кобылье молоко станет отменным вспомогательным продуктом, улучшающим метаболизм, богатым на&nbsp;аминокислоты и&nbsp;ускоряющим восстановление организма после особо интенсивных
                                            нагрузок.</p>
                                        <p>В&nbsp;некоторых случаях наш натуральный продукт способен заменить многие медикаментозные средства, причем без малейшего вреда для организма спортсмена. Улучшение пищеварения при помощи нашего продукта позволяет лучше усваивать
                                            прочие продукты, что тоже несомненный плюс.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /category-item -->
                        <!-- category-item -->
                        <div class="category-item" id="sport">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <div class="item-img">
                                        <div class="img--centered" data-img-loader> <img src="img/pic-02.png" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <h3>Спортсменам</h3>
                                    <div class="item-text">
                                        <p>Для тех, кто не&nbsp;мыслит своей жизни без спортзала, кобылье молоко станет отменным вспомогательным продуктом, улучшающим метаболизм, богатым на&nbsp;аминокислоты и&nbsp;ускоряющим восстановление организма после особо интенсивных
                                            нагрузок.</p>
                                        <p>В&nbsp;некоторых случаях наш натуральный продукт способен заменить многие медикаментозные средства, причем без малейшего вреда для организма спортсмена. Улучшение пищеварения при помощи нашего продукта позволяет лучше усваивать
                                            прочие продукты, что тоже несомненный плюс.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /category-item -->
                        <!-- category-item -->
                        <div class="category-item" id="pregnant">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <div class="item-img">
                                        <div class="img--centered" data-img-loader> <img src="img/pic-03.png" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <h3>Беременным и<br /> кормящим женщинам</h3>
                                    <div class="item-text">
                                        <p>Беременным женщинам или&nbsp;же матерям, которые кормят грудью, кобылье молоко тоже крайне рекомендуется в&nbsp;качестве отменного вспомогательного продукта. Особенно важно это на&nbsp;последних этапах беременности, ведь в&nbsp;этот
                                            период женский организм теряет очень много энергии, восстановить которую достаточно сложно.</p>
                                        <p>В&nbsp;процессе кормления грудью SAUMAL&reg; зарекомендовал себя еще лучше, ведь его можно назвать универсальным продуктом для матери и&nbsp;ее&nbsp;новорожденного младенца, поскольку обоим необходим набор базовых полезных
                                            элементов, которыми наш продукт так богат.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /category-item -->
                        <!-- category-item -->
                        <div class="category-item" id="age">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <div class="item-img">
                                        <div class="img--centered" data-img-loader> <img src="img/pic-04.png" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <h3>Пожилым людям</h3>
                                    <div class="item-text">
                                        <p>Для людей в&nbsp;возрасте правильное сбалансированное питание играет очень большую роль, поскольку организм уже не&nbsp;способен выдерживать пиковые нагрузки. Кобылье молоко укрепляет кости, нормализует работу желудка, улучшает
                                            артериальное давление и&nbsp;стимулирует умственную деятельность, выступая своеобразной профилактикой многих старческих заболеваний.</p>
                                        <p>Польза нашего продукта действительно внушительна, а&nbsp;стоимость вполне доступна, что для пожилых людей тоже чрезвычайно важно.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /category-item -->
                    </div>
                </div>
                <!-- /category-items-list -->
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
