<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Mostrar Empleado                 
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$empleado->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Nombre:</strong></td>
                                    <td>{{$empleado->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Cargo:</strong></td>
                                    <td>{{$cargo->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Departamento:</strong></td>
                                    <td>{{$departamento->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Rama Ejecutiva:</strong></td>
                                    <td>{{$rama->nombre}}</td>
                                    </tr>
                                </table>

                            </div>
                            {{link_to("empleados/$empleado->id/edit", 'Editar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                            {{link_to("empleados", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>             
            </div>                    
        </div>
    </div>
</div>