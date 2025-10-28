<?php

namespace app\models;

use PDO;

class DepensesModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Récupère le total des dépenses pour une année donnée
     */
    public function getTotalDepenses($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT SUM(montant) as total
            FROM depenses_nature
            WHERE annee = :annee
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetch()['total'];
    }

    /**
     * Récupère les dépenses par nature économique
     */
    public function getDepensesParNature($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                tdn.nom as type_depense,
                dn.montant
            FROM depenses_nature dn
            JOIN types_depenses_nature tdn ON dn.type_depense_nature_id = tdn.id
            WHERE dn.annee = :annee
            ORDER BY dn.montant DESC
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère les détails de la dette
     */
    public function getDetailsDette($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                td.nom as type_dette,
                dd.interets,
                dd.principal
            FROM dette_details dd
            JOIN types_dette td ON dd.type_dette_id = td.id
            WHERE dd.annee = :annee
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère les dépenses par ministère
     */
    public function getDepensesParMinistere($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                m.nom as ministere,
                dm.montant
            FROM depenses_ministeres dm
            JOIN ministeres m ON dm.ministere_id = m.id
            WHERE dm.annee = :annee
            ORDER BY dm.montant DESC
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère les projets PIP par catégorie
     */
    public function getProjetsPIP($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                pc.nom as categorie,
                pp.nom_projet,
                pp.description,
                pd.montant
            FROM pip_data pd
            JOIN pip_projets pp ON pd.pip_projet_id = pp.id
            JOIN pip_categories pc ON pp.categorie_pip_id = pc.id
            WHERE pd.annee = :annee
            ORDER BY pc.nom, pd.montant DESC
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère la variation des dépenses entre deux années
     */
    public function getVariationDepenses($type_depense, $annee_actuelle = 2025, $annee_precedente = 2024) {
        $stmt = $this->db->prepare("
            SELECT 
                SUM(CASE WHEN dn.annee = :annee_actuelle THEN dn.montant ELSE 0 END) as montant_actuel,
                SUM(CASE WHEN dn.annee = :annee_precedente THEN dn.montant ELSE 0 END) as montant_precedent
            FROM depenses_nature dn
            JOIN types_depenses_nature tdn ON dn.type_depense_nature_id = tdn.id
            WHERE tdn.nom = :type_depense
            AND dn.annee IN (:annee_actuelle, :annee_precedente)
        ");
        $stmt->execute([
            'type_depense' => $type_depense,
            'annee_actuelle' => $annee_actuelle,
            'annee_precedente' => $annee_precedente
        ]);
        
        $result = $stmt->fetch();
        if ($result && $result['montant_precedent'] > 0) {
            return [
                'variation_absolue' => $result['montant_actuel'] - $result['montant_precedent'],
                'variation_pourcentage' => (($result['montant_actuel'] - $result['montant_precedent']) / $result['montant_precedent']) * 100
            ];
        }
        return ['variation_absolue' => 0, 'variation_pourcentage' => 0];
    }
}