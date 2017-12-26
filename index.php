<?php
header("Content-type: text/html; charset=utf-8");
use pub\testclass;


//ؔ¶¯¼Ԕ֍
require_once 'vendor/autoload.php';

$test=new  testclass();
$add=$test->add(11, 22);
echo "<br>".$add."<br>";

echo "=====".isset($test->test);

//²㋔µ�Ĳ»´畚º¯˽£¬»ᶷԃ__call()
$test->fff("aa");


//`±»µ±³ʗַ�»֍
echo $test;



//µ��½·¨
unset($test);

echo "<br>";
/**
 * ²㋔
 */

$arr=array(1,2,3,4);
$arr1=[1,2,3,4,5];
$arr2=[
	'a'=>[1,2,3,4,5,6],
	'b'=>100,
	'c'=>[10,20,30]
];

include 'test.php';
echo "<br>";echo "<br>";echo "<br>";
//echo "<pre>";
//print_r($arr5);
foreach ($arr2 as $k=>$v)
{
	echo "<pre>";
	print_r($v[0]);
}
echo "<br>";echo "<br>";echo "<br>";
$a=new \pub\comm();

echo "<br>";echo "<br>";echo "------------------<br>";
$c=new \widget\conn();
//$c::main();
$c->test();




