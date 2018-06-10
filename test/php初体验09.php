<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-05-26
 * Time: 21:05
 */


class MyClass2 extends ppp01\MyClass
{
}

$myclass2 = new MyClass2;
$myclass2->MyPublic(); // 这行能被正常执行
// 此方法为公有
function Foo2()
{
    $this->MyPublic();
    $this->MyProtected();
    //$this->MyPrivate(); // 这行会产生一个致命错误
}
$myclass2->Foo2(); // 公有的和受保护的都可执行，但私有的不行

?>