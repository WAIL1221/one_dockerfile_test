SELECT * FROM public.etudiants
ORDER BY id ASC;

SELECT * FROM public.profs
ORDER BY id ASC;

INSERT INTO etudiants (nom, prenom, note)
VALUES ('tarek', 'hamza', 16.5);

INSERT INTO profs (nom, prenom, spécialité)
VALUES ('tarek', 'hamza', 16.5);