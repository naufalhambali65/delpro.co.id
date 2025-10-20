<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['team_id', 'locale', 'description'];

}