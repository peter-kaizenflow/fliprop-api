<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $with = ['propertyStatus'];

    public function propertyStatus() {
        return $this->hasOne(PropertyStatus::class, 'id', 'property_status_id');
    }
}
