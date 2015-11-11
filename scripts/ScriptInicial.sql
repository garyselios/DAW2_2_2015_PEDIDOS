INSERT INTO tipo_usuario (id,nombre)
VALUES (1,"ADMIN");

INSERT INTO tipo_usuario (id,nombre)
VALUES (2,"USER");

INSERT INTO tipo_usuario (id,nombre)
VALUES (3,"CLIENT");

INSERT INTO usuario (nombre,apellido,username,email,contrasena,tipo_usuario)
VALUES ('Admin','Pancho','IFBurguerAdmin','admin@IFBurguer.com','Hamburguesa',1);