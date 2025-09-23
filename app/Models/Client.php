<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Client extends Model
{
    protected $guarded = ['id'];
    protected $with = ['category'];
      public function category(): BelongsTo
    {
        return $this->belongsTo(ClientCategory::class, 'category_id');
    }
}