@section('footer')
    <!-- .footer -->
    <footer class="footer">
        <div class="footer-sup">
            <div class="container">
                <div class="column column--left">
                    <!-- logo --><a href="/" class="link--unstyled logo">
                        <img src="img/logo.png" srcset="img/logo.png 1x, img/logo@2x.png 2x" class="img--fluid" alt="logo" />
                    </a>
                    <!-- /logo -->
                    <!-- copyright -->
                    <div class="copyright"> @lang('all_page.copyright') </div>
                    <!-- /copyright -->
                </div>
                <div class="column column--center">
                    <!-- nav-inner -->
                    <div class="nav-inner clearfix">
                        <div class="column">
                            <h6>@lang('all_page.product')</h6>
                            <ul class="list--unstyled">
                                <li> <a class="js-menu-item" href="/influence">@lang('all_page.influence')</a> </li>
                                <li> <a class="js-menu-item" href="/composition">@lang('all_page.composition')</a> </li>
                                <li> <a class="js-menu-item" href="/utility">@lang('all_page.utility')</a> </li>
                                <li> <a class="js-menu-item" href="/about">@lang('all_page.about')</a> </li>
                            </ul>
                        </div>
                        <div class="column">
                            <h6>@lang('all_page.company')</h6>
                            <ul class="list--unstyled">
                                <li> <a class="js-menu-item" href="/mission">@lang('all_page.about_company')</a> </li>
                                <li> <a class="js-menu-item" href="/factory">@lang('all_page.factory')</a> </li>
                                <li> <a class="js-menu-item" href="/process">@lang('all_page.process')</a> </li>
                                <li> <a class="js-menu-item" href="/news">@lang('all_page.news')</a> </li>
                            </ul>
                        </div>
                        <div class="column">
                            <h6>@lang('all_page.contacts')</h6>
                            <ul class="list--unstyled">
                                <li> <a class="js-menu-item" href="/contacts">@lang('all_page.address_off')</a> </li>
                                <li> <a class="js-menu-item" href="/contacts">@lang('all_page.address_sales')</a> </li>
                                <li> <a class="js-menu-item" href="#">@lang('all_page.reviews')</a> </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /nav-inner -->
                </div>
                <div class="column column--right">
                    <!-- footer-contacts -->
                    <div class="footer-contacts">
                        <div>
                            <h6>Астана</h6>
                            <ul class="list--unstyled">
                                <li><a href="tel:+77172925554">+7 (7172) 92-55-54</a></li>
                            </ul>
                        </div>
                        <div>
                            <h6>Алматы</h6>
                            <ul class="list--unstyled">
                                <li><a href="tel:+77272919477">+7 (727) 291-94-77</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /footer-contacts -->
                    <!-- footer-share -->
                    <div class="footer-share">
                        <ul class="list--inline">
                            <li><a href="#" target="_blank"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icon icon-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- /footer-share -->
                </div>
            </div>
        </div>
        <div class="footer-sub">
            <div class="container">
                <div class="column column--left">
                    <!-- copyright -->
                    <div class="copyright">&copy;&nbsp;2016-2017 Saumal</div>
                    <!-- /copyright -->
                </div>
                <div class="column column--right">
                    <!-- developer --><a href="http://www.wonderbar.kz/" target="_blank" class="link--unstyled developer">
                        <span>@lang('all_page.sales_help')</span>
                        <img src="img/logo-wonderbar.png" srcset="img/logo-wonderbar.png 1x, img/logo-wonderbar@2x.png 2x" class="img--fluid" alt="logo" />
                    </a>
                    <!-- /develper -->
                </div>
            </div>
        </div>
    </footer>
    <!-- /.footer -->
@endsection