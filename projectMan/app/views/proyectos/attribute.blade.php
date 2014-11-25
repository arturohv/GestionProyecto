<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="glyphicon glyphicon-eye-open"></i> Atributos de Proyecto                 
            </div>
                 
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-6 col-lg-offset-3">  
                            <div class="table-responsive">
                                <table class="table" id="lista">
                                    <tr>
                                    <td><strong>Id:</strong></td>
                                    <td>{{$proyecto->id}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Nombre:</strong></td>
                                    <td>{{$proyecto->nombre}}</td>
                                    </tr>

                                    <tr>
                                    <td><strong>Empresa:</strong></td>
                                    <td>{{$proyecto->empresa}}</td>
                                    </tr>                                    
                                </table>
                            </div>
                            

                           
                        </div>

                        
                        <!-- /.table-responsive -->
                    </div>
                </div>
                <div class="col-lg-10 col-lg-offset-1" >
                <div class="bs-example">
                            <ul class="nav nav-tabs" id="myTab">
                                <li><a data-toggle="tab" href="#sectionA">Patrocinadores</a></li>
                                <li><a data-toggle="tab" href="#sectionB">Section B</a></li>                                
                            </ul>
                            
                            <div class="tab-content">
                                 
                                <div id="sectionA" class="tab-pane fade in active">
                                 <br>
                                 <div class="btn-group">
                                    {{link_to("patrocinadores_proyectos/$proyecto->id/create", 'Nuevo', $attributes = array('Class'=>'btn btn-default btn-xs'), $secure = null);}}                                    
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
                                                        
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div id="sectionB" class="tab-pane fade">
                                    <h3>Section B</h3>
                                    <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
                                </div>
                                <div id="dropdown1" class="tab-pane fade">
                                    <h3>Dropdown 1</h3>
                                    <p>WInteger convallis, nulla in sollicitudin placerat, ligula enim auctor lectus, in mollis diam dolor at lorem. Sed bibendum nibh sit amet dictum feugiat. Vivamus arcu sem, cursus a feugiat ut, iaculis at erat. Donec vehicula at ligula vitae venenatis. Sed nunc nulla, vehicula non porttitor in, pharetra et dolor. Fusce nec velit velit. Pellentesque consectetur eros.</p>
                                </div>
                                <div id="dropdown2" class="tab-pane fade">
                                    <h3>Dropdown 2</h3>
                                    <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis dis parturient.</p>
                                </div>
                            </div>
                        </div>                                 
                    </div>

            </div>             
                        
        </div>
        <div class="pull-right">
                                {{link_to("proyectos", 'Regresar', $attributes = array('Class'=>'btn btn-default'), $secure = null);}}
                            </div>           
    </div>
</div>