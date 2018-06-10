<?php
/**
 * Created by PhpStorm.
 * User: liupe
 * Date: 2018-05-25
 * Time: 17:40
 */

//函数
//没有参数
function writeName0()
{
    echo "Kai Jim Refsnes";
}

echo "My name is ";
writeName0();
echo "<br><br>";

//一个参数
function writeName($fname)
{
    echo $fname . " Refsnes. <br>";
}
echo "My name is ";
writeName("Kai Jim");
echo "My sister's name is ";
writeName("Hege");
echo "My brother's name is ";
writeName("Stale");

echo "<br>";

//俩个参数
function writeName1($fname,$punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}
echo "My name is ";
writeName1("Kai Jim",".");
echo "My sister's name is ";
writeName1("Hege","!");
echo "My brother's name is ";
writeName1("Ståle","?");

?>


