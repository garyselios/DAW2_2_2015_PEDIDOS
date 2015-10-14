INSERT INTO tipo_usuario (id,nome)
VALUES (1,"ADMIN");

INSERT INTO tipo_usuario (id,nome)
VALUES (2,"USER");

INSERT INTO tipo_usuario (id,nome)
VALUES (3,"CLIENT");

INSERT INTO usuario (nome,username,email,senha,tipo_usuario)
VALUES ('Admin','IFBurguerAdmin','admin@IFBurguer.com','Hamburguesa',1);