<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    
    public $timestamps = false;
    protected $table = 'producers';

    protected $fillable = [
        'name',
        'phone',
        'fax',
        'address',
        'email',
    ];
    use HasFactory;

}
