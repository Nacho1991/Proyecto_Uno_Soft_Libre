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
                        <a href="<?php echo url() ?>/inicio" title="Ir a la página principal">Dashboard</a>
                    </li>
                    @if (Auth::user()->is_admin)
                        <li>
                            <a href="/artists" title="Ir a mantenimientos de cantantes">Cantantes</a>
                        </li>
                        <li>
                            <a href="/songs" title="Ir a mantenimientos de canciones">Canciones</a>
                        </li>
                    @endif
                    <li class="active">
                        <a href="/playlists" title="Ver la lista de canciones disponibles">Lista disponible</a>
                    </li>
                    @if (!Auth::user()->is_admin)
                        <li>
                            <a href="/listas" title="Ver lista de reproducción">Lista de reproducción</a>
                        </li>
                    @endif
                </ul>
            </div>


            <!-- /span-3 -->
            <div class="col-md-10">
                <!-- Right -->
                <strong><span class="glyphicon glyphicon-list-alt"></span> Listas de reproducción</strong>
                <hr>
                <div class="row">
                    <div class="col-md-9">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Lista de Reproducción</h3>
                            </div>
                            <div class="panel-body">
                                <div class="input-group"><span class="input-group-addon">
                                        <i class="glyphicon glyphicon-search"></i> Fitro:</span>
                                    <input id="filter" type="text" class="form-control" placeholder="Escriba aquí para buscar una canción...">
                                </div>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>Canción</th>
                                    <th>Cantante</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tbody class="searchable">
                                @forelse($songs as $song)
                                    <tr>
                                        <td>{{{ $song->name }}}</td>
                                        <td>{{{ $song->artist->name }}}</td>
                                        <td>
                                            <a class="btn btn-xs btn-success" href="/playlists/{{{$song->id}}}/select">
                                                <i class="glyphicon glyphicon-play"> Reproducir...</i>
                                            </a>
                                            @if (!Auth::user()->is_admin)
                                                <a class="btn btn-xs btn-primary" href="/listas/{{{$song->id}}}/store">
                                                    <i class="glyphicon glyphicon-plus"> Agregar a lista</i>
                                                </a>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">
                                            <center>No hay canciones disponibles para reproducir</center>
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
@endsection