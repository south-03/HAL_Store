<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\thumbnail;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $table = 'products';
    
    protected $fillable = [
        'category_id',
        'title',
        'price',
        'quantity',
        'description',
        'producerid',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function productImage()
    {
        return $this->hasMany(thumbnail::class, 'product_id', 'id');
    }
}
