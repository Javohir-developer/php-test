<?php
require('service/Sms.php');
require('service/Poch.php');
use service\Sms;
use service\Poch;

class server{
    public function __construct($argv){
        switch ($argv[1]) {
            case 'sms':
                new Sms();
                break;
            case 'poch':
                new Poch();
                break;
            default:
                $error = "Ошибка: такой команды не существует". PHP_EOL;
                echo $error;
                $filename = "error.txt";
                $fh = fopen($filename, "w");
                fwrite($fh, $error);
                fclose($fh);
        }
    }

}
new server($argv);
