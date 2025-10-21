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