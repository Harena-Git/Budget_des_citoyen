<?php

namespace app\models;

use PDO;

class DeficitModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    /**
     * Récupère la situation du déficit pour une année donnée
     */
    public function getSituationDeficit($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                recettes_et_dons,
                depenses_totales,
                (depenses_totales - recettes_et_dons) as montant_deficit
            FROM deficit_situations
            WHERE annee = :annee
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetch();
    }

    /**
     * Récupère le financement du déficit par type
     */
    public function getFinancementDeficit($annee = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                tfd.nom as type_financement,
                fd.montant
            FROM financements_deficit fd
            JOIN types_financement_deficit tfd ON fd.type_financement_deficit_id = tfd.id
            WHERE fd.annee = :annee
        ");
        $stmt->execute(['annee' => $annee]);
        return $stmt->fetchAll();
    }

    /**
     * Calcule le pourcentage du déficit par rapport au PIB
     * Note: Pour l'instant, utilise une valeur fixe du PIB 2025
     */
    public function getPourcentagePIB($montant_deficit) {
        // PIB estimé 2025 en milliards d'Ariary (à ajuster selon les données réelles)
        $pib_2025 = 88800;
        return ($montant_deficit / $pib_2025) * 100;
    }

    /**
     * Récupère l'évolution du déficit sur plusieurs années
     */
    public function getEvolutionDeficit($annee_debut = 2024, $annee_fin = 2025) {
        $stmt = $this->db->prepare("
            SELECT 
                annee,
                recettes_et_dons,
                depenses_totales,
                (depenses_totales - recettes_et_dons) as montant_deficit
            FROM deficit_situations
            WHERE annee BETWEEN :annee_debut AND :annee_fin
            ORDER BY annee
        ");
        $stmt->execute([
            'annee_debut' => $annee_debut,
            'annee_fin' => $annee_fin
        ]);
        return $stmt->fetchAll();
    }

    /**
     * Récupère toutes les données concernant le déficit pour une année
     */
    public function getDonneesDeficit($annee = 2025) {
        $situation = $this->getSituationDeficit($annee);
        $financement = $this->getFinancementDeficit($annee);
        
        if ($situation) {
            $montant_deficit = $situation['montant_deficit'];
            $pourcentage_pib = $this->getPourcentagePIB($montant_deficit);
            
            return [
                'situation' => [
                    'recettes_et_dons' => $situation['recettes_et_dons'],
                    'depenses_totales' => $situation['depenses_totales'],
                    'montant_deficit' => $montant_deficit,
                    'pourcentage_pib' => $pourcentage_pib
                ],
                'financement' => $financement
            ];
        }
        return null;
    }
}