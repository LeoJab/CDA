/* Consultation catalogue */
SELECT * FROM produit

/* Ajout d'un nouvel utilisateur */
INSERT INTO utilisateur(uti_nom, uti_prenom, uti_cate, uti_role, uti_adresse, uti_adresse_fac, uti_adresse_liv, uti_ville, uti_cp, uti_tel, uti_mail, uti_mdp, id_commercial)
VALUES

/* Ancienne commande utilisateur */
SELECT * FROM commande
WHERE uti_id = 
ORDER BY com_date ASC

/* Ajouter un produit */
    /* Téléphonie */
    INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid, prod_solde, fourni_id, scate_id)
    VALUES

    INSERT INTO telephone_tablette(prod_id, tel_sys_expl, tel_type_sim, tel_nbr_sim, tel_proc, tel_type_charge, tel_proc_modele, tel_bat, tel_etat_bat, tel_taille_ecran, tel_res_ecran, tel_freq_ecran, tel_reseau, tel_bluetooth, tel_wifi, tel_memoire, tel_ram)
    VALUES
    
    /* Tablette */
    INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid, prod_solde, fourni_id, scate_id)
    VALUES

    INSERT INTO telephone_tablette(prod_id, tel_sys_expl, tel_type_sim, tel_nbr_sim, tel_proc, tel_type_charge, tel_proc_modele, tel_bat, tel_etat_bat, tel_taille_ecran, tel_res_ecran, tel_freq_ecran, tel_reseau, tel_bluetooth, tel_wifi, tel_memoire, tel_ram)
    VALUES

    /* Télévision */
    INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid, prod_solde, fourni_id, scate_id)
    VALUES

    INSERT INTO television(prod_id, tv_resolution, tv_def, tv_techno, tv_proc, tv_son_puiss, tv_port_hdmi, tv_port_usb)
    VALUES

    /* Ordinateur Portable */
    INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid, prod_solde, fourni_id, scate_id)
    VALUES

    INSERT INTO ordinateur_portable(prod_id, op_resolution, op_webcam, op_proc, op_proc_freq, op_proc_nbr_coeur, op_ram, op_ram_freq, op_cg_modele, op_stkage, op_type_stkage, op_wifi, op_bluetooth, op_port_usb, op_port_hdmi, op_sys_exp)
    VALUES

    /* Imprimante */
    INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid, prod_solde, fourni_id, scate_id)
    VALUES

    INSERT INTO imprimante(prod_id, imp_type, imp_vit, imp_qualiter, imp_qualiter_photo, imp_format)
    VALUES

    /* Unité Central */
    INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid, prod_solde, fourni_id, scate_id)
    VALUES

    INSERT INTO unite_central(prod_id, uc_proc, uc_proc_frequence, uc_proc_nbr_coeur, uc_ram, uc_ram_type, uc_cg_modele, uc_stkage, uc_type_stkage, uc_wifi, uc_port_usb, uc_port_hdmi, uc_sys_expl)
    VALUES

    /* Enceinte */
    INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid, prod_solde, fourni_id, scate_id)
    VALUES

    INSERT INTO enceinte(prod_id, enc_puissance, enc_alimentation, enc_wifi, enc_bluetooth)
    VALUES

    /* Console Gaming */
    INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_solde, fourni_id, scate_id)
    VALUES

    INSERT INTO console_gaming(prod_id, cons_port_usb, cons_port_hdmi, cons_disque_dur, cons_resolution, cons_fps)
    VALUES

/* Supprimer un produit */
    /* Téléphone/Tablette */
    DELETE telephone_tablette WHERE prod_id =
    DELETE produit WHERE prod_id =
    /* Télévision */
    DELETE television WHERE prod_id =
    DELETE produit WHERE prod_id =
    /* Ordinateur Portable */
    DELETE ordinateur_portable WHERE prod_id =
    DELETE produit WHERE prod_id =
    /* Imprimante */
    DELETE imprimante WHERE prod_id = 
    DELETE produit WHERE prod_id =
    /* Unité Central */
    DELETE utite_central WHERE prod_id =
    DELETE produit WHERE prod_id =
    /* Enceinte */
    DELETE enceinte WHERE prod_id =
    DELETE produit WHERE prod_id =
    /* Console Gaming */
    DELETE console_gaming WHERE prod_id =
    DELETE produit WHERE prod_id =

