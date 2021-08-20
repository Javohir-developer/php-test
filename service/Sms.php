<?php

namespace service;
require('service/Shop.php');
use service\Shop;
class Sms extends Shop
{
    public function __construct(){
//        Отправить смс
        echo 'смс отправлено'. PHP_EOL;
    }

}


