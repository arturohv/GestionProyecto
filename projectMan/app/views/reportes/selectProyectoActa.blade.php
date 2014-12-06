<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Seleccione el Proyecto
                      
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3"> 
                        	<table class="table table-hover table-striped" id="lista">
                                <thead>
                                    <tr>                                        
                                        <th>Proyecto</th>                                        
                                        <th>Acciones</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($proyectos as $proyecto)
                                    <tr>                                         
                                        <td>{{ $proyecto->nombre }}</td>                                        
                                        <td>
                                        {{link_to("seleccionproyectosacta/$proyecto->id/acta", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-eye-open'), $secure = null);}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                        <!-- /.table-responsive -->
                </div>
            </div>             
        </div>                    
     </div>
</div>

