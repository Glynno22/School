<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActualiteEcole extends Model
{
    use HasFactory;
    public $fillable = [
        "nomEcole",
        "Identifiant_expert",
        "description",
        "ville",
        "titre_actu",
        "image",
        "lien",
        "pays",
        "type",
        "statut",
        "slug",
    ];
}
