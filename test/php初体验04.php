<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-05-25
 * Time: 17:02
 */

//定界符，输出内部的全部内容！
$name="runoob";
$a= <<<EOF
    "abc"$name
    "123"
EOF;
$a = <<<sdf
    "abd"$a
    "12"
sdf;

// 结束需要独立一行且前后不能空格
echo $a;
?>

