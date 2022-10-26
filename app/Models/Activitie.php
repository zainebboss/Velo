<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    protected $fillable = [
        'detail',
        'nameactivitie' ,
       
    ];
    use HasFactory;
    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
