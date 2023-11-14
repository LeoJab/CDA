--Exercice 1

--Comment rendre la modification permanente ?
START TRANSACTION;

SELECT nomfou FROM fournis WHERE numfou=120;

UPDATE fournis  SET nomfou= 'GROSBRIGAND' WHERE numfou=120;

SELECT nomfou FROM fournis WHERE numfou=120;

COMMIT;

--Comment annuler la transaction ?
START TRANSACTION;

SELECT nomfou FROM fournis WHERE numfou=120;

UPDATE fournis  SET nomfou= 'GROSBRIGAND' WHERE numfou=120;

SELECT nomfou FROM fournis WHERE numfou=120;

ROLLBACK;


--Exercice 2

--