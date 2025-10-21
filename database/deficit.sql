-- ============================
-- Table de la situation du déficit
-- ============================
CREATE TABLE deficit_situation (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL UNIQUE,
    recettes_et_dons NUMERIC(15,2) NOT NULL,
    depenses_total NUMERIC(15,2) NOT NULL
);

-- Table type de financement du déficit
CREATE TABLE type_financement_deficit (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE -- 'interieur', 'exterieur'
);

-- ============================
-- Table du financement du déficit
-- ============================
CREATE TABLE financement_deficit (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL UNIQUE,
    id_type_financement INTEGER REFERENCES type_financement_deficit(id),
    montant NUMERIC(15,2) NOT NULL
);


-- ============================
-- Données: Situation du déficit
-- ============================
INSERT INTO deficit_situation (annee, recettes_et_dons, depenses_total) VALUES
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
INSERT INTO type_financement_deficit (nom) VALUES
('intérieur'),
('extérieur');

-- ============================
-- Données: Financement du déficit
-- ============================
INSERT INTO financement_deficit (annee, id_type_financement, montant) VALUES
-- Financement 2024
(2024, 1, 36),
(2024, 2, 24),

-- Financement 2025
(2025, 1, 34.14),
(2025, 2, 22.76);