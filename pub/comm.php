<?php
/**
 * ������
 */
namespace pub;
class comm
{
	private $a;
	private $b;
	private $sum;
	/**
	 * ���캯��
	 */
	public function __construct()
	{
		header("Content-type: text/html; charset=utf-8");
		echo "构造函数<br>";
	}
	/**
	 * ���
	 */
	public function input()
	{
		echo "���<br>";
	}
	/**
	 * staitc
	 */
	public static  function main($n)
	{
		if($n==1)
		{
			echo "static 1<br>";
		}else{
			echo "static 2<br>";
		}
		echo "static main<br>";
	}
	/**
	 * ������������1
	 * sum 
	 */
	public function sum($a=10,$b=15)
	{
		$this->a=$a;
		$this->b=$b;
		return $this;
	}
	/**
	 * ������������2
	 */
	public function result()
	{
		$this->sum=$this->a+$this->b;
		echo "����".$this->sum."<br>";
	}
	
	/**
	 * set a
	 */
	public function seta($a)
	{
		$this->a=$a;
	}
	/**
	 * set b
	 */
	public function setb($b)
	{
		$this->b=$b;
	}
	/**
	 * get a
	 */
	public function geta()
	{
		return $this->a;
	}
	/**
	 * get b
	 */
	public function getb()
	{
		return $this->b;
	}
}