<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    use HasFactory;
    public $fillable = [
        "nomExpert",
        "fonction",
        "description",
        "ville",
        "localisation",
        "lien",
        "pays",
        "type",
        "image",
        "statut",
        "slug"

    ];
   
}
