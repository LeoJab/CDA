--Phase 1

--1. modif_reservation : interdire la modification des réservations (on autorise l'ajout et la suppression).
DELIMITER //
CREATE TRIGGER modif_reservation BEFORE UPDATE ON reservation 
for each row
BEGIN
    SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Impossible de modifier une reservation !';
END; //

DELIMITER //
CREATE TRIGGER insert_reservation BEFORE INSERT ON reservation
for each row
BEGIN
    DECLARE cha_res_id INT;
    DECLARE hot_id INT;
    DECLARE nbr_res_hot INT;
    
    --Numéro de chambre de la reservation
    SET cha_res_id = new.res_cha_id;
    
    --Recupération de l'id de l'hotel de la reservation
    SELECT hot_id INTO hot_id FROM hotel 
    INNER JOIN chambre ON cha_hot_id = hot_id
    WHERE cha_id = cha_res_id;
    
    --Nombre de chambre reserve de l'hotel
    SET nbr_res_hot = SELECT 
END; //
DELIMITER ;

SELECT cha_hot_id, res_cha_id FROM chambre
INNER JOIN reservation ON res_cha_id = cha_id
GROUP BY cha_hot_id