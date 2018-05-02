<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Playmarket Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link rel="icon" type="image/png" href="{{ asset('images/play-button.png') }}"/>
    <link rel="shortcut icon" href="{{ asset('images/play.png') }}" type="image/x-icon">

    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="http://bus-ticket.bdtask.com/bus365_demov2/assets/datatables/css/dataTables.min.css" rel="stylesheet"
          type="text/css"/>

    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/fixedheader/3.1.3/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/responsive/2.2.1/css/responsive.bootstrap.min.css">


</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper">
    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="#" style="background-color: #35912e;" class="logo">
            <b>Playmarket</b>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" style="background-color: #35912e;" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="{{ asset('images/favicon.jpg') }}"
                                 class="user-image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs"></span>
                        </a>
                    </li>
                    <li class="user user-menu">
                        <a href="#" style="background-color: #35912e;" class="btn btn-primary btn-flat"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-sign-out"></i> Logout
                        </a>
                        <form id="logout-form" action="{{route('admin.logout')}}" method="GET" style="display: none;">
                            @csrf
                        </form>
                    </li>

                </ul>
            </div>

        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside style="background-color: #000055;" class="main-sidebar" id="sidebar-wrapper">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img style="min-width: 50px; min-height: 50px;max-width: 50px; max-height: 50px;"
                         src="{{ asset('images/favicon.jpg') }}" class="img-circle"
                         alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p></p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Admin</a>
                </div>
            </div>


            <ul class="sidebar-menu" data-widget="tree">

                <li class="treeview menu">
                    <a href="#">
                        <i class="fa fa-user-secret"></i> <span>Admis</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('admins.index')}}"><i class="fa fa-list"></i>Admins</a></li>
                    </ul>
                </li>
                <li class="treeview menu">
                    <a href="#">
                        <i class="fa fa-trophy"></i> <span>Developpers</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('users.developpers')}}"><i class="fa fa-list"></i>Developpers</a></li>
                    </ul>
                </li>
                <li class="treeview menu">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>Users</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('users.index')}}"><i class="fa fa-list"></i>Users</a></li>
                    </ul>
                </li>
                <li class="treeview menu">
                    <a href="#">
                        <i class="fa fa-gamepad"></i> <span>Apps</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('applications.index') }}"><i class="fa fa-list"></i>Apps</a></li>
                    </ul>
                </li>
                <li class="treeview menu">
                    <a href="#">
                        <i class="fa fa-star"></i> <span>Ratings</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{route('rates.index')}}"><i class="fa fa-list"></i>Ratings</a></li>
                    </ul>
                </li>
                <li class="treeview menu">
                    <a href="#">
                        <i class="fa fa-code-fork"></i> <span>Categories</span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('categories.index') }}"><i class="fa fa-list"></i>Categories</a></li>
                    </ul>
                </li>

            </ul>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>        <!-- Content Wrapper. Contains page content -->


    <style>
        #dataTable td {
            min-width: 10px;
            max-width: 50px;
            overflow: hidden;
        }
    </style>


    <div class="content-wrapper">

        <div class="container">
            <div class="row">

                @yield('content')

            </div>
        </div>

    </div>


    <!-- Main Footer -->
    <footer class="main-footer">
    </footer>

</div>

<!-- jQuery 3.1.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/js/adminlte.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<link href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
      rel="stylesheet">
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
<script src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>

<script src="http://bus-ticket.bdtask.com/bus365_demov2/assets/datatables/js/dataTables.min.js"
        type="text/javascript"></script>

<script type="text/javascript">
    $(document).ready(function () {
//        $('#dataTable').DataTable( {
//            'columnDefs': [
//                {'max-width': '20%', 'targets': 0}
//            ],
//        } );
        $('#dataTable').DataTable({
            "pagingType": "full_numbers",
            responsive: true,
            dom: "<'row'<'col-sm-8'B><'col-sm-4'f>>tp",
            buttons: [
                {extend: 'copy', className: 'btn-sm'},
                {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'excel', title: 'ExampleFile', className: 'btn-sm', title: 'exportTitle'},
                {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                {extend: 'print', className: 'btn-sm'}
            ]
        });

    });
</script>
</body>
</html>