<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categories;

class Shoes extends Model
{
    use HasFactory;

    protected $guarded = 'shoes_id';
    protected $primaryKey = 'shoes_id';
    public function categories(){
        return $this->belongsTo(Categories::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }
}
