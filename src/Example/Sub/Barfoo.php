<?php

namespace Example\Sub;

use Example\Base;

class Barfoo
{
  public function negate(\Example\Base $base, $value)
  {
    return "Negative: ".($base->negate($value) ? 'true' : 'false');
  }
}
