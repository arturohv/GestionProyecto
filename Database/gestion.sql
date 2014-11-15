create database gestionpro

create table proyectos(
	proyectoid serial not null primary key,
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

create table patrocinadores(
	patrocinadorid serial not null primary key,
	nombre varchar(60) not null,
	cargoid int not null,
	departamentoid int not null,
	rama_ejecutivaid int not null
);

create table patrocinadores_proyectos(
	id serial not null primary key,
	proyectoid int not null,
	patrocidadorid int not null,
);

create table actividades(
	actividadid serial not null primary key,
	proyectoid int not null,
	descripcion text not null,
	fecha_inicio date not null,
	fecha_fin date not null	
);

create table interesados(
	interesadoid serial not null primary key,
	nombre varchar(60) not null,
	cargoid int not null,
	departamentoid int not null,
	rama_ejecutivaid int not null
);

create table interesados_proyectos(
	id serial not null primary key,
	interesadoid int not null,
	proyectoid int not null
); 

create table departamentos(
	departamentoid serial not null primary key,
	nombre varchar(60) not null,
	descripcion text
); 

create table cargos(
	cargoid serial not null primary key,
	nombre varchar(60) not null,
	descripcion text
);

create table gerentes(
	gerenteid serial not null primary key,
	nombre varchar(60) not null,
	cargoid int not null,
	departamentoid int not null,
	rama_ejecutivaid int not null
);

create table gerentes_proyectos(
	id serial not null primary key,
	gerenteid int not null,
	proyectoid int not null
);

create table gerentes_nivel_autoridad(
	id serial not null primary key,
	proyectoid int not null,
	gerenteid int not null,
	area_autoridad_id int
);

create table areas_autoridad(
	id serial not null primary key,
	decisiones_personal bit not null,
	gestion_presupuesto bit not null,
	decisiones_tecnicas bit not null,
	resolucion_conflictos bit not null,
	escalamiento_limitaciones bit not null
); 

create table clientes(
	clienteid serial not null primary key,
	nombre varchar(60) not null,
	email nombre varchar(60) not null,
	telefono_resi varchar(30) not null,
	telefono_movil varchar(30) not null,
	direccion_fisica text
);

create table clientes_proyectos(
	id serial not null primary key,
	clienteid int not null,
	proyectoid int not null
);

create table premisas_restricciones(
	premisaid serial not null primary key,
	proyectoid int not null,
	descripcion text
);

create table riesgos_iniciales(
	riesgoid serial not null primary key,
	proyectoid int not null,
	descripcion text,
	fecha_tope date
);


alter table reviews
  add constraint fk_reviews_products
  foreign key (productid)
  references products (productid);
