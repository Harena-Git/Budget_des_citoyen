<?php
Flight::register('db', 'PDO', array(
    'pgsql:host=localhost;port=5432;dbname=budget_des_citoyen',
    'postgres',        // ton utilisateur PostgreSQL
    'harena'       // ton mot de passe
), function ($db) {
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
});