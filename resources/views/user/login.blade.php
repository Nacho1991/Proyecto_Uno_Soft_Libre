<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Iniciar sesión</title>
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
{!! Form::open(array('url' => 'logon','class'=>'form-signin')) !!}
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Iniciar sesión</div>
            </div>
            <div style="padding-top:30px" class="panel-body">
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    {!! Form::email('email', Input::old('email'), array('placeholder' => 'Correo electronico','class'
                    =>'form-control', 'required' => 'true')) !!}
                </div>
                <div style="margin-bottom: 25px" class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    {!! Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control',
                    'required' =>
                    'true')) !!}
                </div>
                <div style="margin-top:10px" class="form-group">
                    <center>
                        <div class="col-sm-12 controls">
                            <button class="btn btn-success" type="submit">Iniciar</button>
                        </div>
                        <br>
                        <br>
                    </center>
                </div>
                <div class="form-group">
                    <div class="col-md-12 control">
                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                            Don't have an account!
                            <a href="users/create">
                                Sign Up Here
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
</body>
</html>