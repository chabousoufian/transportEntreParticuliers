@extends('layouts.admin_layout')

@section('title' , 'Espace Admin')
@section('content')


    <div class="container-fluid">
        <!-- your content here -->
        <h1>Liste Administrateurs</h1>
        <div class="card card-nav-tabs mt-5 mb-5">
            <div class="card-header card-header-warning">
                Administrateur
            </div>
            <div class="card-body">
                <h4 class="card-title">Espace Ajoute</h4>
                <p class="card-text">Vous pouver ajouter un administrateur.</p>
                <a href="{{ url('/admin/create')}}" class="btn btn-primary">Ajouter Admin</a>
            </div>
        </div>


        @if(session()->has('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{session()->get('status')}}.</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>tel</th>
                    <th>mail</th>

                    <th class="text-right">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($admins as $admin)
                    
             
                <tr>
                    <td class="text-center">{{$admin->id}}</td>
                    <td>{{$admin->Nom}}</td>
                    <td>{{$admin->Prenom}}</td>
                    <td>{{$admin->tel}}</td>
                    <td>{{$admin->mail}}</td>
                    <td class="td-actions text-right">

                        <a type="button" rel="tooltip" class="btn btn-success" href="{{ url('/admin/'.$admin->id.'/edit') }}">
                            <i class="material-icons">edit</i>
                        </a>
                        <form method="POST" action="{{ url('/admin/'.$admin->id)}} ">
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
            {{$admins->links()}}
        </span>
    </div>
    <style>
        .w-5 {
            display: none
        }
    </style>
    
@endsection