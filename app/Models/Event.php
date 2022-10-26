<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'nameevent',
        'ville' ,
        'pays',
       
        'dateDebutEvent',
        'dateFinEvent',
        'telResponsable',
        'timeevent',
        'activity_id'

    ];
    use HasFactory;
    public function activitie()
    {
        return $this->belongsTo(Activitie::class);
    }
}
