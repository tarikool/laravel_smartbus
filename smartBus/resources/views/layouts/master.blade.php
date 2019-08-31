
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smartbus</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @yield('styles')
</head>
<!--
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red-light sidebar-mini">
<div id='app'>

    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b>LT</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Smart</b>Bus</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Tasks Menu -->
                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="{{auth()->user()->photo ? auth()->user()->photo->file : 'http://placehold.it/400x400' }}" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{auth()->user()->name}}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="{{auth()->user()->photo ? auth()->user()->photo->file : 'http://placehold.it/400x400' }}" class="img-circle" alt="User Image">

                                    <p>
                                        {{auth()->user()->name}} - {{isset(auth()->user()->role) ? auth()->user()->role->name : ''}}
                                        <small>Member since {{date(' M. Y', strtotime(auth()->user()->created_at))}}</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xs-4 text-center">--}}
{{--                                            <a href="#">Followers</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ route('users.show', auth()->user()->id ) }}" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{auth()->user()->photo ? auth()->user()->photo->file : 'http://placehold.it/400x400' }}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>{{auth()->user()->name}}</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu</li>
                    <!-- Optionally, you can add icons to the links -->
{{--                    <li><a href="{{ route('users.show', auth()->user()->id ) }}"><i class="fa fa-user-md"></i> <span>Your Profile</span></a></li>--}}

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-user-md"></i> <span>Your Profile</span>
                            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('user.show', auth()->user()->id ) }}"><i class="fa fa-eye"></i> View Profile</a></li>
                            <li><a href="{{ route("user.edit", auth()->user()->id ) }}"><i class="fa fa-forward"></i> Update Profile</a></li>
{{--                            <li><a href="{{ route("users.edit", auth()->user()->id ) }}"><i class="fa fa-forward"></i> Change Password</a></li>--}}
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i>Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @if(Auth::user()->isAdmin())
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-group"></i> <span>Users</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('users.index') }}"><i class="fa fa-star"></i> All Users</a></li>
                                <li><a href="{{ route('users.create') }}"><i class="fa fa-user-plus"></i> Create User</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cab"></i> <span>Drivers</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('drivers.index') }}"><i class="fa fa-star"></i> All Drivers</a></li>
                                {{--                            <li><a href="{{ route('drivers.create') }}"><i class="fa fa-user-plus"></i> Create Driver</a></li>--}}
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-hdd-o"></i> <span>Timetable</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('schedule.index') }}"><i class="fa fa-star"></i> All Schedule</a></li>
                                <li><a href="{{ route('schedule.create') }}"><i class="fa fa-clock-o"></i> Add Schedule</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-subway"></i> <span>Route</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('routes.index') }}"><i class="fa fa-forward"></i> All Routes</a></li>
                                <li><a href="{{ route('routes.create') }}"><i class="fa fa-plus-square-o"></i> Add Route</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-simplybuilt"></i> <span>Station</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('stations.index') }}"><i class="fa fa-forward"></i> All Stations</a></li>
                                <li><a href="{{ route('stations.create') }}"><i class="fa fa-plus-square-o"></i> Add Station</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bus"></i> <span>Bus</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('bus.index') }}"><i class="fa fa-forward"></i> All Bus</a></li>
                                <li><a href="{{ route('bus.check') }}"><i class="fa fa-plus-square-o"></i> Add Bus</a></li>
                            </ul>
                        </li>
                    @endif

                    @if( Auth::user()->isUser() )
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-cc-amex"></i> <span>Trip</span>
                                <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ route('trip.index') }}"><i class="fa fa-square"></i> All Trip</a></li>
                                <li><a href="{{ route('trip.check') }}"><i class="fa fa-square"></i> Add Trip</a></li>
                            </ul>
                        </li>
                    @endif


                </ul>
                <!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    {{ isset($header) ? $header : ' ' }}
{{--                    <small>Optional description</small>--}}
                </h1>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                @yield('content')


            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="pull-right hidden-xs">
                Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane active" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:;">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:;">
                                <h4 class="control-sidebar-subheading">
                                    Custom Template Design
                                    <span class="pull-right-container">
                        <span class="label label-danger pull-right">70%</span>
                      </span>
                                </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
                                Report panel usage
                                <input type="checkbox" class="pull-right" checked>
                            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>
    </div>
<!-- ./wrapper -->
</div>


<script src="{{url('local/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('local/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Select2 -->
<script src="{{url('local/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{url('local/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{url('local/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{url('local/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="{{url('local/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{url('local/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{url('local/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{url('local/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{url('local/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

<!-- DataTables -->
<script src="{{url('local/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('local/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<!-- SlimScroll -->
<script src="{{url('local/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- iCheck 1.0.1 -->
<script src="{{url('local/plugins/iCheck/icheck.min.js') }}"></script>
<!-- FastClick -->
<script src="{{url('local/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{url('local/dist/js/adminlte.min.js') }}"></script>
<script src="{{url('local/dist/js/main.js') }}"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5WQW9fdx6uzx85zLVwfq7mmHDTRmIYi8&libraries=places">
</script>
@yield('scripts')

</body>
</html>