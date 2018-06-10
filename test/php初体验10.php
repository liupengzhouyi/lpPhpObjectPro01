<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-05-26
 * Time: 21:09
 */


class MyClass3 extends ppp01\MyClass
{
    // 此方法为公有
    function Foo2()
    {
        $this->MyPublic();
        $this->MyProtected();
        //$this->MyPrivate(); // 这行会产生一个致命错误
    }
}

$myclass23 = new MyClass3;
$myclass23->MyPublic(); // 这行能被正常执行
$myclass23->Foo2(); // 公有的和受保护的都可执行，但私有的不行

?>