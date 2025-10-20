<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    protected $guarded = ['id'];
    protected $with = ['city', 'style', 'type'];

     public function getRouteKeyName()
    {
        return 'slug';
    }

      public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
      public function style(): BelongsTo
    {
        return $this->belongsTo(Style::class);
    }
      public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }

    public function translations()
    {
        return $this->hasMany(ProjectTranslation::class);
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
