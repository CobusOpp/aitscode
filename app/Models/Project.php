<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';

    protected $guarded = [];

    protected $fillable = [
        'proj_image',
        'description',
        'tech',
        'domain'
    ];
}
