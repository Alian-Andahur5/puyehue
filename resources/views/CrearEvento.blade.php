@extends('layouts.main')

@section('content')


<div class="container-fluid">
     <div class="contentpanel">
         <div class="panel panel-default">
            <div class="panel-body">
    
                 <div class="row">

                    <div class="col-md-11">
                    <form>
                   
                    <div class="row">
                            <div class="col-md-4">
                                Nombre Del Evento:
                            </div>
                           
                    
                   
                            <div class="col-md-4">
                                Lugar Del Evento:
                            </div>

                             <div class="col-md-4">
                                Temporada:
                            </div>
                            
                
                   
                            
                            
                      
                      </div>
                      <div class="row">
                           <div class="col-md-4">
                                <input type="text" class="form-control" id="txtNombreEvento">
                            </div>
                             <div class="col-md-4">
                           <select class="form-control">
                              <option value=""> [Seleccionar] </option> 
    
                              <option value="primer"> primer </option>
                              <option value="segundo"> segundo </option>
                              <option value="tercer"> tercer </option>
                              <option value="cuarto"> cuarto </option>
                              <option value="quinto"> quinto </option>
                              <option value="sexto"> sexto </option>
   
                              </select>
                             </div>
                               <div class="col-md-4">
                           <select class="form-control">
                              <option value=""> [Seleccionar] </option> 
    
                              <option value="primer"> primer </option>
                              <option value="segundo"> segundo </option>
                              <option value="tercer"> tercer </option>
                              <option value="cuarto"> cuarto </option>
                              <option value="quinto"> quinto </option>
                              <option value="sexto"> sexto </option>
   
                              </select>
                             </div>
                                      
                      

                      </div>
                      <div class="row">

                         <div class="col-md-4">
                                Desde:
                            </div>
                           
                    
                   
                            <div class="col-md-5">
                                Hasta:
                            </div>
                        
                            


                      </div>
                      <div class="row">
                         <div class="col-md-4">
                                <div class='input-group date' >
                                <input type='text' class="form-control" id='txtFechaDesde' />
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>   
                        </div>
                        <div class="col-md-4">
                                 <div class='input-group date' >
                                    <input type='text' class="form-control" id='txtFechaDesde' />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                        </div>
                            

                      </div>
                      <div class="row">
                            <div class="col-md-4">
                                Descripción:
                            </div>
                            <div class="col-md-4">
                                Foto De Perfil:
                            </div>
                    
                   

                      </div>
                      <div class="row">

                           <div class="col-md-4">
                                  <input type="text" class="form-control" id="txtDescripcion">
                            </div>
                            <div class="col-md-5">
                                 <form name="formulario" action="envio.php" method="post" enctype="multipart/form-data" >
         

                                 <input name="archivo" type="file" size="20" class="form-control"> 

                                 </form>
                            </div>

                      </div>
                   
                    </form>
                    </div>

                 </div>

            <div class="container-fluid">

                <!-- Page Heading -->
             
                <!-- /.row -->

                <div class="row">
                    <div class="col-md-offset-11">
                        <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-exclamation-sign"></i></button>
                        <button type="button" class="btn btn-default"><i class="glyphicon glyphicon-trash"></i></button>
                    </div>
                </div>
            
            
            
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>



@stop