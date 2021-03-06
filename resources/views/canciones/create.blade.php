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
                        <a href="<?php url()?>/inicio" title="Dashboard">Dashboard</a>
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
                        {!! Form::open(array('url' => 'songs','files' => true)) !!}
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Registrar canción
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="control-group">
                                    <label class="control-label" for="name">Canción:</label>

                                    <div class="controls">
                                        {!! Form::text('name', Input::old('name'), array('placeholder' => 'Dígite el nombre de la canción', 'class' => 'form-control',
                                        'required' => 'true')) !!}
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="artist_id">Seleccione el artista:</label>

                                    <div class="controls">
                                        {!! Form::select('artist_id', $artists, null, array('class' => 'form-control'))
                                        !!}
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="name">Cargar pista:</label>

                                    <div class="controls">
                                        {!! Form::file('url_source', '', array('class' => 'form-control input-sm')) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="control-group">
                                    <!-- Button -->
                                    <div class="controls">
                                        <a class="btn btn-primary" href="<?php echo url()?>/songs">Atrás</a>
                                        {!! Form::submit('Guardar', array('class'=>'btn btn-success')) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::close() !!}
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