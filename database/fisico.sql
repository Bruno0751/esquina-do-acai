CREATE DATABASE esquina_do_acai;

USE esquina_do_acai;

CREATE TABLE usuarios(
    id_usuario INT AUTO_INCREMENT NOT NULL,
    nome VARCHAR(40) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL,
    email VARCHAR(50) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL,
    cep INT NULL,
    numero INT NULL,
    complemento INT NULL,
    endereco VARCHAR(100) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL,
    cpf VARCHAR(15) NULL,
    senha VARCHAR(20) CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL,
    tipo_conta ENUM('adm', 'user') CHARACTER SET UTF8 COLLATE UTF8_UNICODE_CI NULL,
    data_registro DATE NOT NULL,
    hora_registro DATE NOT NULL,
    CONSTRAINT pkid_usuario PRIMARY KEY(id_usuario));
    

INSERT INTO esquina_do_acai.usuarios
VALUES(NULL, 'Bruno', NULL, 91170090, NULL, NULL, NULL, '03154619003', 123, 'adm', NOW(), NOW());