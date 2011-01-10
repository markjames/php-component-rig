<?php

namespace Example\Tests\Sub;

use Example\Base;
use Example\Sub\Barfoo;

class BarfooTest extends \PHPUnit_Framework_TestCase
{
  public function testNegate()
  {
    $base = new Base();
    $barfoo = new Barfoo();
    $this->assertEquals('Negative: true', $barfoo->negate(new Base(), false));
  }
}
