
-- se crear la tabla
CREATE TABLE  `persona`(
`numero` int(11) NOT NULL,  
`nombre_usuario` text not null,
`carrera` text not null,
`no_cuenta` int(10) not null,
`direccion` text not null,
`telefono` varchar (8) not null,
`email` text not null,
`password` varchar (8) not null,
`fecha_registro` datetime not null default current_timestamp,
`permisos` int (11) not null default '2'
)engine=Innodb default charset=utf8;

ALTER TABLE `persona` 
CHANGE COLUMN `numero` `numero` INT(11) NOT NULL AUTO_INCREMENT ,
ADD PRIMARY KEY (`numero`);
;


insert into `persona`(`numero`,`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)values('1','jose jaime guzman ','ico','413112571','gloria 15','5612315','aaron@gmail.com','123456');
insert into `persona`(`numero`,`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)values('2','Aaron Velasco','ico','413112572','gloria 15','5612315','aaron@gmail.com','123456');
insert into `persona`(`numero`,`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)values('3','Aaron Velasco','ico','413112573','gloria 15','5612315','aaron@gmail.com','123456');
insert into `persona`(`numero`,`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)values('4','Aaron Velasco','ico','413112574','gloria 15','5612315','aaron@gmail.com','123456');
insert into `persona`(`numero`,`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)values('6','Aaron Velasco','ico','413112575','gloria 15','5612315','aaron@gmail.com','123456');
insert into  `persona`(`numero`,`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)values('7','Aaron Velasco','ico','413112576','gloria 15','5612315','aaron@gmail.com','123456');
insert into `persona`(`numero`,`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)values('8','Aaron Velasco','ico','413112577','gloria 15','5612315','aaron@gmail.com','123456');
insert into `persona`(`numero`,`nombre_usuario`, `carrera`,`no_cuenta`,`direccion`,`telefono`,`email`,`password`)values('9','Aaron Velasco','ico','413112578','gloria 15','5612315','aaron@gmail.com','123456');


-- define la llave primaria

-- commit confirma la trasaccion o proceso actual, haciendo que sus cambios sean permanentes
