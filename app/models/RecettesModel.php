<?php

namespace app\models;

use PDO;

class RecettesModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Récupère le total des recettes pour une année donnée
     */
    public function getTotalRecettes($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT SUM(rd.montant) as total
            FROM recettes_data rd
            WHERE rd.annee = :annee
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetch()['total'];
    }

    /**
     * Récupère les recettes fiscales détaillées
     */
    public function getRecettesFiscales($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                scr.nom as sous_categorie,
                rd.montant
            FROM recettes_data rd
            JOIN sous_categories_recettes scr ON rd.sous_categorie_recette_id = scr.id
            JOIN categories_recettes cr ON scr.categorie_recette_id = cr.id
            WHERE rd.annee = :annee
            AND cr.nom = 'Impots'
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère les recettes douanières détaillées
     */
    public function getRecettesDouanieres($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                scr.nom as sous_categorie,
                rd.montant
            FROM recettes_data rd
            JOIN sous_categories_recettes scr ON rd.sous_categorie_recette_id = scr.id
            JOIN categories_recettes cr ON scr.categorie_recette_id = cr.id
            WHERE rd.annee = :annee
            AND cr.nom = 'Douanes'
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère les recettes non fiscales détaillées
     */
    public function getRecettesNonFiscales($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                scr.nom as sous_categorie,
                rd.montant
            FROM recettes_data rd
            JOIN sous_categories_recettes scr ON rd.sous_categorie_recette_id = scr.id
            JOIN categories_recettes cr ON scr.categorie_recette_id = cr.id
            WHERE rd.annee = :annee
            AND cr.nom = 'Recettes non fiscales'
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère les dons détaillés
     */
    public function getDons($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                scr.nom as sous_categorie,
                rd.montant
            FROM recettes_data rd
            JOIN sous_categories_recettes scr ON rd.sous_categorie_recette_id = scr.id
            JOIN categories_recettes cr ON scr.categorie_recette_id = cr.id
            WHERE rd.annee = :annee
            AND cr.nom = 'Dons'
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère la variation des recettes entre deux années
     */
    public function getVariationRecettes($categorie, $annee_actuelle = 2025, $annee_precedente = 2024) {
        $stmt = $this->db->prepare("
            SELECT 
                SUM(CASE WHEN rd.annee = :annee_actuelle THEN rd.montant ELSE 0 END) as montant_actuel,
                SUM(CASE WHEN rd.annee = :annee_precedente THEN rd.montant ELSE 0 END) as montant_precedent
            FROM recettes_data rd
            JOIN sous_categories_recettes scr ON rd.sous_categorie_recette_id = scr.id
            JOIN categories_recettes cr ON scr.categorie_recette_id = cr.id
            WHERE cr.nom = :categorie
            AND rd.annee IN (:annee_actuelle, :annee_precedente)
        ");
        $stmt->execute([
            'categorie' => $categorie,
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