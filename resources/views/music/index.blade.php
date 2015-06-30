@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
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
                    <li>
                        <a href="/playlists" title="Ver la lista de canciones disponibles">Lista disponible</a>
                    </li>
                    @if (!Auth::user()->is_admin)
                        <li class="active">
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
                                <div class="panel-title">Lista de Reproducción</div>
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
                                @forelse($lista as $song)
                                    <tr>
                                        <td>{{{ $song->namesong }}}</td>
                                        <td>{{{$song->nameartist}}}</td>
                                        <td>
                                            <a class="btn btn-xs btn-success"
                                               href="/listas/{{{$song->song_id}}}/select">
                                                <i class="glyphicon glyphicon-play"> Reproducir...</i>
                                            </a>
                                            <a class="btn btn-xs btn-danger" href="/listas/{{{$song->id}}}/destroy">
                                                <i class="glyphicon glyphicon-remove"> Eliminar</i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">
                                            <center>No hay canciones disponibles para reproducir</center>
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                            <div class="panel-footer">
                                {!! $lista->render() !!}
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