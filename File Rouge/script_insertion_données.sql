INSERT INTO fournisseur(fourni_ref, fourni_nom, fourni_adresse, fourni_ville, fourni_cp, fourni_tel, fourni_email)
VALUES
    ("F001", "Apple", "2 rue des Sergents", "Amiens", "80000", "0952899060", "fourni.apple@gmail.com"),
    ("F002", "Samsung", "6 rue Fructidor", "Saint-Ouen", "93484", "0144047000", "fourni.samsung@gmail.com"),
    ("F003", "Sony", "49 Quai de Dion Bouton", "Puteaux", "92800", "0155695127", "fourni.sony@gmail.com"),
    ("F004", "JBL", "12 rue des Colonnes-du-Trône", "Paris", "75012", "0952147852", "fourni.jbl@gmail.com"),
    ("F005", "Lenovo", "20 rue des 2 Gares", "Rueil-Malmaison", "92500", "0155704056", "fourni.lenovo@gmail.com"),
    ("F006", "HP", "14 rue de la Verrerie", "Meudon", "92190", "0152147852", "fourni.hp@gmail.com"),
    ("F007", "Microsoft", "37 Quai du Président Rossevelt", "Issy-les-Moulineaux", "92130", "0970019090", "fourni.microsoft@gmail.com");

INSERT INTO categorie(cate_lib, cate_desc)
VALUES  
    ("Téléphone", "Découvrez notre boutique dédiée aux téléphones, où innovation et style se rencontrent. Trouvez le compagnon idéal parmi notre sélection de smartphones et accessoires dernier cri, alliant performance et design."),
    ("Tablette", "Explorez notre boutique spécialisée dans les tablettes, où la puissance et la portabilité se marient parfaitement. Trouvez la tablette idéale parmi notre gamme, allant des modèles légers et élégants aux appareils puissants adaptés à tous vos besoins."),
    ("Télévision", "Plongez dans l'excellence visuelle avec notre sélection de télévisions. Découvrez une immersion totale grâce à des écrans innovants, offrant une qualité d'image exceptionnelle et une expérience audio immersive. Transformez votre espace de divertissement avec nos télévisions haut de gamme."),
    ("Ordinateur Portable", "Explorez notre collection d'ordinateurs portables, alliant performance et mobilité. Trouvez l'outil idéal pour votre productivité quotidienne, avec des designs élégants et des fonctionnalités puissantes qui répondent à tous vos besoins informatiques."),
    ("Imprimante", "Optimisez vos impressions avec notre gamme d'imprimantes. Découvrez des appareils fiables offrant une qualité d'impression exceptionnelle pour vos documents et photos. Simplifiez votre quotidien professionnel ou personnel avec nos imprimantes performantes et polyvalentes."),
    ("Unité Central", "Explorez notre sélection d'unités centrales, le cœur de votre système informatique. Choisissez parmi des configurations puissantes qui répondent à vos besoins en matière de traitement, de stockage et de performances. Donnez vie à vos projets numériques avec des unités centrales fiables et performantes."),
    ("Enceinte", "Découvrez notre collection d'enceintes pour une expérience sonore exceptionnelle. Trouvez le parfait équilibre entre design élégant et qualité audio immersive. Transformez votre espace avec nos enceintes haut de gamme, allant des modèles compacts aux systèmes audio puissants."),
    ("Console Gaming", "Explorez notre univers de consoles de gaming pour une expérience de jeu inégalée. Plongez dans des mondes virtuels captivants avec des consoles dernier cri, offrant des performances graphiques exceptionnelles et une immersion totale. Choisissez votre aventure gaming avec style et puissance à portée de main.");

