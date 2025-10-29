<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Budget des Citoyens 2025 - Madagascar</title>
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
      <li><a href="/" class="active">Accueil</a></li>
      <li><a href="/perspectives-economiques">Perspectives</a></li>
      <li><a href="/recettes">Recettes</a></li>
      <li><a href="/depenses">Dépenses</a></li>
      <li><a href="/deficit">Déficit</a></li>
    </ul>
  </nav>

  <!-- MAIN CONTENT -->
  <main>
    <?php
    // Définitions par défaut si la vue est rendue sans controller
    $recettes_total = $recettes_total ?? 0;
    $depenses_total = $depenses_total ?? 0;
    $deficit = $deficit ?? 0;
    $recettes_variation = $recettes_variation ?? 0;
    $depenses_variation = $depenses_variation ?? 0;
    $impots = $impots ?? 0;
    $douanes = $douanes ?? 0;
    $non_fiscales = $non_fiscales ?? 0;
    $dons = $dons ?? 0;
    $investissements = $investissements ?? 0;
    $salaires = $salaires ?? 0;
    $fonctionnement = $fonctionnement ?? 0;
    $dette = $dette ?? 0;
    $croissance_pib = $croissance_pib ?? 0;
    $croissance_pib_precedent = $croissance_pib_precedent ?? 0;
    ?>
    
    <!-- CHIFFRES CLÉS -->
    <section class="card">
      <h2>Chiffres Clés 2025</h2>
      <div class="stats-grid">
        <div class="stat-box">
          <div class="label">Recettes + Dons</div>
          <div class="value"><?= number_format($recettes_total, 0, ',', ' ') ?> Mds Ar</div>
          <div class="change">+<?= $recettes_variation ?>% vs 2024</div>
        </div>
        <div class="stat-box negative">
          <div class="label">Dépenses Totales</div>
          <div class="value"><?= number_format($depenses_total, 0, ',', ' ') ?> Mds Ar</div>
          <div class="change">+<?= $depenses_variation ?>% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Croissance PIB</div>
          <div class="value"><?= $croissance_pib ?>%</div>
          <div class="change">vs <?= $croissance_pib_precedent ?>% en 2024</div>
        </div>
        <div class="stat-box negative">
          <div class="label">Déficit Budgétaire</div>
          <div class="value"><?= number_format($deficit, 0, ',', ' ') ?> Mds Ar</div>
          <div class="change">4,1% du PIB</div>
        </div>
      </div>
    </section>

    <!-- SANKEY SIMPLIFIÉ -->
    <section class="card">
      <h2>Flux Budgétaire 2025</h2>
      <div class="sankey-diagram">
        <div class="sankey-source">
          <div class="sankey-item">Impôts<br><?= number_format($impots, 0, ',', ' ') ?> Mds</div>
          <div class="sankey-item">Douanes<br><?= number_format($douanes, 0, ',', ' ') ?> Mds</div>
          <div class="sankey-item">Non Fiscales<br><?= number_format($non_fiscales, 0, ',', ' ') ?> Mds</div>
          <div class="sankey-item">Dons<br><?= number_format($dons, 0, ',', ' ') ?> Mds</div>
        </div>
        <div class="sankey-flow">→</div>
        <div class="sankey-target">
          <div class="sankey-item">Investissements<br><?= number_format($investissements, 0, ',', ' ') ?> Mds</div>
          <div class="sankey-item">Salaires<br><?= number_format($salaires, 0, ',', ' ') ?> Mds</div>
          <div class="sankey-item">Fonctionnement<br><?= number_format($fonctionnement, 0, ',', ' ') ?> Mds</div>
          <div class="sankey-item">Dette<br><?= number_format($dette, 0, ',', ' ') ?> Mds</div>
        </div>
      </div>
    </section>

    <!-- RÉSUMÉ EXÉCUTIF -->
    <section class="card">
      <h2>Résumé Exécutif</h2>
      <p>La <span class="highlight">Loi de Finances 2025</span> reflète l'engagement du gouvernement malgache vers une croissance économique inclusive et durable. Avec un budget total de 16 305 milliards d'Ariary, l'année 2025 marque une augmentation significative des investissements publics (+82,9%), notamment dans :</p>
      <ul class="styled-list">
        <li><strong>Énergie et transition écologique</strong> : 150 MW de centrales solaires, projets hydroélectriques</li>
        <li><strong>Agriculture durable</strong> : Production d'un million de tonnes de paddy supplémentaires</li>
        <li><strong>Infrastructures</strong> : RN13, autoroute Antananarivo-Toamasina, train urbain</li>
        <li><strong>Santé et éducation</strong> : 6 650 nouveaux postes budgétaires</li>
      </ul>
      <p>Le taux de pression fiscale atteint 11,2%, grâce à des réformes majeures incluant la <strong>Taxe sur les Transactions Mobiles (TTM)</strong> et la rationalisation des exonérations.</p>
    </section>

    <!-- NAVIGATION RAPIDE -->
    <section class="card">
      <h2>Explorer le Budget</h2>
      <div class="stats-grid">
        <a href="/perspectives-economiques" style="text-decoration: none;">
          <div class="stat-box">
            <div class="label">PERSPECTIVES ÉCONOMIQUES</div>
            <div class="change">Croissance sectorielle</div>
          </div>
        </a>
        <a href="/recettes" style="text-decoration: none;">
          <div class="stat-box">
            <div class="label">RECETTES</div>
            <div class="change">Fiscales, douanières, dons</div>
          </div>
        </a>
        <a href="/depenses" style="text-decoration: none;">
          <div class="stat-box">
            <div class="label">DÉPENSES</div>
            <div class="change">Par nature et ministère</div>
          </div>
        </a>
        <a href="/deficit" style="text-decoration: none;">
          <div class="stat-box negative">
            <div class="label">DÉFICIT & FINANCEMENT</div>
            <div class="change">4,1% du PIB</div>
          </div>
        </a>
      </div>
    </section>

  </main>

  <!-- FOOTER -->
  <footer>
    <p><strong>Ministère de l'Économie et des Finances</strong></p>
    <p>Direction Générale du Budget et des Finances | Budget des Citoyens 2025</p>
    <p>Harena & Ny Voary</p>
    <p style="font-size: 0.9rem; opacity: 0.8;">Document simplifié pour la transparence budgétaire</p>
  </footer>

</body>
</html>