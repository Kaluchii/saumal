@extends('front.layout')
@section('content')
    @include('front.factory.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h1 class="title-1">@lang('all_page.about_company')</h1>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li> <a href="/mission">@lang('about_comp.mission')</a> </li>
                    <li class="active"> <a href="/factory">@lang('about_comp.factory')</a> </li>
                    <li> <a href="/process">@lang('about_comp.process')</a> </li>
                    <li> <a href="/news">@lang('about_comp.news')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <!-- section-zavod -->
            <section class="section section--zavod section--zavod-info">
                <div class="container">
                    <div class="section-content">
                        <div class="section-block">
                            <div class="row">
                                <div class="col-lg-6 col-lg-push-6 col-md-6 col-md-push-6">
                                    <h3 class="visible-xs"> Удивительная<br /> история завода </h3>
                                    <div class="section-gallery">
                                        <div class="block-in" data-grid>
                                            <!-- item -->
                                            <div class="item"> <a href="img/pic-photo-01.png" class="link--block link--zoom" rel="gallery">
                                                    <img src="img/pic-thumb-01.png" srcset="img/pic-thumb-01.png 1x, img/pic-thumb-01@2x.png 2x" class="img--fluid" />
                                                </a> </div>
                                            <!-- /item -->
                                            <!-- item -->
                                            <div class="item"> <a href="img/pic-photo-02.png" class="link--block link--zoom" rel="gallery">
                                                    <img src="img/pic-thumb-02.png" class="img--fluid" />
                                                </a> </div>
                                            <!-- /item -->
                                            <!-- item -->
                                            <div class="item"> <a href="img/pic-photo-03.png" class="link--block link--zoom" rel="gallery">
                                                    <img src="img/pic-thumb-03.png" srcset="img/pic-thumb-03.png 1x, img/pic-thumb-03@2x.png 2x" class="img--fluid" />
                                                </a> </div>
                                            <!-- /item -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-lg-pull-6 col-md-6 col-md-pull-6">
                                    <div class="section-text">
                                        <h3 class="hidden-xs"> Удивительная<br /> история завода </h3>
                                        <p>История возрождения национального продукта по-настоящему удивительна. Оказавшийся в&nbsp;военное время в&nbsp;казахской степи Рудольф Шторх заболел туберкулезом. Однако местные жители взялись выходить находящегося в&nbsp;практически
                                            предсмертном состоянии немца, отпаивая его саумалом. Спустя некоторое время Рудольф выздоровел и&nbsp;уехал в&nbsp;Германию, где стал ярым приверженцем полезных свойств кобыльего молока и&nbsp;основал его производство.</p>
                                        <p>Построенный в&nbsp;Осакаровском районе Карагандинской области казахстанский завод&nbsp;&mdash; точная копия неме цкого завода Рудольфа Шторха, только существенно увеличенная в&nbsp;масштабах. И&nbsp;мы&nbsp;с&nbsp;гордостью
                                            говорим о&nbsp;том, что являемся одним из&nbsp;крупнейших заводов в&nbsp;мире.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="section-block">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-5">
                                    <h3 class="visible-xs"> Впечатляющий<br /> масштаб производства </h3>
                                    <div class="section-stats">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="item item--large"> <strong><span>25 000</span><span data-counter>25 000</span><small>Га</small></strong> Площадь пастбищных земель </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="item"> <strong><span>20</span><span data-counter>20</span><small>тонн</small></strong> сублимированного<br /> кобыльего молока в&nbsp;год </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="item"> <strong><span>2.5</span><span data-counter>2.5</span><small>тонн</small></strong> кобыльего молока<br /> в&nbsp;сутки </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="item"> <strong><span>1 500</span><span data-counter>1 500</span></strong> Кобылиц (конематок) </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="item"> <strong><span>150</span><span data-counter>150</span></strong> Рабочих мест </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-7">
                                    <div class="section-text">
                                        <h3 class="hidden-xs"> Впечатляющий<br /> масштаб производства </h3>
                                        <p>Наш завод имеет весомые преимущества перед европейскими производителями аналогичной продукции и&nbsp;обладает намного большим потенциалом развития отрасли.</p>
                                        <p>Это доказывает и&nbsp;география, и&nbsp;климатические условия Казахстана, кормовая база, наконец, вся история народов, живших на&nbsp;территории наших степей. В&nbsp;отличие от&nbsp;европейских конезаводов, где предполагается
                                            стойловое содержание, наши кобылы находятся в&nbsp;естественной среде обитания, что является большим преимуществом и&nbsp;сказывается на&nbsp;выращивании лошадей и&nbsp;получении кобыльего молока превосходного качества.</p>
                                        <p>Внедрение немецкой технологии производства помогает достигать не&nbsp;только высоких показателей объема производства, но&nbsp;и&nbsp;контролировать высокий уровень качества выпускаемой продукции.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-zavod -->
            <!-- section-zavod -->
            <section class="section section--zavod section--zavod-remark">
                <div class="container">
                    <div class="section-content">
                        <div class="block-table">
                            <div class="block-cell"> Казахстанский завод&nbsp;&mdash; точная копия<br /> немецкого завода, только существенно<br /> увеличенная в&nbsp;размерах. </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-zavod -->
            <!-- section-zavod -->
            <section class="section section--zavod section--zavod-horse">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="section-title">
                                <h3 class="title-3"> Бережное отношение<br /> к лошадям </h3>
                            </div>
                            <div class="section-content">
                                <p>Завод SAUMAL&reg; в&nbsp;Карагандинской области&nbsp;&mdash; это сочетание бережного отношенияк животным и&nbsp;самых современных технологий. В&nbsp;отличие от&nbsp;конезаводов, где предполагается стойловое содержание, наши лошади
                                    находятся в&nbsp;естественной среде обитания, что является большим преимуществом и&nbsp;сказывается на&nbsp;выращивании лошадей и&nbsp;получении кобыльего молока превосходного качества.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="section-tip" data-animate>
                                <p>Лошади на&nbsp;нашем предприятии используются исключительно для молочного производства.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-zavod -->
            <!-- section-zavod -->
            <section class="section section--zavod section--zavod-location">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-lg-push-6 col-md-6 col-md-push-6">
                            <div class="section-title">
                                <h3 class="title-3"> Уникальное<br /> Расположение </h3>
                            </div>
                            <div class="section-content">
                                <p>Завод SAUMAL&reg; расположен в&nbsp;экологически чистом Осакаровском районе Карагандинской области.</p>
                                <p>В&nbsp;активе компании находятся 25&nbsp;000 гектаров пастбищных земель, позволяющих формировать собственную кормовую базу круглый год.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-lg-pull-6 col-md-6 col-md-pull-6">
                            <div class="section-map">
                                <div class="map" data-latitude="50.565762" data-longitude="72.565293" data-zoom="13" data-color="#ed4543"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-zavod -->
        </div>
    </div>
    <!-- /page -->
@endsection
