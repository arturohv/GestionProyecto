<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-pencil"></i> Editar Cliente                
            </div>
             {{ Form::open(array('url' => "clientes/$cliente->id/update")) }}               
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">              
                       
                        <div class="form-group">
                            {{ Form::label('nombre', 'Nombre') }}                                
                            {{Form::text('nombre', $cliente->nombre, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                         
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Correo Electrónico') }}                         
                            {{Form::text('email', $cliente->email, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                         
                        </div>

                        <div class="form-group">
                            {{ Form::label('telefono_resi', 'Teléfono Residencial') }}              
                            {{Form::text('telefono_resi', $cliente->telefono_resi, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                         
                        </div>

                        <div class="form-group">
                            {{ Form::label('telefono_movil', 'Teléfono Móvil') }}                   
                            {{Form::text('telefono_movil', $cliente->telefono_movil, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                         
                        </div>

                        <div class="form-group">
                            {{ Form::label('direccion', 'Dirección Física') }}                       
                            {{Form::textarea('direccion', $cliente->direccion_fisica, array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}   
                        </div>                          
                
                        {{Form::submit('Guardar', array('Class'=>'btn btn-default'))}} 
                        {{link_to("clientes", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                    </div>
                 </div> 
            </div>
            </div>
            {{ Form::close() }}
        </div>             
    </div>                    
</div>