INSERT INTO sous_categorie(scate_lib, scate_desc, cate_id)
VALUES
    /* Téléphonie */
    ("Samsung", "Découvrez l'innovation Samsung dans le monde des smartphones. Des designs élégants aux performances avancées, explorez une gamme complète de téléphones intelligents répondant à vos besoins.", 1),
    ("Apple", "Découvrez l'excellence des smartphones Apple. Design élégant, performances exceptionnelles, une expérience unique vous attend.", 1),
    /* Tablette */
    ("Samsung", "Plongez dans l'univers des tablettes Samsung. Alliant élégance et performance, explorez une gamme variée de dispositifs offrant une expérience numérique immersive.", 2),
    ("Apple", "Explorez l'univers des tablettes Apple, mariage parfait entre élégance et puissance. Découvrez des dispositifs innovants offrant une expérience tactile immersive et une intégration transparente avec l'écosystème Apple.", 2),
    ("Lenovo", "Découvrez l'univers des tablettes Lenovo, fusion parfaite de style et de fonctionnalité. Explorez une gamme diversifiée de dispositifs offrant une expérience numérique exceptionnelle et une polyvalence pour répondre à vos besoins.", 2),
    /* Télévision */
    ("Samsung", "Explorez l'univers captivant des télévisions Samsung. Alliant qualité d'image exceptionnelle et design élégant, découvrez une gamme variée de modèles offrant une expérience visuelle immersive pour votre divertissement à domicile.", 3),
    /* Ordinateur Portable */
    ("HP", "Découvrez l'excellence informatique avec les ordinateurs portables HP. Alliant style et performance, explorez une gamme variée de dispositifs répondant à vos besoins en matière de productivité et de mobilité.", 4),
    ("Lenovo", "Explorez la puissance portable avec les ordinateurs portables Lenovo. Alliant design élégant et performances avancées, découvrez une gamme variée de dispositifs adaptés à vos besoins professionnels et personnels.", 4),
    /* Imprimante */
    ("HP", "Optimisez vos impressions avec les imprimantes HP. Découvrez des appareils fiables offrant une qualité d'impression exceptionnelle pour vos documents et photos. Simplifiez votre quotidien professionnel ou personnel avec les imprimantes performantes et polyvalentes de HP.", 5),
    /* Unité Central */
    ("HP", "Découvrez la puissance informatique avec les unités centrales HP. Alliant performances et fiabilité, explorez une gamme variée d'unités centrales répondant à vos besoins en matière de traitement et de stockage. Transformez votre expérience informatique avec les solutions de pointe proposées par HP.", 6),
    ("Lenovo", "Explorez la puissance informatique avec les unités centrales Lenovo. Alliant performances avancées et fiabilité, découvrez une gamme variée d'unités centrales répondant à vos besoins en matière de traitement et de stockage. Transformez votre expérience informatique avec les solutions innovantes proposées par Lenovo.", 6),
    /* Enceinte */
    ("JBL", "Plongez dans un son exceptionnel avec les enceintes JBL. Alliant un design élégant et des performances audio de haute qualité, explorez une gamme variée d'enceintes pour une expérience sonore immersive où que vous soyez.", 7),
    /* Console Gaming */
    ("PlayStation", "Explorez l'univers du gaming avec la console PlayStation. Alliant performances de pointe, design emblématique et une bibliothèque de jeux captivante, plongez dans une expérience de jeu immersive avec la console de gaming ultime de Sony.", 8),
    ("Xbox", "Plongez dans le monde du gaming avec la console Xbox. Associant performances de pointe, design innovant et une bibliothèque de jeux variée, explorez une expérience de jeu captivante avec la console de gaming de Microsoft.", 8);

/* Téléphonie */
INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid,fourni_id, scate_id)
VALUES
    ("TEL001",
    "Smartphone Samsung Galaxy A54",
    "Découvrez l'élégance et la performance avec le smartphone Samsung Galaxy A54. Doté d'un design raffiné, d'un écran dynamique et de fonctionnalités avancées, explorez une expérience mobile polyvalente répondant à vos besoins quotidiens.",
    449.00, 359.20, "Samsung", "Galaxy A54", "Noir", 158.20, 74.80, 8.20, 202.00, 16, 1);

INSERT INTO telephone_tablette(prod_id, tel_sys_expl, tel_type_sim, tel_nbr_sim, tel_proc, tel_type_charge, tel_proc_modele, tel_bat, tel_etat_bat, tel_taille_ecran, tel_res_ecran, tel_freq_ecran, tel_reseau, tel_bluetooth, tel_wifi, tel_memoire, tel_ram)
VALUES
    (1, "Android 13", "Nano Sim", 2, "8 coeurs", "Filaire", "Exynos 1380", "5000 mAh", "Neuf", "6,4", "2340x1080", "120", "5G", "5.3", "Wifi 6", 128, 8);

