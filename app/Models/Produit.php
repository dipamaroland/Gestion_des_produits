<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable=[
        'libelle',
        'description',
        'prix',
        'quantite',

        ];


        protected $casts = [
            'prix' => 'decimal:2',
            'quantite' => 'integer',
        ];
}
