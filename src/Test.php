<?php

namespace Darep;

class Test {
  use FooTrait;

  public function __construct()
  {
    // left empty
  }
}

$test = new Test();
echo $test->getBar();
