<?php
/**
 * ��������
 */
namespace pub;
class testclass extends comm
{
	public  $test=1;
	/**
	 * ���캯��
	 */
	public function __construct()
	{
		header("Content-type: text/html; charset=utf-8");
		echo "������Թ��캯��<br>";
		//parent::__construct();
	}
	/**
	 * �൱���ַ�������
	 */
	public function __toString()
	{
		return  "<br>go go go";
	}
	/**
	 * �ӷ�
	 */
	public function add($a,$b)
	{
		//set��������
		$this->seta($a);
		$this->setb($b);
		//get��ȡ
		return $this->geta()+$this->getb();
		
	}
	/**
	 * ���� __get()
	 */
	
	/**
	 * ������ò����ڵķ���
	 */
	public function __call($a,$b)
	{
		echo "<br>�����õķ���������";
	}
	/**
	 * ��������
	 */
	public function __destruct()
	{
		echo "<br>��������";
	}
	/**
	 * ѭ������array
	 */
	public function arr()
	{
		
	}
}