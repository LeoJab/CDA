--EXERCICE 1

--Script d'implémentation
CREATE TABLE Client(
   cli_num int PRIMARY KEY,
   cli_nom varchar(50),
   cli_adresse varchar(50),
   cli_tel varchar(30)
);

CREATE table Commande(
   com_num int PRIMARY KEY,
   cli_num int,
   cam_date DATETIME,
   com_obs varchar(50),
   FOREIGN KEY (cli_num) REFERENCES Client(cli_num)
);

CREATE TABLE Produit(
   pro_num int PRIMARY KEY,
   pro_libelle varchar(50),
   pro_description varchar(50)
);

CREATE table est_compose(
   com_num int,
   pro_num int,
   est_qte int,
   PRIMARY KEY(com_num, pro_num),
   FOREIGN KEY (com_num) REFERENCES Commande(com_num),
   FOREIGN KEY (pro_num) REFERENCES Porduit(pro_num)
)

--Création de l'index sur cli_nom dans la table Client
CREATE index cli_nom on client(cli_nom)


--PAPYRUS

--Script création de la base de données
CREATE TABLE produit(
   CODART char(4),
   LIBART VARCHAR(30) ,
   STKALE INT,
   STKPHY INT,
   QTEANN INT,
   UNIMES VARCHAR(5) ,
   PRIMARY KEY(CODART)
);

CREATE TABLE fournis(
   NUMFOU TINYINT,
   NOMFOU VARCHAR(25) ,
   RUEFOU VARCHAR(50) ,
   POSFOU VARCHAR(5) ,
   VILFOU VARCHAR(30) ,
   CONFOU VARCHAR(15) ,
   SATISF TINYINT,
   PRIMARY KEY(NUMFOU)
);

CREATE TABLE entcom(
   NUMCOM INT,
   OBSCOM VARCHAR(50) ,
   DATCOM DATETIME,
   NUMFOU TINYINT,
   PRIMARY KEY(NUMCOM),
   FOREIGN KEY(NUMFOU) REFERENCES fournis(NUMFOU)
);

CREATE TABLE ligcom(
   NUMLIG TINYINT,
   QTECDE INT,
   PRIUNI DECIMAL(9, 2),
   QTELIV INT,
   DERLIV DATETIME,
   NUMCOM INT,
   CODART char(4),
   PRIMARY KEY(NUMLIG),
   FOREIGN KEY(NUMCOM) REFERENCES entcom(NUMCOM),
   FOREIGN KEY(CODART) REFERENCES produit(CODART)
);

CREATE TABLE Vente(
   CODART char(4),
   NUMFOU INT,
   DELLIV SMALLINT,
   QTE1 INT,
   PRIX1 VARCHAR(50) ,
   QTE2 INT,
   PRIX2 VARCHAR(50) ,
   QTE3 INT,
   PRIX3 VARCHAR(50) ,
   PRIMARY KEY(CODART, NUMFOU),
   FOREIGN KEY(CODART) REFERENCES produit(CODART),
   FOREIGN KEY(NUMFOU) REFERENCES fournis(NUMFOU)
);

-- Création de l'index sur NUMFOU de la table entcom
Create index numfou on entcom(numfou)

-- Utilisateur et droits
CREATE USER 'util1'@'localhost' IDENTIFIED BY 'mdp1234';
CREATE USER 'util2'@'localhost' IDENTIFIED BY '1234mdp';
CREATE USER 'util3'@'localhost' IDENTIFIED BY '1m2d3p4'

GRANT ALL PRIVILEGES ON papyrus.* TO 'util1'@'localhost'
GRANT select ON papyrus.* TO 'util2'@'localhost'
GRANT select on papyrus.fournis to 'util3'@'localhost'

-- Script alimentation de la base de données
INSERT INTO produit(codart, libart, stkale, stkphy, qteann, unimes)
values
    ('B100', 'bandes magnétiques', 5, 100, 500, 'M'),
    ('B200', 'papier pré imprimé', 5, 100, 300, 'M')

INSERT INTO fournis(numfou, nomfou, ruefou, posfou, vilfou, confou, satisf)
values
   (120, 'GROBRIGAN', '20 rue du papier', '92200', 'papercity', 'Georges', 8),
   (540, 'ECLIPSE', '53 rue laisse flotter les rubans', '78250', 'Bugbugville', 'Nestor', 7)

INSERT INTO vente(numfou, codart, delliv, qte1, prix1, qte2, prix2, qte3, prix3)
values
   (120, 'B100', 15, 0, 150, 50, 145, 100, 140),
   (540, 'B200', 15, 0, 210, 50, 200, 100, 185)

INSERT INTO ligcom(numlig, qtecde, priuni, qteliv, derliv, numcom, codart)
values
   (1, 3000, 470, 3000, '2007-03-15', 70010, 'B100'),
   (2, 2000, 485, 2000, '2007-07-15', 70010, 'B200')

INSERT INTO entcom(numcom, obscom, datcom, numfou)
values
   (70010, '', '2018-04-23 15:59:51', 120)