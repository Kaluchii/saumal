@section('header')
    <!-- .header -->
    <header class="header">
        <div class="container">
            <div class="column column--logo">
                <!-- logo --><a href="/" class="link--unstyled logo">
                    <img src="/img/logo-alt.png" srcset="/img/logo-alt.png 1x, /img/logo-alt@2x.png 2x, /img/logo-alt@3x.png 3x" class="img--fluid" alt="logo" />
                </a>
                <!-- /logo -->
            </div>
            <div class="column column--in">
                <div class="column column--nav">
                    <!-- nav-main -->
                    <nav class="nav-main">
                        <ul class="list--inline">
                            <li class="li-dropdown">
                                <h6 class="visible-sm">@lang('all_page.product')</h6> <a href="/about" class="hidden-sm">@lang('all_page.about_product')</a>
                                <ul class="list--unstyled">
                                    <li> <a class="js-menu-item js-menu-item--top" href="/influence">@lang('all_page.influence')</a> </li>
                                    <li> <a class="js-menu-item js-menu-item--top" href="/composition">@lang('all_page.composition')</a> </li>
                                    <li> <a class="js-menu-item js-menu-item--top" href="/utility">@lang('all_page.utility')</a> </li>
                                    <li> <a class="js-menu-item js-menu-item--top" href="/about">@lang('all_page.about')</a> </li>
                                </ul>
                            </li>
                            <li class="li-dropdown">
                                <h6 class="visible-sm">@lang('all_page.company')</h6> <a href="/mission" class="hidden-sm">@lang('all_page.about_company')</a>
                                <ul class="list--unstyled">
                                    <li> <a class="js-menu-item js-menu-item--top" href="/mission">@lang('all_page.about_company')</a> </li>
                                    <li> <a class="js-menu-item js-menu-item--top" href="/factory">@lang('all_page.factory')</a> </li>
                                    <li> <a class="js-menu-item js-menu-item--top" href="/process">@lang('all_page.process')</a> </li>
                                    <li> <a class="js-menu-item js-menu-item--top" href="/news">@lang('all_page.news')</a> </li>
                                </ul>
                            </li>
                            <li class="hidden-sm"> <a href="#">@lang('all_page.reviews')</a> </li>
                            <li class="li-dropdown">
                                <h6 class="visible-sm">@lang('all_page.contacts')</h6> <a href="/contacts" class="hidden-sm">@lang('all_page.contacts')</a>
                                <ul class="list--unstyled">
                                    <li> <a class="js-menu-item js-menu-item--top" href="/contacts">@lang('all_page.address_off')</a> </li>
                                    <li> <a class="js-menu-item js-menu-item--top" href="/contacts">@lang('all_page.address_sales')</a> </li>
                                    <li> <a class="js-menu-item js-menu-item--top" href="#">@lang('all_page.reviews')</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <!-- /nav-main --><a href="/catalog" class="btn btn--white btn--order visible-xs-inline-block">@lang('all_page.order_sau')</a>
                    <div class="visible-xs">
                        <!-- nav-lang -->
                        <div class="nav-lang">
                            <div class="dropdown"> <button class="btn btn--unstyled dropdown-toggle" type="button" id="language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">@lang('all_page.lang')</button>
                                <ul class="dropdown-menu" aria-labelledby="language">
                                    <li <?php if(App::getLocale()==='kk') echo 'class="active"' ?>><a href="/setlocale/kk">Қаз</a></li>
                                    <li <?php if(App::getLocale()==='ru') echo 'class="active"' ?>><a href="/setlocale/ru">Рус</a></li>
                                    <li <?php if(App::getLocale()==='en') echo 'class="active"' ?>><a href="/setlocale/en">Eng</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /nav-lang -->
                    </div> <button type="button" class="btn--unstyled btn--close visible-sm"><i class="icon icon-close"></i></button> </div>
                <div class="column column--contacts">
                    <div class="header-contacts">
                        <ul class="list--unstyled">
                            @foreach($all_site->phones_group as $item)
                                <li><span> {!! $item->{'city'.$lg} !!}</span> <a href="tel:{{ str_replace([' ', '(', ')', '-',], '', $item->number_field) }}">{{ $item->number_field }}</a></li>
                            @endforeach
                        </ul>
                    </div> <a href="/catalog" class="btn btn--brand btn--order hidden-xs">@lang('all_page.order_sau')</a>
                    <div class="hidden-xs">
                        <!-- nav-lang -->
                        <div class="nav-lang">
                            <div class="dropdown"> <button class="btn btn--unstyled dropdown-toggle" type="button" id="language" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">@lang('all_page.lang')</button>
                                <ul class="dropdown-menu" aria-labelledby="language">
                                    <li <?php if(App::getLocale()==='kk') echo 'class="active"' ?>><a href="/setlocale/kk">Қаз</a></li>
                                    <li <?php if(App::getLocale()==='ru') echo 'class="active"' ?>><a href="/setlocale/ru">Рус</a></li>
                                    <li <?php if(App::getLocale()==='en') echo 'class="active"' ?>><a href="/setlocale/en">Eng</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /nav-lang -->
                    </div>
                </div>
            </div> <button type="button" class="btn--unstyled btn--nav visible-sm visible-xs"><span></span></button> <button type="button" class="btn--unstyled btn--call visible-xs"><i class="icon icon-phone"></i></button> </div>
    </header>
    <!-- /.header -->
@endsection