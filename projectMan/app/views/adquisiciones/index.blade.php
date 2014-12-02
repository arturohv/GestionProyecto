<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Adquisiones del Alcance - Proyecto: <strong>{{$proyecto->nombre}}</strong>          
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
                                            <td><strong>Alcance:</strong></td>
                                            <td>{{$alcance->descripcion}}</td>                
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
                                    {{link_to("adquisiciones/$alcance->id/create", 'Nuevo', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                                    {{link_to("alcances/$alcance->actividadid/index", 'Regresar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}                                    
                                 </div>      
                                            <table class="table table-hover table-striped" id="lista2">
                                                <thead>
                                                    <tr>                                                        
                                                        <th>Descripción</th>
                                                        <th>Monto Colones</th>                                                
                                                        <th>Acciones</th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($adquisiciones as $adquisicion)
                                                    <tr>                                         
                                                        <td>{{ $adquisicion->descripcion }}</td>
                                                        <td>{{ $adquisicion->monto }}</td>
                                                                               
                                                                                                       
                                                        <td>                                                          
                                                            {{link_to("adquisiciones/$adquisicion->id/show", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-eye-open'), $secure = null);}}

                                                            {{link_to("adquisiciones/$adquisicion->id/edit", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-pencil'), $secure = null);}}

                                                            {{link_to("adquisiciones/$adquisicion->id/delete", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-trash'), $secure = null);}}                                                            
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