/* Tablette */
INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid, fourni_id, scate_id)
VALUES
    ("TAB001", "Tablette Apple Ipad 10.2", 
    "Découvrez l'iPad 10.2 de 9e génération d'Apple, en gris sidéral avec une capacité de 64 Go. Fusion parfaite de style et de fonctionnalité, profitez d'une expérience tablette immersive avec des performances avancées et une grande capacité de stockage.",
    389.00, 311.12, "Apple", "Ipad 10.2", "Noir", 250, 7, 17.4, 487, 15, 2);

INSERT INTO telephone_tablette(prod_id, tel_sys_expl, tel_type_sim, tel_nbr_sim, tel_proc, tel_type_charge, tel_proc_modele, tel_bat, tel_etat_bat, tel_taille_ecran, tel_res_ecran, tel_freq_ecran, tel_reseau, tel_bluetooth, tel_wifi, tel_memoire, tel_ram)
VALUES
    (2, "iPadOS 15", "", "", "6 coeurs", "Filaire", "Apple A13 Bionic", "8557 mAh", "Neuf", "10,2 pouce", "2160x1620", "120", "", "5.3", "Wifi 6", 64, 4);

/* Télévision */
INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid,fourni_id, scate_id)
VALUES
    ("TV001", "TV OLED Samsung 2023",
    "Explorez une expérience visuelle exceptionnelle avec les téléviseurs OLED de Samsung. Alliant des couleurs vibrantes, des noirs profonds et un design élégant, plongez dans une qualité d'image remarquable et une immersion totale pour vos moments de divertissement à domicile.",
    1789.00, 1431.20, "Samsung", "TV OLED", "Noir", 1225, 773, 265, 18200, 16, 4);

INSERT INTO television(prod_id, tv_resolution, tv_def, tv_techno, tv_proc, tv_son_puiss, tv_port_hdmi, tv_port_usb)
VALUES
    (3, "3840x2160", "4k", "OLED", "Neo Quantum Processor 4k", "40 Watts", 4, 2);

/* Ordinateur Portable */
INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid,fourni_id, scate_id)
VALUES
    ("OP001", "Ordinateur Portable HP Envy 17 2023",
    "Découvrez l'excellence portable avec l'ordinateur HP Envy 17. Doté d'un design élégant, d'un écran généreux et de performances avancées, explorez une expérience informatique haut de gamme pour répondre à vos besoins professionnels et personnels.",
    1199.00, 959.20, "HP", "HP Envy 17", "Gris Métalique", 396, 19.6, 258.6, 2500, 6, 7);

INSERT INTO ordinateur_portable(prod_id, op_resolution, op_webcam, op_proc, op_proc_freq, op_proc_nbr_coeur, op_ram, op_ram_freq, op_cg_modele, op_stkage, op_type_stkage, op_wifi, op_bluetooth, op_port_usb, op_port_hdmi, op_sys_exp)
VALUES
    (4, "1920 x 1080", 1, "Intel Core i7 1355U", "3,8 GHz", 10, 16, "3200 MHz", "NVIDIA GeForce RTX 3050", 512, "SSD", "Wifi 6", "5.3", 3, 1, "Windows 11");

/* Imprimante */
INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid,fourni_id, scate_id)
VALUES
    ("IMP001", "Imprimante jet d'encre Hp Envy Inspire 7224e éligible Instant Ink",
    "Optimisez vos impressions avec l'imprimante jet d'encre HP Envy Inspire 7224e, éligible au service Instant Ink. Bénéficiez d'une qualité d'impression exceptionnelle et d'une gestion pratique de l'encre, offrant une solution efficace et moderne pour vos besoins d'impression.",
    139.99, 111.99, "HP", "Hp Envy Inspire 7224e", "Blanc", 460, 191, 383, 6910, 6, 9);

INSERT INTO imprimante(prod_id, imp_type, imp_vit, imp_qualiter, imp_qualiter_photo, imp_format)
VALUES
    (5, "Jet d'encre", "Standart", "Qualité Standart", "Qualité Standart", "jusqu'à A4");

/* Unité Central */
INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid,fourni_id, scate_id)
VALUES
    ("UC001", "Unité centrale Lenovo IdeaCentre 3",
    "Explorez la puissance informatique avec l'unité centrale Lenovo IdeaCentre 3. Dotée d'un design élégant et de performances fiables, cette unité centrale offre une solution polyvalente pour vos besoins en traitement et stockage, combinant efficacité et style.",
    399.00, 312.20, "Lenovo", "IdeaCentre 3", "Gris métalique", 100, 270, 290, 3500, 5, 11);

