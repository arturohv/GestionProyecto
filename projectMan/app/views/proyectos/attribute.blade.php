<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Atributos de Proyecto: <strong>{{$proyecto->nombre}}</strong> / <strong>{{$proyecto->empresa}}</strong>             
            </div>
                 
            <div class="panel-body">
                <br>
                <div class="col-lg-10 col-lg-offset-1">
                <div class="bs-example">
                            <ul class="nav nav-tabs" id="myTab">
                                <li><a data-toggle="tab" href="#sectionA">Patrocinadores</a></li>
                                <li><a data-toggle="tab" href="#sectionB">Empleados</a></li>
                                <li><a data-toggle="tab" href="#sectionC">Interesados</a></li>
                                <li><a data-toggle="tab" href="#sectionD">Recursos</a></li>
                                <li><a data-toggle="tab" href="#sectionE">Riesgos Iniciales</a></li>
                                <li><a data-toggle="tab" href="#sectionF">Restricciones</a></li>                              
                            </ul>
                            
                            <div class="tab-content">                                 
                                <div id="sectionA" class="tab-pane fade in active">
                                <br>
                                <div class="btn-group pull-right">
                                    {{link_to("patrocinadores_proyectos/$proyecto->id/create", 'Nuevo', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                                    {{link_to("proyectos", 'Regresar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}                                    
                                 </div> 
                                 <div class="col-lg-8 col-lg-offset-2">      
                                <table class="table">
                                    <tr>
                                        <td>Patrocinador Principal: <strong>{{$patrocinadorp->nombre}}</strong></td>       
                                    </tr>
                                </table>
                                </div>
                                                                                 
                                    <div class="col-lg-8 col-lg-offset-2"> 
                                    
                                        <div class="table-responsive">
                                            @if (Session::has('message'))
                                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                                            @endif
                                            <table class="table table-hover table-striped" id="lista">
                                                <thead>
                                                    <tr>                                                        
                                                        <th>Patrocinador</th>                                                
                                                        <th>Acciones</th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($patrocinadores as $patrocinador)
                                                    <tr>                                         
                                                        <td>{{ $patrocinador->nombre }}</td>                                                
                                                        <td>
                                                            {{link_to("patrocinadores/$patrocinador->id/show", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-eye-open'), $secure = null);}}

                                                             {{link_to("patrocinadores_proyectos/$patrocinador->idkey/delete", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-trash'), $secure = null);}}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="sectionB" class="tab-pane fade">
                                   <br>
                                <div class="btn-group pull-right">
                                    {{link_to("empleados_proyectos/$proyecto->id/create", 'Nuevo', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                                    {{link_to("proyectos", 'Regresar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}                                    
                                 </div>                
                                                                                 
                                    <div class="col-lg-8 col-lg-offset-2">                                    
                                        <div class="table-responsive">
                                            @if (Session::has('message'))
                                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                                            @endif
                                            <table class="table table-hover table-striped" id="lista">
                                                <thead>
                                                    <tr>                                                        
                                                        <th>Empleado</th>                                                
                                                        <th>Acciones</th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($empleados as $empleado)
                                                    <tr>                                         
                                                        <td>{{ $empleado->nombre }}</td>                                                
                                                        <td>
                                                            {{link_to("empleados/$empleado->empleadoid/show", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-eye-open'), $secure = null);}}

                                                             {{link_to("empleados_proyectos/$empleado->idkey/delete", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-trash'), $secure = null);}}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                <div id="sectionC" class="tab-pane fade">
                                   <br>
                                <div class="btn-group pull-right">
                                    {{link_to("interesados_proyectos/$proyecto->id/create", 'Nuevo', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                                    {{link_to("proyectos", 'Regresar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}                                    
                                 </div>                
                                                                                 
                                    <div class="col-lg-8 col-lg-offset-2">                                    
                                        <div class="table-responsive">
                                            @if (Session::has('message'))
                                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                                            @endif
                                            <table class="table table-hover table-striped" id="lista">
                                                <thead>
                                                    <tr>                                                        
                                                        <th>Interesado</th>                                                
                                                        <th>Acciones</th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($interesados as $interesado)
                                                    <tr>                                         
                                                        <td>{{ $interesado->nombre }}</td>                                                
                                                        <td>
                                                            {{link_to("interesados/$interesado->interesadoid/show", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-eye-open'), $secure = null);}}

                                                             {{link_to("interesados_proyectos/$interesado->idkey/delete", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-trash'), $secure = null);}}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>    
                                
                                <div id="sectionD" class="tab-pane fade">
                                   <br>
                                <div class="btn-group pull-right">
                                    {{link_to("recursos/$proyecto->id/create", 'Nuevo', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                                    {{link_to("proyectos", 'Regresar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}                                    
                                 </div>                
                                                                                 
                                    <div class="col-lg-8 col-lg-offset-2">                                    
                                        <div class="table-responsive">
                                            @if (Session::has('message'))
                                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                                            @endif
                                            <table class="table table-hover table-striped" id="lista">
                                                <thead>
                                                    <tr>                                                        
                                                        <th>Recurso</th>
                                                        <th>Cantidad</th>
                                                        <th>U/M</th>                                                
                                                        <th>Acciones</th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($recursos as $recurso)
                                                    <tr>                                         
                                                        <td>{{ $recurso->descripcion }}</td>
                                                        <td>{{ $recurso->cantidad }}</td>
                                                        <td>{{ $recurso->simbolo }}</td>                                                
                                                        <td>
                                                            {{link_to("recursos/$recurso->id/show", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-eye-open'), $secure = null);}}

                                                             {{link_to("recursos/$recurso->id/delete", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-trash'), $secure = null);}}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div id="sectionE" class="tab-pane fade">
                                   <br>
                                <div class="btn-group pull-right">
                                    {{link_to("riesgos/$proyecto->id/create", 'Nuevo', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                                    {{link_to("proyectos", 'Regresar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}                                    
                                 </div>                
                                                                                 
                                    <div class="col-lg-8 col-lg-offset-2">                                    
                                        <div class="table-responsive">
                                            @if (Session::has('message'))
                                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                                            @endif
                                            <table class="table table-hover table-striped" id="lista">
                                                <thead>
                                                    <tr>                                                        
                                                        <th>Descripción</th>
                                                        <th>Fecha</th>                                                                 
                                                        <th>Acciones</th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($riesgos as $riesgo)
                                                    <tr>                                         
                                                        <td>{{ $riesgo->descripcion }}</td>
                                                        <td>{{ $riesgo->fecha_tope }}</td>
                                                                                                       
                                                        <td>
                                                            {{link_to("riesgos/$riesgo->id/show", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-eye-open'), $secure = null);}}

                                                             {{link_to("riesgos/$riesgo->id/delete", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-trash'), $secure = null);}}
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div> 

                                <div id="sectionF" class="tab-pane fade">
                                   <br>
                                <div class="btn-group pull-right">
                                    {{link_to("restricciones/$proyecto->id/create", 'Nuevo', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}

                                    {{link_to("proyectos", 'Regresar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}                                    
                                 </div>                
                                                                                 
                                    <div class="col-lg-8 col-lg-offset-2">                                    
                                        <div class="table-responsive">
                                            @if (Session::has('message'))
                                                <div class="alert alert-info">{{ Session::get('message') }}</div>
                                            @endif
                                            <table class="table table-hover table-striped" id="lista">
                                                <thead>
                                                    <tr>                                                        
                                                        <th>Descripción</th>                                                                                                                     
                                                        <th>Acciones</th>                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($restricciones as $restriccion)
                                                    <tr>                                         
                                                        <td>{{ $restriccion->nombre }}</td>                                                      
                                                                                                       
                                                        <td>                                                          

                                                             {{link_to("restricciones/$restriccion->id/delete", '', $attributes = array('Class'=>'btn btn-default btn-xs glyphicon glyphicon-trash'), $secure = null);}}
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
       
              
    </div>
</div>