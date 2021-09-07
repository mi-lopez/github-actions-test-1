<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use milopez\GithubActions\App\MyClass;

final class MyClassTest extends TestCase
{
	public function testCanSum(): void
	{
		$test = new MyClass();

		$this->assertEquals(
            3,
            $test->sum(1,2)
        );
	}
}