<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'description',
        'image',
        'expire_date',
        'website',
        'offer_code',
    ];

    //relationships
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
