@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <!-- Left -->
                <strong>Mantenimientos</strong>
                <hr>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="<?php echo url() ?>/inicio" title="Dashboard">Dashboard</a>
                    </li>
                    @if (Auth::user()->is_admin)
                        <li>
                            <a href="/artists" title="Carreras">Cantantes</a>
                        </li>
                        <li>
                            <a href="/songs" title="Estudiantes">Canciones</a>
                        </li>
                    @endif
                    <li>
                        <a href="/playlists" title="Usuarios">Lista disponible</a>
                    </li>
                    @if(!Auth::user()->is_admin)
                        <li>
                            <a href="/listas">Lista de reproducción</a>
                        </li>
                    @endif
                </ul>
            </div>
            <!-- /span-3 -->
            <div class="col-md-10">
                <!-- Right -->
                <strong><span class="glyphicon glyphicon-menu-hamburger"></span> Dashboard</strong>
                <hr>
                <div class="row">
                    <div class="col-md-9">
                        <div class="jumbotron">
                            <h2>
                                Hola, Bienvenido <?php echo Auth::user()->email?>!
                            </h2>

                            <p>1° Proyecto</p>

                            <p>ISW-811 Aplicaciones Web con Software Libre</p>

                            <p>Profesor: Misael Matamoros Soto</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">Acerca de</div>
                            <div class="panel-body">
                                Primer Proyecto Software Libre.
                                <br><br>
                                Universidad Técnica Nacional.
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Intengrantes</div>
                            <div class="panel-body">
                                Ignacio Valerio Vega
                                <br><br>
                                Keylor Duran Acuña
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection