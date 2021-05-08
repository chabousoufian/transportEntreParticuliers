<?php

namespace App\Http\Controllers;

use \App\Models\Commande;
use \App\Models\Chauffeur;
use App\Models\Client;
use App\Models\Reclamation;
use Illuminate\Http\Request;

class HomeConroller extends Controller
{
    public function index(){
        $nbrChauffeur = Chauffeur::all()->count();
        $nbrClient = Client::all()->count();
        $nbrReclamation = Reclamation::all()->count();
        $nbrVoyage = Commande::all()->count();
        $ReclamationClient = Reclamation::all()->where('effectuer_par','=','client')->where('status','=','non regler');
        $ReclamationChauffeur = Reclamation::all()->where('effectuer_par','=','chauffeur')->where('status','=','non regler');

        return view('dashboard/home',
        [ 
            'nombreChauffeurs' => $nbrChauffeur, 
            'nombreClient' => $nbrClient, 
            'nombreReclamation' => $nbrReclamation , 
            'nombre_voyage' => $nbrVoyage,
            'ReclamationClients' => $ReclamationClient,
            'ReclamationChauffeur' => $ReclamationChauffeur,


            
        ]);
    }


}
