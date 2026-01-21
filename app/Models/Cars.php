<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cars extends Model
{
    use HasFactory;

    use softDeletes;

    protected $table = 'cars';

    protected $guarded = false;

    protected $fillable = [
        'bmw',
        'mersedes',
        'audi',
        'hyundai',
        'kia',
        'porche',
        'ferrari',
        'lamborgini',
    ];
}
