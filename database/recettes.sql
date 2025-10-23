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
