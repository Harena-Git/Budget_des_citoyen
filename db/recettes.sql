-- ============================
-- Table des categories principales
-- ============================
CREATE TABLE categories_recettes (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE
);

-- ============================
-- Table des sous-categories detaillees
-- ============================
CREATE TABLE sous_categories_recettes (
    id SERIAL PRIMARY KEY,
    categorie_recette_id INTEGER NOT NULL REFERENCES categories_recettes(id),
    nom VARCHAR(200) NOT NULL
);

-- ============================
-- Table des donnees annuelles de recettes
-- ============================
CREATE TABLE recettes_data (
    id SERIAL PRIMARY KEY,
    sous_categorie_recette_id INTEGER NOT NULL REFERENCES sous_categories_recettes(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) NOT NULL,
    UNIQUE (sous_categorie_recette_id, annee)
);

-- ============================
-- Donnees: Categories principales
-- ============================
INSERT INTO categories_recettes (nom) VALUES
('Impots'),
('Douanes'),
('Recettes non fiscales'),
('Dons');

-- ============================
-- Donnees: Sous-categories detaillees
-- ============================

-- Sous-categories pour IMPOTS (categorie_id = 1)
INSERT INTO sous_categories_recettes (categorie_recette_id, nom) VALUES
(1, 'Impôt sur les societes'),
(1, 'Impôt sur le revenu'),
(1, 'TVA interieure'),
(1, 'Droits d''enregistrement'),
(1, 'Taxe petroliere'),
(1, 'Autres impots directs'),
(1, 'Autres impots indirects');

-- Sous-categories pour DOUANES (categorie_id = 2)
INSERT INTO sous_categories_recettes (categorie_recette_id, nom) VALUES
(2, 'Droits d''importation'),
(2, 'Taxe sur la valeur ajoutee a l''importation'),
(2, 'Droits d''exportation'),
(2, 'Autres droits et taxes douanieres');

-- Sous-categories pour RECETTES NON FISCALES (categorie_id = 3)
INSERT INTO sous_categories_recettes (categorie_recette_id, nom) VALUES
(3, 'Revenus des domaines'),
(3, 'Produits des services publics'),
(3, 'Revenus des participations de l''Etat'),
(3, 'Amendes et penalites'),
(3, 'Autres recettes non fiscales');

-- Sous-categories pour DONS (categorie_id = 4)
INSERT INTO sous_categories_recettes (categorie_recette_id, nom) VALUES
(4, 'Dons des partenaires techniques et financiers'),
(4, 'Dons d''urgence'),
(4, 'Dons en nature'),
(4, 'Autres dons');

-- ============================
-- Donnees: Valeurs 2024 et 2025 (format PDF)
-- ============================

-- IMPOTS 2024 (sous_categorie_recette_id 1-7) - en milliards
INSERT INTO recettes_data (sous_categorie_recette_id, annee, montant) VALUES
(1, 2024, 1200.5),
(2, 2024, 800.2),
(3, 2024, 1500.8),
(4, 2024, 300.1),
(5, 2024, 450.7),
(6, 2024, 200.3),
(7, 2024, 250.9),

-- IMPOTS 2025
(1, 2025, 1450.6),
(2, 2025, 950.4),
(3, 2025, 1800.2),
(4, 2025, 350.8),
(5, 2025, 520.3),
(6, 2025, 240.7),
(7, 2025, 300.1);

-- DOUANES 2024 (sous_categorie_recette_id 8-11)
INSERT INTO recettes_data (sous_categorie_recette_id, annee, montant) VALUES
(8, 2024, 600.4),
(9, 2024, 900.7),
(10, 2024, 50.2),
(11, 2024, 80.5),

-- DOUANES 2025
(8, 2025, 720.8),
(9, 2025, 1080.3),
(10, 2025, 60.7),
(11, 2025, 95.2);

-- RECETTES NON FISCALES 2024 (sous_categorie_recette_id 12-16)
INSERT INTO recettes_data (sous_categorie_recette_id, annee, montant) VALUES
(12, 2024, 80.3),
(13, 2024, 120.8),
(14, 2024, 150.6),
(15, 2024, 30.2),
(16, 2024, 40.7),

-- RECETTES NON FISCALES 2025
(12, 2025, 95.4),
(13, 2025, 140.2),
(14, 2025, 180.9),
(15, 2025, 35.8),
(16, 2025, 50.3);

-- DONS 2024 (sous_categorie_recette_id 17-20)
INSERT INTO recettes_data (sous_categorie_recette_id, annee, montant) VALUES
(17, 2024, 400.6),
(18, 2024, 50.3),
(19, 2024, 80.7),
(20, 2024, 20.1),

-- DONS 2025
(17, 2025, 450.8),
(18, 2025, 30.5),
(19, 2025, 100.4),
(20, 2025, 25.2);