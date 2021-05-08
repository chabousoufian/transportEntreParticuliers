@extends('layouts.admin_layout')

@section('title' , 'Historique de Reclamation')

@section('content')


    <div class="container-fluid">
        <!-- your content here -->

        <h1>Historique Des Reclamation</h1>
        
        @if(session()->has('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session()->get('status')}}.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif

        <div class="table-responsive">
            <table class="table table-shopping">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th class="text-center">Sujet</th>

                        <th class="text-center">status</th>
                        <th>Effectuer Par</th>


                        <th class="text-right">Operation</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($reclamations as $reclamation)
                        
                   
                    <tr>
                        <td>{{$reclamation->id}}</td>
                        <td class=" text-center">
                            {{$reclamation->sujet}}
                        </td>
                        <td class=" text-center">
                            {{$reclamation->status}}
                        </td>

                        <td> {{$reclamation->effectuer_par}}
                        </td>
                        <td class="td-actions text-right">

                            <a href="{{url('/reclamation/'.$reclamation->id)}}" type="button" rel="tooltip" class="btn btn-success btn-round">
                                <i class="material-icons">visibility</i>
                            </a>

                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    
@endsection