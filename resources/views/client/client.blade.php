@extends('layouts.admin_layout')

@section('title' , 'Espace Client')

@section('content')


    <div class="container-fluid">
        <!-- your content here -->
        <h1 class="mt-5 mb-5">Liste Client</h1>


        @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session()->get('status')}}.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif


        <table class="table">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th class="text-left">mail</th>
                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    
             
                <tr>
                    <td class="text-center">{{$client->id}}</td>
                    <td>{{$client->Nom}}</td>
                    <td>{{$client->Prenom}}</td>
                    <td>{{$client->tel}}</td>
                    <td class="text-left">{{$client->mail}}</td>
                    <td class="td-actions text-right">
                        <a href="{{ url('/client/'.$client->id) }}" type="button" rel="tooltip" class="btn btn-info">
                            <i class="material-icons">person</i>
                        </a>
                        <form method="POST" action="{{ url('/client/'.$client->id) }}"> 
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                            <i class="material-icons">close</i>
                        </button>
                        </form>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>
        <span>
            {{$clients->links()}}
        </span>
        <style>
            .w-5{
                display: none;
               
            }
        
        </style>  

    </div>

    
@endsection