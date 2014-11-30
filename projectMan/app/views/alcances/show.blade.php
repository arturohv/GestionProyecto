<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Mostrar Alcance        
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$alcance->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Descripción:</strong></td>
                                    <td>{{$alcance->descripcion}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Calificación:</strong></td>
                                    <td>{{$calificacion->nombre}}</td>
                                    </tr>

                                  
                                </table>

                            </div>
                            {{link_to("alcances/$alcance->id/edit", 'Editar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                            {{link_to("alcances/$alcance->actividadid/index", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>             
            </div>                    
        </div>
    </div>
</div>