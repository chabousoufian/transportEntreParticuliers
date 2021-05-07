@extends('layouts.admin_layout')

@section('title' , 'Ajouter Admin')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">voir Profile</h4>
                        <p class="card-category"> information clinet</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-shopping">
                            <thead>
                                <tr>

                                    <th>Nom Prenom</th>
                                    <th class="th-description">tel</th>
                                    <th class="th-description">mail</th>


                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                    
                                <tr>

                                    <td class="sm:td-name ">
                                        <a href="">{{$client->Nom}} {{$client->Prenom}}</a>

                                    </td>
                                    <td>
                                        {{$client->tel}}
                                    </td>
                                    <td>
                                        {{$client->mail}}
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
                                    <th>Chauffeur</th>
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
                            <h6 class="card-category text-gray">CLient</h6>
                            <h4 class="card-title text-bold">{{$client->Nom}} {{$client->Prenom}}</h4>
                            <p class="card-description">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, eaque! Velit corporis modi ex, similique ratione rem suscipit itaque et deleniti nemo voluptatibus consectetur iusto aliquid perferendis mollitia, sequi laborum.
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