<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-pencil"></i> Editar Costo                
            </div>
            {{ HTML::ul($errors->all()) }}
            {{ Form::open(array('url' => "costos/$costo->id/update")) }}     
            <div class="panel-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table table-condensed" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$alcance->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Descripción:</strong></td>
                                    <td>{{$alcance->descripcion}}</td>
                                    </tr>                                                                   
                                </table>
                            </div>              

                           
                        </div>

                        
                        <!-- /.table-responsive -->
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">            
                        

                        <div class="form-group">
                            {{ Form::label('descripcion', 'Descripción') }}                                
                            {{Form::text('descripcion', $costo->descripcion, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                      
                        </div>                       

                       <div class="form-group">
                            {{ Form::label('monto', 'Costo en Colones') }}
                            {{Form::text('monto', $costo->monto, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                
                        </div>       
                        
                            {{Form::submit('Guardar', array('Class'=>'btn btn-default'))}}                            
                            
                                           
                            {{link_to("costos/$costo->alcanceid/index", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                    </div>
                 </div> 
            </div>
            </div>
            {{ Form::close() }}
        </div>             
    </div>                    
</div>
