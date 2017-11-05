@extends('front.layout')
@section('content')
    @include('front.index.meta')
    <!-- page -->
    <div class="page">
        <div class="page-content">
            <!-- section-promo -->
            <section class="section section--promo">
                <div class="carousel owl-carousel" data-interval="7000">
                    <!-- slide -->
                    <div class="slide">
                        <div class="slide-body">
                            <div class="container">
                                <div class="slide-in">
                                    <div class="block-table">
                                        <div class="block-cell">
                                            <div class="row">
                                                <div class="col-lg-5 col-lg-offset-7 col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-6">
                                                    <h2 class="title-1"> Здоровое<br /> и полезное<br /> питание </h2>
                                                    <p>SAUMAL&reg; производится с&nbsp;помощью современных<br /> немецких технологий, которые позволяют сохранять полезные свойства свежего кобыльего молока.</p> <a href="/about" class="btn btn--blue btn--shadow btn--large">Подробнее о продукте</a>                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-cover hidden-xs"> <img data-src="/img/pic-promo-01.jpg" class="img--fluid owl-lazy" /> </div>
                        <div class="slide-cover visible-xs"> <img data-src="/img/pic-promo-01-mobile.png" class="img--fluid owl-lazy" /> </div>
                    </div>
                    <!-- /slide -->
                    <!-- slide -->
                    <div class="slide">
                        <div class="slide-body">
                            <div class="container">
                                <div class="slide-in">
                                    <div class="block-table">
                                        <div class="block-cell">
                                            <div class="row">
                                                <div class="col-lg-5 col-lg-offset-7 col-md-6 col-md-offset-6 col-sm-7 col-sm-offset-5">
                                                    <h2 class="title-1"> Здоровое<br /> и полезное<br /> питание </h2>
                                                    <p>SAUMAL&reg; производится с&nbsp;помощью современных<br /> немецких технологий, которые позволяют сохранять полезные свойства свежего кобыльего молока.</p> <a href="/about" class="btn btn--blue btn--shadow btn--large">Подробнее о продукте</a>                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide-cover hidden-xs"> <img data-src="/img/pic-promo-02.jpg" class="img--fluid owl-lazy" /> </div>
                        <div class="slide-cover visible-xs"> <img data-src="/img/pic-promo-02-mobile.png" class="img--fluid owl-lazy" /> </div>
                    </div>
                    <!-- /slide -->
                </div>
            </section>
            <!-- /section-promo -->
            <!-- section-target -->
            <section class="section section--target">
                <div class="container">
                    <div class="section-title text--center">
                        <h3 class="title-1">Кому полезен SAUMAL<sup>&reg;</sup>?</h3>
                    </div>
                    <div class="section-content">
                        <!-- items-list -->
                        <div class="items-list">
                            <div class="row block-in">
                                <div class="col-lg-6 col-md-6">
                                    <!-- item -->
                                    <div class="item item--pregnant">
                                        <a href="/utility#pregnant" class="link--block">
                                            <h5>Беременным<br /> и&nbsp;кормящим женщинам</h5>
                                            <div class="item-text hidden-xs">Сходство кобыльего молока с&nbsp;грудным дает основания и&nbsp;возможность рассматривать его в&nbsp;качестве альтернативы грудного молоку.</div>
                                            <div class="item-img" data-img-loader> <img src="/img/pic-cat-01.png" class="img--fluid" /> </div> <span class="item-more text--center text--white">
									<span class="hidden-xs">@lang('index.more_info')</span> <span class="visible-xs-inline">@lang('index.learn_more')</span> </span>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- item -->
                                    <div class="item item--children">
                                        <a href="/utility#children" class="link--block">
                                            <h5>Детям<br /> и&nbsp;подросткам</h5>
                                            <div class="item-text hidden-xs">Употребление SAUMAL&reg;&nbsp;&mdash; хорошая основа для профилактики болезней и&nbsp;нарушений работы организма в&nbsp;первые годы жизни.</div>
                                            <div class="item-img" data-img-loader> <img src="/img/pic-cat-02.png" class="img--fluid" /> </div> <span class="item-more text--center text--white">
									<span class="hidden-xs">@lang('index.more_info')</span> <span class="visible-xs-inline">@lang('index.learn_more')</span> </span>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- item -->
                                    <div class="item item--age">
                                        <a href="/utility#age" class="link--block">
                                            <h5>Пожилым людям</h5>
                                            <div class="item-text hidden-xs">Кобылье молоко не&nbsp;содержит трансизомеров жирных кислот, ослабляющих иммунитет и&nbsp;способствующих развитию сердечно-сосудистых и&nbsp;онкологических заболеваний.</div>
                                            <div class="item-img" data-img-loader> <img src="/img/pic-cat-03.png" class="img--fluid" /> </div> <span class="item-more text--center text--white">
									<span class="hidden-xs">@lang('index.more_info')</span> <span class="visible-xs-inline">@lang('index.learn_more')</span> </span>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <!-- item -->
                                    <div class="item item--sport">
                                        <a href="/utility#sport" class="link--block">
                                            <h5>Спортсменам</h5>
                                            <div class="item-text hidden-xs">SAUMAL&reg; помогает набору мышечной массы и&nbsp;укреплению скелета, снижает риск накопления холестерина и&nbsp;повышает энергоемкость рациона.</div>
                                            <div class="item-img" data-img-loader> <img src="/img/pic-cat-04.png" class="img--fluid" /> </div> <span class="item-more text--center text--white">
									<span class="hidden-xs">@lang('index.more_info')</span> <span class="visible-xs-inline">@lang('index.learn_more')</span> </span>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                            </div>
                        </div>
                        <!-- /items-list -->
                    </div>
                </div>
            </section>
            <!-- /section-target -->
            <!-- section-profit -->
            <section class="section section--profit">
                <div class="container">
                    <div class="section-title text--center">
                        <h3 class="title-1 hidden-xs">Воздействие на организм</h3>
                        <h3 class="title-1 visible-xs">Воздействие<br /> SAUMAL<sup>&reg;</sup><br /> <span>на организм</span></h3>
                    </div>
                    <div class="section-content clearfix">
                        <div class="column column--left">
                            <div class="hidden-xs">
                                <!-- nav-category -->
                                <div class="nav-category mode--2">
                                    <ul class="list--unstyled" role="tablist">
                                        <li role="presentation" class="active"> <a href="#tab-nervous" aria-controls="tab-nervous" role="tab" data-toggle="tab">
                                                <i class="icon icon-nervous"></i> <span>Нервная система</span>
                                            </a> </li>
                                        <li role="presentation"> <a href="#tab-circulatory" aria-controls="tab-circulatory" role="tab" data-toggle="tab">
                                                <i class="icon icon-circulatory"></i> <span>Кровеносная система</span>
                                            </a> </li>
                                        <li role="presentation"> <a href="#tab-respiratory" aria-controls="tab-respiratory" role="tab" data-toggle="tab">
                                                <i class="icon icon-respiratory"></i> <span>Дыхательная система</span>
                                            </a> </li>
                                        <li role="presentation"> <a href="#tab-digestive" aria-controls="tab-digestive" role="tab" data-toggle="tab">
                                                <i class="icon icon-digestive"></i> <span>Пищеварительная система</span>
                                            </a> </li>
                                        <li role="presentation"> <a href="#tab-endocrine" aria-controls="tab-endocrine" role="tab" data-toggle="tab">
                                                <i class="icon icon-endocrine"></i> <span>Эндокринная система</span>
                                            </a> </li>
                                        <li role="presentation"> <a href="#tab-cover" aria-controls="tab-cover" role="tab" data-toggle="tab">
                                                <i class="icon icon-cover"></i> <span>Покровная система</span>
                                            </a> </li>
                                    </ul>
                                </div>
                                <!-- /nav-category -->
                            </div>
                            <div class="visible-xs">
                                <!-- nav-category -->
                                <div class="nav-category mode--2">
                                    <ul class="list--unstyled">
                                        <li> <a href="/influence#nervous">
                                                <i class="icon icon-nervous"></i> <span>Нервная система</span>
                                            </a> </li>
                                        <li> <a href="/influence#circulatory">
                                                <i class="icon icon-circulatory"></i> <span>Кровеносная система</span>
                                            </a> </li>
                                        <li> <a href="/influence#respiratory">
                                                <i class="icon icon-respiratory"></i> <span>Дыхательная система</span>
                                            </a> </li>
                                        <li> <a href="/influence#digestive">
                                                <i class="icon icon-digestive"></i> <span>Пищеварительная система</span>
                                            </a> </li>
                                        <li> <a href="/influence#endocrine">
                                                <i class="icon icon-endocrine"></i> <span>Эндокринная система</span>
                                            </a> </li>
                                        <li> <a href="/influence#cover">
                                                <i class="icon icon-cover"></i> <span>Покровная система</span>
                                            </a> </li>
                                    </ul>
                                </div>
                                <!-- /nav-category -->
                            </div>
                        </div>
                        <div class="column column--right clearfix hidden-xs">
                            <div class="column column--schema"> <img src="/img/pic-nervous.png" class="img--fluid active" data-img="tab-nervous" /> <img src="/img/pic-circulatory.png" class="img--fluid" data-img="tab-circulatory" /> <img src="/img/pic-respiratory.png" class="img--fluid" data-img="tab-respiratory"
                                /> <img src="/img/pic-digestive.png" class="img--fluid" data-img="tab-digestive" /> <img src="/img/pic-endocrine.png" class="img--fluid" data-img="tab-endocrine" /> <img src="/img/pic-cover.png" class="img--fluid" data-img="tab-cover"
                                /> </div>
                            <div class="column column--tab">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="tab-nervous">
                                        <h3>Нервная<br /> система</h3>
                                        <p> Кобылье молоко положительно влияет на&nbsp;нервную систему человека.<br /> После начала приема продукта снижается раздражительность и&nbsp;хроническая усталость. Также повышается уровень серотонина&nbsp;&mdash; так называемого
                                            &laquo;гормона счастья&raquo;, помогающего избежать депрессии. </p>
                                        <p>Крайне полезные аминокислоты кобыльего молока оказывают положительное влияние на&nbsp;настроение, аппетит и&nbsp;половое влечение.</p> <a href="/influence#nervous" class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a>                            </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-circulatory">
                                        <h3>Кровеносная<br /> система</h3>
                                        <p>Кобылье молоко нормализует число лейкоцитов, являющихся надежными защитниками организма человека.</p>
                                        <p>Постоянное употребление кобыльего молока, в&nbsp;целом, снижает уровень холестерина в&nbsp;крови.</p> <a href="/influence#circulatory" class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a>                            </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-respiratory">
                                        <h3>Дыхательная<br /> система</h3>
                                        <p>Рекомендуется употреблять кобылье молоко при заболеваниях органов дыхания, в&nbsp;частности при бронхите, пневмонии, плеврите.</p>
                                        <p> Кобылье молоко также выступает в&nbsp;качестве эффективного дополнительного средства при лечении коклюша и&nbsp;туберкулеза.<br /> Оно укрепляет иммунитет, тем самым предупреждает простудные заболевания. </p> <a href="/influence#respiratory"
                                                                                                                                                                                                                                                                class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a> </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-digestive">
                                        <h3>Пищеварительная<br /> система</h3>
                                        <p>Употребление кобыльего молоко позволяет укрепить кишечную микрофлору и&nbsp;повысить защитную функцию печени. Оно обладает бактерицидными свойствами в&nbsp;отношении патогенной микрофлоры, т.к. уменьшает процессы брожения и&nbsp;гниения
                                            в&nbsp;кишечнике.</p>
                                        <p>Кобылье молоко также способствует улучшению пищеварения, ведь оно нормализует выделительную деятельность желудка и&nbsp;поджелудочной железы, регулирует образование желчи.</p> <a href="/influence#digestive"
                                                                                                                                                                                                                              class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a> </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-endocrine">
                                        <h3>Эндокринная<br /> система</h3>
                                        <p>К&nbsp;эндокринной системе человека относятся органы внутренней секреции. Они вырабатывают около сотни видов гормонов, необходимых для поддержания организма в&nbsp;здоровом состоянии. Нарушение выработки даже одного гормона
                                            может привести к&nbsp;серьезным заболеваниям.</p>
                                        <p>Постоянное употребление кобыльего молока укрепляет иммунитет, вследствие чего нормализуется работа надпочечников. Это приводит к&nbsp;стабилизации гормонального фона.</p> <a href="/influence#endocrine"
                                                                                                                                                                                                                         class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a> </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab-cover">
                                        <h3>Благотворное<br /> влияние на кожу</h3>
                                        <p>Сегодня кобылье молоко применяется и&nbsp;при лечении таких кожных заболеваний, как: псориаз, экзема, нейродермит, дерматит и&nbsp;другие кожные заболевания.</p>
                                        <p>Уникальный состав кобыльего молока способствует регенерации и&nbsp;увлажнению кожи, помогает надолго сохранить ее&nbsp;молодость и&nbsp;свежесть, замедляет процесс старения клеток организма.</p> <a href="/influence#cover"
                                                                                                                                                                                                                                                 class="btn btn--blue btn--shadow btn--large btn--more">@lang('index.learn_about')</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-profit-->
            <!-- section-production -->
            <section class="section section--production">
                <div class="container">
                    <div class="section-content">
                        <div class="section-hero">
                            <div class="block-table">
                                <div class="block-cell">
                                    <div class="section-title">
                                        <h3 class="title-1"> Европейская<br /> технология<br /> производства </h3>
                                    </div>
                                    <p> Современные технологии сублимации позволяют донести<br /> полезные свойства свежевыдоинного кобыльего молока<br /> (саумала) до&nbsp;потребителя </p>
                                </div>
                            </div>
                        </div>
                        <!-- items-list -->
                        <div class="items-list step--1">
                            <h3><span>1</span> Подготовка молока</h3>
                            <div class="block-in">
                                <!-- item -->
                                <div class="item hidden-xs">
                                    <div class="item-body">
                                        <div class="item-title text--uppercase text--blue">Доение кобылиц</div>
                                        <div class="item-text">Cовременным доильным аппаратом<br /> без доступа кислорода к&nbsp;продукту<br /> во&nbsp;избежание его окисления</div>
                                    </div>
                                </div>
                                <!-- /item -->
                                <!-- item -->
                                <div class="item hidden-xs">
                                    <div class="item-body">
                                        <div class="item-title text--uppercase text--blue">Пастеризация</div>
                                        <div class="item-text">Проводится в&nbsp;щедящем режиме для<br /> обеспечения безопасности конечного<br /> продукта</div>
                                    </div>
                                </div>
                                <!-- /item -->
                                <!-- item -->
                                <div class="item item--accent">
                                    <div class="item-body">
                                        <div class="item-text">Для производства саумала<br /> используются казахские<br /> лошади породы <strong>Джабе</strong></div>
                                        <div class="item-img"> <img src="/img/pic-step1.png" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <!-- /item -->
                            </div>
                        </div>
                        <!-- /items-list -->
                        <!-- items-list -->
                        <div class="items-list step--2">
                            <h3><span>2</span> Процесс сублимации</h3>
                            <div class="block-in">
                                <!-- item -->
                                <div class="item hidden-xs">
                                    <div class="item-body">
                                        <div class="item-title text--uppercase text--blue">замораживание</div>
                                        <div class="item-text">Противень с&nbsp;жидким сырьём помещают<br /> в&nbsp;скороморозильный шкаф и&nbsp;замораживают<br /> при температуре &minus;500&nbsp;С в&nbsp;течении 2&nbsp;часов</div>
                                    </div>
                                </div>
                                <!-- /item -->
                                <!-- item -->
                                <div class="item hidden-xs">
                                    <div class="item-body">
                                        <div class="item-title text--uppercase text--blue">Сушка под давлением</div>
                                        <div class="item-text">Замороженное сырьё высушивают в&nbsp;камере<br /> при температуре +250 под давлением 60-75&nbsp;Па<br /> в&nbsp;течении 10-15 часов</div>
                                    </div>
                                </div>
                                <!-- /item -->
                                <!-- item -->
                                <div class="item item--accent">
                                    <div class="item-body">
                                        <div class="item-text">с <strong>1 литра</strong> молока<br /> сублимируется<br /> <strong>95 грамм</strong> продукта</div>
                                        <div class="item-img"> <img src="/img/pic-step2.png" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <!-- /item -->
                            </div>
                        </div>
                        <!-- /items-list -->
                        <!-- items-list -->
                        <div class="items-list step--3">
                            <h3><span>3</span> Упаковка</h3>
                            <div class="block-in">
                                <!-- item -->
                                <div class="item hidden-xs">
                                    <div class="item-body">
                                        <div class="item-title text--uppercase text--blue">Вакуумная упаковка</div>
                                        <div class="item-text">Защищает продукт от&nbsp;воздействия кислорода,<br /> влаги и&nbsp;проникновения бактерий; обеспечивает<br /> длительный и&nbsp;безопасный срок хранения</div>
                                    </div>
                                </div>
                                <!-- /item -->
                                <!-- item -->
                                <div class="item hidden-xs">
                                    <div class="item-body">
                                        <div class="item-title text--uppercase text--blue">Конечная упаковка</div>
                                        <div class="item-text">Дополнительно защищает вакуумную<br /> упаковку от&nbsp;внешних повреждений<br /> и&nbsp;содержит информацию о&nbsp;продукте</div>
                                    </div>
                                </div>
                                <!-- /item -->
                                <!-- item -->
                                <div class="item item--accent">
                                    <div class="item-body">
                                        <div class="item-text">Из&nbsp;одной 500-граммовой<br /> банки SAUMAL получается<br /> <strong>4,5 литров</strong> молока</div>
                                        <div class="item-img"> <img src="/img/pic-step3.png" class="img--fluid" /> </div>
                                    </div>
                                </div>
                                <!-- /item -->
                            </div>
                        </div>
                        <!-- /items-list -->
                        <div class="section-controls"> <a href="/process" class="btn btn--blue btn--shadow btn--large">@lang('index.about_process')</a>
                            <div class="hidden-xs"> Современные технологии производства помогает донести<br /> всю пользу свежего кобыльего молока до&nbsp;потребителя </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /section-production -->
            <!-- section-news -->
            <section class="section section--news">
                <div class="container">
                    <div class="section-title text--center">
                        <h3 class="title-1">@lang('all_page.news')</h3>
                    </div>
                    <div class="section-content">
                        <!-- items-list -->
                        <div class="items-list">
                            <div class="row block-in carousel">
                                <div class="col-lg-3 col-md-3">
                                    <!-- item -->
                                    <div class="item">
                                        <a href="about.news.html" class="link--block">
                                            <div class="item-img">
                                                <div class="ratio hidden-xs" data-img-loader> <img data-src="/img/pic-news-01.png" data-src-retina="/img/pic-news-01@2x.png" class="img--fluid owl-lazy" /> </div>
                                                <div class="ratio visible-xs" data-img-loader> <img src="/img/pic-news-01-mobile.png" srcset="/img/pic-news-01-mobile.png 1x, /img/pic-news-01-mobile@2x.png 2x" class="img--fluid" /> </div>
                                            </div>
                                            <div class="item-title text--black">Сходство кобыльего и&nbsp;грудного молока</div>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <!-- item -->
                                    <div class="item">
                                        <a href="about.news.html" class="link--block">
                                            <div class="item-img">
                                                <div class="ratio hidden-xs" data-img-loader> <img data-src="/img/pic-news-02.png" data-src-retina="/img/pic-news-02@2x.png" class="img--fluid owl-lazy" /> </div>
                                                <div class="ratio visible-xs" data-img-loader> <img src="/img/pic-news-02-mobile.png" srcset="/img/pic-news-02-mobile.png 1x, /img/pic-news-02-mobile@2x.png 2x" class="img--fluid" /> </div>
                                            </div>
                                            <div class="item-title text--black">SAUMAL&reg;&nbsp;&mdash; национальный бренд Казахстана</div>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <!-- item -->
                                    <div class="item">
                                        <a href="about.news.html" class="link--block">
                                            <div class="item-img">
                                                <div class="ratio hidden-xs" data-img-loader> <img data-src="/img/pic-news-03.png" class="img--fluid owl-lazy" /> </div>
                                                <div class="ratio visible-xs" data-img-loader> <img src="/img/pic-news-03-mobile.png" class="img--fluid" /> </div>
                                            </div>
                                            <div class="item-title text--black">Польза саумала для детей</div>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <!-- item -->
                                    <div class="item">
                                        <a href="about.news.html" class="link--block">
                                            <div class="item-img">
                                                <div class="ratio hidden-xs" data-img-loader> <img data-src="/img/pic-news-04.png" data-src-retina="/img/pic-news-04@2x.png" class="img--fluid owl-lazy" /> </div>
                                                <div class="ratio visible-xs" data-img-loader> <img src="/img/pic-news-04-mobile.png" srcset="/img/pic-news-04-mobile.png 1x, /img/pic-news-04-mobile@2x.png 2x" class="img--fluid" /> </div>
                                            </div>
                                            <div class="item-title text--black">Как правильно пить кобылье молоко?</div>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <!-- item -->
                                    <div class="item">
                                        <a href="about.news.html" class="link--block">
                                            <div class="item-img">
                                                <div class="ratio hidden-xs" data-img-loader> <img data-src="/img/pic-news-01.png" data-src-retina="/img/pic-news-01@2x.png" class="img--fluid owl-lazy" /> </div>
                                                <div class="ratio visible-xs" data-img-loader> <img src="/img/pic-news-01-mobile.png" srcset="/img/pic-news-01-mobile.png 1x, /img/pic-news-01-mobile@2x.png 2x" class="img--fluid" /> </div>
                                            </div>
                                            <div class="item-title text--black">Сходство кобыльего и&nbsp;грудного молока</div>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <!-- item -->
                                    <div class="item">
                                        <a href="about.news.html" class="link--block">
                                            <div class="item-img">
                                                <div class="ratio hidden-xs" data-img-loader> <img data-src="/img/pic-news-02.png" data-src-retina="/img/pic-news-02@2x.png" class="img--fluid owl-lazy" /> </div>
                                                <div class="ratio visible-xs" data-img-loader> <img src="/img/pic-news-02-mobile.png" srcset="/img/pic-news-02-mobile.png 1x, /img/pic-news-02-mobile@2x.png 2x" class="img--fluid" /> </div>
                                            </div>
                                            <div class="item-title text--black">SAUMAL&reg;&nbsp;&mdash; национальный бренд Казахстана</div>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <!-- item -->
                                    <div class="item">
                                        <a href="about.news.html" class="link--block">
                                            <div class="item-img">
                                                <div class="ratio hidden-xs" data-img-loader> <img data-src="/img/pic-news-03.png" class="img--fluid owl-lazy" /> </div>
                                                <div class="ratio visible-xs" data-img-loader> <img src="/img/pic-news-03-mobile.png" class="img--fluid" /> </div>
                                            </div>
                                            <div class="item-title text--black">Польза саумала для детей</div>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                                <div class="col-lg-3 col-md-3">
                                    <!-- item -->
                                    <div class="item">
                                        <a href="about.news.html" class="link--block">
                                            <div class="item-img">
                                                <div class="ratio hidden-xs" data-img-loader> <img data-src="/img/pic-news-04.png" data-src-retina="/img/pic-news-04@2x.png" class="img--fluid owl-lazy" /> </div>
                                                <div class="ratio visible-xs" data-img-loader> <img src="/img/pic-news-04-mobile.png" srcset="/img/pic-news-04-mobile.png 1x, /img/pic-news-04-mobile@2x.png 2x" class="img--fluid" /> </div>
                                            </div>
                                            <div class="item-title text--black">Как правильно пить кобылье молоко?</div>
                                        </a>
                                    </div>
                                    <!-- /item -->
                                </div>
                            </div>
                        </div>
                        <!-- /items-list -->
                    </div>
                </div>
            </section>
            <!-- /section-news -->
        </div>
    </div>
    <!-- /page -->
@endsection
