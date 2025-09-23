<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Style extends Model
{
    protected $guarded = ['id'];
    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}