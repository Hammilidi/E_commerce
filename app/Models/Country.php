<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'tax',
    ];
    public $timestamps = false;
    public function ranges()
    {
        return $this->belongsToMany(Range::class, 'colissimos')->withPivot('id', 'price');
    }
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }
    public function order_addresses()
    {
        return $this->hasMany(OrderAddress::class);
    }
}
