/*drop database gestionpro*/
/*create database gestionpro*/

create table proyectos(
	id serial not null primary key,
	nombre text not null,
	empresa text not null,
	fecha date not null,
	clienteid int not null,
	patrocinadorid int not null,
	proposito_justificacion text,
	gerenteid int not null,
	descripcion text not null,
	requisito_producto text not null,
	requisito_proyecto text not null,
	presupuesto_inicial text not null,
	requisito_aprobacion text not null
);
/*Check FK*/

create table patrocinadores(
	id serial not null primary key,
	nombre varchar(60) not null,
	cargoid int not null,
	departamentoid int not null,
	rama_ejecutivaid int not null
);
/*Check FK*/

create table patrocinadores_proyectos(
	id serial not null primary key,
	proyectoid int not null,
	patrocinadorid int not null
);
/*Check FK*/

create table actividades(
	id serial not null primary key,
	proyectoid int not null,
	descripcion text not null,
	fecha_inicio date not null,
	fecha_fin date not null	
);
/*Check FK*/

create table interesados(
	id serial not null primary key,
	nombre varchar(60) not null,
	cargoid int not null,
	departamentoid int not null,
	rama_ejecutivaid int not null
);
/*Check FK*/

create table interesados_proyectos(
	id serial not null primary key,
	interesadoid int not null,
	proyectoid int not null
);
/*Check FK*/

create table departamentos(
	id serial not null primary key,
	nombre varchar(60) not null,
	descripcion text
); 

create table cargos(
	id serial not null primary key,
	nombre varchar(60) not null,
	descripcion text
);

create table gerentes(
	id serial not null primary key,
	nombre varchar(60) not null,
	cargoid int not null,
	departamentoid int not null,
	rama_ejecutivaid int not null
);
/*Check FK*/

create table gerentes_nivel_autoridad(
	id serial not null primary key,
	proyectoid int not null,	
	area_autoridad_id int
);
/*Check FK*/

create table areas_autoridad(
	id serial not null primary key,
	decisiones_personal bit not null,
	gestion_presupuesto bit not null,
	decisiones_tecnicas bit not null,
	resolucion_conflictos bit not null,
	escalamiento_limitaciones bit not null
); 

create table clientes(
	id serial not null primary key,
	nombre varchar(60) not null,
	email varchar(60) not null,
	telefono_resi varchar(30) not null,
	telefono_movil varchar(30) not null,
	direccion_fisica text
);


create table premisas_restricciones(
	id serial not null primary key,
	proyectoid int not null,
	nombre text
);
/*Check FK*/

create table riesgos_iniciales(
	id serial not null primary key,
	proyectoid int not null,
	descripcion text,
	fecha_tope date
);
/*Check FK*/

create table empleados(
	id serial not null primary key,
	nombre varchar(60) not null,
	cargoid int not null,
	departamentoid int not null,
	rama_ejecutivaid int not null
);
/*Check FK*/


create table empleados_proyectos(
	id serial not null primary key,
	empleadoid int not null,
	proyectoid int not null
);
/*Check FK*/


create table recursos(
	id serial not null primary key,
	proyectoid int not null,
	descripcion varchar(60) not null,
	cantidad int not null,
	medidaid int not null	
);
/*Check FK*/


create table unidad_medidas(
	id serial not null primary key,
	simbolo varchar(3) not null,
	nombre varchar(30) not null
);

create table alcances(
	id serial not null primary key,
	actividadid int not null,
	descripcion varchar(60) not null,
	califid int	not null
);
/*Check FK*/


create table calificaciones(
	id serial not null primary key,	
	nombre varchar(30) not null
);

create table costos(
	id serial not null primary key,
	alcanceid int not null,
	descripcion varchar(60) not null,
	monto money	not null
);
/*Check FK*/

create table adquisiciones(
	id serial not null primary key,
	alcanceid int not null,
	descripcion varchar(60) not null,
	monto money	not null
);
/*Check FK*/

create table ramas_ejecutivas(
	id serial not null primary key,	
	nombre varchar(30) not null,
	descripcion text not null
);

create table calidad(
	id serial not null primary key,
	adquisicionid int  not null,
	descripcion text not null
);

create table tipo_comunicacion(
	id serial not null primary key,	
	nombre text not null
);

create table tipo_comunicacion_empleado(
	id serial not null primary key,
	empleadoid int not null,
	tipocomunicacionid int not null,
	proyectoid int not null	
);

create table tipo_comunicacion_interesado(
	id serial not null primary key,
	interesadoid int not null,
	tipocomunicacionid int not null,
	proyectoid int not null	
);




alter table proyectos add constraint fk_proyectos_clientes foreign key (clienteid) references clientes (id);
alter table proyectos add constraint fk_proyectos_patrocinadores foreign key (patrocinadorid) references patrocinadores (id);
alter table proyectos add constraint fk_proyectos_gerentes foreign key (gerenteid) references gerentes (id);

alter table actividades add constraint fk_actividades_proyectos foreign key (proyectoid) references proyectos (id);

