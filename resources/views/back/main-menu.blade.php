@section('main-menu')
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">Страницы редактирования</li>
            <li>
                <a href="/adm/all">
                    <i class="fa fa-circle-o"></i> <span>Для всего сайта</span>
                </a>
            </li>
            <li class="header"></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-angle-double-right"></i> <span>Главная страница</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/adm/home-slider"><i class="fa fa-circle-o"></i> <span>Слайдер</span></a></li>
                    <li><a href="/adm/home-utility"><i class="fa fa-circle-o"></i> <span>Кому полезен</span></a></li>
                    <li><a href="/adm/home-influence"><i class="fa fa-circle-o"></i> <span>Воздействие организм</span></a></li>
                    <li><a href="/adm/home-process"><i class="fa fa-circle-o"></i> <span>Процесс производства</span></a></li>
                    <li><a href="/adm/seo"><i class="fa fa-circle-o"></i> <span>Метаданные</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-angle-double-right"></i> <span>О продукте</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/adm/about"><i class="fa fa-circle-o"></i> <span>О продукте</span></a></li>
                    <li><a href="/adm/composition"><i class="fa fa-circle-o"></i> <span>Состав</span></a></li>
                    <li><a href="/adm/utility"><i class="fa fa-circle-o"></i> <span>Кому полезен</span></a></li>
                    <li><a href="/adm/influence"><i class="fa fa-circle-o"></i> <span>Влияние на организм</span></a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-angle-double-right"></i> <span>О компании</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="/adm/mission"><i class="fa fa-circle-o"></i> <span>Миссия</span></a></li>
                    <li><a href="/adm/factory"><i class="fa fa-circle-o"></i> <span>Завод</span></a></li>
                    <li><a href="/adm/process"><i class="fa fa-circle-o"></i> <span>Процесс производства</span></a></li>
                    <li><a href="/adm/news"><i class="fa fa-circle-o"></i> <span>Новости</span></a></li>
                </ul>
            </li>
            <li>
                <a href="/adm/contacts">
                    <i class="fa fa-circle-o"></i> <span>Контакты</span>
                </a>
            </li>
        </ul>
    </section>

@endsection