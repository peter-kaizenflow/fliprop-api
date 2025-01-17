<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeaturedProperty extends Model
{
    use HasFactory;

    protected $with = ['property'];

    public function property() {
        return $this->hasOne(Property::class, 'id', 'property_id');
    }
}
