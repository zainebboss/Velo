<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Velos extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'libelle',
        'etat',
        'prix',
        'categorie_id',
        ];
        public function categories(){
            return $this.belongsTo(categories::class);
        }
		

      
}
