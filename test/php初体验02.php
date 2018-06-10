<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-05-25
 * Time: 15:47
 */


//一维数组
$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
for($x=0;$x<$arrlength;$x++)
{
    echo $cars[$x];
    echo "<br>";
}
echo "<hr>";


//二维数组
$arr = array(
    'one'=>array('name'=>'张三','age'=>'23','sex'=>'男'),
    'two'=>array('name'=>'李四','age'=>'43','sex'=>'女'),
    'three'=>array('name'=>'王五','age'=>'32','sex'=>'男'),
    'four'=>array('name'=>'赵六','age'=>'12','sex'=>'女')
    );


foreach($arr as $k=>$val){
    echo $val['name'] . " " . $val['age'] . " " . $val['sex']."<br>";
}
echo "<p>";


$arr = array(
    'one'=>array('name'=>'张三','age'=>'23','sex'=>'男'),
    'two'=>array('name'=>'李四','age'=>'43','sex'=>'女'),
    'three'=>array('name'=>'王五','age'=>'32','sex'=>'男'),
    'four'=>array('name'=>'赵六','age'=>'12','sex'=>'女')
    );

foreach($arr as $key=>$value){
    //value == 'one','tow','three','four'
    foreach($value as $key2=>$value2){
        //value == 'name','age','sex'
        echo $value2;
    }
    echo "<br>";
}


?>