<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-05-26
 * Time: 20:58
 */

class MyClass {
    public $public = 'public';
    private $private = 'private';
    protected $protected = 'protected';

    function printHello() {
        echo $this->public;
    }

}
$obj = new MyClass();
echo $obj->public;

$obj->printHello();
?>