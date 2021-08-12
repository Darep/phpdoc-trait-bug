<?php

namespace Darep;

require_once __DIR__ . '/FooTrait.php';

/**
 * A test class with a trait. This should have the trait mentioned & the inherited methods documented on the page.
 */
class Test {
  /**
   * The included trait
   */
  use FooTrait;

  /**
   * An empty constructor
   */
  public function __construct()
  {
    // left empty
  }
}

// test that the class works
$test = new Test();
echo $test->getBar() . PHP_EOL;

// test the PHP reflector, it should show the trait
$reflector = new \ReflectionClass('\Darep\Test');
print_r($reflector->getTraits());
