@extends('front.layout')
@section('content')
    @include('front.composition.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h1 class="title-1">О продукте</h1>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline">
                    <li> <a href="/about">О продукте</a> </li>
                    <li class="active"> <a href="/composition">Состав</a> </li>
                    <li> <a href="/utility">Кому полезен Саумал</a> </li>
                    <li> <a href="/influence">Влияние на организм</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h3> Состав кобыльего<br /> молока SAUMAL&reg; </h3>
                        <p>Благодаря многочисленным международным исследованиям и&nbsp;применению современных технологий, мы&nbsp;знаем, что именно делает SAUMAL&reg; настолько полезным и&nbsp;уникальным для человека.</p>
                        <p>Кобылье молоко по&nbsp;своему составу максимально приближено к&nbsp;материнскому молоку и&nbsp;относится к&nbsp;альбуминовой группе. В&nbsp;то&nbsp;время как молоко других домашних животных (за&nbsp;исключением ослиц) относится к&nbsp;казеиновой
                            группе. Альбумин и&nbsp;казеин&nbsp;&mdash; виды белка, придающие молоку характерный белый цвет. Их&nbsp;различие состоит в&nbsp;том, что казеин имеет более грубую (крупнодисперсную) структуру и&nbsp;за&nbsp;счет этого гораздо хуже
                            усваивается. Альбумин, как и&nbsp;лежащий в&nbsp;основе материнского молока глобулин, является мелкодисперсным (сывороточным) белком и&nbsp;усваивается гораздо лучше.</p>
                        <p>Еще один общий элемент материнского и&nbsp;кобыльего молока&nbsp;&mdash; триптофан. Эта аминокислота является носителем иммунных тел. Что касается жира, то&nbsp;жир, содержащийся в&nbsp;кобыльем молоке&nbsp;&mdash; едва&nbsp;ли не&nbsp;лучший
                            животный жир в&nbsp;природе. За&nbsp;счет специфической мелкодисперсной структуры он максимально быстро эмульгируется (расщепляется) и&nbsp;усваивается.</p>
                        <div class="object-item">
                            <div class="item-img"> <img src="img/pic-05.png" class="img--fluid" /> </div>
                            <div class="item-in">
                                <p>Всего <strong>500&nbsp;мл</strong> кобыльего молока обеспечивают суточную потребность организма в&nbsp;<strong>витамине&nbsp;С</strong></p>
                            </div>
                        </div>
                        <p>Оценка пищевой ценности кобыльего молока, полученного методом сублимационной сушки, показала, что органолептические и&nbsp;биологические свойства практически не&nbsp;отличаются от&nbsp;исходного продукта, что вкупе с&nbsp;надежной
                            упаковкой позволяет хранить готовый продукт длительное время, не&nbsp;требуя при этом особых условий. Кроме того сухое кобылье молоко имеет очень хорошую растворимость и&nbsp;быстро восстанавливается при растворении в&nbsp;воде.
                            При этом, при определенных пропорциях, растворенное в&nbsp;воде сухое молоко не&nbsp;отличается от&nbsp;парного.</p>
                    </div>
                    <div class="col-lg-6 col-md-6 text--right">
                        <!-- elements-item -->
                        <div class="elements-item">
                            <h3> Более 40 биокомпонентов<br /> необходимых организму </h3>
                            <div class="block-in"> <label>Аминокислоты, жиры, ферменты</label> Лизоцим, амилаза </div>
                            <div class="block-in"> <label>Ваитамины</label>
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
                            <div class="block-in"> <label>Микроэлементы</label>
                                <ul class="list--inline list--micro">
                                    <li> <span class="el">Na</span> <span class="name">Натрий</span> </li>
                                    <li> <span class="el">Fe</span> <span class="name">Железо</span> </li>
                                    <li> <span class="el">S</span> <span class="name">Сера</span> </li>
                                    <li> <span class="el">Ca</span> <span class="name">Кальций</span> </li>
                                    <li> <span class="el">Mg</span> <span class="name">Магний</span> </li>
                                    <li> <span class="el">Si</span> <span class="name">Кремний</span> </li>
                                    <li> <span class="el">K</span> <span class="name">Калий</span> </li>
                                    <li> <span class="el">Cu</span> <span class="name">Медь</span> </li>
                                    <li> <span class="el">Zn</span> <span class="name">Цинк</span> </li>
                                    <li> <span class="el">P</span> <span class="name">Фосфор</span> </li>
                                    <li> <span class="el">I</span> <span class="name">Йод</span> </li>
                                    <li> <span class="el">Co</span> <span class="name">Кобальт</span> </li>
                                </ul>
                            </div>
                        </div>
                        <!-- /elements-item -->
                    </div>
                </div>
                <h3>Сравнительная характеристика белка</h3>
                <div class="table">
                    <div class="table-head">
                        <table>
                            <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Общее кол-во</th>
                                <th>Казеин</th>
                                <th>Альбумин</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-body">
                        <table>
                            <tbody>
                            <tr>
                                <td>Женское</td>
                                <td>1,2</td>
                                <td>0,5</td>
                                <td>0,7</td>
                            </tr>
                            <tr>
                                <td>Коровье</td>
                                <td>3,3</td>
                                <td>2,8</td>
                                <td>0,5</td>
                            </tr>
                            <tr>
                                <td>Кобылье</td>
                                <td>2,2</td>
                                <td>0,9</td>
                                <td>1,3</td>
                            </tr>
                            <tr>
                                <td>Козье</td>
                                <td>3,5</td>
                                <td>3,5</td>
                                <td></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h3>Содержание незаменимых аминокислот (мг в 100 г)</h3>
                <div class="table">
                    <div class="table-head">
                        <table>
                            <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Женское молоко</th>
                                <th>Кобылье молоко</th>
                                <th>Коровье молоко</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-body">
                        <table>
                            <tbody>
                            <tr>
                                <td>Валин</td>
                                <td>78</td>
                                <td>97</td>
                                <td>160</td>
                            </tr>
                            <tr>
                                <td>Лейцин</td>
                                <td>131</td>
                                <td>229</td>
                                <td>290</td>
                            </tr>
                            <tr>
                                <td>Изолейцин</td>
                                <td>75</td>
                                <td>90</td>
                                <td>140</td>
                            </tr>
                            <tr>
                                <td>Треонин</td>
                                <td>60</td>
                                <td>101</td>
                                <td>150</td>
                            </tr>
                            <tr>
                                <td>Фенилаланин</td>
                                <td>57</td>
                                <td>111</td>
                                <td>160</td>
                            </tr>
                            <tr>
                                <td>Триптофан</td>
                                <td>23</td>
                                <td>28</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>Летионин</td>
                                <td>23</td>
                                <td>35</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <td>Лизин</td>
                                <td>81</td>
                                <td>189</td>
                                <td>270</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h3>Содержание макро и микроэлементов</h3>
                <div class="table">
                    <div class="table-head">
                        <table>
                            <thead>
                            <tr>
                                <th>&nbsp;</th>
                                <th>Женское молоко</th>
                                <th>Кобылье молоко</th>
                                <th>Коровье молоко</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="table-body">
                        <table>
                            <tbody>
                            <tr>
                                <td>Кальций</td>
                                <td>28 - 34</td>
                                <td>50 - 135</td>
                                <td>112 - 123</td>
                            </tr>
                            <tr>
                                <td>Фосфор</td>
                                <td>14 - 43</td>
                                <td>20 - 121</td>
                                <td>59 - 119</td>
                            </tr>
                            <tr>
                                <td>Калий</td>
                                <td>53 - 62</td>
                                <td>25 - 87</td>
                                <td>106 - 163</td>
                            </tr>
                            <tr>
                                <td>Магний</td>
                                <td>3 - 4</td>
                                <td>3 - 12</td>
                                <td>7 - 12</td>
                            </tr>
                            <tr>
                                <td>Натрий</td>
                                <td>10 - 18</td>
                                <td>8 - 58</td>
                                <td>58</td>
                            </tr>
                            <tr>
                                <td>Хлор</td>
                                <td>19</td>
                                <td>60 - 63</td>
                                <td>100 - 119</td>
                            </tr>
                            <tr>
                                <td>Железо</td>
                                <td>0,04 - 0,2</td>
                                <td>0,02 - 0,15</td>
                                <td>0,03 - 0,1</td>
                            </tr>
                            <tr>
                                <td>Цинк</td>
                                <td>0,09 - 0,64</td>
                                <td>0,2 - 0,4</td>
                                <td>0,03 - 0,55</td>
                            </tr>
                            <tr>
                                <td>Медь</td>
                                <td>0,02 - 0,06</td>
                                <td>0,02 - 0,11</td>
                                <td>0,01 - 0,06</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