INSERT INTO unite_central(prod_id, uc_proc, uc_proc_frequence, uc_proc_nbr_coeur, uc_ram, uc_ram_type, uc_cg_modele, uc_stkage, uc_type_stkage, uc_wifi, uc_port_usb, uc_port_hdmi, uc_sys_expl)
VALUES
    (6, "AMD Ryzen 3 3250U", "2.6 GHz", 2, 8, "DDR4", "AMD Radeon", 512, "SSD", "Wifi 5", 8, 1, "Windows 11");

/* Enceinte */
INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, prod_hauteur, prod_largeur, prod_profondeur, prod_poid,fourni_id, scate_id)
VALUES
    ("ENC001", "Enceinte portable Jbl Boombox 3 Noir",
    "Plongez dans une expérience sonore puissante avec l'enceinte portable JBL Boombox 3 en noir. Alliant un design robuste, une autonomie exceptionnelle et des basses percutantes, cette enceinte est l'accessoire idéal pour des moments musicaux immersifs en déplacement.",
    379.99, 303.99, "JBL", "Boombox 3", "Noir", 588, 353, 539, 14100, 4, 12);

INSERT INTO enceinte(prod_id, enc_puissance, enc_alimentation, enc_wifi, enc_bluetooth)
VALUES
    (7, "180 Watts", "Batterie/Filaire", 0, 1);

/* Console Gaming */
INSERT INTO produit(prod_ref, prod_lib, prod_desc, prod_prix, prod_prix_ht, prod_marque, prod_modele, prod_couleur, fourni_id, scate_id)
VALUES
    ("CONS001", "Console Sony PS5 Slim Edition Standard",
    "Découvrez l'expérience de jeu nouvelle génération avec la console Sony PS5 Slim Edition Standard. Alliant un design élégant, des performances de pointe et une bibliothèque de jeux captivante, plongez dans l'univers du gaming avec style et technologie de pointe.",
    549.00, 439.20, "Sony", "PS5 Slime", "Blanc", 3, 13);

INSERT INTO console_gaming(prod_id, cons_port_usb, cons_port_hdmi, cons_disque_dur, cons_resolution, cons_fps)
VALUES
    (8, 1, 1, 1000, "3840x2160", 120);



/* Commercial */
INSERT INTO utilisateur(uti_nom, uti_prenom, uti_role, uti_adresse, uti_ville, uti_cp, uti_tel, uti_mail, uti_mdp)
VALUES
    ("Maison", "Michel", "Commmercial", "1 rue du Haut", "Rouen", "76000", "0625147541", "michel.maison@gmail.com", "1234");

/* Utilisateur(Professionnel et particulier) */
INSERT INTO utilisateur(uti_nom, uti_prenom, uti_cate, uti_role, uti_adresse, uti_adresse_liv, uti_ville, uti_cp, uti_tel, uti_mail, uti_mdp, id_commercial)
VALUES
    ("Dupond", "Olivier", "Professionnel", "Client", "52 rue de l'église", "52 rue de l'église", "Paris", "75000", "0925144578", "olivier.dupond@gamil.com", "1234", 1),
    ("Michel", "Michel", "Particulier", "Client", "75 rue du Caillou", "23 rue du Bas", "Amiens", "80000", "0654124754", "michel.michel@gmail.com", "2514", NULL);

/* Commande */
INSERT INTO commande(com_suivi, com_date)
VALUES
    ("En préparation", "2023-12-06");

INSERT INTO passe(uti_id, com_id)
VALUES
    (3, 1);

/* Facture */
INSERT INTO facture(fac_tot_ttc, fac_tot_prix_ht, fac_date, fac_reduc, fac_adresse, fac_tva, com_id)
VALUES
    (838.00, 670.40, "2023-06-12", NULL, "23 rue du Bas", 167.60, 1);

INSERT INTO contient(fac_id, prod_id, pro_quant)
VALUES
    (1, 1, 1),
    (1, 2, 1);

/* Livraison */
INSERT INTO livraison(liv_adresse, liv_date, liv_status, com_id)
VALUES
    ("23 rue du Bas", "2023-12-12", "Pas encore remis", 1);

/* Paiement */
INSERT INTO paiement(paie_mode, paie_date, paie_status, com_id)
VALUES
    ("Virement bancaire", "2023-12-06", "Paiement Effectué", 1);