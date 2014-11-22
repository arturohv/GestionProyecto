<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Mostrar departamento                 
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$departamento->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Nombre:</strong></td>
                                    <td>{{$departamento->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Descripción:</strong></td>
                                    <td>{{$departamento->descripcion}}</td>
                                    </tr>
                                </table>

                            </div>
                            {{link_to("departamentos/$departamento->id/edit", 'Editar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                            {{link_to("departamentos", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>             
            </div>                    
        </div>
    </div>
</div>