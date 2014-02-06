<?php

namespace Model;

class Hogehoge extends \Model {

	const HOGEHOGE = 123;
	
	protected $hoge;
	
	public  function get_hoge()
	{
		$this->hoge = 777;
		return $this->hoge;
	}
}