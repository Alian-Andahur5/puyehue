@extends('layouts.main')

@section('content')

 <div class="contentpanel">
                 <div class="panel panel-default">
                     <div class="panel-body">
                          <div class="row">

        <div class="col-md-12">

             <form method="POST" action="{{ url('RegistroTurista') }}">

               @if(count($errors) > 0)
                      <div class="alert alert-danger" role="alert">
                          <p>Por favor corrige los siguientes errores:</p>
                          <ul>
                            @foreach($errors->all() as $error)
                              <li> {{ $error }} </li>
                            @endforeach
                          </ul>
                      </div>
                    @endif

                    <div class="row">

                            <div class="col-md-4">
                               {{ csrf_field() }}
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nombre</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="Nombre" value="{{old('Nombre')}}" placeholder="Ingrese Nombre">
                                </div>
                            </div>



                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Apellido</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="Apellido" value="{{old('Apellido')}}" placeholder="Ingrese Apellido">
                                </div>
                            </div>



                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Nacionalidad</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="Nacionalidad" value="{{old('Nacionalidad')}}" placeholder="Ingrese Nacionalidad">
                                </div>
                            </div>


                      </div>

                      <div class="row">

                         <div class="col-md-4">
                               <label for="exampleInputEmail1">Sexo</label>
                               <br>
                                {{ Form::label('hombre', 'Masculino') }}
                                {{Form::radio('Sexo', 'Masculino', false, ['id'=>'hombre'])}}

                                {{ Form::label('mujer', 'Femenino') }}
                                {{Form::radio('Sexo', 'Femenino', false, array('id'=>'mujer'))}}
                            </div>



                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Origen</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="Origen" value="{{old('Origen')}}" placeholder="Ingrese el Origen">
                                </div>
                            </div>



                            <div class="col-md-4">
                              <div class="form-group">
                                <label for="exampleInputEmail1">Destino</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="Destino" value="{{old('Destino')}}" placeholder="Ingrese el Destino">
                                </div>
                            </div>



                      </div>

                      <div class="row">
                            <div class="col-md-4">
                              <label for="Date">Fecha de Registro</label>
                                <div class='input-group date' >
                                  <input type='text' class="form-control datepicker" name="Fecha" id='Fecha'/>
                                  <span class="input-group-addon">
                                      <span class="glyphicon glyphicon-calendar"></span>
                                  </span>
                              </div>

                            </div>

                           <div class="col-md-4">
                                  <label for="exampleInputEmail1">Grupo Etario</label>
                                  <br>
                            <select class="form-control" name="GrupoEtario">
                             <option value="">Selecciona</option>
                             <option value="Niños">Niños</option>
                             <option value="Joven" >Joven</option>
                             <option value="Adulto">Adulto</option>
                             <option value="AdultoMayor">Adulto Mayor</option>
                           </select>
                            </div>

                            <div class="col-md-4">

                              <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="Email" value="{{old('Email')}}" placeholder="Ingrese el E-mail">
                                </div>
                             </div>

                      </div>
                   </div>
                       <br>
                   <div class="row">
                        <div class="col-md-offset-9" >

                                <button type="submit" class="btn btn-primary">Guardar</button>
                          </div>
                      </div>

              </form>
                    </div>

                 </div>

                         <div class="container-fluid">

                <!-- Page Heading -->

                <!-- /.row -->

                <div class="row">
                    <div class="col-md-offset-9">

                        <br> </br>

                    </div>
                </div>

     <div class="contentpanel">
         <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>

                                                    <th>Nombre</th>
                                                    <th>Apellido</th>
                                                    <th>Nacionalidad</th>
                                                    <th>Email</th>
                                                    <th>Origen</th>
                                                    <th>Destino</th>
                                                    <th>Sexo</th>
                                                    <th>Grupo Etario</th>
                                                    <th>Fecha</th>
                                                    <th><i class="glyphicon glyphicon-wrench"></i></th>
                                                    <th><i class="glyphicon glyphicon-remove"></i></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($turistas as $turista)
                                                <tr>
                                                    <td>{{ $turista->Nombre }}</td>
                                                    <td>{{ $turista->Apellido }}</td>
                                                    <td>{{ $turista->Nacionalidad }}</td>
                                                    <td>{{ $turista->Email }}</td>
                                                    <td>{{ $turista->Origen }}</td>
                                                    <td>{{ $turista->Destino }}</td>
                                                    <td>{{ $turista->Sexo }}</td>
                                                    <td>{{ $turista->GrupoEtario }}</td>
                                                    <td>{{ $turista->UltimaVisita }}</td>


                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="row" >
                                           <div class="col-md-offset-8">
                                              <button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-file"><label> Imprimir </label></i></button>
                                           </div>

                                    </div>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

@stop

@section('scripts')
 <script type="text/javascript">
   $(document).ready(function(){
      $('.alert').delay(2000).fadeOut(400);

      $('.deleteForm').on('submit',function(){
         return confirm("Estas seguro de borrar este registro?");
      });

   });
 </script>

@stop
