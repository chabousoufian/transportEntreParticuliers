@extends('layouts.admin_layout')

@section('title' , 'Ajouter Admin')

@section('content')

    <div class="container-fluid">
        <!-- your content here -->
        <div class="card card-nav-tabs">
            <div class="card-header card-header-success">
                Ajouter un Administrateur
            </div>
            <div class="card-body">
                <form method="POST" action="{{ url('/admin')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input value="{{ old('mail', $admin->mail ?? null)}}" type="email" class="form-control" name="mail" placeholder="Email" >
                            @error('mail') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Password</label>
                            <input   type="password" name="password" class="form-control" placeholder="Password">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nom</label>
                            <input type="text" name="Nom" value="{{ old('Nom', $admin->Nom ?? null)}}"  class="form-control" placeholder="Nom">
                            @error('Nom') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Prenom</label>
                            <input type="text" name="Prenom" value="{{ old('Prenom', $admin->Prenom ?? null)}}"  class="form-control"  placeholder="Prenom">
                            @error('Prenom') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Tel</label>
                            <input type="text" name="tel" value="{{ old('tel', $admin->tel ?? null)}}"  class="form-control" id="inputEmail4" placeholder="Tel">
                            @error('tel') <span class="text-danger">{{ $message }}</span> @enderror

                        </div>

                    </div>


                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>


            </div>
        </div>



    </div>

    
@endsection