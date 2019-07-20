<?php
require_once 'vendor/autoload.php';
require_once 'app/lib/Auth.php';

use Firebase\JWT\JWT,
    App\Lib\Auth;

/*$time = time();
$key = 'my_secret_key';

$token = array(
    'iat' => $time, // Tiempo que inició el token
    'exp' => $time + (60*60), // Tiempo que expirará el token (+1 hora)
    'data' => [ // información del usuario
        'id' => 1,
        'name' => 'Eduardo'
    ]
);*/

/*$jwt = JWT::encode($token, $key);
var_dump($jwt);*/

/*$token_generated = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE1NjM1OTE0MzIsImV4cCI6MTU2MzU5NTAzMiwiZGF0YSI6eyJpZCI6MSwibmFtZSI6IkVkdWFyZG8ifX0.e-vXWOnNfk4B38wYpCvWncUJoO2Ck2FGkGW4Mk6XLh0';

var_dump(JWT::decode($token_generated, $key, array('HS256')));*/

var_dump(new Auth());