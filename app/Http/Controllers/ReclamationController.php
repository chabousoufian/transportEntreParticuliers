<?php

namespace App\Http\Controllers;

use App\Models\Reclamation;
use Illuminate\Http\Request;

use DB;

class ReclamationController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reclamation = Reclamation::paginate(5)->where('status','=','non regler');
        return view('reclamation/reclamation', ['reclamations' => $reclamation ]);
    }

    public function indexAll(){
        $reclamation = Reclamation::paginate(5);
        return view('reclamation/reclamationAll', ['reclamations' => $reclamation ]);
    }

    public function indexClient(Request $request,$idClient){
        $reclamation = Reclamation::paginate(5)->where('idClient','=',$idClient);
        return view('reclamation/listeReclamationClient', ['reclamations' => $reclamation ]);
    }

    public function indexChauffeur(Request $request,$idChauffeur){
        $reclamation = Reclamation::paginate(5)->where('idChauffeur','=',$idChauffeur);
        return view('reclamation/listeReclamationChauffeur', ['reclamations' => $reclamation ]);
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
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
       
        
        $reclamation = DB::table('reclamations')
            ->join('clients', 'clients.id', '=', 'reclamations.idClient')
            ->join('chauffeurs', 'chauffeurs.id', '=', 'reclamations.idChauffeur')
            ->select('reclamations.sujet','reclamations.reclamation', 'clients.Nom as nomclient','clients.Prenom as prenomclient', 'chauffeurs.Nom as nomchauffeur', 'chauffeurs.Prenom as prenomchauffeur')
            ->where('reclamations.id','=',$id)
            ->get();
       // dd($reclamation);
        //print_r($reclamation[0]->sujet);
        return view('reclamation/voirReclamation', ['reclamation' => $reclamation, 'idReclamation' => $id ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reclamation $reclamation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idReclamation)
    {
        $reclamation = Reclamation::findOrFail($idReclamation);
        $reclamation->status = 'regler';
        $reclamation->update();

        $request->session()->flash('status', 'Reclamation regler avec succee!');
        return redirect('reclamation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reclamation  $reclamation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reclamation $reclamation)
    {
        //
    }
}
