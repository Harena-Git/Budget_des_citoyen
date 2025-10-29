-- Table des indicateurs macroéconomiques
CREATE TABLE perspectives_indicateurs_macro (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    indicateur VARCHAR(100) NOT NULL,
    valeur DECIMAL(15,2) NOT NULL,
    variation DECIMAL(15,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table des prévisions macroéconomiques
CREATE TABLE perspectives_previsions_macro (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    agregat VARCHAR(100) NOT NULL,
    valeur DECIMAL(15,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table de la croissance sectorielle
CREATE TABLE perspectives_croissance_sectorielle (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    secteur VARCHAR(50) NOT NULL,
    sous_secteur VARCHAR(100),
    taux_croissance_precedent DECIMAL(15,2),
    taux_croissance DECIMAL(15,2) NOT NULL,
    variation DECIMAL(15,2),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table des postes budgétaires
CREATE TABLE perspectives_postes_budgetaires (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    ministere VARCHAR(200) NOT NULL,
    postes_autorises INTEGER NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table des secteurs porteurs
CREATE TABLE perspectives_secteurs_porteurs (
    id SERIAL PRIMARY KEY,
    annee INTEGER NOT NULL,
    secteur VARCHAR(100) NOT NULL,
    croissance DECIMAL(15,2) NOT NULL,
    points_cles TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Données initiales pour les indicateurs macro 2025
INSERT INTO perspectives_indicateurs_macro (annee, indicateur, valeur, variation) VALUES
(2025, 'PIB Nominal', 88852, 12.5),
(2025, 'Taux de Croissance', 5.0, 0.6),
(2025, 'Inflation', 7.1, -1.1),
(2025, 'Taux Pression Fiscale', 11.2, 0.6),
(2025, 'Investissement Public', 9.6, 3.5),
(2025, 'Taux de Change USD/Ar', 4689, NULL);

-- Données pour les prévisions macroéconomiques
INSERT INTO perspectives_previsions_macro (annee, agregat, valeur) VALUES
(2024, 'PIB nominal', 78945.4),
(2025, 'PIB nominal', 88851.6),
(2026, 'PIB nominal', 99826.3),
(2024, 'Taux de croissance économique', 4.4),
(2025, 'Taux de croissance économique', 5.0),
(2026, 'Taux de croissance économique', 5.2);

-- Exemple de données pour la croissance sectorielle
INSERT INTO perspectives_croissance_sectorielle (annee, secteur, sous_secteur, taux_croissance_precedent, taux_croissance, variation) VALUES
(2025, 'Primaire', NULL, 5.3, 7.8, 2.5),
(2025, 'Primaire', 'Agriculture', 6.0, 9.5, 3.5),
(2025, 'Primaire', 'Élevage et pêche', 3.9, 4.0, 0.1),
(2025, 'Secondaire', NULL, -3.3, 3.4, 6.7),
(2025, 'Secondaire', 'Industrie extractive', -20.8, 4.0, 24.8),
(2025, 'Tertiaire', NULL, 5.0, 5.4, 0.4),
(2025, 'Tertiaire', 'Hôtel, restaurant', 14.7, 14.9, 0.2);

-- Données pour les postes budgétaires
INSERT INTO perspectives_postes_budgetaires (annee, ministere, postes_autorises) VALUES
(2025, 'Ministère de l''Éducation Nationale', 3000),
(2025, 'Ministère des Forces Armées', 1000),
(2025, 'Ministère de la Sécurité Publique', 1000),
(2025, 'Ministère délégué en charge de la Gendarmerie Nationale', 1000),
(2025, 'Ministère de la Santé Publique', 300);

-- Données pour les secteurs porteurs
INSERT INTO perspectives_secteurs_porteurs (annee, secteur, croissance, points_cles) VALUES
(2025, 'Agriculture', 9.5, 'Production de riz amélioré avec rendement > 8 tonnes/hectare\nDistribution de semences hybrides\nMécanisation et modernisation (PFUMVUDZA)\nConstruction d''usines d''engrais locales'),
(2025, 'Industrie Extractive', 4.0, 'Demande accrue pour les énergies renouvelables\nProduction de batteries pour véhicules électriques\nLancement de plusieurs projets miniers\nRedevances minières : 331,2 Mds Ar (+290%)');