<?php

namespace App\Http\Controllers;


use \App\Models\Chauffeur;
use Illuminate\Http\Request;

class HomeConroller extends Controller
{
    public function index(){
        return view('dashboard/home');
    }

    public function nombreChauffeur(){
        $nbr = Chauffeur::all()->count();
        return view('dashboard/home',[ 'nombreChauffeurs' => $nbr]);
    }
    
}
