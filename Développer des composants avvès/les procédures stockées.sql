--EXERCICE 1
DELIMITER |

CREATE PROCEDURE Lst_fournis()

BEGIN
    SELECT numfou, numcom
    FROM entcom
END |

DELIMITER ;

CALL Lst_fournis

--EXERCICE 2
DELIMITER |

CREATE PROCEDURE Lst_Commandes()

BEGIN
    SELECT * FROM entcom
    WHERE obscom != "";
END |

DELIMITER ;

CALL Lst_Commandes

--EXERCICE 3
DELIMITER |

CREATE PROCEDURE CA_Fournisseur(
    In code_fourni Varchar(20), 
    In année Varchar(4))

BEGIN
    SELECT entcom.numfou AS Numero_Fournisseur, SUM(qtecde * priuni) AS CA, YEAR(entcom.datcom) AS Année FROM ligcom
    INNER JOIN entcom ON entcom.numcom = ligcom.numcom
    WHERE YEAR(entcom.datcom) LIKE année AND entcom.numfou LIKE code_fourni
    GROUP BY entcom.numfou;
END |

DELIMITER ;

CALL CA_Fournisseur('120', '2018') 540 8700 9120