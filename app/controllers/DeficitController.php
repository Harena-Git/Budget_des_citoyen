<?php

namespace app\controllers;

use app\helpers\ViewHelper;
use app\models\Database;
use app\models\DeficitModel;
use flight\Engine;

class DeficitController {
    private $app;
    private $deficitModel;

    public function __construct(Engine $app) {
        $this->app = $app;
        
        // Récupère la config et initialise la connexion DB
        $config = require __DIR__ . '/../config/config.php';
        $db = Database::getInstance($config['database'])->getConnection();
        
        // Initialise le modèle
        $this->deficitModel = new DeficitModel($db);
    }

    /**
     * Affiche la vue d'ensemble du déficit
     */
    public function index() {
        try {
            // Récupère toutes les données du déficit
            $donnees = $this->deficitModel->getDonneesDeficit(2025);
            
            if ($donnees) {
                // Prépare les données pour la vue
                $viewHelper = new ViewHelper();
                $situation = $donnees['situation'];
                $financement = $donnees['financement'];

                // Préparer des variables résumé pour les vues
                $recettes_totales = $situation['recettes_totales'] ?? ($situation['recettes_et_dons'] ?? 0);
                $depenses_totales = $situation['depenses_totales'] ?? ($situation['depenses'] ?? 0);
                $montant_deficit = $situation['montant_deficit'] ?? ($situation['deficit'] ?? 0);
                $solde_primaire = $situation['solde_primaire'] ?? ($situation['solde_primaire_mds'] ?? 0);

                $data = [
                    'situation' => $situation,
                    'financement' => $financement,
                    'recettes_totales' => $recettes_totales,
                    'depenses_totales' => $depenses_totales,
                    'deficit_total' => $montant_deficit,
                    'solde_primaire' => $solde_primaire,
                    'helper' => $viewHelper
                ];

                // Rend la vue avec les données
                $this->app->render('pages/deficit', $data);
            } else {
                throw new \Exception("Données non disponibles pour l'année 2025");
            }
        } catch (\Exception $e) {
            $this->app->render('pages/deficit', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Affiche la situation détaillée du déficit
     */
    public function situation() {
        try {
            $situation = $this->deficitModel->getSituationDeficit(2025);
            $evolution = $this->deficitModel->getEvolutionDeficit(2024, 2025);

            $data = [
                'situation_actuelle' => $situation,
                'evolution' => $evolution,
                'pourcentage_pib' => $this->deficitModel->getPourcentagePIB($situation['montant_deficit'])
            ];

            $data['helper'] = new ViewHelper();
            $this->app->render('pages/deficit-situation', $data);
        } catch (\Exception $e) {
            $this->app->render('pages/deficit-situation', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Affiche les détails du financement du déficit
     */
    public function financement() {
        try {
            $financement = $this->deficitModel->getFinancementDeficit(2025);
            
            // Calcule les totaux par type de financement
            $total_interieur = 0;
            $total_exterieur = 0;
            foreach ($financement as $f) {
                if ($f['type_financement'] === 'interieur') {
                    $total_interieur += $f['montant'];
                } else {
                    $total_exterieur += $f['montant'];
                }
            }

            $viewHelper = new ViewHelper();
            $data = [
                'financement' => $financement,
                'total_interieur' => $total_interieur,
                'total_exterieur' => $total_exterieur,
                'helper' => $viewHelper
            ];

            $this->app->render('pages/deficit-financement', $data);
        } catch (\Exception $e) {
            $this->app->render('pages/deficit-financement', ['error' => $e->getMessage()]);
        }
    }
}