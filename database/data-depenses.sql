-- Types de dépenses par nature
INSERT INTO types_depenses_nature (nom) VALUES
('Intérêts de la dette'),
('Dépenses de soldes et pensions'),
('Dépenses de fonctionnement'),
('Dépenses d''investissement');

-- Ministères de référence
INSERT INTO ministeres (nom) VALUES
('Ministère des Travaux Publics'),
('Ministère de l''Énergie et Hydrocarbures'),
('Ministère de l''Économie et des Finances'),
('Ministère de l''Éducation Nationale'),
('Ministère de la Santé Publique'),
('Ministère de l''Agriculture');

-- Types de dette
INSERT INTO types_dette (nom) VALUES
('Dette intérieure'),
('Dette extérieure');

-- Catégories PIP
INSERT INTO pip_categories (nom) VALUES
('Énergie et transition écologique'),
('Agriculture durable et sécurité alimentaire'),
('Infrastructures et aménagement du territoire'),
('Santé et éducation');

-- Types de masses salariales
INSERT INTO type_masses_salariales (nom) VALUES
('soldes'),
('pensions');

-- Types de sources de financement PIP
INSERT INTO pip_sources_financement (nom) VALUES
('Interne'),
('Externe');

-- Dépenses principales 2024-2025
INSERT INTO depenses_nature (type_depense_nature_id, annee, montant) VALUES
(1, 2024, 85),
(1, 2025, 92),
(2, 2024, 320),
(2, 2025, 350),
(3, 2024, 180),
(3, 2025, 195),
(4, 2024, 450),
(4, 2025, 520);

-- Détail de la dette
INSERT INTO dette_details (type_dette_id, annee, interets, principal) VALUES
(1, 2024, 35, 120), -- Intérieure 2024
(2, 2024, 50, 180), -- Extérieure 2024
(1, 2025, 38, 135), -- Intérieure 2025
(2, 2025, 54, 200); -- Extérieure 2025

-- Masses salariales
INSERT INTO masses_salariales (type_masse_salariale_id, annee, montant) VALUES
(1, 2024, 250),
(2, 2024, 70),
(1, 2025, 270),
(2, 2025, 80);

-- Postes budgétaires
INSERT INTO postes_budgetaires (ministere_id, annee, montant_salaires) VALUES
(1, 2024, 8.5), (1, 2025, 9.5),
(4, 2024, 52), (4, 2025, 58);

-- Projets PIP détaillés
INSERT INTO pip_projets (categorie_pip_id, nom_projet, description) VALUES
-- Énergie
(1, 'Renforcement énergétique', 'Construction de nouvelles centrales'),
(1, 'Énergie solaire et foyers', 'Développement des énergies renouvelables'),
(1, 'Infrastructures énergétiques', 'Modernisation du réseau électrique'),

-- Agriculture
(2, 'Production de riz', 'Augmentation de la production rizicole'),
(2, 'Mécanisation PFUMVUDZA', 'Modernisation des techniques agricoles'),
(2, 'Usines d''engrais', 'Production locale d''intrants agricoles'),

-- Infrastructures
(3, 'Projets routiers', 'Construction et réhabilitation des routes'),
(3, 'Train urbain', 'Développement du transport ferroviaire'),
(3, 'Aménagement urbain', 'Rénovation des centres urbains'),

-- Santé/Éducation
(4, 'Infrastructures sanitaires', 'Construction de centres de santé'),
(4, 'Équipements scolaires', 'Réhabilitation des établissements scolaires'),
(4, 'Digitalisation', 'Équipement en technologies numériques');

-- Données PIP 2024-2025
INSERT INTO pip_data (pip_projet_id, annee, montant) VALUES
(1, 2024, 5), (1, 2025, 65),
(2, 2024, 3), (2, 2025, 42),
(3, 2024, 4), (3, 2025, 48);
-- ... (continuer pour tous les projets)

-- Budget par ministère
INSERT INTO depenses_ministeres (ministere_id, annee, montant) VALUES
(1, 2024, 180), (1, 2025, 232.7),
(2, 2024, 95), (2, 2025, 133.2),
(4, 2024, 132), (4, 2025, 156.2),
(5, 2024, 75), (5, 2025, 92.1);