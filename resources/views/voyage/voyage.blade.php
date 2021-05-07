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
                            <th class="text-right">Chauffeur</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Av massira khadra</td>
                            <td>av zrak touni</td>
                            <td>soufian chabou</td>
                            <td class="text-right">mohamed</td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-simple">
                                    <i class="material-icons">visibility</i>
                                </button>

                            </td>
                        </tr>
                    </tbody>
                </table>



            </div>
        </div>

    </div>


    
@endsection