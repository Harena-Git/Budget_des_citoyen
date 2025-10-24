CREATE DATABASE budget_citoyen;

\c budget_citoyen;

-- ============================
-- Situation du deficit
-- ============================
CREATE TABLE deficit_situations (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL UNIQUE,
    recettes_et_dons NUMERIC(15,2) NOT NULL,
    depenses_totales NUMERIC(15,2) NOT NULL
);

-- ============================
-- Types de financement du deficit
-- ============================
CREATE TABLE types_financement_deficit (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE
);

-- ============================
-- Financement du deficit
-- ============================
CREATE TABLE financements_deficit (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    type_financement_deficit_id INTEGER NOT NULL REFERENCES types_financement_deficit(id),
    montant NUMERIC(15,2) NOT NULL,
    UNIQUE (annee, type_financement_deficit_id)
);

-- ============================
-- Donnees: Situation du deficit
-- ============================
INSERT INTO deficit_situations (annee, recettes_et_dons, depenses_totales) VALUES
(
    2024,
    109,  -- Recettes + dons
    115  -- Depenses totales
),
(
    2025,
    132.31,  -- Recettes + dons
    138  -- Depenses totales 2025
);

-- Donnees: Types de financement du deficit
INSERT INTO types_financement_deficit (nom) VALUES
('interieur'),
('exterieur');

-- ============================
-- Donnees: Financement du deficit
-- ============================
INSERT INTO financements_deficit (annee, type_financement_deficit_id, montant) VALUES
-- Financement 2024
(2024, 1, 36),
(2024, 2, 24),

-- Financement 2025
(2025, 1, 34.14),
(2025, 2, 22.76);