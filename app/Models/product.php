<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $guarded = [];

    public function getImage()
    {
        return $this->hasOne('App\Models\imageproduct');
    }

    public function pesanan()
    {
        return $this->hasMany(order::class, 'id');
    }

}
