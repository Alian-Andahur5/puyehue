<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion Turismo Puyehue</title>
    <!-- estilo home -->
    <link href="{{asset('css/estilohome.css')}}" rel="stylesheet" type="text/css"> 
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{asset('css/plugins/morris.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

             

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home"> <i><img src="{{asset('img/Logo.png')}}" alt="IMGPuyehue" width="50px"></i>Municipalidad de Puyehue</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Ronaldo Zuñiga</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i>lunes 4:32 PM</p>
                                        <p>Juguemos LOL</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Oliver Atom</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Domingo 4:32 PM</p>
                                        <p>Jugemos a la pelota!!</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Leonardo Farkas</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Sabado 4:32 PM</p>
                                        <p>Prestame plata porfa...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Leer todos los mensajes nuevos</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Nombre alerta <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Nombre alerta <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Nombre alerta <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Nombre alerta <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Nombre alerta <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">Ver Todas</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Felix Mera<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i>Perfil</a>
                        </li>
                      
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i>Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index"><i class="fa fa-fw fa-power-off"></i>Salir</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="sidebar-nav">
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="active">
                            <a href="home"><i class="glyphicon glyphicon-home"></i> Home</a>
                        </li>
                       
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-signal"></i> Control de Turistas<span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header">Configurar</li>
                                <li><a href="RegistroTurista" class="link-load">Registro de Turistas</a></li>
                                <li><a href="EstadisticaTurista" class="link-load">Ver Estadisticas</a></li>
                                <li><a href="#" class="link-load">...</a></li>
                            </ul>

                        </li>
                         <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-fw fa-signal"></i> Control De Eventos<span class="caret"></span></a>
                             <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header">Configurar</li>
                                <li><a href="Evento" class="link-load">Crear Evento</a></li>
                                <li><a href="EstadisticaEvento" class="link-load">Dashboard Eventos</a></li>
                                <li><a href="#" class="link-load">...</a></li>
                            </ul>
                         </li>     
                        
                    </ul>
                </div>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
                <div class="pageheader">
                <h2><i class="fa fa-home"></i> Inicio <span> Control Turismo Puyehue </span> </h2>
                    <div class="breadcrumb-wrapper">
                        <span class="label">Estás aquí : </span>
                        <ol class="breadcrumb">
                            <li><a href="home">Inicio</a></li>
                            <li class="active">Bandeja de entrada</li>
                        </ol>
                    </div>
                </div>
   
   
<div class="container-fluid">

                <!-- Page Heading -->
   @yield('content')          

        
    <!-- jQuery -->
<script src="js/jquery.js"></script>


 <script src="js/bootstrap.min.js"></script>

<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery-ui-1.10.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/modernizr.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/toggles.min.js"></script>
<script src="js/retina.min.js"></script>
<script src="js/jquery.cookies.js"></script>

<script src="js/flot/jquery.flot.min.js"></script>
<script src="js/flot/jquery.flot.resize.min.js"></script>
<script src="js/flot/jquery.flot.spline.min.js"></script>
<script src="js/morris.min.js"></script>
<script src="js/raphael-2.1.0.min.js"></script>

<script src="js/custom.js"></script>
<script src="js/dashboard.js"></script>

<script src="js/moment-with-locales.js"></script>
<script src="js/bootstrap-datetimepicker.js"></script>
<script>
    $(function () {
                $('.date').datetimepicker({    locale: 'es'});
            });
</script>






</body>

</html>