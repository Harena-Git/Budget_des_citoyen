<?php

namespace app\controllers;

use app\models\Database;
use app\models\BudgetModel;
use flight\Engine;

/**
 * HomeController - Gère l'affichage de la page d'accueil
 */
class HomeController {
    private $app;
    private $budgetModel;

    public function __construct(Engine $app) {
        $this->app = $app;
        
        // Récupère la config et initialise la connexion DB
        $config = require __DIR__ . '/../config/config.php';
        $db = Database::getInstance($config['database'])->getConnection();
        
        // Initialise le modèle
        $this->budgetModel = new BudgetModel($db);
    }

    /**
     * Affiche la page d'accueil avec les données de la BD
     */
    public function index() {
        try {
            // Récupère toutes les données nécessaires
            $data = $this->budgetModel->getDonneesAccueil(2025);
            
            // Prépare les données formatées pour la vue
            $viewData = $this->prepareViewData($data);
            
            // Rend la vue avec les données
            $this->app->render('pages/index', $viewData);
            
        } catch (\Exception $e) {
            // En cas d'erreur, affiche un message
            $this->app->render('pages/index', [
                'error' => 'Erreur lors du chargement des données: ' . $e->getMessage()
            ]);
        }
    }

    /**
     * Prépare et formate les données pour la vue
     */
    private function prepareViewData($data) {
        $chiffres = $data['chiffres_cles'];
        $variations = $data['variations'];
        
        // Organise les recettes par catégorie
        $recettes = [];
        foreach ($data['recettes'] as $recette) {
            $recettes[$recette['categorie']] = $recette['total'];
        }
        
        // Organise les dépenses par nature
        $depenses = [];
        foreach ($data['depenses'] as $depense) {
            $depenses[$depense['type_depense']] = $depense['total'];
        }
        
        return [
            // Chiffres clés
            'recettes_total' => $chiffres['recettes_et_dons'],
            'depenses_total' => $chiffres['depenses_totales'],
            'deficit' => $chiffres['deficit'],
            
            // Variations
            'recettes_variation' => $variations['recettes_variation'] ?? 0,
            'depenses_variation' => $variations['depenses_variation'] ?? 0,
            
            // Recettes détaillées
            'impots' => $recettes['Impots'] ?? 0,
            'douanes' => $recettes['Douanes'] ?? 0,
            'non_fiscales' => $recettes['Recettes non fiscales'] ?? 0,
            'dons' => $recettes['Dons'] ?? 0,
            
            // Dépenses détaillées
            'investissements' => $depenses['Investissements (PIP)'] ?? 0,
            'salaires' => $depenses['Masse salariale'] ?? 0,
            'fonctionnement' => $depenses['Biens et services'] ?? 0,
            'dette' => $depenses['Dette publique'] ?? 0,
            
            // Croissance PIB (valeur fixe pour l'instant)
            'croissance_pib' => 5.0,
            'croissance_pib_precedent' => 4.4
        ];
    }
}
