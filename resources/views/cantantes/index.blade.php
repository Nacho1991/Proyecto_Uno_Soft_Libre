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
                    <li class="active">
                        <a href="/artists" title="Cantantes">Cantantes</a>
                    </li>
                    <li>
                        <a href="/songs" title="Canciones">Canciones</a>
                    </li>
                    <li>
                        <a href="/playlists" title="Listas disponibles">Listas disponibles</a>
                    </li>
                </ul>
            </div>
            <!-- /span-3 -->
            <div class="col-md-10">
                <!-- Right -->
                <strong><span class="glyphicon glyphicon-cd"></span> Cantantes</strong>
                <hr>
                <div class="row">
                    <div class="col-md-9">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">Lista de cantantes
                                    <div class="pull-right">
                                        <a class="btn btn-xs btn-success" href="artists/create">
                                            <i class="glyphicon glyphicon-plus"> Nuevo</i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Opciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($artists as $artist)
                                    <tr>
                                        <td>{{{ $artist->id }}}</td>
                                        <td>{{{ $artist->name }}}</td>
                                        <td>
                                            <a class="btn btn-xs btn-warning"
                                               href="<?php echo '/artists/' . $artist->id . '/edit'?>"><i
                                                        class="glyphicon glyphicon-edit"> Editar</i></a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No hay cantantes registrados</td>
                                    </tr>
                                @endforelse

                                </tbody>
                            </table>
                            <div class="panel-footer">
                                {!! $artists->render() !!}
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




