@extends('front.layout')
@section('content')
    @include('front.influence.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h2 class="title-1">@lang('all_page.about_product')</h2>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li> <a href="/about">@lang('about.menu1')</a> </li>
                    <li> <a href="/composition">@lang('about.menu2')</a> </li>
                    <li> <a href="/utility">@lang('about.menu3')</a> </li>
                    <li class="active"> <a href="/influence">@lang('about.menu4')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="page-preview">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-7">
                            <h3> Польза для всех<br /> систем организма </h3>
                            <p>Можно долго и&nbsp;с&nbsp;пристрастием рассказывать о&nbsp;том, насколько полезным может быть кобылье молоко. Каждый покупатель, которых пользуется этой продукцией, и&nbsp;так знает насколько оно полезно, а&nbsp;вот особенности именно
                                нашего продукта следует раскрыть несколько подробнее. Самое важное заключается в&nbsp;следующем:</p>
                            <p>С&nbsp;нами все эти риски минимальны, ведь мы&nbsp;несем ответственность за&nbsp;качество и&nbsp;пользу своего товара, поэтому производим его на&nbsp;самом технологичном и&nbsp;эффективном оборудовании, сохраняя его состав в&nbsp;целости.</p>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5">
                            <div class="img"> <img src="img/pic-08.png" class="img--fluid" /> </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-sticky-parent>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!-- nav-category -->
                        <div class="nav-category hidden-xs" data-sticky>
                            <ul class="list--unstyled">
                                <li> <a href="#nervous">
                                        <i class="icon icon-nervous"></i> <span>Нервная система</span>
                                    </a> </li>
                                <li> <a href="#circulatory">
                                        <i class="icon icon-circulatory"></i> <span>Кровеносная система</span>
                                    </a> </li>
                                <li> <a href="#respiratory">
                                        <i class="icon icon-respiratory"></i> <span>Дыхательная система</span>
                                    </a> </li>
                                <li> <a href="#digestive">
                                        <i class="icon icon-digestive"></i> <span>Пищеварительная система</span>
                                    </a> </li>
                                <li> <a href="#endocrine">
                                        <i class="icon icon-endocrine"></i> <span>Эндокринная система</span>
                                    </a> </li>
                                <li> <a href="#cover">
                                        <i class="icon icon-cover"></i> <span>Покровная система</span>
                                    </a> </li>
                            </ul>
                        </div>
                        <!-- /nav-category -->
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <!-- section-default -->
                        <section class="section section--default" id="nervous">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-nervous"></i> <span>Нервная система</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="img/pic-nervous-alt.png" class="img--fluid" /> </div>
                                <h2 class="title-1">Нервная система</h2>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока. Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p> <br /><br />
                                <h3>Хронический панкриатит</h3>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <div class="section-cover mode--text"> <img src="img/pic-10.png" class="img--fluid" />
                                    <div class="section-cover-in">
                                        <div class="block-table">
                                            <div class="block-cell">
                                                <p> <big>
                                                        Употребление <strong>Саумала</strong> после операции<br />
                                                        поможет вам  избавиться от болей<br />
                                                        в желудке и кишечнике
                                                    </big> </p>
                                                <p>Ангелина Ершова, логопед</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h3>Дисфункция желчно-выводящих путей</h3>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p> <img src="img/pic-news-06.png" class="img--fluid pull-left" />
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <h2> Хронические вирусные гепатиты<br /> B, C и D </h2>
                                <h4>Профилактика</h4>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <h4>Восстановление</h4>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <h4>Помощь в лечении</h4> <img src="img/pic-09.png" class="img--fluid pull-right" />
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                            </div>
                        </section>
                        <!-- /section-default -->
                        <!-- section-default -->
                        <section class="section section--default" id="circulatory">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-circulatory"></i> <span>Кровеносная система</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="img/pic-circulatory-alt.png" class="img--fluid" /> </div>
                                <h2 class="title-1">Кровеносная система</h2>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока. Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                            </div>
                        </section>
                        <!-- /section-default -->
                        <!-- section-default -->
                        <section class="section section--default" id="respiratory">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-respiratory"></i> <span>Дыхательная система</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="img/pic-respiratory-alt.png" class="img--fluid" /> </div>
                                <h2 class="title-1">Дыхательная система</h2>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока. Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                            </div>
                        </section>
                        <!-- /section-default -->
                        <!-- section-default -->
                        <section class="section section--default" id="digestive">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-digestive"></i> <span>Пищеварительная система</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="img/pic-digestive-alt.png" class="img--fluid" /> </div>
                                <h2 class="title-1">Пищеварительная система</h2>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока. Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                            </div>
                        </section>
                        <!-- /section-default -->
                        <!-- section-default -->
                        <section class="section section--default" id="endocrine">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-endocrine"></i> <span>Эндокринная система</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="img/pic-endocrine-alt.png" class="img--fluid" /> </div>
                                <h2 class="title-1">Эндокринная система</h2>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока. Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                            </div>
                        </section>
                        <!-- /section-default -->
                        <!-- section-default -->
                        <section class="section section--default" id="cover">
                            <div class="nav-category visible-xs">
                                <ul class="list--unstyled">
                                    <li> <a href="#" data-toggle="tab-mobile">
                                            <i class="icon icon-cover"></i> <span>Покровная система</span>
                                        </a> </li>
                                </ul>
                            </div>
                            <div class="section-content clearfix">
                                <div class="section-img pull-left"> <img src="img/pic-cover-alt.png" class="img--fluid" /> </div>
                                <h2 class="title-1">Покровная система</h2>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока. Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока</p>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                            </div>
                        </section>
                        <!-- /section-default -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
