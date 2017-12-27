@extends('front.layout')
@section('content')
    @include('front.composition.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h1 class="title-1">@lang('all_page.about_product')</h1>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li> <a href="/about">@lang('about.menu1')</a> </li>
                    <li class="active"> <a href="/composition">@lang('about.menu2')</a> </li>
                    <li> <a href="/utility">@lang('about.menu3')</a> </li>
                    <li> <a href="/influence">@lang('about.menu4')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3>{!! $composition->{'block_title'.$lg} !!}</h3>
                        {!! $composition->{'block_text'.$lg} !!}
                    </div>
                    <div class="col-lg-6 col-md-6 text--right">
                        <!-- elements-item -->
                        <div class="elements-item">
                            <h3>@lang('about.bio_title')</h3>
                            <div class="block-in">@lang('about.bio_subtitle')</div>
                            <div class="block-in"> <label>@lang('about.bio_vit')</label>
                                <ul class="list--inline text--uppercase list--vitamins">
                                    <li class="item--c"> <span class="el">c</span> </li>
                                    <li class="item--b1"> <span class="el">b<sub>1</sub></span> </li>
                                    <li class="item--b6"> <span class="el">b<sub>6</sub></span> </li>
                                    <li class="item--a"> <span class="el">a</span> </li>
                                    <li class="item--b2"> <span class="el">b<sub>2</sub></span> </li>
                                    <li class="item--b12"> <span class="el">b<sub>12</sub></span> </li>
                                    <li class="item--b9"> <span class="el">b<sub>9</sub></span> </li>
                                </ul>
                            </div>
                            <div class="block-in"> <label>@lang('about.bio_mic')</label>
                                <ul class="list--inline list--micro">
                                    <li> <span class="el">Na</span> <span class="name">@lang('about.na')</span> </li>
                                    <li> <span class="el">Fe</span> <span class="name">@lang('about.fe')</span> </li>
                                    <li> <span class="el">S</span> <span class="name">@lang('about.s')</span> </li>
                                    <li> <span class="el">Ca</span> <span class="name">@lang('about.ca')</span> </li>
                                    <li> <span class="el">Mg</span> <span class="name">@lang('about.mg')</span> </li>
                                    <li> <span class="el">Si</span> <span class="name">@lang('about.si')</span> </li>
                                    <li> <span class="el">K</span> <span class="name">@lang('about.k')</span> </li>
                                    <li> <span class="el">Cu</span> <span class="name">@lang('about.cu')</span> </li>
                                    <li> <span class="el">Zn</span> <span class="name">@lang('about.zn')</span> </li>
                                    <li> <span class="el">P</span> <span class="name">@lang('about.p')</span> </li>
                                    <li> <span class="el">I</span> <span class="name">@lang('about.i')</span> </li>
                                    <li> <span class="el">Co</span> <span class="name">@lang('about.co')</span> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /elements-item -->
                    </div>
                </div>
                <h3>@lang('about.t_title')</h3>
                <div class="table">
                    <div class="table-head">
                        <table>
                            <thead>
                            <tr>
                                <th>@lang('about.t_column_title1')</th>
                                <th>@lang('about.t_column_title2')</th>
                                <th>@lang('about.t_column_title3')</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-body">
                        <table>
                            <tbody>
                                <tr><td>@lang('about.t_1')</td><td>kcal</td><td>48</td></tr>
                                <tr><td></td><td>kJ</td><td>199</td></tr>
                                <tr><td>@lang('about.t_2')</td><td>g</td><td>89,7</td></tr>
                                <tr><td>@lang('about.t_3')</td><td>g</td><td>2,2</td></tr>
                                <tr><td>@lang('about.t_4')</td><td>g</td><td>1,5</td></tr>
                                <tr><td>@lang('about.t_5')</td><td>g</td><td>0,08</td></tr>
                                <tr><td>@lang('about.t_6')</td><td>g</td><td>0,15</td></tr>
                                <tr><td>@lang('about.t_7')</td><td>mg</td><td>5</td></tr>
                                <tr><td>@lang('about.t_8')</td><td>g</td><td>6,2</td></tr>
                                <tr><td>@lang('about.t_9')</td><td>g</td><td>6,2</td></tr>
                                <tr><td>@lang('about.t_10')</td><td>g</td><td>0,4</td></tr>
                                <tr><td>@lang('about.t_11')</td><td>mg</td><td>25</td></tr>
                                <tr><td>@lang('about.t_12')</td><td>mg</td><td>70</td></tr>
                                <tr><td>@lang('about.t_13')</td><td>mg</td><td>9</td></tr>
                                <tr><td>@lang('about.t_14')</td><td>mg</td><td>110</td></tr>
                                <tr><td>@lang('about.t_15')</td><td>mg</td><td>54</td></tr>
                                <tr><td>@lang('about.t_16')</td><td>mg</td><td>20</td></tr>
                                <tr><td>@lang('about.t_17')</td><td>μg</td><td>70</td></tr>
                                <tr><td>@lang('about.t_18')</td><td>μg</td><td>30</td></tr>
                                <tr><td>@lang('about.t_19')</td><td>μg</td><td>2</td></tr>
                                <tr><td>@lang('about.t_20')</td><td>μg</td><td>10</td></tr>
                                <tr><td>@lang('about.t_21')</td><td>μg</td><td>0,9</td></tr>
                                <tr><td>@lang('about.t_22')</td><td>μg</td><td>5</td></tr>
                                <tr><td>@lang('about.t_23')</td><td>μg</td><td>0,9</td></tr>
                                <tr><td>@lang('about.t_24')</td><td>μg</td><td>0,5</td></tr>
                                <tr><td>@lang('about.t_25')</td><td>μg</td><td>150</td></tr>
                                <tr><td>@lang('about.t_26')</td><td>μg</td><td>17</td></tr>
                                <tr><td>@lang('about.t_27')</td><td>μg</td><td>32</td></tr>
                                <tr><td>@lang('about.t_28')</td><td>μg</td><td>0,05</td></tr>
                                <tr><td>@lang('about.t_29')</td><td>μg</td><td>100</td></tr>
                                <tr><td>@lang('about.t_30')</td><td>μg</td><td>2</td></tr>
                                <tr><td>@lang('about.t_31')</td><td>μg</td><td>30</td></tr>
                                <tr><td>@lang('about.t_32')</td><td>μg</td><td>30</td></tr>
                                <tr><td>@lang('about.t_33')</td><td>μg</td><td>30</td></tr>
                                <tr><td>@lang('about.t_34')</td><td>μg</td><td>7</td></tr>
                                <tr><td>@lang('about.t_35')</td><td>mg</td><td>30</td></tr>
                                <tr><td>@lang('about.t_36')</td><td>μg</td><td>0,3</td></tr>
                                <tr><td>@lang('about.t_37')</td><td>μg</td><td>4</td></tr>
                                <tr><td>@lang('about.t_38')</td><td>μg</td><td>623</td></tr>
                                <tr><td>@lang('about.t_39')</td><td>μg</td><td>300</td></tr>
                                <tr><td>@lang('about.t_40')</td><td>mg</td><td>15</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
