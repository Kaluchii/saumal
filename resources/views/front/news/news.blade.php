@extends('front.layout')
@section('content')
    @include('front.news.meta')
    <!-- page -->
    <div class="page page--news">
        <div class="container">
            <div class="page-title text--center">
                <h2 class="title-1">@lang('all_page.about_company')</h2>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li> <a href="/mission">@lang('about_comp.mission')</a> </li>
                    <li> <a href="/factory">@lang('about_comp.factory')</a> </li>
                    <li> <a href="/process">@lang('about_comp.process')</a> </li>
                    <li class="active"> <a href="/news">@lang('about_comp.news')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <!-- news-items-list -->
                        <div class="news-items-list">
                            <h3 class="title-3">@lang('about_comp.news')</h3>
                            <div class="block-in">
                                <!-- news-item -->
                                <div class="news-item"> <time class="item-date">03. 04. 2017</time>
                                    <div class="item-title"> <a href="about.news.html">Сходство кобыльего и&nbsp;грудного молока</a> </div>
                                </div>
                                <!-- /news-item -->
                                <!-- news-item -->
                                <div class="news-item active"> <time class="item-date">03. 04. 2017</time>
                                    <div class="item-title"> <a href="about.news.html">В Казахстане испытали новый сублимационный шкаф</a> </div>
                                </div>
                                <!-- /news-item -->
                                <!-- news-item -->
                                <div class="news-item"> <time class="item-date">03. 04. 2017</time>
                                    <div class="item-title"> <a href="about.news.html">Польза саумала для детей</a> </div>
                                </div>
                                <!-- /news-item -->
                                <!-- news-item -->
                                <div class="news-item"> <time class="item-date">03. 04. 2017</time>
                                    <div class="item-title"> <a href="about.news.html">Как правильно пить кобылье молоко?</a> </div>
                                </div>
                                <!-- /news-item -->
                                <!-- news-item -->
                                <div class="news-item"> <time class="item-date">03. 04. 2017</time>
                                    <div class="item-title"> <a href="about.news.html">SAUMAL&reg;&nbsp;&mdash; новый национальный бренд Казахстана</a> </div>
                                </div>
                                <!-- /news-item -->
                            </div>
                        </div>
                        <!-- /news-items-list -->
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9">
                        <!-- section-default -->
                        <section class="section section--default">
                            <div class="section-content clearfix">
                                <h1>В Казахстане испытали новый<br /> сублимационный шкаф</h1>
                                <div class="section-cover"> <img src="img/pic-news-05.png" class="img--fluid" /> </div>
                                <p>История, как и&nbsp;сама идея возрождения национального продукта, в&nbsp;равной степени удивительна и&nbsp;показательна. Оказавшийся в&nbsp;качестве военнопленного в&nbsp;казахской степи Рудольф Шторх заболел тяжелой формой туберкулеза
                                    и&nbsp;был сочтен руководством лагеря обреченным на&nbsp;смерть, вследствие чего был отпущен умирать. Один из&nbsp;местных жителей взялся выхаживать находящегося в&nbsp;практически предсмертном состоянии Рудольфа Шторха, отпаивая
                                    его саумалом. Именно знание о&nbsp;целебных свойствах саумала (кобыльего молока) помогло поставить бывшего военнопленного на&nbsp;ноги. Спустя некоторое время, Рудольф Шторх выздоровел и&nbsp;уехал в&nbsp;Германию.</p> <img src="img/pic-news-06.png"
                                                                                                                                                                                                                                                                    class="img--fluid pull-left" />
                                <h4>Профилактика</h4>
                                <p>Уникальные и&nbsp;оздоравливающие свойства кобыльего молока и&nbsp;его производных известны людям давно. Издревле, кочевники называли парное кобылье молоко &laquo;саумал&raquo; (&laquo;мал&raquo;&nbsp;&mdash; по-казахски значит
                                    &laquo;скот&raquo;, а&nbsp;&laquo;сау&raquo;&nbsp;&mdash; здоровый, целый, невредимый). Кроме традиций и&nbsp;преданий, подтверждения уникальных полезных свойств кобыльего молока и&nbsp;его производных отмечаются в&nbsp;древних
                                    летописях и&nbsp;медицинских трактатах Гиппократа и&nbsp;Абу Али Ибн Сины, известного на&nbsp;западе как Авиценна. Труду Авиценны уже тысяча лет, большую часть которых он&nbsp;был основой медицинской науки Европы, Азии и&nbsp;Ближнего
                                    Востока.</p>
                                <p>История, как и&nbsp;сама идея возрождения национального продукта, в&nbsp;равной степени удивительна и&nbsp;показательна. Оказавшийся в&nbsp;качестве военнопленного в&nbsp;казахской степи Рудольф Шторх заболел тяжелой формой туберкулеза
                                    и&nbsp;был сочтен руководством лагеря обреченным на&nbsp;смерть, вследствие чего был отпущен умирать. Один из&nbsp;местных жителей взялся выхаживать находящегося в&nbsp;практически предсмертном состоянии Рудольфа Шторха, отпаивая
                                    его саумалом. Именно знание о&nbsp;целебных свойствах саумала (кобыльего молока) помогло поставить бывшего военнопленного на&nbsp;ноги. Спустя некоторое время, Рудольф Шторх выздоровел и&nbsp;уехал в&nbsp;Германию, где стал ярым
                                    приверженцем полезных свойств кобыльего молока и&nbsp;основал его производство.</p>
                                <!-- share-item -->
                                <div class="share-item">
                                    <div class="social-likes">
                                        <div class="facebook" title="Поделиться ссылкой на Фейсбуке">Поделиться</div>
                                        <div class="vkontakte" title="Поделиться ссылкой во Вконтакте">Поделиться</div>
                                        <div class="twitter" title="Поделиться ссылкой в Твиттере">Твитнуть</div>
                                    </div>
                                </div>
                                <!-- /share-item -->
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
