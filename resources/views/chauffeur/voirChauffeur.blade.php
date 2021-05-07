@extends('layouts.admin_layout')

@section('title' , 'Profile Chauffeur')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Voir Profile</h4>
                        <p class="card-category">Complete your profile</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-shopping">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th>Vehicule</th>
                                    <th class="th-description">Color</th>
                                    <th class="th-description">matricule</th>
                                    <th class="text-right">Type Vehicule</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="img-container">
                                            <img src="https://www.mercedes-benz.fr/passengercars/mercedes-benz-cars/models/s-class/saloon-wv223/explore/safety-teaser/_jcr_content/par/productinfotextimage/media2/slides/videoimageslide/image.MQ6.7.20200909153030.jpeg" alt="...">
                                        </div>
                                    </td>
                                    <td class="td-name">
                                        <a href="#jacket">CLASS S</a>
                                        <br><small>mercedes-benz</small>
                                    </td>
                                    <td>
                                        black
                                    </td>
                                    <td>
                                        2131351/A/44
                                    </td>
                                    <td class="td-number">
                                        transport particulier
                                    </td>

                                </tr>
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


                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                    <td>2020-02-30 14:23 </td>
                                    <td> av massira tetouan</td>
                                    <td> meramar martil </td>
                                    <td> mohamed </td>
                                    <td>clio 4</td>
                                </tr>
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
                            <a href="javascript:;" class="btn btn-primary btn-round">Go to profile</a>
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
                            <p class="card-text">Tout les reclamtion fait par SOUFIAN CHABOU</p>
                            <a href="#" class="btn btn-primary">voir reclamation</a>
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