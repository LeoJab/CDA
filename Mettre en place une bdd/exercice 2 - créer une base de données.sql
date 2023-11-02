Create Table Station (
    num_station int Primary KEY,
    nom_station Varchar(50)
);

Create Table Hotel (
    capacite_hotel int,
    categorie_hotel Varchar(40),
    nom_hotel Varchar(40),
    adresse_hotel Varchar(50),
    num_hotel int Primary Key,
    num_station int,
    FOREIGN Key (num_station) REFERENCES Station(num_station)
);

Create Table Chambre (
    capacite_chambre int,
    degre_confort Varchar(10),
    exposition Varchar(10),
    type_chambre Varchar(30),
    num_chambre int Primary Key,
    num_hotel int,
    FOREIGN Key (num_hotel) REFERENCES Hotel(num_hotel)
);

Create Table Reservation (
    FOREIGN Key (num_chambre) REFERENCES Chambre(num_chambre),
    FOREIGN KEY (num_client) REFERENCES Client(num_client),
    num_chambre int,
    num_client int,
    date_debut Date,
    date_fin Date,
    date_reservation Date,
    montant_amhes decimal(6,2),
    prix_total decimal(6,2)
);

Create Table Client (
    adresse_client Varchar(60),
    nom_client Varchar(20),
    prenom_client Varchar(20),
    num_client int Primary Key 
)