<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'slug',
        'color',
        'indice',
    ];
    public $timestamps = false;
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
