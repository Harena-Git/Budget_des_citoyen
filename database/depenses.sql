-- ============================
-- Tables de référence pour les dépenses
-- ============================

-- Types de dépenses (nature économique)
CREATE TABLE types_depenses_nature (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL
);

-- Ministères/Institutions
CREATE TABLE ministeres (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200) NOT NULL UNIQUE
);

-- Types de dette
CREATE TABLE types_dette (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE
);

-- Programmes d'Investissement Public (PIP)
CREATE TABLE pip_categories (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200) NOT NULL UNIQUE
);


-- ============================
-- Données par nature économique
-- ============================

-- Dépenses principales par nature
CREATE TABLE depenses_nature (
    id SERIAL PRIMARY KEY,
    type_depense_id INTEGER REFERENCES types_depenses_nature(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) NOT NULL,
    observations TEXT
);

-- Détail de la dette (intérieurs vs extérieurs)
CREATE TABLE dette_detail (
    id SERIAL PRIMARY KEY,
    type_dette_id INTEGER REFERENCES types_dette(id),
    annee INTEGER NOT NULL,
    interets NUMERIC(15,2) NOT NULL,
    principal NUMERIC(15,2)
);

-- Table des types de masses salariales
CREATE TABLE type_masses_salariales (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE -- 'soldes', 'pensions'
);

-- Détail des masses salariales
CREATE TABLE masses_salariales (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    id_type_masse_salariale INTEGER REFERENCES type_masses_salariales(id),
    montant NUMERIC(15,2) NOT NULL
);

-- Postes budgétaires par ministère
CREATE TABLE postes_budgetaires (
    id SERIAL PRIMARY KEY,
    ministere_id INTEGER REFERENCES ministeres(id),
    annee INTEGER NOT NULL,
    montant_salaires NUMERIC(15,2)
);

-- ============================
-- Programmes d'Investissement Public
-- ============================

-- Table types de source de financement
CREATE TABLE pip_sources_financement (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE -- 'interne', 'externe'
);

-- Projets PIP détaillés
CREATE TABLE pip_projets (
    id SERIAL PRIMARY KEY,
    categorie_pip_id INTEGER REFERENCES pip_categories(id),
    nom_projet VARCHAR(300) NOT NULL,
    description TEXT
);

-- Données annuelles des PIP
CREATE TABLE pip_data (
    id SERIAL PRIMARY KEY,
    projet_id INTEGER REFERENCES pip_projets(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) NOT NULL
);


-- ============================
-- Répartition par ministère
-- ============================
CREATE TABLE depenses_ministeres (
    id SERIAL PRIMARY KEY,
    ministere_id INTEGER REFERENCES ministeres(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) NOT NULL,
    UNIQUE(ministere_id, annee)
);





-- Types de dépenses par nature
INSERT INTO types_depenses_nature (nom) VALUES
('Intérêts de la dette'),
('Dépenses de soldes et pensions'),
('Dépenses de fonctionnement'),
('Dépenses d''investissement');

-- Types de dette
INSERT INTO types_dette (nom) VALUES
('Dette intérieure'),
('Dette extérieure');

-- Catégories PIP
INSERT INTO pip_categories (nom) VALUES
('Énergie et transition écologique'),
('Agriculture durable et sécurité alimentaire'),
('Infrastructures et aménagement du territoire'),
('Santé et éducation');

-- Dépenses principales 2024-2025
INSERT INTO depenses_nature (type_depense_id, annee, montant) VALUES
(1, 2024, 85),
(1, 2025, 92),
(2, 2024, 320),
(2, 2025, 350),
(3, 2024, 180),
(3, 2025, 195),
(4, 2024, 450),
(4, 2025, 520);

-- Détail de la dette
INSERT INTO dette_detail (type_dette_id, annee, interets, principal) VALUES
(1, 2024, 35, 120), -- Intérieure 2024
(2, 2024, 50, 180), -- Extérieure 2024
(1, 2025, 38, 135), -- Intérieure 2025
(2, 2025, 54, 200); -- Extérieure 2025

-- Types de masses salariales
INSERT INTO type_masses_salariales (nom) VALUES
('soldes'),
('pensions');

-- Masses salariales
INSERT INTO masses_salariales (annee, id_type_masse_salariale, montant) VALUES
(2024, 1, 250),
(2024, 2, 70),
(2025, 1, 270),
(2025, 2, 80);

-- Projets PIP détaillés
INSERT INTO pip_projets (categorie_pip_id, nom_projet, description) VALUES
-- Énergie
(1, 'Renforcement énergétique', 'Construction de nouvelles centrales'),
(1, 'Énergie solaire et foyers', 'Développement des énergies renouvelables'),
(1, 'Infrastructures énergétiques', 'Modernisation du réseau électrique'),

-- Agriculture
(2, 'Production de riz', 'Augmentation de la production rizicole'),
(2, 'Mécanisation PFUMVUDZA', 'Modernisation des techniques agricoles'),
(2, 'Usines d''engrais', 'Production locale d''intrants agricoles'),

-- Infrastructures
(3, 'Projets routiers', 'Construction et réhabilitation des routes'),
(3, 'Train urbain', 'Développement du transport ferroviaire'),
(3, 'Aménagement urbain', 'Rénovation des centres urbains'),

-- Santé/Éducation
(4, 'Infrastructures sanitaires', 'Construction de centres de santé'),
(4, 'Équipements scolaires', 'Réhabilitation des établissements scolaires'),
(4, 'Digitalisation', 'Équipement en technologies numériques');

-- Données PIP 2024-2025
INSERT INTO pip_data (projet_id, annee, montant) VALUES
(1, 2024, 5), (1, 2025, 65),
(2, 2024, 3), (2, 2025, 42),
(3, 2024, 4), (3, 2025, 48);
-- ... (continuer pour tous les projets)

-- Ministères de référence
INSERT INTO ministeres (nom) VALUES
('Ministère des Travaux Publics'),
('Ministère de l''Énergie et Hydrocarbures'),
('Ministère de l''Économie et des Finances'),
('Ministère de l''Éducation Nationale'),
('Ministère de la Santé Publique'),
('Ministère de l''Agriculture');

-- Postes budgétaires
INSERT INTO postes_budgetaires (ministere_id, annee, montant_salaires) VALUES
(1, 2024, 8.5), (1, 2025, 9.5),
(4, 2024, 52), (4, 2025, 58);

-- Budget par ministère
INSERT INTO depenses_ministeres (ministere_id, annee, montant) VALUES
(1, 2024, 180), (1, 2025, 232.7),
(2, 2024, 95), (2, 2025, 133.2),
(4, 2024, 132), (4, 2025, 156.2),
(5, 2024, 75), (5, 2025, 92.1);