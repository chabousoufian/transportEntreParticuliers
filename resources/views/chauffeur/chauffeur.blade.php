@extends('layouts.admin_layout')

@section('title' , 'Espace Chauffeur')

@section('content')


    <div class="container-fluid">
        <!-- your content here -->

        <h1>Liste Des Chauffeures</h1>

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
                        <th class="text-center">Chauffeur</th>

                        <th>Raiting</th>


                        <th class="text-right">Operation</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($chauffeurs as $chauffeur)
                    <tr>
                        <td>{{$chauffeur->id}}</td>
                        <td class=" text-center">
                            {{$chauffeur->Nom}}
                        </td>

                        <td class="text-danger">A fixer
                        </td>
                        <td class="td-actions text-right">

                            <a href="{{ url('/chauffeur/'.$chauffeur->id) }}" type="button" rel="tooltip" class="btn btn-success btn-round">
                                <i class="material-icons">person</i>
                            </a>
                            <form method="POST" action="{{ url('/chauffeur/'.$chauffeur->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" rel="tooltip" class="btn btn-danger btn-round">
                                <i class="material-icons">close</i>
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
            <span class="">
            {{ $chauffeurs->links() }}
            </span>
            
        </div>

    </div>

    <style>
        .w-5{
            display: none;
           
        }
    
    </style>  
@endsection

