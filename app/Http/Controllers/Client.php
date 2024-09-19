<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class Client extends Controller
{
    
   
   ////////////////////////////////////////////////////// AJOUTER UN CLIENT EN BASE DE DONNÉES //////////////////////////////////////////////////////////////////////
   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    public function AJOUTER (Request $request)
    {
       $client = new Contact ();
       $client -> nomUser = $request->nomUser;
       $client -> prenomUser = $request -> prenomUser;
       $client -> description = $request -> description;
       $client -> telephone = $request -> telephone;
       $client -> email = $request -> email;
    //    $client -> type = $request -> type;
    //    $client -> statut = $request -> statut;
    //    $client -> slug = $request -> slug;

       $client -> save();
       return $client;       
    }


  
}
