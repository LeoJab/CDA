CREATE TABLE Personne (
    per_nom Varchar(50),
    per_prenom Varchar(50),
    per_adresse Varchar(50),
    per_ville Varchar(50),
    per_num int Auto_Increment Primary Key
);

CREATE TABLE Groupe (
    gro_libelle Varchar(50),
    gro_num Int Auto_Increment Primary Key
);

CREATE TABLE Appartient (
    per_num int,
    gro_num int,
    FOREIGN KEY (per_num) REFERENCES Personne(per_num),
    FOREIGN KEY (gro_num) REFERENCES Groupe(gro_num)
)