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
    annee INTEGER NOT NULL UNIQUE,
    type_financement_deficit_id INTEGER NOT NULL REFERENCES types_financement_deficit(id),
    montant NUMERIC(15,2) NOT NULL
);
