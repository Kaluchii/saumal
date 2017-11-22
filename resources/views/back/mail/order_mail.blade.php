<h2>Заказ {{ isset($order_id) ? $order_id : '' }}</h2>
<p>
    Имя: {{$client_name}}<br>
    Эл. почта: {{$email}}<br>
    Телефон: {{$phone}}<br>
    Город: {{$city}}<br>
    Адрес: {{$address}}</p>
<p>Товары:</p>
<p>
    {!! $goods !!}
</p>
