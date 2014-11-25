<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fglyphicon glyphicon-plus"></i> Agregar nuevo patrocinador                
            </div>
            {{ HTML::ul($errors->all()) }}
            {{ Form::open(array('url' => 'patrocinadores_proyectos')) }}     
            <div class="panel-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$proyecto->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Nombre:</strong></td>
                                    <td>{{$proyecto->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Empresa:</strong></td>
                                    <td>{{$proyecto->empresa}}</td>
                                    </tr>                                    
                                </table>
                            </div>
                            

                           
                        </div>

                        
                        <!-- /.table-responsive -->
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">              
                       
                        <div class="form-group">                                                      
                            {{Form::hidden('proyectoid', $proyecto->id, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                         
                        </div>

                       <div class="form-group">
                            {{ Form::label('patrocinadorid', 'Patrocinador') }}
                            {{ Form::select('patrocinadorid', $patrocinadores, null, array('class' => 'form-control')) }}                             
                        </div>            
                
                        {{Form::submit('Guardar', array('Class'=>'btn btn-default'))}} 
                        {{link_to("proyectos/$proyecto->id/attribute", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                    </div>
                 </div> 
            </div>
            </div>
            {{ Form::close() }}
        </div>             
    </div>                    
</div>
