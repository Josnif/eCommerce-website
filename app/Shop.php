<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Shop extends Model
{
    protected $fillable = ['name', 'description'];
    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'shop_id');
    }
}
