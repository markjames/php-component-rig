<?php

namespace Example\Sub;

use Example\Base;

class Barfoo
{
  public function negate(Base $base, $value)
  {
    return "Negative: ".($base->negate($value) ? 'true' : 'false');
  }
}
