SELECT salles.nom AS 'Biggest Room', salles.capacite, etage.nom 
FROM salles 
INNER JOIN etage ON salles.id_etage = etage.id 
WHERE salles.capacite = (SELECT MAX(capacite) FROM sa