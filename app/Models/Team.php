<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $guarded = ['id'];

    public function translations()
    {
        return $this->hasMany(TeamTranslation::class);
    }

    public function getDescriptionAttribute($value)
    {
        $locale = app()->getLocale();
        if($locale == 'en') {
            return $value;
        } else {
            $translation = $this->translations->where('locale', $locale)->first();
        }

        return $translation->description ?? $value;
    }
}
