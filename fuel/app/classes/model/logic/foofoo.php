<?php

namespace Model\Logic;
use \Model\Logic;

class Foofoo extends Logic {

	const FOOFOO = 123;

	protected $foo;
	
	public  function get_foo()
	{
		$this->foo = 999;
		return $this->foo;
	}
}