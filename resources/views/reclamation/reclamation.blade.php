@extends('layouts.admin_layout')

@section('title' , 'Espace Reclamation')

@section('content')


    <div class="container-fluid">
        <!-- your content here -->

        <h1>Liste Des Reclamation</h1>


        <div class="table-responsive">
            <table class="table table-shopping">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="text-center">Client</th>

                        <th class="text-center">Chauffeur</th>
                        <th>Status</th>


                        <th class="text-right">Operation</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2</td>
                        <td class=" text-center">
                            soufian chabou
                        </td>
                        <td class=" text-center">
                            soufian chabou
                        </td>

                        <td>Regler
                        </td>
                        <td class="td-actions text-right">

                            <a href="./voirReclamation.html" type="button" rel="tooltip" class="btn btn-success btn-round">
                                <i class="material-icons">visibility</i>
                            </a>

                        </td>
                    </tr>

                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    
@endsection