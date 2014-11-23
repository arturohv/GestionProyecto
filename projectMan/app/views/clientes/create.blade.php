<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fglyphicon glyphicon-plus"></i> Agregar nuevo cliente                
            </div>
            {{ HTML::ul($errors->all()) }}
            {{ Form::open(array('url' => 'clientes')) }}     
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">              
                       
                        <div class="form-group">
                            {{ Form::label('nombre', 'Nombre') }}                                
                            {{Form::text('nombre', Input::old('nombre'), array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                     
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', 'Correo Electrónico') }}                                
                            {{Form::email('email', Input::old('email'), array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                     
                        </div>

                        <div class="form-group">
                            {{ Form::label('telefono_resi', 'Teléfono Residencial') }}              
                            {{Form::text('telefono_resi', Input::old('telefono_resi'), array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                     
                        </div>

                        <div class="form-group">
                            {{ Form::label('telefono_movil', 'Teléfono Móvil') }}                    
                            {{Form::text('telefono_movil', Input::old('telefono_movil'), array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                     
                        </div>

                        <div class="form-group">
                            {{ Form::label('direccion', 'Dirección Física') }}                      
                            {{Form::textarea('direccion', Input::old('direccion'), array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}
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
