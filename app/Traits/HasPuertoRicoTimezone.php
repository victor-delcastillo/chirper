<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Carbon;

trait HasPuertoRicoTimezone
{
  protected function createdAt(): Attribute
  {
    return Attribute::make(
      get: fn ($value) => Carbon::parse($value)->timezone('America/Puerto_Rico'),
    );
  }
}
