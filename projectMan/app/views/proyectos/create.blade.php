<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fglyphicon glyphicon-plus"></i> Agregar nuevo proyecto                
            </div>
            {{ HTML::ul($errors->all()) }}
            {{ Form::open(array('url' => 'proyectos')) }}     
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">              
                       
                        <div class="form-group">
                            {{ Form::label('nombre', 'Nombre del Proyecto') }}                                
                            {{Form::text('nombre', Input::old('nombre'), array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                      
                        </div>

                        <div class="form-group">
                            {{ Form::label('empresa', 'Empresa') }}                                
                            {{Form::text('empresa', Input::old('empresa'), array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                      
                        </div>

                        <div class="form-group">
                            {{ Form::label('fecha', 'Fecha') }}                                
                            {{Form::text('fecha', Input::old('fecha'), array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                      
                        </div>
                        
                        <div class="form-group">
                            {{ Form::label('clienteid', 'Cliente') }}
                            {{ Form::select('clienteid', $clientes, null, array('class' => 'form-control')) }}              
                        </div>
                            
                        <div class="form-group">
                            {{ Form::label('patrocinadorid', 'Patrocinador') }}
                            {{ Form::select('patrocinadorid', $patrocinadores, null, array('class' => 'form-control')) }}   
                        </div>

                        <div class="form-group">
                            {{ Form::label('proposito_justificacion', 'Propósito / Justificación') }}                        
                            {{Form::textarea('proposito_justificacion', Input::old('proposito_justificacion'), array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div>

                        <div class="form-group">
                            {{ Form::label('gerenteid', 'Gerente') }}
                            {{ Form::select('gerenteid', $gerentes, null, array('class' => 'form-control')) }}   
                        </div>

                        <div class="form-group">
                            {{ Form::label('descripcion', 'Descripción') }}                         
                            {{Form::textarea('descripcion', Input::old('descripcion'), array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div>

                        <div class="form-group">
                            {{ Form::label('requisito_producto', 'Requisito del Producto') }}                         
                            {{Form::textarea('requisito_producto', Input::old('requisito_producto'), array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div> 

                        <div class="form-group">
                            {{ Form::label('requisito_proyecto', 'Requisito del Proyecto') }}                         
                            {{Form::textarea('requisito_proyecto', Input::old('requisito_proyecto'), array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div>  

                        <div class="form-group">
                            {{ Form::label('presupuesto_inicial', 'Presupuesto Inicial') }}                         
                            {{Form::textarea('presupuesto_inicial', Input::old('presupuesto_inicial'), array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div> 

                        <div class="form-group">
                            {{ Form::label('requisito_aprobacion', 'Requisito de Aprobación') }}                         
                            {{Form::textarea('requisito_aprobacion', Input::old('requisito_aprobacion'), array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div>                                   
                
                        {{Form::submit('Guardar', array('Class'=>'btn btn-default'))}} 
                        {{link_to("proyectos", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                    </div>
                 </div> 
            </div>
            </div>
            {{ Form::close() }}
        </div>             
    </div>                    
</div>
