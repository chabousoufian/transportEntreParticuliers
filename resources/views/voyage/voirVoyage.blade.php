@extends('layouts.admin_layout')

@section('title' , 'Voir Voyages')

@section('content')



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Voyage : {{$voyage[0]->id}} </h4>
                        <p class="card-category"> information client/chauffeur</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-shopping">
                            <thead>
                                <tr>

                                    <th>Nom Prenom client</th>
                                    <th class="th-description">tel</th>
                                    <th class="th-description">mail</th> 
                                </tr>
                            </thead>
                            <tbody>
                    
                                <tr>
                                    <td class="sm:td-name ">
                                        <a href="">{{$voyage[0]->nomclient}} {{$voyage[0]->prenomclient}}</a> 
                                    </td>
                                    <td>
                                        {{$voyage[0]->telclient}}
                                    </td>
                                    <td>
                                        {{$voyage[0]->mailclient}}
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                        <table class="table table-shopping">
                            <thead>
                                <tr>

                                    <th>Nom Prenom Chauffeur</th>
                                    <th class="th-description">tel</th>
                                    <th class="th-description">mail</th>


                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                    
                                <tr>

                                    <td class="sm:td-name ">
                                        <a href="">{{$voyage[0]->nomchauffeur}} {{$voyage[0]->prenomchauffeur}}</a>

                                    </td>
                                    <td>
                                        {{$voyage[0]->telchauffeur}}
                                    </td>
                                    <td>
                                        {{$voyage[0]->mailchauffeur}}
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
                                    <th class="th-description">type vehicule</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($voyage as $v)
                                <tr>
                                    <td> <span class="text-danger">A regler</span> </td>
                                    <td> {{$v->depart}}</td>
                                    <td> {{$v->arivee}}</td>
                                    <td>{{$v->type}}</td>
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
                            <h6 class="card-category text-gray">CLient</h6>
                            <h4 class="card-title text-bold">{{$voyage[0]->nomclient}} {{$voyage[0]->prenomclient}}</h4>
                            <a href="{{url('/client/'.$voyage[0]->idClient)}}" class="btn btn-primary btn-round">Go to profile</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card card-profile">
                        <div class="card-avatar">
                            <a href="javascript:;">
                                <img class="img" src="../assets/img/faces/marc.jpg" />
                            </a>
                        </div>
                        <div class="card-body">
                            <h6 class="card-category text-gray">Chauffeur</h6>
                            <h4 class="card-title text-bold">{{$voyage[0]->nomchauffeur}} {{$voyage[0]->prenomchauffeur}}</h4>
                            <p class="card-description">
                                {{$voyage[0]->bio}}
                            </p>
                            <a href="{{url('/chauffeur/'.$voyage[0]->idChauffeur)}}" class="btn btn-primary btn-round">Go to profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection