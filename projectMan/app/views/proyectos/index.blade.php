<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Listado de Proyectos
               <div class="pull-right">
                    <div class="btn-group">
                        {{link_to("proyectos/create", 'Nuevo', $attributes = array('Class'=>'btn btn-default btn-xs'), $secure = null);}}                                    
                    </div>
                </div>       
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-8 col-lg-offset-2"> 
                        <div class="table-responsive">
                            @if (Session::has('message'))
                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                            @endif
                            <table class="table table-hover table-striped" id="lista">
                                <thead>
                                    <tr>
                                        
                                        <th>Proyecto</th>
                                        <th>Empresa</th>
                                        <th>Acciones</th>                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($proyectos as $proyecto)
                                    <tr>                                         
                                        <td>{{ $proyecto->nombre }}</td>
                                        <td>{{ $proyecto->empresa }}</td>
                                        <td>
                                        {{link_to("proyectos/$proyecto->id/show", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-eye-open'), $secure = null);}}

                                        {{link_to("proyectos/$proyecto->id/edit", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil'), $secure = null);}}

                                        {{link_to("proyectos/$proyecto->id/delete", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-trash'), $secure = null);}}
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
</div>
