
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
	patrocinadorid int not null,
	unique(proyectoid,patrocinadorid)
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
	proyectoid int not null,
	unique(interesadoid,proyectoid)
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

/*create table gerente_proyecto(
	id serial not null primary key,
	gerenteid int not null,
	proyectoid int not null,
	UNIQUE (gerenteid,proyectoid)
);*/

/*Check FK*/

create table gerentes_nivel_autoridad_proyecto(
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
	descripcion text
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
	proyectoid int not null,
	unique(empleadoid,proyectoid)
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
	simbolo varchar(60) not null,
	nombre int not null
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
	nombre varchar(30) not null,
	descripcion text not null
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
	nombre varchar(30),	
	descripcion text not null
);


alter table proyectos add constraint fk_proyectos_clientes foreign key (clienteid) references clientes (id);
alter table proyectos add constraint fk_proyectos_patrocinadores foreign key (patrocinadorid) references patrocinadores (id);
alter table proyectos add constraint fk_proyectos_gerentes foreign key (gerenteid) references gerentes (id);

/*1*/alter table patrocinadores add constraint fk_patrocinadores_cargos foreign key (cargoid) references cargos (id);
alter table patrocinadores add constraint fk_patrocinadores_departamentos foreign key (departamentoid) references departamentos (id);
alter table patrocinadores add constraint fk_patrocinadores_ramas_ejecutivas foreign key (rama_ejecutivaid) references ramas_ejecutivas (id);

alter table patrocinadores_proyectos add constraint fk_patrocinadores_proyectos_proyectos foreign key (proyectoid) references proyectos (id);
alter table patrocinadores_proyectos add constraint fk_patrocinadores_proyectos_patrocinadores foreign key (patrocinadorid) references patrocinadores (id);

alter table actividades add constraint fk_actividades_proyectos foreign key (proyectoid) references proyectos (id);

/*2*/alter table interesados add constraint fk_interesados_cargos foreign key (cargoid) references cargos (id);
alter table interesados add constraint fk_interesados_departamentos foreign key (departamentoid) references departamentos (id);
alter table interesados add constraint fk_interesados_ramas_ejecutivas foreign key (rama_ejecutivaid) references ramas_ejecutivas (id);

alter table interesados_proyectos add constraint fk_interesados_proyectos_interesados foreign key (interesadoid) references interesados (id); 
alter table interesados_proyectos add constraint fk_interesados_proyectos_proyectos foreign key (proyectoid) references proyectos (id);

alter table gerentes add constraint fk_gerentes_cargos foreign key (cargoid) references cargos (id);
alter table gerentes add constraint fk_gerentes_departamentos foreign key (departamentoid) references departamentos (id);
alter table gerentes add constraint fk_gerentes_ramas_ejecutivas foreign key (rama_ejecutivaid) references ramas_ejecutivas (id);

alter table gerentes_nivel_autoridad_proyecto add constraint fk_gerentes_nivel_autoridad_proyectos foreign key (proyectoid) references proyectos (id);
alter table gerentes_nivel_autoridad_proyecto add constraint fk_gerentes_nivel_autoridad_areas_autoridad foreign key (area_autoridad_id) references areas_autoridad (id);

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

/*alter table gerente_proyecto add constraint fk_gerente_proyecto_gerentes foreign key (gerenteid) references gerentes (id);*/
/*alter table gerente_proyecto add constraint fk_gerente_proyecto_proyectos foreign key (proyectoid) references proyectos (id);*/
