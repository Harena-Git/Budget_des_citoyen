-- ============================
-- Tables de référence pour les dépenses
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
-- Données par nature économique
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
-- Programmes d’Investissement Public (PIP)
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
-- Répartition par ministère
-- ============================
CREATE TABLE depenses_ministeres (
    id SERIAL PRIMARY KEY,
    ministere_id INTEGER NOT NULL REFERENCES ministeres(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) NOT NULL,
    UNIQUE (ministere_id, annee)
);
