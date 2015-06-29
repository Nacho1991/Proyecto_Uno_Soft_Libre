@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <!-- Left -->
                <strong>Mantenimientos</strong>
                <hr>
                <ul class="nav nav-pills nav-stacked">
                    <li>
                        <a href="<?php echo url() ?>/inicio" title="Dashboard">Dashboard</a>
                    </li>
                    <li>
                        <a href="/artists" title="Carreras">Cantantes</a>
                    </li>
                    <li class="active">
                        <a href="/songs" title="Estudiantes">Canciones</a>
                    </li>
                    <li>
                        <a href="/playlists" title="Usuarios">Lista disponible</a>
                    </li>
                </ul>
            </div>
            <!-- /span-3 -->
            <div class="col-md-10">
                <!-- Right -->
                <strong><span class="glyphicon glyphicon-list"></span> Canciones</strong>
                <hr>
                <div class="row">
                    <div class="col-md-9">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">Lista de canciones registradas
                                    <div class="pull-right">
                                        <a class="btn btn-xs btn-success" href="songs/create">
                                            <i class="glyphicon glyphicon-plus"> Nuevo</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Canción</th>
                                        <th>Cantante</th>
                                        <th>Opciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($songs as $song)
                                        <tr>
                                            <td>{{{ $song->name }}}</td>

                                            <td>{{{ $song->artist->name }}}</td>
                                            <td>
                                                <a class="btn btn-xs btn-warning" href="/songs/{{{$song->id}}}/edit"><i
                                                            class="glyphicon glyphicon-edit"> Editar</i></a>
                                                <a class="btn btn-xs btn-danger" href="/songs/{{{$song->id}}}/delete"><i
                                                            class="glyphicon glyphicon-remove"> Eliminar</i></a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3">
                                                <center>No hay canciones registradas</center>
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            <div class="panel-footer">
                                {!! $songs->render() !!}
                            </div>
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









    <div class="row">

    </div>
@endsection




