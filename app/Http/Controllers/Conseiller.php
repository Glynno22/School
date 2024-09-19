<?php

namespace App\Http\Controllers;

use App\Models\ActualiteEcole;
use App\Models\Expert;
use App\Models\Contact;
use Illuminate\Http\Request;

class Conseiller extends Controller
{
    ////////////////////////////////////////////////////////////////////////////CREER UN EXPERT///////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function create(Request $request)
    {
       $expert = new Expert ();
       $expert-> nomExpert = $request -> nomExpert;
       $expert -> fonction = $request -> fonction;
       $expert -> description = $request -> description;
       $expert -> ville = $request -> ville;
       $expert -> localisation = $request -> localisation;
       $expert -> lien = $request -> lien;
       $expert -> pays = $request -> pays;
       $expert -> type = $request -> type;
       $expert -> image = $request -> image;
       $expert->save();
       return $expert;
     
    }
    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
    public function store(Request $request): never
    {
        
    }

  
    public function show()
    {
       
    }

   
    public function edit()
    {
       
    }

    ////////////////////////////////////////////////////////// LISTER L'ENSEMBLE DES CLIENTS EN BASE DE DONNÉES ////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function LISTE()
    {
       $clients = Contact::all();
       return ($clients);
    }
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




//////////////////////////////////////////////////////MODIFICATION D'UN CLIENT SELON SON NUMERO DE TÉLÉPHONE////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    public function update_Client( $id_expert, $telephone, Request $request)
    {
       $client = Contact :: where ('telephone', $telephone)->get();
       $expert = Expert :: find ($id_expert);
       if ($expert && $client){
         $client->update([
            "nomUser"=> $request->nomUser ? $request -> nomUser : $client -> nomUser,
            "prenomUser" => $request -> prenomUser ? $request -> prenomUser : $client -> prenomUser,
            "description" => $request -> description ? $request -> description : $client -> description,
            "telephone" => $request -> telephone ? $request -> telephone : $client -> telephone,
            "email" => $request -> email? $request -> email : $client -> email,
            "type" => $request -> type ? $request -> type :$client -> type,
            "statut" => $request -> statut ? $request -> statut : $client -> statut,
            "slug" => $request -> slug ? $request -> slug : $client -> slug,
         ]);
       }
    }
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 /////////////////////////////////////////////////////////////////// FONCTION DE SUPPRESSION D'UN CLIENT ///////////////////////////////////////////////////////////////
 ///////////////////////////////////////////////////////////////////////////////EN FONCTION DE L'ID//////////////////////////////////////////////////////////////////////
   public function destroy($id)
   {
       $client = Contact::find($id);

       if ($client){
           $client->delete();
       }
       else{
           return "Client inexistant dans votre base de données";
       }
   }
   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////







   //////////////////////////// FONCTIONS SUR LES ACTUALITÉS /////////////////////////////////////////////////////////////////
   public function Charger_Actualite ($id_expert, Request $request){
    $expert = Expert :: find ($id_expert);
    $actu = new ActualiteEcole();

     $actu->nomEcole = $request->nomEcole;
     $actu->Identifiant_expert = $id_expert;
     $actu->description = $request->description;
     $actu->ville = $request->ville;
     $actu->titre_actu = $request->titre_actu;
     $actu->image = $request->image;
     $actu->lien = $request->lien;
     $actu->pays = $request->pays;
     $actu->type = $request->type;
    //  $actu->statut = $request->statut;
    //  $actu->slug = $request->slug;

     $actu->save();
 
    return ($actu);

   }
   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


   //////////////////////////////// SUPPRESION D'UNE ACTUALITÉ /////////////////////////////////////////////////////////
   public function destroy_Actualite ($id_expert, $id_actu,Request $request){
    $expert = Expert :: find ($id_expert);
    $actu = ActualiteEcole :: find($id_actu);
    if ($expert && $actu){
        $actu->delete();
    }else{
        return "Actualité inexistante dans votre base de données";
    }
   }
   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


   //////////////////////////////// LISTER LES ACTUALITÉS PREÉSENTENT EN BASE DE DONNÉES //////////////////////////////////
   public function Lister_Actualite (){
    $actu = ActualiteEcole :: all();
    return $actu;
   }
   ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

   //////////////////////////////// MODIFIER UNE ACTUALITÉ ///////////////////////////////////////////////////////////////
   public function update_actu ($id_expert,$id_actu,Request $request){
     $expert = Expert :: find ($id_expert);
     $actu = ActualiteEcole :: find ($id_actu);
     if ($expert && $actu){
        $actu->update([
            "nomEcole" => $request->nomEcole ? $request->nomEcole : $actu->nomEcole,
            "description" => $request->description ? $request->description : $actu->description,
            "Identifiant_expert" => $actu->Identifiant_expert,
            "ville" => $request->ville ? $request->ville : $actu->ville,
            "titre_actu" => $request->titre_actu ? $request->titre_actu : $actu->titre_actu,
            "image" => $request->image ? $request->image : $actu->image,
            "lien" => $request->lien ? $request->lien : $actu->lien,
            "pays" => $request->pays ? $request->pays : $actu->pays,
            "type" => $request->type ? $request->type : $actu->type,
            "statut" => $request->statut ? $request->statut : $actu->statut,
            "slug" => $request->slug ? $request->slug : $actu->slug,
        ]);
     }
     return $actu;
   }
   /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
}
