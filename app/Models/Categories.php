<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shoes;

class Categories extends Model
{
    use HasFactory;

    protected $guarded = 'cat_id';
    protected $primaryKey = 'cat_id';
    public function shoes(){
        return $this->hasMany(Shoes::class);
    }
}
