<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Mostrar Proyecto                 
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$proyecto->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Nombre:</strong></td>
                                    <td>{{$proyecto->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Empresa:</strong></td>
                                    <td>{{$proyecto->empresa}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Fecha:</strong></td>
                                    <td>{{$proyecto->fecha}}</td>
                                    </tr>   

                                    <tr>
                                    <td><strong>Cliente:</strong></td>
                                    <td>{{$cliente->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Patrocidador Principal:</strong></td>
                                    <td>{{$patrocinador->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Propósito / Justificación:</strong></td>
                                    <td>{{$proyecto->proposito_justificacion}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Gerente Principal:</strong></td>
                                    <td>{{$gerente->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Descripción:</strong></td>
                                    <td>{{$proyecto->descripcion}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Requisito del Producto:</strong></td>
                                    <td>{{$proyecto->requisito_producto}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Requisito del Proyecto:</strong></td>
                                    <td>{{$proyecto->requisito_proyecto}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Presupuesto Inicial:</strong></td>
                                    <td>{{$proyecto->presupuesto_inicial}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Requisito de Aprobación:</strong></td>
                                    <td>{{$proyecto->requisito_aprobacion}}</td>
                                    </tr>

                                </table>

                            </div>
                            {{link_to("proyectos/$proyecto->id/edit", 'Editar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                            {{link_to("proyectos", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>             
            </div>                    
        </div>
    </div>
</div>