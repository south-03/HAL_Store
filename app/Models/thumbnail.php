<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thumbnail extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table = 'gallerys';

    protected $fillable = [
        'product_id',
        'thumbnail',
    ];
}
