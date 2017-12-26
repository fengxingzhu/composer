<?php
/**
 * 测试子类
 */
namespace pub;
class testclass extends comm
{
	public  $test=1;
	/**
	 * 构造函数
	 */
	public function __construct()
	{
		header("Content-type: text/html; charset=utf-8");
		echo "子类测试构造函数<br>";
		//parent::__construct();
	}
	/**
	 * 类当成字符串返回
	 */
	public function __toString()
	{
		return  "<br>go go go";
	}
	/**
	 * 加法
	 */
	public function add($a,$b)
	{
		//set方法接收
		$this->seta($a);
		$this->setb($b);
		//get获取
		return $this->geta()+$this->getb();
		
	}
	/**
	 * 测试 __get()
	 */
	
	/**
	 * 处理调用不存在的方法
	 */
	public function __call($a,$b)
	{
		echo "<br>您调用的方法不存在";
	}
	/**
	 * 析构函数
	 */
	public function __destruct()
	{
		echo "<br>析构函数";
	}
	/**
	 * 循环处理array
	 */
	public function arr()
	{
		
	}
}