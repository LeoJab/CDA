--Phase 1

/* 1. modif_reservation : interdire la modification des réservations (on autorise l'ajout et la suppression). */
DELIMITER //
CREATE TRIGGER modif_reservation BEFORE UPDATE ON reservation 
for each row
BEGIN
    SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Impossible de modifier une reservation !';
END; //
/* REQUETE TEST
UPDATE reservation
SET res_date = "2017-01-15 00:00:00"
where res_id = 2 */

/* 2. insert_reservation : interdire l'ajout de réservation pour les hôtels possédant déjà 10 réservations. */
DELIMITER //
CREATE TRIGGER insert_reservation BEFORE INSERT ON reservation
for each row
BEGIN
    DECLARE cha_res_id INT;
    DECLARE hot_res_id INT;
    DECLARE nbr_res_hot INT;
    
    /* Numéro de chambre de la reservation */
    SET cha_res_id = new.res_cha_id;
    
    /* Recupération de l'id de l'hotel de la reservation */
    SELECT hot_id INTO hot_res_id FROM hotel 
    INNER JOIN chambre ON cha_hot_id = hot_id
    WHERE cha_id = cha_res_id;
    
    /* Nombre de chambre reserve de l'hotel */
    SELECT COUNT(res_cha_id) INTO nbr_res_hot FROM chambre
    INNER JOIN reservation ON res_cha_id = cha_id
    WHERE cha_hot_id = hot_res_id
    GROUP BY cha_hot_id;

        IF nbr_res_hot>=10
            THEN SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = "L'hotel possède déja 10 reservations !";
        END IF;
END; //
DELIMITER ;
/* REQUETE TEST
INSERT INTO reservation(res_cha_id, res_cli_id, res_date, res_date_debut, res_date_fin, res_prix, res_arrhes)
VALUES
    (5, 7, '2017-01-10 00:00:00', '2017-07-01 00:00:00', '2017-07-15 00:00:00', 400, 50) */


/*3. insert_reservation2 : interdire les réservations si le client possède déjà 3 réservations. */
DELIMITER //
CREATE TRIGGER insert_reservation2 BEFORE INSERT ON reservation
FOR EACH ROW 
BEGIN
    DECLARE num_cli INT;
    DECLARE nbr_res_cli INT;

    /* Récupération de l'id du client */
    SET num_cli = new.res_cli_id;

    /* Calcule du nombre de réservation du client */
    SELECT COUNT(res_cli_id) INTO nbr_res_cli FROM reservation
    WHERE res_cli_id = num_cli;

        IF nbr_res_cli>=3
            THEN SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = "Ce client à déjà 3 réservations !";
        END IF;
END; //
DELIMITER ;
/* REQUETE TEST
INSERT INTO reservation(res_cha_id, res_cli_id, res_date, res_date_debut, res_date_fin, res_prix, res_arrhes)
VALUES
    (18, 1, '2017-01-10 00:00:00', '2017-07-01 00:00:00', '2017-07-15 00:00:00', 400, 50) */


/*4. insert_chambre : lors d'une insertion, on calcule le total des capacités des chambres pour l'hôtel, si ce total est supérieur à 50, on interdit l'insertion de la chambre. */
DELIMITER //
CREATE TRIGGER insert_chambre BEFORE INSERT ON reservation
FOR EACH ROW
BEGIN
    DECLARE cha_res_id INT;
    DECLARE hot_res_id INT;
    DECLARE nbr_cha_hot INT;
    
    /* Numéro de chambre de la reservation */
    SET cha_res_id = new.res_cha_id;
    
    /* Recupération de l'id de l'hotel de la reservation */
    SELECT hot_id INTO hot_res_id FROM hotel 
    INNER JOIN chambre ON cha_hot_id = hot_id
    WHERE cha_id = cha_res_id;

    /* Calcule des chambres de l'hotel */
    SELECT SUM(cha_capacite) INTO nbr_cha_hot FROM chambre
    WHERE cha_hot_id = hot_res_id
    GROUP BY cha_hot_id;

        IF nbr_cha_hot>50
            THEN SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = "La capacité des chambres de l'hotel est supérieur à 50";
        END IF;
END; //
DELIMITER ;
/* REQUETE TEST
INSERT INTO chambre(cha_hot_id, cha_numero, cha_capacite, cha_type)
VALUES
    (4, 205, 51, 2)

INSERT INTO reservation(res_cha_id, res_cli_id, res_date, res_date_debut, res_date_fin, res_prix, res_arrhes)
VALUES
    (35, 21, '2017-01-10 00:00:00', '2017-07-01 00:00:00', '2017-07-15 00:00:00', 400, 50) */