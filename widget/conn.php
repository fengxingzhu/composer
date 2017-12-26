<?php
/**
 * conn
 */
namespace widget;
class conn
{
	/**
	 * 
	 */
	public function __construct()
	{
		header("Content-type: text/html; charset=utf-8");
		echo "conn构造函数<br>";
	}
	/**
	 * 
	 */
	public static function main()
	{
		echo "测试1";
	}
	/**
	 * 
	 */
	public function test()
	{
		echo "test";
	}
}