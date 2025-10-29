<?php

namespace app\controllers;

use app\models\Database;
use app\models\PerspectivesModel;
use flight\Engine;

class PerspectivesController {
    private $app;
    private $perspectivesModel;
    
    public function __construct(Engine $app) {
        $this->app = $app;
        
        // Récupère la config et initialise la connexion DB
        $config = require __DIR__ . '/../config/config.php';
        $db = Database::getInstance($config['database'])->getConnection();
        
        // Initialise le modèle
        $this->perspectivesModel = new PerspectivesModel($db);
    }

    /**
     * Page principale des perspectives économiques
     */
    public function index() {
        $annee = 2025;
        $annee_debut = 2024;

        try {
            // Récupère toutes les données nécessaires
            $indicateurs = $this->perspectivesModel->getIndicateursMacro($annee);
            $previsions = $this->perspectivesModel->getPrevisionsMacro($annee_debut);
            $croissances = $this->perspectivesModel->getCroissanceSectorielle($annee);
            $postes = $this->perspectivesModel->getPostesBudgetaires($annee);
            $secteurs_porteurs = $this->perspectivesModel->getSecteursPorteurs($annee);

            // Prépare les données pour la vue
            $data = [
                'annee' => $annee,
                'annee_debut' => $annee_debut,
                'indicateurs' => $indicateurs,
                'previsions' => $previsions,
                'croissances' => $croissances,
                'postes' => $postes,
                'secteurs_porteurs' => $secteurs_porteurs
            ];

            // Rend la vue avec les données
            $this->app->render('pages/perspectives-economiques', $data);

        } catch (\Exception $e) {
            // En cas d'erreur
            $this->app->render('pages/perspectives-economiques', [
                'error' => 'Erreur lors du chargement des données: ' . $e->getMessage()
            ]);
        }
    }
}