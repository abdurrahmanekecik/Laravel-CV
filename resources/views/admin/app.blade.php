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
    <a class="navbar-brand" href="index.html">BootAdmin</a>

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
                    <i class="fa fa-fw fa-cube"></i> Base
                </a>
                <ul id="sm_base" class="list-unstyled collapse">
                    <li><a href="demo/base/colors.html">Colors</a></li>
                    <li><a href="demo/base/typography.html">Typography</a></li>
                    <li><a href="demo/base/tables.html">Tables</a></li>
                    <li><a href="demo/base/progress.html">Progress</a></li>
                    <li><a href="demo/base/modal.html">Modal</a></li>
                    <li><a href="demo/base/alerts.html">Alerts</a></li>
                    <li><a href="demo/base/popover.html">Popover</a></li>
                    <li><a href="demo/base/tooltip.html">Tooltip</a></li>
                    <li><a href="demo/base/dropdown.html">Dropdown</a></li>
                    <li><a href="demo/base/navs.html">Navs</a></li>
                    <li><a href="demo/base/collapse.html">Collapse</a></li>
                    <li><a href="demo/base/lists.html">Lists</a></li>
                </ul>
            </li>
            <li><a href="demo/icons.html"><i class="fa fa-fw fa-flag"></i> Icons</a></li>
            <li><a href="demo/buttons.html"><i class="fa fa-fw fa-toggle-on"></i> Buttons</a></li>
            <li><a href="demo/forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a></li>
            <li><a href="demo/datatables.html"><i class="fa fa-fw fa-table"></i> Datatables</a></li>
            <li><a href="demo/cards.html"><i class="fa fa-fw fa-address-card"></i> Cards</a></li>
            <li><a href="demo/calendar.html"><i class="fa fa-fw fa-calendar-alt"></i> Calendar</a></li>
            <li><a href="demo/charts.html"><i class="fa fa-fw fa-chart-pie"></i> Charts</a></li>
            <li><a href="demo/maps.html"><i class="fa fa-fw fa-map-marker-alt"></i> Maps</a></li>
            <li>
                <a href="#sm_examples" data-toggle="collapse">
                    <i class="fa fa-fw fa-lightbulb"></i> Examples
                </a>
                <ul id="sm_examples" class="list-unstyled collapse">
                    <li><a href="demo/examples/blank.html">Blank/Starter</a></li>
                    <li><a href="demo/examples/pricing.html">Pricing</a></li>
                    <li><a href="demo/examples/invoice.html">Invoice</a></li>
                    <li><a href="demo/examples/faq.html">FAQ</a></li>
                    <li><a href="demo/examples/login.html">Login</a></li>
                </ul>
            </li>
            <li><a href="demo/docs.html"><i class="fa fa-fw fa-book"></i> Documentation</a></li>
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
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart3);
    google.charts.setOnLoadCallback(drawChart4);

    function drawChart3() {
        var data = google.visualization.arrayToDataTable([
            ['Year', 'Sales', 'Expenses'],
            ['2013', 1000, 400],
            ['2014', 1170, 460],
            ['2015', 660, 1120],
            ['2016', 1030, 540]
        ]);

        var options = {
            title: 'Company Performance',
            hAxis: {
                title: 'Year',
                titleTextStyle: {
                    color: '#333'
                }
            },
            vAxis: {
                minValue: 0
            }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div_3'));
        chart.draw(data, options);
    }

    function drawChart4() {
        var data = google.visualization.arrayToDataTable([
            ['Country', 'Popularity'],
            ['Germany', 200],
            ['United States', 300],
            ['Brazil', 400],
            ['Canada', 500],
            ['France', 600],
            ['RU', 700]
        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('chart_div_4'));

        chart.draw(data, options);
    }
</script>
@yield("js")
</body>

</html>
