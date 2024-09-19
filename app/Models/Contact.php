<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [
        "nomUser",
        "Identifiant_expert",
        "prenomUser",
        "description",
        "telephone",
        "email",
        "type",
        "statut",
        "slug",

    ];
}
