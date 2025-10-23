-- ============================
-- Tables de reference pour les depenses
-- ============================

CREATE TABLE types_depenses_nature (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE ministeres (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200) NOT NULL UNIQUE
);

CREATE TABLE types_dette (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE pip_categories (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200) NOT NULL UNIQUE
);

CREATE TABLE types_masses_salariales (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE pip_sources_financement (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE
);

-- ============================
-- Donnees par nature economique
-- ============================

CREATE TABLE depenses_nature (
    id SERIAL PRIMARY KEY,
    type_depense_nature_id INTEGER NOT NULL REFERENCES types_depenses_nature(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) NOT NULL
);

CREATE TABLE dette_details (
    id SERIAL PRIMARY KEY,
    type_dette_id INTEGER NOT NULL REFERENCES types_dette(id),
    annee INTEGER NOT NULL,
    interets NUMERIC(15,2) NOT NULL,
    principal NUMERIC(15,2)
);

CREATE TABLE masses_salariales (
    id SERIAL PRIMARY KEY,
    type_masse_salariale_id INTEGER NOT NULL REFERENCES types_masses_salariales(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) NOT NULL
);

CREATE TABLE postes_budgetaires (
    id SERIAL PRIMARY KEY,
    ministere_id INTEGER NOT NULL REFERENCES ministeres(id),
    annee INTEGER NOT NULL,
    montant_salaires NUMERIC(15,2)
);

-- ============================
-- Programmes d'Investissement Public (PIP)
-- ============================

CREATE TABLE pip_projets (
    id SERIAL PRIMARY KEY,
    categorie_pip_id INTEGER NOT NULL REFERENCES pip_categories(id),
    nom_projet VARCHAR(300) NOT NULL,
    description TEXT
);

CREATE TABLE pip_data (
    id SERIAL PRIMARY KEY,
    pip_projet_id INTEGER NOT NULL REFERENCES pip_projets(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) NOT NULL
);

-- ============================
-- Repartition par ministere
-- ============================
CREATE TABLE depenses_ministeres (
    id SERIAL PRIMARY KEY,
    ministere_id INTEGER NOT NULL REFERENCES ministeres(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) NOT NULL,
    UNIQUE (ministere_id, annee)
);

-- Types de depenses par nature
INSERT INTO types_depenses_nature (nom) VALUES
('Interets de la dette'),
('Depenses de soldes et pensions'),
('Depenses de fonctionnement'),
('Depenses d''investissement');

-- Ministeres de reference
INSERT INTO ministeres (nom) VALUES
('Ministere des Travaux Publics'),
('Ministere de l''Energie et Hydrocarbures'),
('Ministere de l''Economie et des Finances'),
('Ministere de l''Education Nationale'),
('Ministere de la Sante Publique'),
('Ministere de l''Agriculture');

-- Types de dette
INSERT INTO types_dette (nom) VALUES
('Dette interieure'),
('Dette exterieure');

-- Categories PIP
INSERT INTO pip_categories (nom) VALUES
('Energie et transition ecologique'),
('Agriculture durable et securite alimentaire'),
('Infrastructures et amenagement du territoire'),
('Sante et education');

-- Types de masses salariales
INSERT INTO types_masses_salariales (nom) VALUES
('soldes'),
('pensions');

-- Types de sources de financement PIP
INSERT INTO pip_sources_financement (nom) VALUES
('Interne'),
('Externe');

-- Depenses principales 2024-2025
INSERT INTO depenses_nature (type_depense_nature_id, annee, montant) VALUES
(1, 2024, 85),
(1, 2025, 92),
(2, 2024, 320),
(2, 2025, 350),
(3, 2024, 180),
(3, 2025, 195),
(4, 2024, 450),
(4, 2025, 520);

-- Detail de la dette
INSERT INTO dette_details (type_dette_id, annee, interets, principal) VALUES
(1, 2024, 35, 120), -- Interieure 2024
(2, 2024, 50, 180), -- Exterieure 2024
(1, 2025, 38, 135), -- Interieure 2025
(2, 2025, 54, 200); -- Exterieure 2025

-- Masses salariales
INSERT INTO masses_salariales (type_masse_salariale_id, annee, montant) VALUES
(1, 2024, 250),
(2, 2024, 70),
(1, 2025, 270),
(2, 2025, 80);

-- Postes budgetaires
INSERT INTO postes_budgetaires (ministere_id, annee, montant_salaires) VALUES
(1, 2024, 8.5), (1, 2025, 9.5),
(4, 2024, 52), (4, 2025, 58);

-- Projets PIP detaillees
INSERT INTO pip_projets (categorie_pip_id, nom_projet, description) VALUES
-- Energie
(1, 'Renforcement energetique', 'Construction de nouvelles centrales'),
(1, 'Energie solaire et foyers', 'Developpement des energies renouvelables'),
(1, 'Infrastructures energetiques', 'Modernisation du reseau electrique'),

-- Agriculture
(2, 'Production de riz', 'Augmentation de la production rizicole'),
(2, 'Mecanisation PFUMVUDZA', 'Modernisation des techniques agricoles'),
(2, 'Usines d''engrais', 'Production locale d''intrants agricoles'),

-- Infrastructures
(3, 'Projets routiers', 'Construction et rehabilitation des routes'),
(3, 'Train urbain', 'Developpement du transport ferroviaire'),
(3, 'Amenagement urbain', 'Renovation des centres urbains'),

-- Sante/Education
(4, 'Infrastructures sanitaires', 'Construction de centres de sante'),
(4, 'Equipements scolaires', 'Rehabilitation des etablissements scolaires'),
(4, 'Digitalisation', 'Equipement en technologies numeriques');

-- Donnees PIP 2024-2025
INSERT INTO pip_data (pip_projet_id, annee, montant) VALUES
(1, 2024, 5), (1, 2025, 65),
(2, 2024, 3), (2, 2025, 42),
(3, 2024, 4), (3, 2025, 48),
(4, 2024, 6), (4, 2025, 55),
(5, 2024, 4), (5, 2025, 38),
(6, 2024, 5), (6, 2025, 45),
(7, 2024, 8), (7, 2025, 72),
(8, 2024, 6), (8, 2025, 58),
(9, 2024, 5), (9, 2025, 48),
(10, 2024, 7), (10, 2025, 62),
(11, 2024, 6), (11, 2025, 52),
(12, 2024, 4), (12, 2025, 42);

-- Budget par ministere
INSERT INTO depenses_ministeres (ministere_id, annee, montant) VALUES
(1, 2024, 180), (1, 2025, 232.7),
(2, 2024, 95), (2, 2025, 133.2),
(4, 2024, 132), (4, 2025, 156.2),
(5, 2024, 75), (5, 2025, 92.1);