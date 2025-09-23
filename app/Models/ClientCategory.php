<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientCategory extends Model
{
    protected $guarded = ['id'];
     public function clients()
    {
        return $this->hasMany(Client::class);
    }
}
