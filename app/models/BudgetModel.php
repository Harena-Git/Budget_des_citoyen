<?php

namespace app\models;

use PDO;

/**
 * BudgetModel - Récupère les données budgétaires pour la page d'accueil
 */
class BudgetModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Récupère les chiffres clés pour l'année donnée
     * Retourne: recettes totales, dépenses totales, déficit
     */
    public function getChiffresCles($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                recettes_et_dons,
                depenses_totales,
                (depenses_totales - recettes_et_dons) as deficit
            FROM deficit_situations
            WHERE annee = :annee
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetch();
    }

    /**
     * Récupère le total des recettes par catégorie pour une année
     * Retourne: Impôts, Douanes, Non fiscales, Dons
     */
    public function getRecettesParCategorie($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                cr.nom as categorie,
                SUM(rd.montant) as total
            FROM recettes_data rd
            JOIN sous_categories_recettes scr ON rd.sous_categorie_recette_id = scr.id
            JOIN categories_recettes cr ON scr.categorie_recette_id = cr.id
            WHERE rd.annee = :annee
            GROUP BY cr.id, cr.nom
            ORDER BY cr.id
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère les dépenses par nature pour une année
     * Retourne: Investissements, Salaires, Fonctionnement, Dette
     */
    public function getDepensesParNature($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                tdn.nom as type_depense,
                SUM(dn.montant) as total
            FROM depenses_nature dn
            JOIN types_depenses_nature tdn ON dn.type_depense_nature_id = tdn.id
            WHERE dn.annee = :annee
            GROUP BY tdn.id, tdn.nom
            ORDER BY total DESC
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Calcule la variation en pourcentage entre deux années
     */
    public function getVariationAnnuelle($annee_actuelle = 2025, $annee_precedente = 2024) {
        $stmt = $this->db->prepare("
            SELECT 
                current.recettes_et_dons as recettes_actuelle,
                previous.recettes_et_dons as recettes_precedente,
                current.depenses_totales as depenses_actuelle,
                previous.depenses_totales as depenses_precedente
            FROM deficit_situations current
            CROSS JOIN deficit_situations previous
            WHERE current.annee = :annee_actuelle 
            AND previous.annee = :annee_precedente
        ");
        $stmt->execute([
            'annee_actuelle' => $annee_actuelle,
            'annee_precedente' => $annee_precedente
        ]);
        
        $data = $stmt->fetch();
        
        if ($data) {
            return [
                'recettes_variation' => $this->calculerPourcentage(
                    $data['recettes_precedente'], 
                    $data['recettes_actuelle']
                ),
                'depenses_variation' => $this->calculerPourcentage(
                    $data['depenses_precedente'], 
                    $data['depenses_actuelle']
                )
            ];
        }
        
        return null;
    }

    /**
     * Calcule le pourcentage de variation
     */
    private function calculerPourcentage($valeur_ancienne, $valeur_nouvelle) {
        if ($valeur_ancienne == 0) return 0;
        return round((($valeur_nouvelle - $valeur_ancienne) / $valeur_ancienne) * 100, 1);
    }

    /**
     * Formate un montant en milliards d'Ariary
     */
    public function formaterMontant($montant) {
        return number_format($montant, 0, ',', ' ') . ' Mds Ar';
    }

    /**
     * Récupère toutes les données nécessaires pour la page d'accueil
     */
    public function getDonneesAccueil($annee = 2025) {
        return [
            'chiffres_cles' => $this->getChiffresCles($annee),
            'recettes' => $this->getRecettesParCategorie($annee),
            'depenses' => $this->getDepensesParNature($annee),
            'variations' => $this->getVariationAnnuelle($annee, $annee - 1)
        ];
    }
}