/* Modifier les caractéristiques d'un produit */
UPDATE produit
SET /*colonne*/ = 
WHERE prod_id =

/* Modifier l'aborescence des catégories */
UPDATE sous_categorie
SET cat_id =
WHERE scate_id =

/* Chiffre d'affaires mois par mois une année sélectionnée */
SELECT MONTH(commande.com_date) AS "Mois", SUM(prod_pu * prod_quant) AS "CA", SUM(prod_pu_ht * prod_quant) AS "CA HT" FROM contient
INNER JOIN facture ON facture.fac_id = contient.fac_id
INNER JOIN commande ON commande.com_id = facture.fac_id
WHERE YEAR(commande.com_date) = /*Année*/
GROUP BY Mois

/* Chiffre d'affaire généré par un fournisseur */
SELECT fournisseur.fourni_id, SUM(prod_pu * prod_quant) AS "CA", SUM(prod_pu_ht * prod_quant) AS "CA HT" FROM contient
INNER JOIN produit ON produit.prod_id = contient.prod_id
INNER JOIN fournisseur ON fournisseur.fourni_id = produit.fourni_id
WHERE fournisseur.fourni_id = /*fourni_id*/
GROUP BY fournisseur.fourni_id

/* TOP 10 des produits les plus commandés pour une année sélectionnée */
SELECT produit.prod_ref, produit.prod_lib, SUM(contient.prod_quant), fournisseur.fourni_nom FROM contient
INNER JOIN produit ON produit.prod_id = contient.prod_id
INNER JOIN fournisseur ON fournisseur.fourni_id = produit.fourni_id
INNER JOIN facture ON facture.fac_id = contient.fac_id
INNER JOIN commande ON commande.com_id = facture.com_id
WHERE YEAR(commande.com_date) = /*Année*/
GROUP BY produit.prof_ref
ORDER BY SUM(contient.prod_quant) DESC
LIMIT 10

/* TOP 10 des produits les plus rémunérateurs pour une année sélectionnée */
SELECT produit.prod_ref, produit.prod_lib, SUM(prod_pu * prod_quant) AS "CA", fournisseur.fourni_id FROM contient
INNER JOIN produit ON produit.prod_id = contient.prod_id
INNER JOIN fournisseur ON fournisseur.fourni_id = produit.fourni_id
INNER JOIN facture ON facture.fac_id = contient.fac_id
INNER JOIN commande ON commande.com_id = facture.com_id
WHERE YEAR(commande.com_date) = /*Année*/
GROUP BY produit.prod_ref
ORDER BY CA DESC
LIMIT 10

/* Top 10 des clients en nombre de commandes ou chiffre d'affaires */
    /* Top 10 client nombre de commande */
SELECT uti_nom, uti_prenom, COUNT(com_id) FROM utilisateur
INNER JOIN commande ON commande.uti_id = utilisateur.uti_id
GROUP BY uti_nom
ORDER BY COUNT(com_id) DESC
LIMIT 10 

    /* Top 10 client chiffre d'affaires */
SELECT uti_nom, uti_prenom, SUM(prod_pu * prod_quant) AS "CA" FROM utilisateur
INNER JOIN commande ON commande.uti_id = utilisateur.uti_id
INNER JOIN facture ON facture.com_id = commande.com_id
INNER JOIN contient ON contient.fac_id = facture.fac_id
GROUP BY uti_nom
ORDER BY CA DESC
LIMIT 10

/* Répartition du chiffre d'affaires par type de client */
SELECT uti_cate, SUM(prod_pu * prod_quant) AS "CA" FROM utilisateur
INNER JOIN commande ON commande.uti_id = utilisateur.uti_id
INNER JOIN facture ON facture.com_id = commande.com_id
INNER JOIN contient ON contient.fac_id = facture.fac_id
GROUP BY uti_cate

/* Nombre de commandes en cours de livraison. */
SELECT com_suivi, COUNT(com_suivi) FROM commande
WHERE com_suivi = "En cours de livraison"