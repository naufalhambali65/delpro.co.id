<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['project_id', 'locale', 'description'];
}