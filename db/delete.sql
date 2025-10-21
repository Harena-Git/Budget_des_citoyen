-- Script de nettoyage avec TRUNCATE (plus performant)
-- Attention : TRUNCATE supprime toutes les données et réinitialise les séquences

-- Désactiver temporairement les contraintes de clés étrangères
SET session_replication_role = 'replica';

-- TRUNCATE dans l'ordre pour respecter les contraintes
TRUNCATE TABLE 
    croissance_sectorielle,
    recette_fiscale_interieure,
    recette_douaniere,
    recette_non_fiscale,
    don,
    dette,
    masse_salariale,
    poste_budgetaire,
    depense_ministère,
    programme_investissement,
    deficit_budgetaire,
    disposition_fiscale,
    depense,
    recette,
    prevision_macroeconomique,
    secteur_economique,
    type_depense,
    type_recette,
    categorie_secteur
RESTART IDENTITY; -- Réinitialise aussi les séquences AUTO_INCREMENT

-- Réactiver les contraintes de clés étrangères
SET session_replication_role = 'origin';

RAISE NOTICE 'Toutes les tables ont été vidées et les séquences réinitialisées';