<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <link href="{{url('/')}}/assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
</head>

<body>
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="white">
            <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->


            <div class="logo">

                <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                  Tetouan Tronsport
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <!-- sider begin here!-->
                    <li class="nav-item active  ">
                        <a class="nav-link" href="{{url('/home')}}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/admin')}}">
                            <i class="material-icons">person</i>
                            <p>Espace Admin</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/client')}}">
                            <i class="material-icons">groups</i>
                            <p>Espace Client</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/chauffeur')}}">
                            <i class="material-icons"><span class="material-icons-outlined">
                              emoji_transportation
                              </span></i>
                            <p>Espace Chauffeur</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/reclamation')}}">
                            <i class="material-icons"><span class="material-icons-outlined">
                              campaign
                              </span></i>
                            <p>Espace Reclamation</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/voyage')}}">
                            <i class="material-icons"><span class="material-icons-outlined">
                              local_shipping
                              </span></i>
                            <p>Espace Voyages</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/home')}}">
                            <i class="material-icons"><span class="material-icons-outlined">
                              bar_chart
                              </span></i>
                            <p>Analyse</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./Parametre.html">
                            <i class="material-icons">settings</i>
                            <p>Parametre</p>
                        </a>
                    </li>




                    <!-- your sidebar here -->
                </ul>
                <div class="nav-item align-items-end">
                    <ul class="nav">
                        <!-- sider begin here!-->
                        <li class="nav-item ">
                            <a class="nav-link btn-danger" href="#0">
                                <i class="material-icons"><span class="material-icons-outlined text-success">
                                  power_settings_new
                                  </span></i>
                                <p>Deconnection</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:;">Dashboard</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:;">
                                    <i class="material-icons">dashboard</i>
                                    <p class="d-lg-none d-md-block">
                                        Stats
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="d-lg-none d-md-block">
                                        Some Actions
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Mike John responded to your email</a>
                                    <a class="dropdown-item" href="#">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="#">Another Notification</a>
                                    <a class="dropdown-item" href="#">Another One</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Log out</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
              
                @yield('content')

    
            </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li>
                                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
                    </div>
                    <!-- your footer here -->
                </div>
            </footer>
        </div>
    </div>
</body>

</html>