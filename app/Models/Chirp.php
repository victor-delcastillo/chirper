<?php

namespace App\Models;

use App\Traits\HasPuertoRicoTimezone;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Chirp extends Model
{
  use HasPuertoRicoTimezone;
  
  protected $fillable = [
    'message'
  ];

  public function user(): BelongsTo
  {
    return $this->belongsTo(User::class);
  }
}