alter table patrocinadores add constraint fk_patrocinadores_cargos foreign key (cargoid) references cargos (id);
alter table patrocinadores add constraint fk_patrocinadores_departamentos foreign key (departamentoid) references departamentos (id);
alter table patrocinadores add constraint fk_patrocinadores_ramas_ejecutivas foreign key (rama_ejecutivaid) references ramas_ejecutivas (id);

alter table patrocinadores_proyectos add constraint fk_patrocinadores_proyectos_proyectos foreign key (proyectoid) references proyectos (id);
alter table patrocinadores_proyectos add constraint fk_patrocinadores_proyectos_patrocinadores foreign key (patrocinadorid) references patrocinadores (id);



alter table interesados add constraint fk_interesados_cargos foreign key (cargoid) references cargos (id);
alter table interesados add constraint fk_interesados_departamentos foreign key (departamentoid) references departamentos (id);
alter table interesados add constraint fk_interesados_ramas_ejecutivas foreign key (rama_ejecutivaid) references ramas_ejecutivas (id);

alter table interesados_proyectos add constraint fk_interesados_proyectos_interesados foreign key (interesadoid) references interesados (id); 
alter table interesados_proyectos add constraint fk_interesados_proyectos_proyectos foreign key (proyectoid) references proyectos (id);

alter table gerentes add constraint fk_gerentes_cargos foreign key (cargoid) references cargos (id);
alter table gerentes add constraint fk_gerentes_departamentos foreign key (departamentoid) references departamentos (id);
alter table gerentes add constraint fk_gerentes_ramas_ejecutivas foreign key (rama_ejecutivaid) references ramas_ejecutivas (id);

alter table gerentes_nivel_autoridad add constraint fk_gerentes_nivel_autoridad_proyectos foreign key (proyectoid) references proyectos (id);
alter table gerentes_nivel_autoridad add constraint fk_gerentes_nivel_autoridad_areas_autoridad foreign key (area_autoridad_id) references areas_autoridad (id);

alter table premisas_restricciones add constraint fk_premisas_restricciones_proyectos foreign key (proyectoid) references proyectos (id);

alter table riesgos_iniciales add constraint fk_riesgos_iniciales_proyectos foreign key (proyectoid) references proyectos (id);

alter table empleados add constraint fk_empleados_cargos foreign key (cargoid) references cargos (id);
alter table empleados add constraint fk_empleados_departamentos foreign key (departamentoid) references departamentos (id);
alter table empleados add constraint fk_empleados_ramas_ejecutivas foreign key (rama_ejecutivaid) references ramas_ejecutivas (id);

alter table empleados_proyectos add constraint fk_empleados_proyectos_proyectos foreign key (proyectoid) references proyectos (id);
alter table empleados_proyectos add constraint fk_empleados_proyectos_empleados foreign key (empleadoid) references empleados (id);

alter table recursos add constraint fk_recursos_proyectos foreign key (proyectoid) references proyectos (id);
alter table recursos add constraint fk_recursos_unidad_medida foreign key (medidaid) references unidad_medidas (id);

alter table alcances add constraint fk_alcances_actividades foreign key (actividadid) references actividades (id);
alter table alcances add constraint fk_alcances_calificaciones foreign key (califid) references calificaciones (id);

alter table costos add constraint fk_costos_alcances foreign key (alcanceid) references alcances (id);

alter table adquisiciones add constraint fk_adquisiciones_alcances foreign key (alcanceid) references alcances (id);

alter table calidad add constraint fk_calidad_adquisiciones foreign key (adquisicionid) references adquisiciones (id);

alter table tipo_comunicacion_empleado add constraint tipo_comunicacion_empleado_empleado foreign key (empleadoid) references empleados (id);
alter table tipo_comunicacion_empleado add constraint tipo_comunicacion_empleado_tipo_comunicacion foreign key (tipocomunicacionid) references tipo_comunicacion (id);
alter table tipo_comunicacion_empleado add constraint tipo_comunicacion_empleado_proyecto foreign key (proyectoid) references proyectos (id);

alter table tipo_comunicacion_interesado add constraint tipo_comunicacion_interesado_interesado foreign key (interesadoid) references interesados (id);
alter table tipo_comunicacion_interesado add constraint tipo_comunicacion_interesado_tipo_comunicacion foreign key (tipocomunicacionid) references tipo_comunicacion (id);
alter table tipo_comunicacion_interesado add constraint tipo_comunicacion_interesado_proyecto foreign key (proyectoid) references proyectos (id);


