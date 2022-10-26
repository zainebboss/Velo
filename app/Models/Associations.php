<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associations extends Model
{
    use HasFactory;
    protected $fillable = [
        'association_name',
        'association_adress'
    ];
}
