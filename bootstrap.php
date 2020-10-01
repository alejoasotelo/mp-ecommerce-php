<?php
require_once __DIR__.'/vendor/autoload.php';

define('ACCESS_TOKEN', 'APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
define('PUBLIC_KEY', 'APP_USR-7eb0138a-189f-4bec-87d1-c0504ead5626');
define('INTEGRATOR_ID', 'dev_24c65fb163bf11ea96500242ac130004');

define('MAX_CUOTAS', 6);
define('TARJETAS_EXCLUIDAS', [
    ['id' => 'amex'],
]);
define('MEDIOS_DE_PAGO_EXCLUIDOS', [
    ['id' => 'atm'],
]);

define('BASE_URL', dirname('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']));

MercadoPago\SDK::setAccessToken(ACCESS_TOKEN);
MercadoPago\SDK::setPublicKey(PUBLIC_KEY);
MercadoPago\SDK::setIntegratorId(INTEGRATOR_ID);
