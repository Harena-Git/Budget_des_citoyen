<?php

namespace app\models;

use PDO;
use PDOException;

/**
 * Classe Database - Gère la connexion PostgreSQL
 * Utilise le pattern Singleton pour une seule instance
 */
class Database {
    private static $instance = null;
    private $pdo;

    /**
     * Constructeur privé - empêche l'instanciation directe
     */
    private function __construct($config) {
        try {
            $dsn = sprintf(
                "pgsql:host=localhost;port=5432;dbname=budget_citoyen",
                $config['host'],
                $config['port'],
                $config['dbname']
            );
            
            $this->pdo = new PDO(
                $dsn,
                $config['user'],
                $config['password'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false
                ]
            );
        } catch (PDOException $e) {
            throw new PDOException("Erreur de connexion à la base de données: " . $e->getMessage());
        }
    }

    /**
     * Récupère l'instance unique de Database
     */
    public static function getInstance($config) {
        if (self::$instance === null) {
            self::$instance = new self($config);
        }
        return self::$instance;
    }

    /**
     * Retourne l'objet PDO
     */
    public function getConnection() {
        return $this->pdo;
    }

    /**
     * Empêche le clonage de l'instance
     */
    private function __clone() {}

    /**
     * Empêche la désérialisation de l'instance
     */
    public function __wakeup() {
        throw new \Exception("Cannot unserialize singleton");
    }
}
