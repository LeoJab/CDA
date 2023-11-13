--Phase 1

/* 1. modif_reservation : interdire la modification des réservations (on autorise l'ajout et la suppression). */
DELIMITER //
CREATE TRIGGER modif_reservation BEFORE UPDATE ON reservation 
for each row
BEGIN
    SIGNAL SQLSTATE '40000' SET MESSAGE_TEXT = 'Impossible de modifier une reservation !';
END; //
DELIMITER ;
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
    DECLARE nbr_res_cli INT;

    /* Calcule du nombre de réservation du client */
    SELECT COUNT(res_cli_id) INTO nbr_res_cli FROM reservation
    WHERE res_cli_id = new.res_cli_id;

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



/* BASE TEST */

/* 1. Mettez en place ce trigger, puis ajoutez un produit dans une commande, vérifiez que le champ total est bien mis à jour. */
INSERT INTO lignedecommande(id_commande, id_produit, quantite, prix)
VALUES (2, 3, 2, 10)


/* 2. Ce trigger ne fonctionne que lorsque l'on ajoute des produits dans la commande, les modifications ou suppressions ne permettent 
pas de recalculer le total. Modifiez le code ci-dessus pour faire en sorte que la modification ou la suppression de produit recalcule 
le total de la commande. */

/* UPDATE */
DELIMITER |
CREATE TRIGGER maj_total_update AFTER UPDATE ON lignedecommande
    FOR EACH ROW
    BEGIN
    DECLARE id_c INT;
    DECLARE tot DOUBLE;
    SET id_c = OLD.id_commande; -- nous captons le numéro de commande concerné
    SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); -- on recalcule le total
    SET tot = tot - (tot/remise);
        -- SET tot = ??? (prévoir le calcul de la remise) 
    UPDATE commande SET total=tot WHERE id=id_c; -- on stocke le total dans la table commande
    END;
|
DELIMITER ;

/* DELETE */
DELIMITER |
CREATE TRIGGER maj_total_delete AFTER DELETE ON lignedecommande
    FOR EACH ROW
    BEGIN
    DECLARE id_c INT;
    DECLARE tot DOUBLE;
    SET id_c = OLD.id_commande; -- nous captons le numéro de commande concerné
    SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); -- on recalcule le total
    SET tot = tot - (tot/remise);
        -- SET tot = ??? (prévoir le calcul de la remise) 
    UPDATE commande SET total=tot WHERE id=id_c; -- on stocke le total dans la table commande
    END;
|
DELIMITER ;

/* 3. Un champ remise était prévu dans la table commande, il contient le coefficient de remise à appliquer à la commande. 
Prenez en compte ce champ dans le code de votre trigger. */
DELIMITER |
CREATE TRIGGER maj_total AFTER INSERT ON lignedecommande
    FOR EACH ROW
    BEGIN
    DECLARE id_c INT;
    DECLARE tot DOUBLE;
    SET id_c = NEW.id_commande; -- nous captons le numéro de commande concerné
    SET tot = (SELECT sum(prix*quantite) FROM lignedecommande WHERE id_commande=id_c); -- on recalcule le total
    SET tot = tot - (tot/remise);
        -- SET tot = ??? (prévoir le calcul de la remise) 
    UPDATE commande SET total=tot WHERE id=id_c; -- on stocke le total dans la table commande
    END;
|
DELIMITER ;



/* PAPYRUS */

/* 1. Nous retirons 15 produits du stock. stock d'alerte = 5, le stock physique = 5, le stock physique n'est pas inférieur 
au stock d'alerte, on ne fait rien. */
CREATE TABLE articles_a_commander(
    FOREIGN KEY (CODART) REFERENCES produit(codart),
    codart varchar(4),
    date DATE,
    QTE int
);

DELIMITER //
CREATE TRIGGER stock_update AFTER UPDATE ON produit
FOR EACH ROW
BEGIN
    DECLARE diff INT;
    DECLARE id_p varchar(4);
    DECLARE codart_art_com varchar(4);
    DECLARE date_day date;
    
    /* Recupération du CODART de l'aticle */
    SET id_p = NEW.codart;
    /* Vérification que le codart existe dans la table "articles_a_commander" */
    SELECT codart INTO codart_art_com FROM articles_a_commander WHERE codart = id_p;
    /* Calcule de la différence entre le stock physique et le stock d'alerte */
    SET diff = NEW.stkale - NEW.stkphy;
    /* Recupération de la date du jour */
    SET date_day = CURRENT_DATE();

        IF NEW.stkphy<NEW.stkale
            IF codart_art_com = id_p
                THEN UPDATE articles_a_commander SET date = date_day, qte = diff WHERE codart = id_p;
            ELSE
                INSERT INTO articles_a_commander(codart, date, qte) VALUES (id_p, date_day, diff);
            END IF;
        ELSEIF NEW.stkphy>NEW.stkale
            THEN DELETE FROM articles_a_commander WHERE codart = id_p;
        END IF;

END; //
DELIMITER ;

UPDATE produit
SET stkphy = 21
WHERE codart = 'B001'