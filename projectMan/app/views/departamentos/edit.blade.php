<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-pencil"></i> Editar departamento                
            </div>
             {{ Form::open(array('url' => "departamentos/$departamento->id/update")) }}               
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">              
                       
                        <div class="form-group">
                            {{ Form::label('nombre', 'Nombre') }}                                
                            {{Form::text('nombre', $departamento->nombre, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                         
                        </div>

                        <div class="form-group">
                            {{ Form::label('descripcion', 'Descripción') }}                         
                            {{Form::textarea('descripcion', $departamento->descripcion, array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div>                          
                
                        {{Form::submit('Guardar', array('Class'=>'btn btn-default'))}} 
                        {{link_to("departamentos", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                    </div>
                 </div> 
            </div>
            </div>
            {{ Form::close() }}
        </div>             
    </div>                    
</div>