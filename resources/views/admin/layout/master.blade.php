<!DOCTYPE html>
<html lang="en">
<style>
    .nav-border {
        /* border: 1px solid white; */
    }

    .hidden li i{
        visibility: hidden;
    }

</style>

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="EDMS - Electornic Document Management System">

    <title>Job Portal</title>
    <!-- Icons-->
    <link href="{{ asset('adminpaneldesign/vendors/@coreui/icons/css/coreui-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="{{ asset('adminpaneldesign/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/pace-progress/css/pace.min.css') }}" rel="stylesheet">


    <link href="{{ asset('adminpaneldesign/vendors/bootstrap-daterangepicker/css/daterangepicker.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/select2/css/select2.min.css') }}" rel="stylesheet">

    <link href="{{ asset('adminpaneldesign/vendors/datatables.net-bs4/css/dataTables.bootstrap4.css') }}"
        rel="stylesheet">
    <link href="{{ asset('adminpaneldesign/vendors/ladda/css/ladda-themeless.min.css') }}" rel="stylesheet">

{{--<link href="https://fonts.googleapis.com/css?family=Fira+Code&display=swap" rel="stylesheet">--}}
<link rel="stylesheet" href="{{asset('extra/select2/select2.min.css')}}">


</head>


<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <header class="app-header navbar">
      <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <label for="Admin" class="navbar-brand-full"> <i class="icon-user-follow text-success"></i> &nbsp;Admin</label>
      <i class="icon-user-follow text-success navbar-brand-minimized"></i>

      </a>
      <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul class="nav navbar-nav d-md-down-none">

      </ul>
      <ul class="nav navbar-nav ml-auto">
        <li class="nav-item dropdown d-md-down-none">
          <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="icon-bell"></i>
            <span class="badge badge-pill badge-danger">5</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
            <div class="dropdown-header text-center">
              <strong>You have 5 notifications</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="icon-user-follow text-success"></i> New user registered</a>
            <a class="dropdown-item" href="#">
              <i class="icon-user-unfollow text-danger"></i> User deleted</a>
            <a class="dropdown-item" href="#">
              <i class="icon-chart text-info"></i> Sales report is ready</a>
            <a class="dropdown-item" href="#">
              <i class="icon-basket-loaded text-primary"></i> New client</a>
            <a class="dropdown-item" href="#">
              <i class="icon-speedometer text-warning"></i> Server overloaded</a>
            <div class="dropdown-header text-center">
              <strong>Server</strong>
            </div>
            <a class="dropdown-item" href="#">
              <div class="text-uppercase mb-1">
                <small>
                  <b>CPU Usage</b>
                </small>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
              <small class="text-muted">348 Processes. 1/4 Cores.</small>
            </a>
            <a class="dropdown-item" href="#">
              <div class="text-uppercase mb-1">
                <small>
                  <b>Memory Usage</b>
                </small>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
              <small class="text-muted">11444GB/16384MB</small>
            </a>
            <a class="dropdown-item" href="#">
              <div class="text-uppercase mb-1">
                <small>
                  <b>SSD 1 Usage</b>
                </small>
              </div>
              <span class="progress progress-xs">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </span>
              <small class="text-muted">243GB/256GB</small>
            </a>
          </div>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            <img class="img-avatar" src="{{ asset('adminpaneldesign/img/avatars/6.jpg') }}" alt="admin@bootstrapmaster.com">
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-header text-center">
              <strong>Account</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-bell-o"></i> Updates
              <span class="badge badge-info">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-envelope-o"></i> Messages
              <span class="badge badge-success">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-tasks"></i> Tasks
              <span class="badge badge-danger">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-comments"></i> Comments
              <span class="badge badge-warning">42</span>
            </a>
            <div class="dropdown-header text-center">
              <strong>Settings</strong>
            </div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-user"></i> Profile</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-wrench"></i> Settings</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-usd"></i> Payments
              <span class="badge badge-dark">42</span>
            </a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-file"></i> Projects
              <span class="badge badge-primary">42</span>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <i class="fa fa-shield"></i> Lock Account</a>
            <a class="dropdown-item" href="#">
              <i class="fa fa-lock"></i> Logout</a>
          </div>
        </li>
      </ul>

    </header>
    <div class="app-body">
      <div class="sidebar">
        <nav class="sidebar-nav">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">
                <i class="nav-icon icon-speedometer"></i> Dashboard
                <span class="badge badge-info">NEW</span>
              </a>
            </li>



            
              <li class="nav-item">
                  <a class="nav-link" href="{{ url('/category') }}">
                    <i class="nav-icon icon-list"></i> Category</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/company') }}">
                    <i class="nav-icon icon-list"></i> Company</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/job') }}">
                    <i class="nav-icon icon-list"></i> Job</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/cv') }}">
                    <i class="nav-icon icon-list"></i> CV</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/type') }}">
                    <i class="nav-icon icon-list"></i> Type</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/location') }}">
                    <i class="nav-icon icon-list"></i> Location</a>
                </li>
             
            </li>

            </li>


          </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
      </div>
      <main class="main" id="app">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">Admin</li>
          <!-- Breadcrumb Menu-->

        </ol>

        @yield('content')
      </main>

    </div>
    
    <script src="{{ asset('adminpaneldesign/vendors/jquery/js/jquery.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/popper.js/js/popper.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/pace-progress/js/pace.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/perfect-scrollbar/js/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/@coreui/coreui-pro/js/coreui.min.js') }}"></script>
    <!-- Plugins and scripts required by this view-->
    {{-- <script src="{{ asset('adminpaneldesign/vendors/chart.js/js/Chart.min.js') }}"></script> --}}
    {{-- <script
        src="{{ asset('adminpaneldesign/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js') }}">
    </script> --}}
    <script src="{{ asset('adminpaneldesign/js/main.js') }}"></script>



    <!-- Plugins and scripts required by form-->
    <script src="{{ asset('adminpaneldesign/vendors/jquery.maskedinput/js/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/bootstrap-daterangepicker/js/daterangepicker.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/js/advanced-forms.js') }}"></script>


    <script src="{{ asset('adminpaneldesign/vendors/datatables.net/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/datatables.net-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/js/datatables.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/ladda/js/spin.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/vendors/ladda/js/ladda.min.js') }}"></script>
    <script src="{{ asset('adminpaneldesign/js/loading-buttons.js') }}"></script>

    <script>

        function myFunction() {
            if(!confirm("Are You Sure to delete this"))
            event.preventDefault();
        }

        function myRestoreFunction() {
            if(!confirm("Are you sure to restore this"))
            even.preventDefault();
        }

    </script>

</body>

</html>
