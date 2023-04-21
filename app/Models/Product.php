<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $gaurded = ['id'];
    protected $fillable = ['name','description','category_id','status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
