<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\ErrorHandler\Debug;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $admins = Administrateur::paginate(5);
        return view('admin/admin',['admins'=>$admins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin/addAdmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 'mail'=> 'required' ]);
        $request->validate([ 'password'=> 'required' ]);
        $request->validate([ 'Nom'=> 'required' ]);
        $request->validate([ 'Prenom'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);

        $admin = new Administrateur();

        $admin->password = $request->input('mail');
        $admin->password = $request->input('password');
        $admin->Nom = $request->input('Nom');
        $admin->Prenom = $request->input('Prenom');
        $admin->tel = $request->input('tel');



        $admin->update();

        $request->session()->flash('status', 'admin '.$admin->Nom.' '.$admin->Prenom.' est ete ajouter avec succee !' );

        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function show(Administrateur $administrateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Administrateur::findOrFail($id);
      
        return view('admin/editAdmin', ['admin' => $admin] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([ 'password'=> 'required' ]);
        $request->validate([ 'Nom'=> 'required' ]);
        $request->validate([ 'Prenom'=> 'required' ]);
        $request->validate([ 'tel'=> 'required' ]);

        $admin = Administrateur::findOrFail($id);

       
        $admin->password = $request->input('password');
        $admin->Nom = $request->input('Nom');
        $admin->Prenom = $request->input('Prenom');
        $admin->tel = $request->input('tel');



        $admin->update();

        $request->session()->flash('status', 'admin '.$admin->Nom.' '.$admin->Prenom.' est modifier avec succee !' );

        return redirect('admin');
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $admin = Administrateur::findOrFail($id);
        $admin->delete();
        $request->session()->flash('status','Admin supprimer avec succee !');
        return redirect('admin');
    }
}
