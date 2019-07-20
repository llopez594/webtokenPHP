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

/*echo Auth::SignIn([
    'id' => 1,
    'name' => 'Eduardo'
]);*/

var_dump(Auth::GetData('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJleHAiOjE1NjM1OTU4OTAsImF1ZCI6IjJkNjRmMDVmZDYyZjEzMGVlZGMyYTE4MTRhZTEwNGE5ODlkNDFmYTgiLCJkYXRhIjp7ImlkIjoxLCJuYW1lIjoiRWR1YXJkbyJ9fQ.kPpX_6PVAXn_cW0d_hzDHmTRu45caT34s2mmHXO-wMM'));

//var_dump(new Auth());