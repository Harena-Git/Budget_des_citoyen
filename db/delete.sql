-- ============================
-- Script de nettoyage complet de la base de données
-- ============================

-- Supprimer les données dans l'ordre pour respecter les contraintes de clés étrangères

-- 1. Supprimer les données des tables de recettes
DELETE FROM recettes_data;
DELETE FROM sous_categories_recettes;
DELETE FROM categories_recettes;

-- 2. Supprimer les données des tables de dépenses
DELETE FROM pip_data;
DELETE FROM pip_projets;
DELETE FROM depenses_ministeres;
DELETE FROM postes_budgetaires;
DELETE FROM masses_salariales;
DELETE FROM dette_details;
DELETE FROM depenses_nature;

-- 3. Supprimer les données des tables de référence des dépenses
DELETE FROM pip_sources_financement;
DELETE FROM types_masses_salariales;
DELETE FROM pip_categories;
DELETE FROM types_dette;
DELETE FROM ministeres;
DELETE FROM types_depenses_nature;

-- 4. Supprimer les données des tables de déficit
DELETE FROM financements_deficit;
DELETE FROM deficit_situations;
DELETE FROM types_financement_deficit;

-- ============================
-- Réinitialiser les séquences AUTO_INCREMENT
-- ============================

-- Séquences pour les recettes
ALTER SEQUENCE categories_recettes_id_seq RESTART WITH 1;
ALTER SEQUENCE sous_categories_recettes_id_seq RESTART WITH 1;
ALTER SEQUENCE recettes_data_id_seq RESTART WITH 1;

-- Séquences pour les dépenses
ALTER SEQUENCE types_depenses_nature_id_seq RESTART WITH 1;
ALTER SEQUENCE ministeres_id_seq RESTART WITH 1;
ALTER SEQUENCE types_dette_id_seq RESTART WITH 1;
ALTER SEQUENCE pip_categories_id_seq RESTART WITH 1;
ALTER SEQUENCE types_masses_salariales_id_seq RESTART WITH 1;
ALTER SEQUENCE pip_sources_financement_id_seq RESTART WITH 1;
ALTER SEQUENCE depenses_nature_id_seq RESTART WITH 1;
ALTER SEQUENCE dette_details_id_seq RESTART WITH 1;
ALTER SEQUENCE masses_salariales_id_seq RESTART WITH 1;
ALTER SEQUENCE postes_budgetaires_id_seq RESTART WITH 1;
ALTER SEQUENCE pip_projets_id_seq RESTART WITH 1;
ALTER SEQUENCE pip_data_id_seq RESTART WITH 1;
ALTER SEQUENCE depenses_ministeres_id_seq RESTART WITH 1;

-- Séquences pour le déficit
ALTER SEQUENCE deficit_situations_id_seq RESTART WITH 1;
ALTER SEQUENCE types_financement_deficit_id_seq RESTART WITH 1;
ALTER SEQUENCE financements_deficit_id_seq RESTART WITH 1;

-- ============================
-- Vérification (optionnelle) - Compte le nombre d'enregistrements par table
-- ============================
/*
SELECT 'categories_recettes' as table_name, COUNT(*) FROM categories_recettes
UNION ALL SELECT 'sous_categories_recettes', COUNT(*) FROM sous_categories_recettes
UNION ALL SELECT 'recettes_data', COUNT(*) FROM recettes_data
UNION ALL SELECT 'types_depenses_nature', COUNT(*) FROM types_depenses_nature
UNION ALL SELECT 'ministeres', COUNT(*) FROM ministeres
UNION ALL SELECT 'types_dette', COUNT(*) FROM types_dette
UNION ALL SELECT 'pip_categories', COUNT(*) FROM pip_categories
UNION ALL SELECT 'types_masses_salariales', COUNT(*) FROM types_masses_salariales
UNION ALL SELECT 'pip_sources_financement', COUNT(*) FROM pip_sources_financement
UNION ALL SELECT 'depenses_nature', COUNT(*) FROM depenses_nature
UNION ALL SELECT 'dette_details', COUNT(*) FROM dette_details
UNION ALL SELECT 'masses_salariales', COUNT(*) FROM masses_salariales
UNION ALL SELECT 'postes_budgetaires', COUNT(*) FROM postes_budgetaires
UNION ALL SELECT 'pip_projets', COUNT(*) FROM pip_projets
UNION ALL SELECT 'pip_data', COUNT(*) FROM pip_data
UNION ALL SELECT 'depenses_ministeres', COUNT(*) FROM depenses_ministeres
UNION ALL SELECT 'deficit_situations', COUNT(*) FROM deficit_situations
UNION ALL SELECT 'types_financement_deficit', COUNT(*) FROM types_financement_deficit
UNION ALL SELECT 'financements_deficit', COUNT(*) FROM financements_deficit;
*/


-- ============================
-- Script DROP complet (plus radical - supprime tout)
-- ============================

-- Supprimer les tables dans l'ordre inverse des dépendances

DROP TABLE IF EXISTS financements_deficit;
DROP TABLE IF EXISTS deficit_situations;
DROP TABLE IF EXISTS types_financement_deficit;

DROP TABLE IF EXISTS pip_data;
DROP TABLE IF EXISTS pip_projets;
DROP TABLE IF EXISTS depenses_ministeres;
DROP TABLE IF EXISTS postes_budgetaires;
DROP TABLE IF EXISTS masses_salariales;
DROP TABLE IF EXISTS dette_details;
DROP TABLE IF EXISTS depenses_nature;

DROP TABLE IF EXISTS pip_sources_financement;
DROP TABLE IF EXISTS types_masses_salariales;
DROP TABLE IF EXISTS pip_categories;
DROP TABLE IF EXISTS types_dette;
DROP TABLE IF EXISTS ministeres;
DROP TABLE IF EXISTS types_depenses_nature;

DROP TABLE IF EXISTS recettes_data;
DROP TABLE IF EXISTS sous_categories_recettes;
DROP TABLE IF EXISTS categories_recettes;