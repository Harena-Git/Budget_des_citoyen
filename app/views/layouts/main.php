<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? $title . ' - ' : '' ?>Budget des Citoyens 2025</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="header-content">
            <h1>Budget des Citoyens 2025</h1>
            <p class="subtitle">Loi de Finances | Repoblikan'i Madagasikara</p>
        </div>
    </header>

    <!-- NAVIGATION -->
    <nav>
        <ul>
            <?php
            use app\helpers\ViewHelper;
            
            $currentPath = $_SERVER['REQUEST_URI'];
            echo ViewHelper::generateNavLink('/', 'Accueil', $currentPath === '/');
            echo ViewHelper::generateNavLink('/perspectives-economiques', 'Perspectives', strpos($currentPath, 'perspectives') !== false);
            echo ViewHelper::generateNavLink('/recettes', 'Recettes', strpos($currentPath, 'recettes') !== false);
            echo ViewHelper::generateNavLink('/depenses', 'Dépenses', strpos($currentPath, 'depenses') !== false);
            echo ViewHelper::generateNavLink('/deficit', 'Déficit', strpos($currentPath, 'deficit') !== false);
            ?>
        </ul>
    </nav>

    <?php if (isset($breadcrumb)): ?>
        <?= ViewHelper::generateBreadcrumb($breadcrumb) ?>
    <?php endif; ?>

    <!-- MAIN CONTENT -->
    <main>
        <?php if (isset($error)): ?>
            <div class="error-message">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php endif; ?>

        <?= isset($content) ? $content : '' ?>
    </main>

    <!-- FOOTER -->
    <footer>
        <p><strong>Ministère de l'Économie et des Finances</strong></p>
        <p>Direction Générale du Budget et des Finances | Budget des Citoyens 2025</p>
    </footer>
</body>
</html>