<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Mostrar Actividad                
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$actividad->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Descripción:</strong></td>
                                    <td>{{$actividad->descripcion}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Fecha Inicial:</strong></td>
                                    <td>{{$actividad->fecha_inicio}}</td>
                                    </tr>

                                     <tr>
                                    <td><strong>Fecha Final:</strong></td>
                                    <td>{{$actividad->fecha_fin}}</td>
                                    </tr>
                                </table>

                            </div>
                            {{link_to("actividades/$actividad->id/edit", 'Editar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                            {{link_to("proyectos/$actividad->proyectoid/attribute", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>             
            </div>                    
        </div>
    </div>
</div>