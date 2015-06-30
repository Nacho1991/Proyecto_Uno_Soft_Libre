<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>CyberLAV</title>
    <script src="<?php url()?>/js/bootstrap.js"></script>
    <script src="<?php url()?>/js/jquery-2.1.4.js"></script>
    <script src="<?php url()?>/js/bootstrap-table-filter.js"></script>
    <link rel="stylesheet" href="<?php url()?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php url()?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php url()?>/css/bootstrap-table-filter.css">
    <link rel="stylesheet" href="<?php url()?>/css/bootstrap-theme.min.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/inicio">CyberLAV Music BOX</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo url() ?>/inicio">Dashboard</a>
                </li>
                @if (Auth::user()->is_admin)
                    <li>
                        <a href="/artists">Cantantes</a>
                    </li>
                    <li>
                        <a href="/songs">Canciones</a>
                    </li>
                @endif
                <li>
                    <a href="/playlists">Lista disponible</a>
                </li>
                @if(!Auth::user()->is_admin)
                    <li>
                        <a href="/listas">Listas de reproducción</a>
                    </li>
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#"></a>
                </li>
                <li role="presentation" class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        Bienvenido! <?php echo Auth::user()->email?> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="/logout">Cerrar sesión</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>
<br>
<br><br>

<div class="container">
    @yield('content')
</div>
<!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>