<?php

namespace app\models;

use PDO;

class PerspectivesModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Récupère les indicateurs macroéconomiques pour une année
     */
    public function getIndicateursMacro($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                indicateur,
                valeur,
                variation
            FROM perspectives_indicateurs_macro 
            WHERE annee = :annee
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère les prévisions macroéconomiques sur 3 ans
     */
    public function getPrevisionsMacro($annee_debut = 2024) {
        $stmt = $this->db->prepare("
            SELECT 
                agregat,
                annee,
                valeur
            FROM perspectives_previsions_macro
            WHERE annee BETWEEN :annee_debut AND :annee_fin
            ORDER BY agregat, annee
        ");
        $stmt->execute([
            'annee_debut' => $annee_debut,
            'annee_fin' => $annee_debut + 2
        ]);
        
        $resultats = [];
        while ($row = $stmt->fetch()) {
            $resultats[$row['agregat']][$row['annee']] = $row['valeur'];
        }
        return $resultats;
    }

    /**
     * Récupère les taux de croissance par secteur
     */
    public function getCroissanceSectorielle($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                secteur,
                sous_secteur,
                taux_croissance_precedent,
                taux_croissance,
                variation
            FROM perspectives_croissance_sectorielle
            WHERE annee = :annee
            ORDER BY secteur, sous_secteur
        ");
        $stmt->execute(['annee' => $annee]);
        
        $resultats = [];
        while ($row = $stmt->fetch()) {
            if (!isset($resultats[$row['secteur']])) {
                $resultats[$row['secteur']] = [];
            }
            $resultats[$row['secteur']][] = $row;
        }
        return $resultats;
    }

    /**
     * Récupère les créations de postes budgétaires
     */
    public function getPostesBudgetaires($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                ministere,
                postes_autorises
            FROM perspectives_postes_budgetaires
            WHERE annee = :annee
            ORDER BY postes_autorises DESC
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère les secteurs porteurs avec leurs détails
     */
    public function getSecteursPorteurs($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                secteur,
                croissance,
                points_cles
            FROM perspectives_secteurs_porteurs
            WHERE annee = :annee
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }
}