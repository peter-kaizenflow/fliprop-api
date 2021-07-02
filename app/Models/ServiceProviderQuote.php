<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProviderQuote extends Model
{
    use HasFactory;

    protected $with = ['profile'];

    public function profile () {
        return $this->hasOne(ServiceProviderProfile::class, 'id', 'service_provider_profile_id');
    }
}
