<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fun extends Model
{
    use HasFactory;
    protected $table = 'funs';

    protected $guarded = [];

    protected $fillable = [
        'fun_image',
        'description',
        'domain'
    ];
}
