<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Mostrar Recurso                 
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table" id="lista">                                 
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$recurso->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Descripción:</strong></td>
                                    <td>{{$recurso->descripcion}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Cantidad:</strong></td>
                                    <td>{{$recurso->cantidad}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Unidad Medida:</strong></td>
                                    <td>{{$medida->nombre}}</td>
                                    </tr>

                                   
                                </table>

                            </div>
                            {{link_to("recursos/$recurso->id/edit", 'Editar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                            {{link_to("proyectos/$recurso->proyectoid/attribute", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>             
            </div>                    
        </div>
    </div>
</div>