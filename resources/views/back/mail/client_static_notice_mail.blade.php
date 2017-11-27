<h2><a href="//saumal.kz">SAUMAL.KZ</a></h2><br>
@if( $lang == 'ru' )
    <p style="font-weight: bold;">Благодарим за заказ!</p>
    <p>В скором времени наш менеджер свяжется с вами.</p>
    <p>Если у Вас имеются какие-либо вопросы,<br>пожалуйста свяжитесь с нами по номеру указанному на сайте</p><br><br>

@elseif( $lang == 'kk' )
    <p style="font-weight: bold;">Тапсырысыңызға рақмет!</p>
    <p>Біраз уақыттан кейін біздің менеджер сізбен байланысқа шығады.</p>
    <p>Егер қандай да бір сұрақтарыңыз болса,<br>сайтымызда көрсетілген нөмірлерге хабарласуды сұраймыз</p><br><br>

@elseif( $lang == 'en' )
    <p style="font-weight: bold;">Thanks for your order!</p>
    <p>Our manager will get in touch with you shortly</p>
    <p>If you have any questions,<br>please don’t hesitate to contact us</p><br><br>
@endif