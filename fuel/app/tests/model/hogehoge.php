<?php
/**
 * Model Hogehoge class tests
 * $ php oil test --group=AY
 * 
 * @group App
 * @group AY
 */
 use \Model\Hogehoge;
 
 class Test_Model_Hogehoge extends TestCase
{
	private $foo;
	public function setUp() {
		$this->foo = new Hogehoge();
	}

    public function test_foo()
    {
		$this->assertSame(777, $this->foo->get_hoge());
    }
}