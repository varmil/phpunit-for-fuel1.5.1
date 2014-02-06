<?php
/**
 * Model Foofoo class tests
 * 
 * @group App
 * @group AY
 */
use \Model\Logic\Foofoo;
 
class Test_Model_Logic_Foofoo extends TestCase
{
	private $foo;
	public function setUp() {
		$this->foo = new Foofoo();
	}

	public function test_foo()
	{
		$this->assertSame(999, $this->foo->get_foo());
	}
}