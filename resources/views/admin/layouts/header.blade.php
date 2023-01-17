<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>KADO</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <style>
            .bg-info, .bg-info>a {
                color: #fff !important;
            }

            .bg-info {
                background-color: #17a2b8!important;
            }

            .small-box {
                border-radius: .25rem;
                box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
                display: block;
                margin-bottom: 20px;
                position: relative;
            }

            .small-box>.inner {
                padding: 10px;
            }

            .small-box h3, .small-box p {
                z-index: 5;
            }

            .small-box h3 {
                font-size: 2.2rem;
                font-weight: 700;
                margin: 0 0 10px;
                padding: 0;
                white-space: nowrap;
            }

            .small-box p {
                font-size: 1rem;
            }

            .small-box .icon img {
                position: absolute;
                top: 15px;
                right: 15px;
                opacity: 0.5;
            }

            .bg-success, .bg-success>a {
                color: #fff!important;
            }

            .bg-success {
                background-color: #28a745!important;
            }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <header class="header-top" header-theme="light">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <div class="top-menu d-flex align-items-center">
                            <button type="button" class="btn-icon mobile-nav-toggle d-lg-none"><span></span></button>
                            <button type="button" id="navbar-fullscreen" class="nav-link"><i class="ik ik-maximize"></i></button>
                        </div>
                        <div class="top-menu d-flex align-items-center">
                            <div class="dropdown">
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <i class="ik ik-power dropdown-icon"></i>
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>
