@extends('front.layout')
@section('content')
    @include('front.contacts.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h1 class="title-1">@lang('all_page.contacts')</h1>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline" role="tablist">
                    <li role="presentation" class="active"> <a href="#locations" aria-controls="locations" role="tab" data-toggle="tab">@lang('contacts.menu1')</a> </li>
                    <li role="presentation"> <a href="#address" aria-controls="address" role="tab" data-toggle="tab">@lang('contacts.menu2')</a> </li>
                    <li role="presentation"> <a href="#distributors" aria-controls="distributors" role="tab" data-toggle="tab">@lang('contacts.menu3')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="locations">
                    <!-- section-locations -->
                    <section class="section section--white section--locations">
                        <div class="container">
                            <div class="section-content">
                                <div class="section-in">
                                    <h3 class="title-3">@lang('contacts.distr_addr')</h3>
                                    <div class="nav-subcontent">
                                        <ul class="list--inline" role="tablist">
                                            <li role="presentation"> <a href="#tab-city-1" aria-controls="tab-city-1" role="tab" data-toggle="tab">Астана</a> </li>
                                            <li role="presentation" class="active"> <a href="#tab-city-2" aria-controls="tab-city-2" role="tab" data-toggle="tab">Алматы</a> </li>
                                            <li role="presentation"> <a href="#tab-city-3" aria-controls="tab-city-3" role="tab" data-toggle="tab">Атырау</a> </li>
                                            <li role="presentation"> <a href="#tab-city-4" aria-controls="tab-city-4" role="tab" data-toggle="tab">Актау</a> </li>
                                            <li role="presentation"> <a href="#tab-city-5" aria-controls="tab-city-5" role="tab" data-toggle="tab">Актобе</a> </li>
                                            <li role="presentation"> <a href="#tab-city-6" aria-controls="tab-city-6" role="tab" data-toggle="tab">Уральск</a> </li>
                                            <li role="presentation"> <a href="#tab-city-7" aria-controls="tab-city-7" role="tab" data-toggle="tab">Караганда</a> </li>
                                            <li role="presentation"> <a href="#tab-city-8" aria-controls="tab-city-8" role="tab" data-toggle="tab">Костанай</a> </li>
                                            <li role="presentation"> <a href="#tab-city-9" aria-controls="tab-city-9" role="tab" data-toggle="tab">Шымкент</a> </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade" id="tab-city-1"> контент, город Астана </div>
                                        <div role="tabpanel" class="tab-pane fade in active" id="tab-city-2">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <h6>ТОО &laquo;Торговый дом &laquo;Saumal&raquo;</h6>
                                                    <p>ул. Луганского 34</p>
                                                    <h6>Аптека №2</h6>
                                                    <p>ул. Фурманова 91/97 (уг.&nbsp;ул. Гоголя)</p>
                                                    <h6>Аптека Плюс</h6>
                                                    <p>ул. Ауэзова 175 (уг.&nbsp;ул. Габдуллина)</p>
                                                    <h6>Аптека</h6>
                                                    <p>пр. Достык 47</p>
                                                    <h6>Сеть аптек Melissa</h6>
                                                    <p> пр. Достык 42<br /> пр. Абая 141, уг.&nbsp;ул. Жарокого<br /> мкр. Тастак, ул. Туркебаева 92<br /> пр. Райымбека 239г (ТРК MAXIMA)<br /> ул. Габдуллина 57 </p>
                                                    <h6>Сеть аптек Рауза-Аде</h6>
                                                    <p> ул. Жамбыла 173<br /> Орбита 2-ой мкр., ул. Навои&nbsp;2 (уг.&nbsp;ул. Биржана)<br /> Орбита 4-ый мкр., ул. Биржана&nbsp;1<br /> Орбита 4-ый мкр., д.&nbsp;32<br /> мкр. Коктем&nbsp;1, Набережная Хамита Ергалиева 19<br
                                                        /> мкр.&nbsp;5, пр. Абая&nbsp;17 (уг.&nbsp;ул. Алтынсарина)<br /> ул. Раймбека 101<br /> ул. Раймбека 150<br /> ул. Тимирязева 101<br /> ул. Чайковского 22а<br /> ул. Емцова 20 </p>
                                                    <h6>Аптека Адони Фарм</h6>
                                                    <p> Кульджинский тракт 4а<br /> мкр. Аксай&nbsp;2, ул. Маречека 44а. </p>
                                                    <h6>Аптека МЕЙИР-ФАРМ</h6>
                                                    <p>пр. Достык 107</p>
                                                    <h6>Аптека №84</h6>
                                                    <p>мкр. Тастак, ул. Толе би&nbsp;249</p>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <h6>Гастроном Esentai Gourmet (ТРЦ Esentai Mall)</h6>
                                                    <p>пр. Аль-Фараби 77/8</p>
                                                    <h6>Санаторий &laquo;Алатау&raquo;</h6>
                                                    <p>мкр. Калкаман&nbsp;2, ул. Ауэзова 1</p>
                                                    <h6>Сеть аптек &laquo;Цветная аптека&raquo;</h6>
                                                    <p> пр. Аль-Фараби 77/7 (ТРЦ &laquo;Esentai Mall&raquo;)<br /> ул. Розыбакиева 247 (ТРЦ &laquo;MEGA Alma-ata&raquo;)<br /> ул. Макатаева 127 (ТРЦ &laquo;MEGA Park&raquo;) </p>
                                                    <h6>Офисы интернет магазина bebek.kz</h6>
                                                    <p> ул. Кабдолова&nbsp;1, 8&nbsp;блок (ТРЦ &laquo;Grand park&raquo;)<br /> ул. Шашкина 29 </p>
                                                    <h6>Супермаркет &laquo;INTERFOOD&raquo;</h6>
                                                    <p> пр. Абая 44а<br /> ул. Гоголя&nbsp;15 (уг.&nbsp;ул. Калдаякова)<br /> пр. Достык 248<br /> ул. Фурманова (уг.&nbsp;ул. Кабанбай батыра) </p>
                                                    <h6>Сеть аптек &laquo;Фарма Мир&raquo;</h6>
                                                    <p> ул. Жандосова 6<br /> ул. Толе би&nbsp;159<br /> пр. Достык 248<br /> ул. Толе би&nbsp;136 (ТРЦ &laquo;City Center&raquo;)<br /> ул. Желтоксан 112 (уг.&nbsp;ул. Аитеке&nbsp;би)<br /> ул. Толе би&nbsp;285 (уг.&nbsp;ул.
                                                        Мате Залки)<br /> г. Капчай (ТРЦ &laquo;City Center&raquo;) </p>
                                                    <h6>Магазины &laquo;МЕЛОМАН&raquo;</h6>
                                                    <p> мкр. Самал&nbsp;2, д.111 (ТРЦ &laquo;Dostyk Plaza&raquo;)<br /> ул. Розыбакиева 247 (ТРЦ &laquo;MEGA Alma-Ata&raquo;) </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab-city-3"> контент, город Атырау </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab-city-4"> контент, город Актау </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab-city-5"> контент, город Актобе </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab-city-6"> контент, город Уральск </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab-city-7"> контент, город Караганда </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab-city-8"> контент, город Костанай </div>
                                        <div role="tabpanel" class="tab-pane fade" id="tab-city-9"> контент, город Шымкент </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /section-locations -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="address">
                    <!-- section-address -->
                    <section class="section section--white section--address">
                        <div class="container">
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="section-in">
                                            <h3 class="title-3">@lang('contacts.comp_addr')</h3>
                                            <p> Республика Казахстан, Карагандинская область,<br /> Осакаровский район, с. Жансары. </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="section-map">
                                            <div class="map" data-latitude="50.565762" data-longitude="72.565293" data-zoom="13" data-color="#ed4543"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /section-address -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="distributors">
                    <!-- section-distributors -->
                    <section class="section section--white section--distributors">
                        <div class="container">
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="section-in">
                                            <h3 class="title-3">@lang('contacts.distributors')</h3>
                                            <p>ТОО &laquo;Торговый дом &laquo;Saumal&raquo;, Республика Казахстан,</p>
                                            <div class="buttons"> <a href="#" type="button" class="btn--unstyled btn--map active" data-latitude="43.238949" data-longitude="76.961628" data-zoom="17" data-pin="img/pin.png">
                                                    <strong>Алматы</strong>
                                                    ул. Луганского 34,<br />
                                                    +7 (727) 291-94-77,<br />
                                                    info_almaty@saumal.kz
                                                </a> <a href="#" type="button" class="btn--unstyled btn--map" data-latitude="43.251105" data-longitude="76.967788" data-zoom="17" data-pin="img/pin.png">
                                                    <strong>Астана</strong>
                                                    пр. Кабанбай батыра 6/3, ВП-2<br />
                                                    +7 (7172) 925-554,<br />
                                                    info_astana@saumal.kz
                                                </a> </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="section-map">
                                            <div class="map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /section-distributors -->
                </div>
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
