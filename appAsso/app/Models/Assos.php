<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assos extends Model
{
    protected $guarded = [
        'id', 'title', 'description'
    ];

    public function getPrice()
    {
        $price = $this->price / 100;

        return number_format($price, 2, ',', ' ') . ' €';
    }


    public function images()
    {
        return $this->belongsToMany('App\Models\Image');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }

    public function user()
    {
        return $this->hasOne('App\Models\User');
    }
}