/*Inserts Unidades Medidas*/
insert into unidad_medidas (simbolo, nombre) values ('u','Unidades');
insert into unidad_medidas (simbolo, nombre) values ('g','Gramos');
insert into unidad_medidas (simbolo, nombre) values ('Km','Kilometros');
insert into unidad_medidas (simbolo, nombre) values ('m','Metros');
/*Inserts Cargos*/
insert into cargos (nombre,descripcion) values ('Síndico','Síndico');
insert into cargos (nombre,descripcion) values ('Regidor','Regidor');
insert into cargos (nombre,descripcion) values ('Miembro Comunidad','Miembro Comunidad');
insert into cargos (nombre,descripcion) values ('Alcalde','Alcalde');
insert into cargos (nombre,descripcion) values ('Alcaldeza','Alcaldeza');
insert into cargos (nombre,descripcion) values ('Director Proyecto','Director Proyecto');
insert into cargos (nombre,descripcion) values ('Gestor Proyecto','Gestor Proyecto');
/*Inserts Departamentos*/
insert into departamentos (nombre,descripcion) values ('Alcaldía','Alcaldía');
insert into departamentos (nombre,descripcion) values ('Planificación','Planificación');
insert into departamentos (nombre,descripcion) values ('Junta Unidad Desarrollo Comunal','Junta Unidad Desarrollo Comunal');
insert into departamentos (nombre,descripcion) values ('Comunidad','Comunidad');
insert into departamentos (nombre,descripcion) values ('TICS','TICS');
insert into departamentos (nombre,descripcion) values ('Enlace Comunal','Enlace Comunal');
insert into departamentos (nombre,descripcion) values ('Comunicaciones','Comunicaciones');
insert into departamentos (nombre,descripcion) values ('Unidad Técnica de Gestión Vial','Unidad Técnica de Gestión Vial');
/*Inserts Ramas Ejecutivas*/
insert into ramas_ejecutivas (nombre,descripcion) values ('Presupuesto Administración','Presupuesto Administración');
insert into ramas_ejecutivas (nombre,descripcion) values ('Presupuesto Acueductos','Presupuesto Acueductos');
insert into ramas_ejecutivas (nombre,descripcion) values ('Presupuesto Junta Vial','Presupuesto Junta Vial');
/*Inserts Clientes*/
insert into clientes (nombre,email,telefono_resi,telefono_movil,direccion_fisica) values ('Comunidad La Palmera','palmerala@gmail.com','24740000','24740000','La Palmera, San Carlos');
insert into clientes (nombre,email,telefono_resi,telefono_movil,direccion_fisica) values ('Comunidad Florencia','florencia@gmail.com','24750000','24750000','Florencia, San Carlos');
insert into clientes (nombre,email,telefono_resi,telefono_movil,direccion_fisica) values ('Comunidad Aguas Zarcas','aguaszarcas@gmail.com','24740001','24740001','Aguas Zarcas, San Carlos');
insert into clientes (nombre,email,telefono_resi,telefono_movil,direccion_fisica) values ('Comunidad Ciudad Quesada','quesadaciudad@gmail.com','24600000','24600000','Ciudad Quesada, San Carlos');
insert into clientes (nombre,email,telefono_resi,telefono_movil,direccion_fisica) values ('Comunidad La Fortuna','fortuna@gmail.com','24690000','24690000','La Fortuna, San Carlos');
insert into clientes (nombre,email,telefono_resi,telefono_movil,direccion_fisica) values ('Comunidad Venecia','venecia@gmail.com','24720000','24720000','Venecia, San Carlos');
insert into clientes (nombre,email,telefono_resi,telefono_movil,direccion_fisica) values ('Comunidad Venado','venado@gmail.com','24620000','24620000','Venado, San Carlos');
insert into clientes (nombre,email,telefono_resi,telefono_movil,direccion_fisica) values ('Comunidad Monterrey','monterrey@gmail.com','24620000','24620000','Monterrey, San Carlos');
/*Inserts Clientes*/
insert into gerentes (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Amores Saborío Dixie',6,2,1);
insert into gerentes (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Esquivel Vargas Gerardo',7,1,2);
/*Inserts Empleados*/
insert into empleados (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Vargas Rojas Evelyn',7,2,1);
insert into empleados (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Rodriguez Barrantes Gabriela',7,6,1);
insert into empleados (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Peñaranda Prendas Andrea',7,6,1);
insert into empleados (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Acuña Jimenez Vianney',7,6,3);
/*Inserts Patrocinadores*/
insert into patrocinadores (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Junta de Desarrollo',3,4,1);
insert into patrocinadores (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Municipalidad de San Carlos',3,4,1);
insert into patrocinadores (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('BID',3,4,1);
insert into patrocinadores (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('IMAS',3,4,3);
/*Inserts Interesados*/
insert into interesados (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Ministerio de Transportes',3,4,1);
insert into interesados (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Municipalidad de San Carlos',3,4,1);
insert into interesados (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Junta de Desarrollo Comunal',3,4,1);
insert into interesados (nombre,cargoid,departamentoid,rama_ejecutivaid) values ('Ministerio de Energía',3,4,3);
/*Inserts Calificaciones*/
insert into calificaciones (nombre) values ('Sin comenzar');
insert into calificaciones (nombre) values ('Iniciado');
insert into calificaciones (nombre) values ('En Revisión');
insert into calificaciones (nombre) values ('Finalizado');
/*Inserts tipo_comunicacion*/
insert into tipo_comunicacion (nombre) values ('Correo Electrónico');
insert into tipo_comunicacion (nombre) values ('Telefóno');
insert into tipo_comunicacion (nombre) values ('Fax');
insert into tipo_comunicacion (nombre) values ('Telegrama');


