<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fglyphicon glyphicon-plus"></i> Editar proyecto                
            </div>
            {{ HTML::ul($errors->all()) }}
            {{ Form::open(array('url' => "proyectos/$proyecto->id/update")) }}     
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">              
                       
                        <div class="form-group">
                            {{ Form::label('nombre', 'Nombre del Proyecto') }}                                
                            {{Form::text('nombre', $proyecto->nombre, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                      
                        </div>

                        <div class="form-group">
                            {{ Form::label('empresa', 'Empresa') }}                                
                            {{Form::text('empresa', $proyecto->empresa, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                      
                        </div>

                        <div class="form-group">
                            {{ Form::label('fecha', 'Fecha') }}                                
                            {{Form::text('fecha', $proyecto->fecha, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                      
                        </div>

                        <div class="form-group">
                            {{ Form::label('clienteid', 'Cliente') }}
                            {{ Form::select('clienteid', $clientes, $proyecto->clienteid, array('class' => 'form-control')) }}              
                        </div>

                        <div class="form-group">
                            {{ Form::label('patrocinadorid', 'Patrocinador') }}
                            {{ Form::select('patrocinadorid', $patrocinadores, $proyecto->patrocinadorid, array('class' => 'form-control')) }}   
                        </div>

                        <div class="form-group">
                            {{ Form::label('proposito_justificacion', 'Propósito / Justificación') }}                        
                            {{Form::textarea('proposito_justificacion', $proyecto->proposito_justificacion, array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div>

                        <div class="form-group">
                            {{ Form::label('gerenteid', 'Gerente') }}
                            {{ Form::select('gerenteid', $gerentes, $proyecto->gerenteid, array('class' => 'form-control')) }}   
                        </div>          
                        
                        <div class="form-group">
                            {{ Form::label('descripcion', 'Descripción') }}                         
                            {{Form::textarea('descripcion', $proyecto->descripcion, array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div>

                        <div class="form-group">
                            {{ Form::label('requisito_producto', 'Requisito del Producto') }}                         
                            {{Form::textarea('requisito_producto', $proyecto->requisito_producto, array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div> 

                        <div class="form-group">
                            {{ Form::label('requisito_proyecto', 'Requisito del Proyecto') }}                         
                            {{Form::textarea('requisito_proyecto', $proyecto->requisito_proyecto, array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div>  

                        <div class="form-group">
                            {{ Form::label('presupuesto_inicial', 'Presupuesto Inicial') }}                         
                            {{Form::textarea('presupuesto_inicial', $proyecto->presupuesto_inicial, array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
                        </div> 

                        <div class="form-group">
                            {{ Form::label('requisito_aprobacion', 'Requisito de Aprobación') }}                         
                            {{Form::textarea('requisito_aprobacion', $proyecto->requisito_aprobacion, array('class' => 'form-control input-xlarge', 'required' => 'true','rows'=>'3'))}}                        
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