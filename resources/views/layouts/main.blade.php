<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion Turismo Puyehue</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">r

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <link href="{{asset('css/estilohome.css')}}" rel="stylesheet" type="text/css"> 
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
 

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
                <a class="navbar-brand" href="home"> <i><img src="img/Logo.png" alt="IMGPuyehue" width="50px"></i>Municipalidad de Puyehue</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>


                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>

                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">fff<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
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
                <h2><i class="fa fa-home"></i> Inicio <span>SELECCIONE LAS OPCIONES DE ADMINSITRACIÓN</span></h2>
                    <div class="breadcrumb-wrapper">
                        <span class="label">Estás aquí : </span>
                        <ol class="breadcrumb">
                            <li><a href="home">Inicio</a></li>
                            <li class="active">Bandeja de entrada</li>
                        </ol>
                    </div>
                </div>
  <div class="container-fluid">
     <div class="contentpanel">
         <div class="panel panel-default">
            <div class="panel-body">

                 <div class="row">

                    <div class="col-md-12">

                      @yield('content')

                    </div>

                 </div>

            <div class="container-fluid">
 

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    



    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript --> 

    <script src="js/moment-with-locales.js"></script>
    <script src="js/bootstrap-datetimepicker.js"></script>
    <script>
    $(function () {
                $('.date').datetimepicker({    locale: 'es'});
            });
    </script>
   @yield('scripts')

</body>

</html>

