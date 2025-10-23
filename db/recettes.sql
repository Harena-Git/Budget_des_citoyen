-- ============================
-- Table des catégories principales
-- ============================
CREATE TABLE categories_recettes (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE
);

-- ============================
-- Table des sous-catégories détaillées
-- ============================
CREATE TABLE sous_categories_recettes (
    id SERIAL PRIMARY KEY,
    categorie_recette_id INTEGER NOT NULL REFERENCES categories_recettes(id),
    nom VARCHAR(200) NOT NULL
);

-- ============================
-- Table des données annuelles de recettes
-- ============================
CREATE TABLE recettes_data (
    id SERIAL PRIMARY KEY,
    sous_categorie_recette_id INTEGER NOT NULL REFERENCES sous_categories_recettes(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) NOT NULL,
    UNIQUE (sous_categorie_recette_id, annee)
);

-- ============================
-- Données: Catégories principales
-- ============================
INSERT INTO categories_recettes (nom) VALUES
('Impôts'),
('Douanes'),
('Recettes non fiscales'),
('Dons');

-- ============================
-- Données: Sous-catégories détaillées
-- ============================

-- Sous-catégories pour IMPÔTS (catégorie_id = 1)
INSERT INTO sous_categories_recettes (categorie_recette_id, nom) VALUES
(1, 'Impôt sur les sociétés'),
(1, 'Impôt sur le revenu'),
(1, 'TVA intérieure'),
(1, 'Droits d''enregistrement'),
(1, 'Taxe pétrolière'),
(1, 'Autres impôts directs'),
(1, 'Autres impôts indirects');

-- Sous-catégories pour DOUANES (catégorie_id = 2)
INSERT INTO sous_categories_recettes (categorie_recette_id, nom) VALUES
(2, 'Droits d''importation'),
(2, 'Taxe sur la valeur ajoutée à l''importation'),
(2, 'Droits d''exportation'),
(2, 'Autres droits et taxes douanières');

-- Sous-catégories pour RECETTES NON FISCALES (catégorie_id = 3)
INSERT INTO sous_categories_recettes (categorie_recette_id, nom) VALUES
(3, 'Revenus des domaines'),
(3, 'Produits des services publics'),
(3, 'Revenus des participations de l''État'),
(3, 'Amendes et pénalités'),
(3, 'Autres recettes non fiscales');

-- Sous-catégories pour DONS (catégorie_id = 4)
INSERT INTO sous_categories_recettes (categorie_recette_id, nom) VALUES
(4, 'Dons des partenaires techniques et financiers'),
(4, 'Dons d''urgence'),
(4, 'Dons en nature'),
(4, 'Autres dons');

-- ============================
-- Données: Valeurs 2024 et 2025 (format PDF)
-- ============================

-- IMPÔTS 2024 (sous_categorie_recette_id 1-7) - en millions
INSERT INTO recettes_data (sous_categorie_recette_id, annee, montant) VALUES
(1, 2024, 1200.5),   -- IS 2024 : 1 200,5 milliards
(2, 2024, 800.2),    -- IR 2024 : 800,2 milliards
(3, 2024, 1500.8),   -- TVA 2024 : 1 500,8 milliards
(4, 2024, 300.1),    -- Enregistrement 2024 : 300,1 milliards
(5, 2024, 450.7),    -- Pétrolière 2024 : 450,7 milliards
(6, 2024, 200.3),    -- Autres directs 2024 : 200,3 milliards
(7, 2024, 250.9),    -- Autres indirects 2024 : 250,9 milliards

-- IMPÔTS 2025
(1, 2025, 1450.6),   -- IS 2025 : 1 450,6 milliards
(2, 2025, 950.4),    -- IR 2025 : 950,4 milliards
(3, 2025, 1800.2),   -- TVA 2025 : 1 800,2 milliards
(4, 2025, 350.8),    -- Enregistrement 2025 : 350,8 milliards
(5, 2025, 520.3),    -- Pétrolière 2025 : 520,3 milliards
(6, 2025, 240.7),    -- Autres directs 2025 : 240,7 milliards
(7, 2025, 300.1);    -- Autres indirects 2025 : 300,1 milliards

-- DOUANES 2024 (sous_categorie_recette_id 8-11)
INSERT INTO recettes_data (sous_categorie_recette_id, annee, montant) VALUES
(8, 2024, 600.4),    -- Importation 2024 : 600,4 milliards
(9, 2024, 900.7),    -- TVA import 2024 : 900,7 milliards
(10, 2024, 50.2),    -- Exportation 2024 : 50,2 milliards
(11, 2024, 80.5),    -- Autres douanes 2024 : 80,5 milliards

-- DOUANES 2025
(8, 2025, 720.8),    -- Importation 2025 : 720,8 milliards
(9, 2025, 1080.3),   -- TVA import 2025 : 1 080,3 milliards
(10, 2025, 60.7),    -- Exportation 2025 : 60,7 milliards
(11, 2025, 95.2);    -- Autres douanes 2025 : 95,2 milliards

-- RECETTES NON FISCALES 2024 (sous_categorie_recette_id 12-16)
INSERT INTO recettes_data (sous_categorie_recette_id, annee, montant) VALUES
(12, 2024, 80.3),    -- Domaines 2024 : 80,3 milliards
(13, 2024, 120.8),   -- Services publics 2024 : 120,8 milliards
(14, 2024, 150.6),   -- Participations 2024 : 150,6 milliards
(15, 2024, 30.2),    -- Amendes 2024 : 30,2 milliards
(16, 2024, 40.7),    -- Autres non fiscales 2024 : 40,7 milliards

-- RECETTES NON FISCALES 2025
(12, 2025, 95.4),    -- Domaines 2025 : 95,4 milliards
(13, 2025, 140.2),   -- Services publics 2025 : 140,2 milliards
(14, 2025, 180.9),   -- Participations 2025 : 180,9 milliards
(15, 2025, 35.8),    -- Amendes 2025 : 35,8 milliards
(16, 2025, 50.3);    -- Autres non fiscales 2025 : 50,3 milliards

-- DONS 2024 (sous_categorie_recette_id 17-20)
INSERT INTO recettes_data (sous_categorie_recette_id, annee, montant) VALUES
(17, 2024, 400.6),   -- Partenaires 2024 : 400,6 milliards
(18, 2024, 50.3),    -- Urgence 2024 : 50,3 milliards
(19, 2024, 80.7),    -- Nature 2024 : 80,7 milliards
(20, 2024, 20.1),    -- Autres dons 2024 : 20,1 milliards

-- DONS 2025
(17, 2025, 450.8),   -- Partenaires 2025 : 450,8 milliards
(18, 2025, 30.5),    -- Urgence 2025 : 30,5 milliards
(19, 2025, 100.4),   -- Nature 2025 : 100,4 milliards
(20, 2025, 25.2);    -- Autres dons 2025 : 25,2 milliards