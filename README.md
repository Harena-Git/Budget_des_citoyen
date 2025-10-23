# Budget Citoyen 2025

### Présentation du projet

Ce projet a pour objectif de rendre la **lecture de la Loi de Finances 2025** plus claire, interactive et accessible pour le grand public.  
Plutôt que de parcourir un long document PDF, notre site web propose une **navigation fluide et conviviale** à travers les principales sections du *Budget des citoyens relatif à la loi de finances 2025*.

Ce travail s’inscrit dans le cadre d’un **projet universitaire**, visant à expérimenter la mise en place d’une architecture MVC légère avec **PHP Flight**, tout en exploitant une **base de données PostgreSQL** issue du document officiel.

---

## Objectifs

- Présenter les informations budgétaires de manière **plus intuitive et interactive**  
- Faciliter la compréhension du budget par les citoyens  
- Expérimenter la **conception d’une application web MVC** avec PHP Flight  
- Structurer les données budgétaires dans une **base PostgreSQL claire et cohérente**

---

## Technologies utilisées

| Composant | Technologie |
|------------|-------------|
| Langage backend | PHP |
| Framework MVC | [Flight PHP](https://flightphp.com/) |
| Base de données | PostgreSQL |
| Nom de la base | `bclf` |
| Frontend / Style | HTML, CSS |
| Modélisation de la base | [Modèle dbdiagram.io – LF_Budget2025](https://dbdiagram.io/d/LF_Budget2025-68f7b5fa2e68d21b418f6cad) |

---

## Installation et exécution

### 1️⃣ Prérequis

Avant de commencer, assurez-vous d’avoir installé :
- [PHP](https://www.php.net/) (version ≥ 8.0)
- [PostgreSQL](https://www.postgresql.org/)

---

### 2️⃣ Cloner le dépôt

```bash
git clone https://github.com/Harena-Git/Budget_des_citoyen.git
cd Budget_des_citoyen
```

### 3️⃣ Configurer la base de données

Créez une base de données PostgreSQL nommée bclf

Importez les tables selon le modèle suivant :
👉 Modèle de base de données LF_Budget2025

Mettez à jour les informations de connexion dans le fichier de configuration, par exemple :

define('DB_HOST', 'localhost');
define('DB_NAME', 'bclf');
define('DB_USER', 'postgres');
define('DB_PASS', 'votre_mot_de_passe');

### 4️⃣ Lancer le serveur local

Dans le répertoire du projet, exécutez :

php -S localhost:8000 -t public


Puis ouvrez http://localhost:8000
 dans votre navigateur.

## Fonctionnalités prévues

Navigation fluide entre les chapitres et sections du budget

Présentation simplifiée et agréable des informations

Liens entre catégories et sous-catégories budgétaires

Interface claire et légère pour le grand public

## Contributeurs
Nom	Pseudo GitHub
Harena	@Harena-Git

Ny Voary	@NyVoary

## Source officielle

Les données utilisées dans ce projet proviennent du document officiel :
Budget des citoyens relatif à la Loi de Finances 2025