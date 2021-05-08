@extends('layouts.admin_layout')

@section('title' , 'Profile Chauffeur')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Voir Profile</h4>
                        <p class="card-category">information profile chauffeur</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-shopping">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th>Vehicule</th>
                                    <th >matricule</th>
                                    <th >Type Vehicule</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($vehicules as $vehicule)
                                <tr>
                                    <td>
                                        <div class="img-container">
                                            <img src="https://www.mercedes-benz.fr/passengercars/mercedes-benz-cars/models/s-class/saloon-wv223/explore/safety-teaser/_jcr_content/par/productinfotextimage/media2/slides/videoimageslide/image.MQ6.7.20200909153030.jpeg" alt="...">
                                        </div>
                                    </td>
                                    <td >
                                        <a href="#jacket">{{$vehicule->modele_vehicule}}</a>
                                    </td>
                                    <td>
                                        {{$vehicule->matricule}}
                                    </td>
                                    <td >
                                        {{$vehicule->type_vehicule}}
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Voyage</h4>
                        <p class="card-category"> Liste des voyage</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-shopping">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th class="th-description">lieu de départ</th>
                                    <th class="th-description">lieu d'arrivée</th>
                                    <th>Client</th>
                                    <th>vehicule</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($voyages as $voyage)
                                <tr>
                                    <td><span class="text-danger">A regler</span> </td>
                                    <td> {{$voyage->depart}}</td>
                                    <td> {{$voyage->arivee}} </td>
                                    <td> {{$voyage->idClient}} </td>
                                    <td>{{$voyage->type_vehicule}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="javascript:;">
                                <img class="img" src="../assets/img/faces/marc.jpg" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-gray"> Chauffeur </h6>
                            <h4 class="card-title">{{$chauffeur->Nom}} {{$chauffeur->Prenom}}</h4>
                            <p class="card-description">
                                {{$chauffeur->bio}}
                            </p>
                            <a href="{{url('/chauffeur/'.$chauffeur->id)}}" class="btn btn-primary btn-round">Go to profile</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card-nav-tabs text-center">
                        <div class="card-header card-header-primary">
                            Historique Reclamation
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Espace Reclamation </h4>
                            <p class="card-text">Tout les reclamtion fait par {{$chauffeur->Nom}} {{$chauffeur->Prenom}}</p>
                            <a href="{{url('/reclamation/chauffeur/'.$chauffeur->id)}}" class="btn btn-primary">voir reclamation</a>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection