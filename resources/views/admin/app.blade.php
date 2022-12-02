<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('a-assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('a-assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('a-assets/css/datatables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('a-assets/css/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('a-assets/css/bootadmin.min.css') }}">

    <title>Dashboard | BootAdmin</title>
    @yield("css")
</head>

<body class="bg-light">

<nav class="navbar navbar-expand navbar-dark bg-primary">
    <a class="sidebar-toggle mr-3" href="#"><i class="fa fa-bars"></i></a>
    <a class="navbar-brand" href="{{ route('admin') }}">Admin</a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i> 5</a></li>
            <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-bell"></i> 3</a></li>
            <li class="nav-item dropdown">
                <a href="#" id="dd_user" class="nav-link dropdown-toggle" data-toggle="dropdown"><i
                        class="fa fa-user"></i> John Doe</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd_user">
                    <a href="#" class="dropdown-item">Profile</a>
                    <a href="#" class="dropdown-item">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="d-flex">
    <div class="sidebar sidebar-dark bg-dark">
        <ul class="list-unstyled">
            <li class="active"><a href="demo.html"><i class="fa fa-fw fa-tachometer-alt"></i> Dashboard</a></li>
            <li>
                <a href="#sm_base" data-toggle="collapse">
                    <i class="fa fa-fw fa-cube"></i> Pages
                </a>
                <ul id="sm_base" class="list-unstyled collapse">
                    <li><a href="{{ route('homes.index') }}">Home</a></li>
                    <li><a href="{{ route('abouts.index') }}">About</a></li>
                    <li><a href="{{ route('educations.index') }}">Education</a></li>
                    <li><a href="{{ route('partners.index') }}">Partners</a></li>

                </ul>
            </li>
            <li><a href="('blogs.index')"><i class="fa fa-fw fa-flag"></i> Blog</a></li>
            <li><a href="{{ route('settings.index') }}"><i class="fa fa-fw fa-flag"></i> Settings</a></li>
        </ul>
    </div>


    @yield("content")

<script src="{{ asset('a-assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('a-assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('a-assets/js/datatables.min.js') }}"></script>
<script src="{{ asset('a-assets/js/moment.min.js') }}"></script>
<script src="{{ asset('a-assets/js/fullcalendar.min.js') }}"></script>
<script src="{{ asset('a-assets/js/bootadmin.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('a-assets/demo/charts/loader.js') }}"></script>
@yield("js")
</body>

</html>
