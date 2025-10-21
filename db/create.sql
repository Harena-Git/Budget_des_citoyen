-- ============================
-- Création de la base de données
-- ============================
CREATE DATABASE lf_budget;
\c lf_budget;

-- ============================
-- Tables de référence
-- ============================

-- Catégories de secteurs économiques
CREATE TABLE categorie_secteur (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL UNIQUE
);

-- Catégories de recettes
CREATE TABLE categorie_recette (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL UNIQUE
    -- Exemple : 'fiscale', 'douaniere', 'non_fiscale', 'dons'
);

-- Catégories de dépenses
CREATE TABLE categorie_depense (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL UNIQUE
    -- Exemple : 'courante', 'investissement', 'dette'
);

-- Types de dons
CREATE TABLE type_don (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL UNIQUE
    -- Exemple : 'courant', 'capital'
);

-- Types de dettes
CREATE TABLE type_dette (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL UNIQUE
    -- Exemple : 'interieure', 'exterieure'
);

-- Ministères
CREATE TABLE ministere (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(200) NOT NULL UNIQUE
);

-- ============================
-- Tables principales
-- ============================

-- Table des secteurs économiques
CREATE TABLE secteur_economique (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(100) NOT NULL,
    id_categorie INTEGER REFERENCES categorie_secteur(id)
);

-- Table des prévisions macroéconomiques
CREATE TABLE prevision_macroeconomique (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    pib_nominal NUMERIC(15,2),
    taux_croissance NUMERIC(4,2),
    inflation NUMERIC(4,2),
    ratio_depenses_publiques NUMERIC(4,2),
    solde_global NUMERIC(5,2),
    solde_primaire NUMERIC(10,2),
    taux_change_dollar NUMERIC(8,2),
    taux_change_euro NUMERIC(8,2),
    taux_investissement_public NUMERIC(4,2),
    taux_investissement_prive NUMERIC(4,2),
    taux_pression_fiscale NUMERIC(4,2)
);

-- Table des taux de croissance sectorielle
CREATE TABLE croissance_sectorielle (
    id SERIAL PRIMARY KEY,
    id_secteur INTEGER REFERENCES secteur_economique(id),
    annee INTEGER NOT NULL,
    taux_croissance NUMERIC(5,2)
);

-- Table des types de recettes
CREATE TABLE type_recette (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(100) NOT NULL UNIQUE,
    id_categorie INTEGER REFERENCES categorie_recette(id)
);

-- Table des recettes par année
CREATE TABLE recette (
    id SERIAL PRIMARY KEY,
    id_type_recette INTEGER REFERENCES type_recette(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2)
);

-- Table détaillée des recettes fiscales intérieures
CREATE TABLE recette_fiscale_interieure (
    id SERIAL PRIMARY KEY,
    nature_impot VARCHAR(150) NOT NULL,
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2)
);

-- Table des recettes douanières détaillées
CREATE TABLE recette_douaniere (
    id SERIAL PRIMARY KEY,
    nature_droit_taxe VARCHAR(150) NOT NULL,
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2)
);

-- Table des recettes non fiscales
CREATE TABLE recette_non_fiscale (
    id SERIAL PRIMARY KEY,
    nature_recette VARCHAR(150) NOT NULL,
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2)
);

-- Table des dons
CREATE TABLE don (
    id SERIAL PRIMARY KEY,
    id_type_don INTEGER REFERENCES type_don(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2)
);

-- Table des types de dépenses
CREATE TABLE type_depense (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(150) NOT NULL UNIQUE,
    id_categorie INTEGER REFERENCES categorie_depense(id)
);

-- Table des dépenses par rubrique
CREATE TABLE depense (
    id SERIAL PRIMARY KEY,
    id_type_depense INTEGER REFERENCES type_depense(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2)
);

-- Table de la dette
CREATE TABLE dette (
    id SERIAL PRIMARY KEY,
    id_type_dette INTEGER REFERENCES type_dette(id),
    annee INTEGER NOT NULL,
    principal NUMERIC(15,2),
    interets NUMERIC(15,2),
    taux_interet_moyen NUMERIC(5,2)
);

-- Table des masses salariales
CREATE TABLE masse_salariale (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2),
    ratio_pib NUMERIC(4,2),
    ratio_recettes_fiscales NUMERIC(4,2),
    ratio_depenses_totales NUMERIC(4,2)
);

-- Table des postes budgétaires par ministère
CREATE TABLE poste_budgetaire (
    id SERIAL PRIMARY KEY,
    id_ministere INTEGER REFERENCES ministere(id),
    annee INTEGER NOT NULL,
    nombre_postes INTEGER
);

-- Table des dépenses par ministère
CREATE TABLE depense_ministere (
    id SERIAL PRIMARY KEY,
    id_ministere INTEGER REFERENCES ministere(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2)
);

-- Table des programmes d'investissement public
CREATE TABLE programme_investissement (
    id SERIAL PRIMARY KEY,
    secteur VARCHAR(100) NOT NULL,
    sous_secteur VARCHAR(200),
    description TEXT,
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2),
    source_financement VARCHAR(50)
    -- Valeurs possibles : 'interne', 'externe'
);

-- Table du déficit budgétaire
CREATE TABLE deficit_budgetaire (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2),
    ratio_pib NUMERIC(4,2),
    financement_interne NUMERIC(15,2),
    financement_externe NUMERIC(15,2)
);

-- Table des dispositions fiscales
CREATE TABLE disposition_fiscale (
    id SERIAL PRIMARY KEY,
    type_impot VARCHAR(100) NOT NULL,
    article VARCHAR(50),
    description TEXT,
    modification TEXT
);
