@extends('layouts.admin_layout')

@section('title' , 'Voir Reclamation')

@section('content')


    <div class="container-fluid">
        <!-- your content here -->

        <h1 class="mb-3">Reclamation {{$idReclamation}}</h1>

        <div class="card card-nav-tabs mt-5">
            <div class="card-header card-header-danger">
                Sujet : {{$reclamation[0]->sujet}}
            </div>
            <div class="card-body">
                <form method="POST" action="{{url('/reclamation/'.$idReclamation)}}">
                    @csrf
                    @method('PUT')
                <h4 class="card-title">Nom Client : {{$reclamation[0]->nomclient}}  {{$reclamation[0]->prenomclient}}</h4>
                <h4 class="card-title">Nom Chauffeur : {{$reclamation[0]->nomchauffeur}} {{$reclamation[0]->prenomchauffeur}} </h4>
               

                <p class="card-text">{{$reclamation[0]->reclamation}}</p>
                <input type="submit" class="btn btn-danger" value="Regler Reclamation">
                </form>
            </div>
        </div>

    </div>


@endsection

