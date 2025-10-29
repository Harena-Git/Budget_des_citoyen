<?php

namespace app\controllers;

use app\helpers\ViewHelper;
use app\models\Database;
use app\models\DepensesModel;
use flight\Engine;

class DepensesController {
    private $app;
    private $depensesModel;

    public function __construct(Engine $app) {
        $this->app = $app;
        
        // Récupère la config et initialise la connexion DB
        $config = require __DIR__ . '/../config/config.php';
        $db = Database::getInstance($config['database'])->getConnection();
        
        // Initialise le modèle
        $this->depensesModel = new DepensesModel($db);
    }

    /**
     * Affiche la vue d'ensemble des dépenses
     */
    public function index() {
        try {
            // Récupère les données
            $total = $this->depensesModel->getTotalDepenses(2025);
            $depenses_par_nature = $this->depensesModel->getDepensesParNature(2025);
            $details_dette = $this->depensesModel->getDetailsDette(2025);

            // Calcule les variations pour chaque type de dépense
            $variations = [];
            foreach ($depenses_par_nature as $depense) {
                $variations[$depense['type_depense']] = $this->depensesModel->getVariationDepenses(
                    $depense['type_depense'],
                    2025,
                    2024
                );
            }

            // Prépare les données pour la vue
            $viewHelper = new ViewHelper();

            // Calculer des montants résumé par recherche de mots-clés dans les types
            $investissements = 0;
            $masse_salariale = 0;
            $fonctionnement = 0;
            $interets_dette = 0;

            foreach ($depenses_par_nature as $d) {
                $type = strtolower($d['type_depense'] ?? $d['type'] ?? '');
                $montant = $d['total'] ?? $d['montant'] ?? 0;
                if (strpos($type, 'invest') !== false || strpos($type, 'pip') !== false) {
                    $investissements += $montant;
                } elseif (strpos($type, 'masse') !== false || strpos($type, 'salaire') !== false) {
                    $masse_salariale += $montant;
                } elseif (strpos($type, 'biens') !== false || strpos($type, 'fonction') !== false) {
                    $fonctionnement += $montant;
                } elseif (strpos($type, 'dette') !== false || strpos($type, 'interet') !== false) {
                    $interets_dette += $montant;
                }
            }

            // Si details_dette contient montants, utiliser pour interets
            if (is_array($details_dette) && count($details_dette) > 0) {
                foreach ($details_dette as $dd) {
                    if (isset($dd['interets'])) $interets_dette += $dd['interets'];
                }
            }

            $part_investissement = ($total > 0) ? ($investissements / $total) * 100 : 0;

            $data = [
                'total' => $total,
                'depenses_par_nature' => $depenses_par_nature,
                'details_dette' => $details_dette,
                'variations' => $variations,
                'investissements' => $investissements,
                'masse_salariale' => $masse_salariale,
                'fonctionnement' => $fonctionnement,
                'interets_dette' => $interets_dette,
                'part_investissement' => $part_investissement,
                'helper' => $viewHelper
            ];

            // Rend la vue avec les données
            $this->app->render('pages/depenses', $data);

        } catch (\Exception $e) {
            $this->app->render('pages/depenses', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Affiche les dépenses par nature économique
     */
    public function nature() {
        try {
            $data = [
                'depenses' => $this->depensesModel->getDepensesParNature(2025),
                'dette' => $this->depensesModel->getDetailsDette(2025),
                'helper' => new ViewHelper()
            ];
            $this->app->render('pages/depenses-nature', $data);
        } catch (\Exception $e) {
            $this->app->render('pages/depenses-nature', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Affiche les dépenses par ministère
     */
    public function ministeres() {
        try {
            $depenses = $this->depensesModel->getDepensesParMinistere(2025);
            $this->app->render('pages/depenses-ministeres', ['depenses' => $depenses, 'helper' => new ViewHelper()]);
        } catch (\Exception $e) {
            $this->app->render('pages/depenses-ministeres', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Affiche les programmes d'investissement public (PIP)
     */
    public function investissements() {
        try {
            $projets = $this->depensesModel->getProjetsPIP(2025);
            
            // Organise les projets par catégorie
            $projets_par_categorie = [];
            foreach ($projets as $projet) {
                if (!isset($projets_par_categorie[$projet['categorie']])) {
                    $projets_par_categorie[$projet['categorie']] = [];
                }
                $projets_par_categorie[$projet['categorie']][] = $projet;
            }

            $this->app->render('pages/depenses-investissements', [
                'projets' => $projets_par_categorie,
                'helper' => new ViewHelper()
            ]);
        } catch (\Exception $e) {
            $this->app->render('pages/depenses-investissements', ['error' => $e->getMessage()]);
        }
    }
}