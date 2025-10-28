<?php

namespace app\controllers;

use app\models\Database;
use app\models\RecettesModel;
use flight\Engine;

class RecettesController {
    private $app;
    private $recettesModel;

    public function __construct(Engine $app) {
        $this->app = $app;
        
        // Récupère la config et initialise la connexion DB
        $config = require __DIR__ . '/../config/config.php';
        $db = Database::getInstance($config['database'])->getConnection();
        
        // Initialise le modèle
        $this->recettesModel = new RecettesModel($db);
    }

    /**
     * Affiche la vue d'ensemble des recettes
     */
    public function index() {
        $annee = 2025;
        $annee_precedente = 2024;

        try {
            // Récupère les données
            $total = $this->recettesModel->getTotalRecettes($annee);
            $fiscales = $this->recettesModel->getRecettesFiscales($annee);
            $douanes = $this->recettesModel->getRecettesDouanieres($annee);
            $non_fiscales = $this->recettesModel->getRecettesNonFiscales($annee);
            $dons = $this->recettesModel->getDons($annee);

            // Calcule les variations
            $var_fiscales = $this->recettesModel->getVariationRecettes('Impots', $annee, $annee_precedente);
            $var_douanes = $this->recettesModel->getVariationRecettes('Douanes', $annee, $annee_precedente);
            $var_non_fiscales = $this->recettesModel->getVariationRecettes('Recettes non fiscales', $annee, $annee_precedente);
            $var_dons = $this->recettesModel->getVariationRecettes('Dons', $annee, $annee_precedente);

            // Prépare les données pour la vue
            $data = [
                'total' => $total,
                'categories' => [
                    'fiscales' => [
                        'montant' => array_sum(array_column($fiscales, 'montant')),
                        'variation' => $var_fiscales['variation_pourcentage']
                    ],
                    'douanes' => [
                        'montant' => array_sum(array_column($douanes, 'montant')),
                        'variation' => $var_douanes['variation_pourcentage']
                    ],
                    'non_fiscales' => [
                        'montant' => array_sum(array_column($non_fiscales, 'montant')),
                        'variation' => $var_non_fiscales['variation_pourcentage']
                    ],
                    'dons' => [
                        'montant' => array_sum(array_column($dons, 'montant')),
                        'variation' => $var_dons['variation_pourcentage']
                    ]
                ]
            ];

            // Rend la vue avec les données
            $this->app->render('pages/recettes', $data);

        } catch (\Exception $e) {
            // En cas d'erreur
            $this->app->render('pages/recettes', [
                'error' => 'Erreur lors du chargement des données: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Affiche les recettes fiscales détaillées
     */
    public function fiscales() {
        try {
            $data = [
                'recettes' => $this->recettesModel->getRecettesFiscales(2025),
                'variation' => $this->recettesModel->getVariationRecettes('Impots', 2025, 2024)
            ];
            $this->app->render('pages/recettes-fiscales', $data);
        } catch (\Exception $e) {
            $this->app->render('pages/recettes-fiscales', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Affiche les recettes douanières détaillées
     */
    public function douanes() {
        try {
            $data = [
                'recettes' => $this->recettesModel->getRecettesDouanieres(2025),
                'variation' => $this->recettesModel->getVariationRecettes('Douanes', 2025, 2024)
            ];
            $this->app->render('pages/recettes-douanes', $data);
        } catch (\Exception $e) {
            $this->app->render('pages/recettes-douanes', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Affiche les recettes non fiscales détaillées
     */
    public function nonFiscales() {
        try {
            $data = [
                'recettes' => $this->recettesModel->getRecettesNonFiscales(2025),
                'variation' => $this->recettesModel->getVariationRecettes('Recettes non fiscales', 2025, 2024)
            ];
            $this->app->render('pages/recettes-non-fiscales', $data);
        } catch (\Exception $e) {
            $this->app->render('pages/recettes-non-fiscales', ['error' => $e->getMessage()]);
        }
    }

    /**
     * Affiche les dons détaillés
     */
    public function dons() {
        try {
            $data = [
                'dons' => $this->recettesModel->getDons(2025),
                'variation' => $this->recettesModel->getVariationRecettes('Dons', 2025, 2024)
            ];
            $this->app->render('pages/recettes-dons', $data);
        } catch (\Exception $e) {
            $this->app->render('pages/recettes-dons', ['error' => $e->getMessage()]);
        }
    }
}