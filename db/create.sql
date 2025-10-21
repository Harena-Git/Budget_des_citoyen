-- Création de la base de données
CREATE DATABASE budget_citoyens_2025;
\c budget_citoyens_2025;

-- Table des catégories de secteurs économiques
CREATE TABLE categorie_secteur (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(50) NOT NULL UNIQUE
);

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
    pib_nominal NUMERIC(15,2), -- en milliards d'Ariary
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
    categorie VARCHAR(50) -- 'fiscale', 'douaniere', 'non_fiscale', 'dons'
);

-- Table des recettes par année
CREATE TABLE recette (
    id SERIAL PRIMARY KEY,
    id_type_recette INTEGER REFERENCES type_recette(id),
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2) -- en milliards d'Ariary
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
    type_don VARCHAR(50) NOT NULL, -- 'courant', 'capital'
    annee INTEGER NOT NULL,
    montant NUMERIC(15,2)
);

-- Table des types de dépenses
CREATE TABLE type_depense (
    id SERIAL PRIMARY KEY,
    libelle VARCHAR(150) NOT NULL UNIQUE,
    categorie VARCHAR(50) -- 'courante', 'investissement', 'dette'
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
    type_dette VARCHAR(20) NOT NULL, -- 'interieure', 'exterieure'
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
    ministere VARCHAR(200) NOT NULL,
    annee INTEGER NOT NULL,
    nombre_postes INTEGER
);

-- Table des dépenses par ministère
CREATE TABLE depense_ministère (
    id SERIAL PRIMARY KEY,
    ministere VARCHAR(200) NOT NULL,
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
    source_financement VARCHAR(50) -- 'interne', 'externe'
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

-- Insertion des données de base
INSERT INTO categorie_secteur (libelle) VALUES 
('Primaire'),
('Secondaire'),
('Tertiaire');

-- Insertion des secteurs économiques
INSERT INTO secteur_economique (libelle, id_categorie) VALUES
-- Secteur Primaire
('Agriculture', 1),
('Élevage et pêche', 1),
('Sylviculture', 1),
-- Secteur Secondaire
('Industrie extractive', 2),
('Alimentaire, boisson, tabac', 2),
('Textile', 2),
('Bois, papiers, imprimerie', 2),
('Matériaux de construction', 2),
('Industrie métallique', 2),
('Machine, matériels électriques', 2),
('Industries diverses', 2),
('Électricité, eau, gaz', 2),
-- Secteur Tertiaire
('BTP', 3),
('Commerce, entretiens, réparations', 3),
('Hôtel, restaurant', 3),
('Transport', 3),
('Poste et télécommunication', 3),
('Banque, assurance', 3),
('Services aux entreprises', 3),
('Administration', 3),
('Éducation', 3),
('Santé', 3),
('Services rendus aux ménages', 3);

-- Insertion des types de recettes
INSERT INTO type_recette (libelle, categorie) VALUES
-- Recettes fiscales intérieures
('Impôt sur les revenus', 'fiscale'),
('Impôt sur les revenus Salariaux et Assimilés', 'fiscale'),
('Impôt sur les revenus des Capitaux Mobiliers', 'fiscale'),
('Impôt sur les plus-values Immobilières', 'fiscale'),
('Impôt Synthétique', 'fiscale'),
('Droit d''Enregistrement', 'fiscale'),
('Taxe sur la Valeur Ajoutée', 'fiscale'),
('Impôt sur les marchés Publics', 'fiscale'),
('Droit d''Accise', 'fiscale'),
('Taxes sur les Assurances', 'fiscale'),
('Droit de Timbres', 'fiscale'),
('Autres impôts', 'fiscale'),
-- Recettes douanières
('Droit de douane', 'douaniere'),
('TVA à l''importation', 'douaniere'),
('Taxe sur les produits pétroliers', 'douaniere'),
('TVA sur les produits pétroliers', 'douaniere'),
('Droit de navigation', 'douaniere'),
('Autres droits douaniers', 'douaniere'),
-- Recettes non fiscales
('Dividendes', 'non_fiscale'),
('Productions immobilières financières', 'non_fiscale'),
('Redevance de pêche', 'non_fiscale'),
('Redevance minières', 'non_fiscale'),
('Autres redevance', 'non_fiscale'),
('Produits des activités et autres', 'non_fiscale'),
('Autres recettes non fiscales', 'non_fiscale');

-- Insertion des types de dépenses
INSERT INTO type_depense (libelle, categorie) VALUES
('Intérêts de la dette', 'dette'),
('Dépenses courantes de solde (hors indemnités)', 'courante'),
('Dépenses courantes hors solde', 'courante'),
('Indemnités', 'courante'),
('Biens/Services', 'courante'),
('Transferts et subventions', 'courante'),
('Dépenses d''investissement', 'investissement'),
('Autres opérations nettes du trésor', 'courante');

-- Création des vues pour faciliter les requêtes
CREATE VIEW vue_recettes_totales AS
SELECT 
    annee,
    SUM(montant) as recettes_totales
FROM recette 
GROUP BY annee;

CREATE VIEW vue_depenses_totales AS
SELECT 
    annee,
    SUM(montant) as depenses_totales
FROM depense 
GROUP BY annee;

CREATE VIEW vue_solde_budgetaire AS
SELECT 
    r.annee,
    r.recettes_totales,
    d.depenses_totales,
    (r.recettes_totales - d.depenses_totales) as solde
FROM vue_recettes_totales r
JOIN vue_depenses_totales d ON r.annee = d.annee;

-- Index pour optimiser les performances
CREATE INDEX idx_croissance_sectorielle_annee ON croissance_sectorielle(annee);
CREATE INDEX idx_recette_annee ON recette(annee);
CREATE INDEX idx_depense_annee ON depense(annee);
CREATE INDEX idx_depense_ministere_annee ON depense_ministère(annee);

-- Commentaires sur les tables
COMMENT ON TABLE prevision_macroeconomique IS 'Stocke les prévisions macroéconomiques annuelles';
COMMENT ON TABLE croissance_sectorielle IS 'Taux de croissance par secteur économique';
COMMENT ON TABLE recette IS 'Recettes de l''État par type et année';
COMMENT ON TABLE depense IS 'Dépenses de l''État par type et année';
COMMENT ON TABLE deficit_budgetaire IS 'Déficit budgétaire et son financement';

-- Fonction pour calculer le ratio dépenses/PIB
CREATE OR REPLACE FUNCTION calcul_ratio_depenses_pib(annee_cible INTEGER)
RETURNS NUMERIC AS $$
DECLARE
    total_depenses NUMERIC;
    pib NUMERIC;
    ratio NUMERIC;
BEGIN
    SELECT depenses_totales INTO total_depenses 
    FROM vue_depenses_totales 
    WHERE annee = annee_cible;
    
    SELECT pib_nominal INTO pib 
    FROM prevision_macroeconomique 
    WHERE annee = annee_cible;
    
    IF pib > 0 THEN
        ratio := (total_depenses / pib) * 100;
    ELSE
        ratio := 0;
    END IF;
    
    RETURN ratio;
END;
$$ LANGUAGE plpgsql;