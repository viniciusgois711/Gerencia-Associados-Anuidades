CREATE DATABASE associadoseanuidade;

USE associadoseanuidade;

CREATE TABLE associados(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    cpf CHAR(11) NOT NULL,
    data_filiacao DATE NOT NULL
);

CREATE TABLE anuidades(
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_associados INT NOT NULL,
    ano CHAR(4) NOT NULL,
    valor INT NOT NULL,
    FOREIGN KEY (id_associados) REFERENCES associados(id)
)