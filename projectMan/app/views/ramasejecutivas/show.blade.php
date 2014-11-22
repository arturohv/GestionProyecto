<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Mostrar Rama Ejecutiva                 
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$rama->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Nombre:</strong></td>
                                    <td>{{$rama->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Descripción:</strong></td>
                                    <td>{{$rama->descripcion}}</td>
                                    </tr>
                                </table>

                            </div>
                            {{link_to("ramas/$rama->id/edit", 'Editar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                            {{link_to("ramas", 'Cancelar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}   
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                </div>             
            </div>                    
        </div>
    </div>
</div>