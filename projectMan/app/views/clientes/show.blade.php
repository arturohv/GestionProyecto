<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Mostrar Cliente                
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$cliente->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Nombre:</strong></td>
                                    <td>{{$cliente->nombre}}</td>
                                    </tr>

                                     <tr>
                                    <td><strong>Correo Electrónico:</strong></td>
                                    <td>{{$cliente->email}}</td>
                                    </tr>

                                     <tr>
                                    <td><strong>Teléfono Residencial:</strong></td>
                                    <td>{{$cliente->telefono_resi}}</td>
                                    </tr>

                                     <tr>
                                    <td><strong>Teléfono Móvil:</strong></td>
                                    <td>{{$cliente->telefono_movil}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Dirección Física:</strong></td>
                                    <td>{{$cliente->direccion_fisica}}</td>
                                    </tr>
                                </table>

                            </div>
                            {{link_to("clientes/$cliente->id/edit", 'Editar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                            {{link_to("clientes", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>             
            </div>                    
        </div>
    </div>
</div>