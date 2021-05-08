@extends('layouts.admin_layout')

@section('title' , 'Espace Voyages')

@section('content')


    <div class="container-fluid">
        <!-- your content here -->

        <h1>Liste des Voyages </h1>

        <div class="card card-nav-tabs">

            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>lieu de départ</th>
                            <th>lieu d'arrivée</th>
                            <th>Client</th>
                            <th class="text-left">Chauffeur</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($voyages as $voyage)
                        <tr>
                            <td class="text-center">{{$voyage->id}}</td>
                            <td>{{$voyage->depart}}</td>
                            <td>{{$voyage->arivee}}</td>
                            <td>{{$voyage->nomclient}} {{$voyage->prenomclient}}</td>
                            <td class="text-left">{{$voyage->nomchauffeur}} {{$voyage->prenomchauffeur}}</td>
                            <td class="td-actions text-right">
                                <a href="{{url('/voyage/'.$voyage->id)}}" type="button" rel="tooltip" class="btn btn-info btn-simple">
                                    <i class="material-icons">visibility</i>
                                </a>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>



            </div>
        </div>

    </div>


    
@endsection