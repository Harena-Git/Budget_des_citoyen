
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

