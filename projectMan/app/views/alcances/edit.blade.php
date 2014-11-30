<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-pencil"></i> Editar Alcance                
            </div>
            {{ HTML::ul($errors->all()) }}
            {{ Form::open(array('url' => "alcances/$alcance->id/update")) }}     
            <div class="panel-body">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table table-condensed" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$actividad->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Descripción:</strong></td>
                                    <td>{{$actividad->descripcion}}</td>
                                    </tr>                                                                   
                                </table>
                            </div>              

                           
                        </div>

                        
                        <!-- /.table-responsive -->
                    </div>

                    <div class="col-lg-6 col-lg-offset-3">            
                        

                        <div class="form-group">
                            {{ Form::label('descripcion', 'Descripción') }}                                
                            {{Form::text('descripcion', $alcance->descripcion, array('class' => 'form-control input-xlarge', 'required' => 'true'))}}                      
                        </div>                       

                       <div class="form-group">
                            {{ Form::label('califid', 'Calificación') }}
                            {{ Form::select('califid', $calificaciones, $alcance->califid, array('class' => 'form-control')) }}                      
                        </div>            
                        
                            {{Form::submit('Guardar', array('Class'=>'btn btn-default'))}}                            
                            
                                           
                            {{link_to("alcances/$actividad->id/index", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                    </div>
                 </div> 
            </div>
            </div>
            {{ Form::close() }}
        </div>             
    </div>                    
</div>
