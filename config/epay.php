<?php
return [
    'pay_test_mode' => false,

    'MERCHANT_CERTIFICATE_ID'   => 'c183dbbb',
    'MERCHANT_NAME'             => 'sau-med.com',
    'PRIVATE_KEY_PATH'          => '../epay_source/cert.prv',
    'PRIVATE_KEY_PASS'          => 'WDfUveEf9i3',
    'XML_TEMPLATE_FN'           => '../epay_source/template.xml',
    'XML_COMMAND_TEMPLATE_FN'   => '../epay_source/command_template.xml',
    'PUBLIC_KEY_PATH'           => '../epay_source/kkbca.pem',
    'MERCHANT_ID'               => '92994231',
    // Линк для возврата покупателя в магазин (на сайт) после успешного проведения оплаты
    'EPAY_BACK_LINK'            => 'http://epay.kkb.kz/jsp/hbpay/pay_req.jsp',
    // Линк для отправки результата авторизации в магазин.
    'EPAY_POST_LINK'            => 'http://epay.kkb.kz/jsp/hbpay/pl.jsp',
    // Линк для отправки неудачного результата авторизации либо информации об ошибке в магазин.
    'EPAY_FAILURE_POST_LINK'    => 'http://epay.kkb.kz/jsp/hbpay/pl.jsp',

    'EPAY_FORM_TEMPLATE'        => 'default.xsl',
];