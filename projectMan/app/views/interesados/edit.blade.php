<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-pencil"></i> Editar interesado                
            </div>
            {{ HTML::ul($errors->all()) }}
            {{ Form::open(array('url' => "interesados/$interesado->id/update")) }}      
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">              
                       
                        <div class="form-group">
                            {{ Form::label('nombre', 'Nombre') }}                                
                            {{Form::text('nombre', $interesado->nombre, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                      
                        </div>

                        <div class="form-group">
                            {{ Form::label('cargoid', 'Cargo') }}
                            {{ Form::select('cargoid', $cargos, $interesado->cargoid, array('class' => 'form-control')) }}                                        
                        </div>

                        <div class="form-group">
                            {{ Form::label('departamentoid', 'Departamento') }}
                            {{ Form::select('departamentoid', $departamentos, $interesado->departamentoid, array('class' => 'form-control')) }}                                 
                                           
                        </div>

                        <div class="form-group">
                            {{ Form::label('rama_ejecutivaid', 'Rama Ejecutora') }}
                            {{ Form::select('rama_ejecutivaid', $ramas, $interesado->rama_ejecutivaid, array('class' => 'form-control')) }}                                 
                                             
                        </div>                                     
                
                        {{Form::submit('Guardar', array('Class'=>'btn btn-default'))}} 
                        {{link_to("interesados", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                    </div>
                 </div> 
            </div>
            </div>
            {{ Form::close() }}
        </div>             
    </div>                    
</div>
