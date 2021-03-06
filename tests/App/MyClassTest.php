<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use milopez\GithubActions\App\MyClass;

final class MyClassTest extends TestCase
{

	private $test;

	public function setUp(): void
	{
		parent::setUp();
		$this->test = new MyClass();
	}

	public function testCanSum(): void
	{
		
		$this->assertEquals(
            3,
            $this->test->sum(1,2)
        );
	}

	public function testCanMultiply(): void
	{
		$this->assertEquals(
            9,
            $this->test->multiply(3,3)
        );
	}

	public function testCanDivide(): void
	{
		$this->assertEquals(
			2,
			$this->test->divide(4,2)
		);
	}

	public function testCanSubstract(): void
	{
		$this->assertEquals(
			0,
			$this->test->substract(4,4)
		);	
	}
}