<?php
echo strrev("Hello world!"). PHP_EOL;
function mb_strrev($str){
    $r = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $r .= mb_substr($str, $i, 1);
    }
    return $r. PHP_EOL;
}

echo mb_strrev("world"). PHP_EOL;

$string = 'This is manoj';
$n =strlen("$string");
For($i=1;$i<=$n;$i++)
{
    $val= $string[-$i];
    echo $val;
}
?>