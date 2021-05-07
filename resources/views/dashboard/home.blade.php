@extends('layouts.admin_layout')

@section('title' , 'Dashboard')

@section('content')

    <div class="container-fluid">
        <!-- your content here -->
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons"><span class="material-icons-outlined">
                                emoji_transportation
                                </span></i>
                        </div>
                        <p class="card-category">Nombre des chauffeaur</p>
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">warning</i>
                            <a href="#pablo">Get More Space...</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">groups</i>
                        </div>
                        <p class="card-category">Nombre des Client</p>
                        <h3 class="card-title">23400</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">date_range</i> Last 24 Hours
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons"><span class="material-icons-outlined">
                                feedback
                                </span></i>
                        </div>
                        <p class="card-category">Reclamartion/p>
                            <h3 class="card-title">49</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">warning</i>
                            <a href="#pablo">A resudre!</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons"><span class="material-icons-outlined">
                                local_shipping
                                </span></i>
                        </div>
                        <p class="card-category">mombre des voyages</p>
                        <h3 class="card-title">23564</h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons text-danger">warning</i>
                            <a href="#pablo">Get More Space...</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!--   charst graph 1 and graph 2-->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-chart card-header-warning">
                        <div class="ct-chart" id="dailySalesChart"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Evolution de nombre des client</h4>
                        <p class="card-category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 5%  </span> augmentation dans le dernier mois</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> updated 4 minutes ago
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header card-chart card-header-success">
                        <div class="ct-chart" id="completedTasksChart"></div>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Evolution de nombre des chauffeaur</h4>
                        <p class="card-category"><span class="text-success"><i class="fa fa-long-arrow-up"></i> 27%  </span> augmentation dans le dernier mois</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <i class="material-icons">access_time</i> updated 2 minutes ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- tables -->
        <div class="row">

            <div class="col-md-6 card card-nav-tabs">
                <div class="card-header card-header-danger">
                    Reclamation client
                </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>

                                <td><button class="btn btn-danger">voir</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>

                                <td><button class="btn btn-danger">voir</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>
                                <td><button class="btn btn-danger">voir</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-md-6 card card-nav-tabs">
                <div class="card-header card-header-info">
                    Reclamation chauffeaur
                </div>
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nom</th>
                                <th scope="col">vehicule</th>
                                <th scope="col">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td><button class="btn btn-info">voir</button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td><button class="btn btn-info">voir</button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry the Bird</td>

                                <td>@twitter</td>
                                <td><button class="btn btn-info">voir</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection