<?php

namespace milopez\GithubActions;

require __DIR__ . '/../vendor/autoload.php';

use milopez\GithubActions\App\MyClass;

$test = new MyClass();

echo $test->sum(1, 2);
