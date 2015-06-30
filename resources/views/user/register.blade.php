<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-default" role="navigation">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?php echo url()?>">Universidad Técnica Nacional</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
{!! Form::open(array('url' => 'register')) !!}
<div class="container">
    <div style="margin-top:50px;" class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Formulario de Registro</div>
            </div>
            <div class="panel-body">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="email">Correo electrónico</label>

                        <div class="controls">
                            {!! Form::email('email', Input::old('email'), array('placeholder' => 'Dígite su correo electrónico', 'class' =>
                            'form-control', 'required' => 'true')) !!}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="password">Contraseña</label>
                        <div class="controls">
                            {!! Form::password('password', array('placeholder' => 'Dígite su contraseña', 'class' =>
                            'form-control', 'required' => 'true')) !!}
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="retype">Vuelva a dígitar su contraseña</label>
                        <div class="controls">
                            {!! Form::password('retype', array('placeholder' => 'Dígite su contraseña', 'class' =>
                            'form-control',
                            'required' => 'true')) !!}
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="panel-footer">
                <div class="control-group">
                    <center>
                        <div class="controls">
                            {!! Form::submit('Registrarse', array('class'=>'btn btn-success')) !!}
                            <a class="btn btn-default" href="<?php echo url()?>">Atrás</a>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
</body>
</html>
