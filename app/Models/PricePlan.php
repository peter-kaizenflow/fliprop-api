<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PricePlan extends Model
{
    use HasFactory;

    protected $with = ['PricePlanItems'];

    public function PricePlanItems() {
        return $this->hasMany(PricePlanItem::class, 'price_plan_id', 'id');
    }
}
