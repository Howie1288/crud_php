create table productos(
    producto_id serial not null,
    producto_nombre varchar(50) not null,
    producto_precio decimal(10,2) not null,
    producto_situacion smallint not null default 1,
    primary key (producto_id)
)

create table alumnos(
    alumno_id serial not null,
    alumno_nombre1 varchar(50) not null,
    alumno_nombre2 varchar(50) null,
    alumno_apellido1 varchar(50) not null,
    alumno_apellido2 varchar(50) null,
    alumno_fecnac date not null,
    alumno_telefono int not null,
    alumno_correo_elect varchar(50) not null,
    primary key (alumno_id)
)

/*ESTOS COMANDO SON PARA CORREGIR ERRORES DE MI BASE DE DATOS*/
/*para ver una tabla*/
select * from alumnos
/*modificar los valores de frecha de una tabla en informix*/
ALTER TABLE alumnos modify (alumno_fecnac datetime year to day not null)

alter table alumnos modify (alumno_nombre2 varchar(50) )
/*Eliminar Comunas de una tabla*/
ALTER TABLE alumnos DROP COLUMN nombre_del_campo;
/*Eliminar valores de una tabla */
DELETE FROM alumnos WHERE columnas = 2,3;