<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Alcances de Proyecto: <strong>{{$proyecto->nombre}}</strong> / <strong>{{$proyecto->empresa}}</strong>             
            </div>
                 
            <div class="panel-body">
                <br>
                <div class="col-lg-10 col-lg-offset-1">
                       <div class="row">
                            <div class="col-lg-12">
                                <div class="col-lg-8 col-lg-offset-2">  
                                    <div class="table-responsive">
                                        <table class="table table-condensed" id="lista">
                                            <tr>
                                            <td><strong>Actividad:</strong></td>
                                            <td>{{$actividad->descripcion}}</td>                                            
                                            <tr>                                                                             
                                        </table>
                                    </div>                   
                                </div>                   
                            </div>
                           
                                   
                                <div class="col-lg-12">                                    
                                        <div class="table-responsive">
                                            @if (Session::has('message'))
                                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                                            @endif

                                            <div class="btn-group pull-right">
                                    {{link_to("alcances/$actividad->id/create", 'Nuevo', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                                    {{link_to("proyectos", 'Regresar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}                                    
                                 </div>      
                                            <table class="table table-hover table-striped" id="lista2">
                                                <thead>
                                                    <tr>                                                        
                                                        <th>Descripción</th>
                                                        <th>Calificación</th>                                                
                                                        <th>Acciones</th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($alcances as $alcance)
                                                    <tr>                                         
                                                        <td>{{ $alcance->descripcion }}</td>
                                                        <td>{{ $alcance->nombre }}</td>
                                                                               
                                                                                                       
                                                        <td>                                                          
                                                            {{link_to("alcances/$alcance->id/show", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-eye-open'), $secure = null);}}

                                                            {{link_to("alcances/$alcance->id/edit", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil'), $secure = null);}}

                                                            {{link_to("alcances/$alcance->id/delete", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-trash'), $secure = null);}}                                                            
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                        </div>                         
                </div>
            </div>             
                          
        </div>
       
              
    </div>
</div>