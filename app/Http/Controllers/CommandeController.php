<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;

use DB;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $voyage = DB::table('commandes')
        ->join('clients','clients.id','=','commandes.idClient')
        ->join('chauffeurs','chauffeurs.id','=','commandes.idChauffeur')
        ->select('commandes.id','commandes.depart','commandes.arivee','clients.Nom as nomclient','clients.Prenom as prenomclient','chauffeurs.Nom as nomchauffeur','chauffeurs.Prenom as prenomchauffeur')
        ->get();
      //  Commande::paginate(5);
   
        return view('voyage/voyage', ['voyages' => $voyage]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $voyage = DB::table('commandes')
        ->join('clients','clients.id','=','commandes.idClient')
        ->join('chauffeurs','chauffeurs.id','=','commandes.idChauffeur')
        ->select('commandes.id as id','commandes.depart as depart','commandes.arivee as arivee','commandes.type_vehicule as type','clients.Nom as nomclient','clients.Prenom as prenomclient','clients.id as idClient','clients.tel as telclient','clients.mail as mailclient','chauffeurs.id as idChauffeur','chauffeurs.bio as bio','chauffeurs.Nom as nomchauffeur','chauffeurs.Prenom as prenomchauffeur','chauffeurs.tel as telchauffeur','chauffeurs.mail as mailchauffeur')
        ->where('commandes.id','=',$id)->get();
       // print_r($voyage);
        return view('voyage/voirVoyage',['voyage'=> $voyage]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function edit(Commande $commande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Commande  $commande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commande $commande)
    {
        //
    }
}
