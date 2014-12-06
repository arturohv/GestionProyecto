<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Información del Proyecto      
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1"> 
                        	<table class="table table-hover table-condensed table-bordered" id="lista">
                            @foreach($proyectos as $proyecto)
                                <tr>
                                    <td><strong>Empresa / Organización:</strong></td>
                                    <td>{{$proyecto->empresa}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Proyecto:</strong></td>
                                    <td>{{$proyecto->proyecto}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Fecha de Preparación:</strong></td>
                                    <td>{{$proyecto->fecha}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Cliente:</strong></td>
                                    <td>{{$proyecto->cliente}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Patrocinador Principal:</strong></td>
                                    <td>{{$proyecto->patrocinador}}</td>
                                </tr>
                                <tr>
                                    <td><strong>Gerente del Proyecto</strong></td>
                                    <td>{{$proyecto->gerente}}</td>
                                </tr>
                             @endforeach    
                            </table>
                        </div>
                    </div>
                        <!-- /.table-responsive -->
                </div>
            </div>             
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Patrocinador / Patrocinadores     
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1"> 
                            <table class="table table-hover table-condensed table-bordered" id="lista">
                            <thead>
                                    <tr>                                        
                                        <th>Nombre</th>
                                        <th>Cargo</th>
                                        <th>Departamento</th>
                                        <th>Rama Ejecutiva</th>                                        
                                    </tr>
                                </thead>
                            <tbody>
                            @foreach($patrocinadores as $patrocinador)
                               <tr>
                                   <td>{{$patrocinador->patrocinador}}</td>
                                   <td>{{$patrocinador->cargo}}</td>
                                   <td>{{$patrocinador->departamento}}</td>
                                   <td>{{$patrocinador->rama_ejecutiva}}</td>
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

        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Propósito y Justificación del Proyecto      
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1">                             
                            @foreach($proyectos as $proyecto)
                                <p>{{$proyecto->proposito_justificacion}}</p>              
                             @endforeach    
                           
                        </div>
                    </div>
                        <!-- /.table-responsive -->
                </div>
            </div>             
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Descripción del Proyecto y Entregables      
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1">                             
                            @foreach($proyectos as $proyecto)
                                <p>{{$proyecto->descripcion}}</p>              
                             @endforeach    
                           
                        </div>
                    </div>
                        <!-- /.table-responsive -->
                </div>
            </div>             
        </div>

         <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Requerimientos del producto
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1">                             
                            @foreach($proyectos as $proyecto)
                                <p>{{$proyecto->requisito_producto}}</p>              
                             @endforeach    
                           
                        </div>
                    </div>
                        <!-- /.table-responsive -->
                </div>
            </div>             
        </div>

         <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Requerimientos del proyecto
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1">                             
                            @foreach($proyectos as $proyecto)
                                <p>{{$proyecto->requisito_proyecto}}</p>              
                             @endforeach    
                           
                        </div>
                    </div>
                        <!-- /.table-responsive -->
                </div>
            </div>             
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Actividades y Alcances     
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1"> 
                            <table class="table table-hover table-condensed table-bordered" id="lista">
                            <thead>
                                    <tr>                                        
                                        <th>Actividad</th>
                                        <th>Fecha Inicial</th>
                                        <th>Fecha Final</th>
                                        <th>Alcance</th>
                                        <th># Costos</th>
                                        <th>Total Costos</th>                                           
                                    </tr>
                                </thead>
                            
                                @foreach($actividades as $actividad)
                            <tbody>
                              
                            <tr>
                                <td>{{$actividad->actividad}}</td>
                                   <td>{{$actividad->fecha_inicio}}</td>
                                   <td>{{$actividad->fecha_fin}}</td>                            
                              
                                   
                                   <td>{{$actividad->alcance}}</td>
                                   <td>{{$actividad->cant_costos}}</td>
                                   <td>{{$actividad->total_costos}}</td>
                               </tr>
                             
                            </tbody>  
                             @endforeach
                               
                            </table>
                        </div>
                    </div>
                        <!-- /.table-responsive -->
                </div>
            </div>             
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Premisas / Restricciones     
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1"> 
                           <ol> 
                            @foreach($restricciones as $restriccion)
                              <li>{{$restriccion->nombre}}</li>                                   
                             @endforeach
                            </ol>
                        </div>
                    </div>
                        <!-- /.table-responsive -->
                </div>
            </div>             
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Riesgos Iniciales     
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1"> 
                            <table class="table table-hover table-condensed table-bordered" id="lista">
                            <thead>
                                    <tr>                                        
                                        <th>Descripción</th>
                                        <th>Fecha Límite</th>                              
                                    </tr>
                                </thead>
                            <tbody>
                            @foreach($riesgos as $riesgo)
                               <tr>
                                   <td>{{$riesgo->descripcion}}</td>
                                   <td>{{$riesgo->fecha_tope}}</td>                               
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

        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Presupuesto Inicial
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1">                             
                            @foreach($proyectos as $proyecto)
                                <p>{{$proyecto->presupuesto_inicial}}</p>              
                             @endforeach    
                           
                        </div>
                    </div>
                        <!-- /.table-responsive -->
                </div>
            </div>             
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Interesados    
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1"> 
                            <table class="table table-hover table-condensed table-bordered" id="lista">
                            <thead>
                                    <tr>                                        
                                        <th>Nombre</th>
                                        <th>Cargo</th>
                                        <th>Departamento</th>
                                        <th>Rama Ejecutiva</th>                                        
                                    </tr>
                                </thead>
                            <tbody>
                            @foreach($interesados as $interesado)
                               <tr>
                                   <td>{{$interesado->patrocinador}}</td>
                                   <td>{{$interesado->cargo}}</td>
                                   <td>{{$interesado->departamento}}</td>
                                   <td>{{$interesado->rama_ejecutiva}}</td>
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

          <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Requisitos de Aprobación
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1">                             
                            @foreach($proyectos as $proyecto)
                                <p>{{$proyecto->requisito_aprobacion}}</p>              
                             @endforeach    
                           
                        </div>
                    </div>
                        <!-- /.table-responsive -->
                </div>
            </div>             
        </div>

        
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-th-list"></i> Empleados    
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-10 col-lg-offset-1"> 
                            <table class="table table-hover table-condensed table-bordered" id="lista">
                            <thead>
                                    <tr>                                        
                                        <th>Nombre</th>
                                        <th>Cargo</th>
                                        <th>Departamento</th>
                                        <th>Rama Ejecutiva</th>                                        
                                    </tr>
                                </thead>
                            <tbody>
                            @foreach($empleados as $empleado)
                               <tr>
                                   <td>{{$empleado->patrocinador}}</td>
                                   <td>{{$empleado->cargo}}</td>
                                   <td>{{$empleado->departamento}}</td>
                                   <td>{{$empleado->rama_ejecutiva}}</td>
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

