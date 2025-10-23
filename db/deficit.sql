-- ============================
-- Situation du déficit
-- ============================
CREATE TABLE deficit_situations (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL UNIQUE,
    recettes_et_dons NUMERIC(15,2) NOT NULL,
    depenses_totales NUMERIC(15,2) NOT NULL
);

-- ============================
-- Types de financement du déficit
-- ============================
CREATE TABLE types_financement_deficit (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE
);

-- ============================
-- Financement du déficit
-- ============================
CREATE TABLE financements_deficit (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    type_financement_deficit_id INTEGER NOT NULL REFERENCES types_financement_deficit(id),
    montant NUMERIC(15,2) NOT NULL,
    UNIQUE (annee, type_financement_deficit_id)  -- Contrainte UNIQUE composite
);

-- ============================
-- Données: Situation du déficit
-- ============================
INSERT INTO deficit_situations (annee, recettes_et_dons, depenses_totales) VALUES
(
    2024,
    109,  -- Recettes + dons
    115  -- Dépenses totales
),
(
    2025,
    132.31,  -- Recettes + dons
    138  -- Dépenses totales 2025
);

-- Données: Types de financement du déficit
INSERT INTO types_financement_deficit (nom) VALUES
('intérieur'),
('extérieur');

-- ============================
-- Données: Financement du déficit
-- ============================
-- Maintenant ces INSERT fonctionneront
INSERT INTO financements_deficit (annee, type_financement_deficit_id, montant) VALUES
-- Financement 2024
(2024, 1, 36),
(2024, 2, 24),
-- Financement 2025
(2025, 1, 34.14),
(2025, 2, 22.76);