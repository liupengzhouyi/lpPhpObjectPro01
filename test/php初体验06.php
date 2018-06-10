<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-05-25
 * Time: 17:47
 */

//计算两个数的和
function add($a,$b){
    $count = $a + $b;
    return $count;
}

//计算小明的数学成绩和语文成绩的和（这个也可以使用在从数据库中读取数据并且做加运算）
function count_score(){
    $m = 96;//数学成绩
    $y = 99;//语文成绩
    $sum = add($m,$y);
    echo "小明的总成绩是".$sum;
}

echo count_score();

?>