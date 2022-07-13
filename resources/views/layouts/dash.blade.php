<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>{{ $title ?? '' }} | {{ auth()->user()->name }}</title>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    @yield('head')
</head>
<body>
    <div class="wrapper ">
        @include('layouts.sidebar')
        <div class="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        @yield('header')
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Account
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                    <a class="dropdown-item"
                                        href="/profile">Profile</a>
                                    <div class="dropdown-divider"></div>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Logout</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="float-left">
                        <ul>
                            <li><a href="https://github.com/silohon">Silohon</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="copyright float-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with <i class="material-icons">favorite</i> by
                        <a href="https://github.com/silohon" target="_blank">Silohon</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap-material-design.min.js"></script>
    <script src="/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="/js/moment.min.js"></script>
    <script src="/js/sweetalert2.js"></script>
    <script src="/js/jquery.validate.min.js"></script>
    <script src="/js/jquery.bootstrap-wizard.js"></script>
    <script src="/js/bootstrap-selectpicker.js"></script>
    <script src="/js/bootstrap-datetimepicker.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/bootstrap-tagsinput.js"></script>
    <script src="/js/jasny-bootstrap.min.js"></script>
    <script src="/js/fullcalendar.min.js"></script>
    <script src="/js/jquery-jvectormap.js"></script>
    <script src="/js/nouislider.min.js"></script>
    <script src="/js/core.js"></script>
    <script src="/js/arrive.min.js"></script>
    <script src="/js/chartist.min.js"></script>
    <script src="/js/bootstrap-notify.js"></script>
    <script src="/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
    <script src="/js/demo.js"></script>
    <script src="/js/settings.js"></script>
    <script>
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
</body>

</html>