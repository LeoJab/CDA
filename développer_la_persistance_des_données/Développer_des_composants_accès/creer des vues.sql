--EXERCICE 1

--1.Afficher la liste des hôtels avec leur station
CREATE VIEW liste_hotel_sation
AS
SELECT hot_nom, sta_nom FROM hotel
INNER JOIN station ON station.sta_id = hotel.hot_sta_id

--2.Afficher la liste des chambres et leur hôtel
CREATE VIEW liste_chambres_hotel
AS
SELECT chambre.*, hot_nom FROM chambre 
INNER JOIN hotel ON chambre.cha_hot_id = hotel.hot_id

--3.Afficher la liste des réservations avec le nom des clients
CREATE VIEW liste_reservation
AS
SELECT reservation.*, client.cli_nom FROM reservation
INNER JOIN client ON client.cli_id = reservation.res_cli_id

--4.Afficher la liste des chambres avec le nom de l’hôtel et le nom de la station
CREATE VIEW liste_chalbre_hotel_station
AS
SELECT chambre.*, hot_nom, sta_nom FROM chambre
INNER JOIN hotel ON chambre.cha_hot_id = hotel.hot_id
INNER JOIN station ON station.sta_id = hotel.hot_sta_id

--5.Afficher les réservations avec le nom du client et le nom de l’hôtel
CREATE VIEW reservation_client_hotel
AS
SELECT reservation.*, client.cli_nom, hotel.hot_nom FROM reservation
INNER JOIN client ON client.cli_id = reservation.res_cli_id
INNER JOIN chambre ON chambre.cha_id = reservation.res_cha_id
INNER JOIN hotel ON hotel.hot_id = chambre.cha_hot_id

--EXERCICE 2

--1.
CREATE VIEW v_GlobalCde
AS
SELECT codart, SUM(qtecde) AS QteTot, SUM(priuni * qtecde) AS PrixTot FROM ligcom GROUP BY codart

--2
CREATE VIEW v_VentesI100
AS
SELECT * FROM vente WHERE codart = 'I100'

--3
CREATE VIEW v_VenteI100Grobrigan
AS
SELECT * FROM vente WHERE codart = 'I100' and numfou = 00120