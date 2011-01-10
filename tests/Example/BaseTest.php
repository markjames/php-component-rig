<?php

namespace Example\Tests;

use Example\Base;

class BaseTest extends \PHPUnit_Framework_TestCase
{
  public function testNegate()
  {
    $base = new Base();
    $this->assertFalse($base->negate(true));
  }
}
