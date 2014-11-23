<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fglyphicon glyphicon-plus"></i> Agregar nuevo empleado                
            </div>
            {{ HTML::ul($errors->all()) }}
            {{ Form::open(array('url' => 'empleados')) }}     
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">              
                       
                        <div class="form-group">
                            {{ Form::label('nombre', 'Nombre') }}                                
                            {{Form::text('nombre', Input::old('nombre'), array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                      
                        </div>

                        <div class="form-group">
                            {{ Form::label('cargoid', 'Cargo') }}
                            {{ Form::select('cargoid', $cargos, null, array('class' => 'form-control')) }}                                        
                        </div>

                        <div class="form-group">
                            {{ Form::label('departamentoid', 'Departamento') }}
                            {{ Form::select('departamentoid', $departamentos, null, array('class' => 'form-control')) }}                                 
                                           
                        </div>

                        <div class="form-group">
                            {{ Form::label('rama_ejecutivaid', 'Rama Ejecutora') }}
                            {{ Form::select('rama_ejecutivaid', $ramas, null, array('class' => 'form-control')) }}                                 
                                             
                        </div>                                     
                
                        {{Form::submit('Guardar', array('Class'=>'btn btn-default'))}} 
                        {{link_to("empleados", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                    </div>
                 </div> 
            </div>
            </div>
            {{ Form::close() }}
        </div>             
    </div>                    
</div>
