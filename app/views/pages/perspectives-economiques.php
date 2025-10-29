<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perspectives Économiques 2025 - Budget des Citoyens</title>
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
  <li><a href="/">Accueil</a></li>
  <li><a href="/perspectives-economiques" class="active">Perspectives</a></li>
  <li><a href="/recettes">Recettes</a></li>
  <li><a href="/depenses">Dépenses</a></li>
  <li><a href="/deficit">Déficit</a></li>
    </ul>
  </nav>

  <!-- MAIN CONTENT -->
  <main>
    <?php
    // Définitions par défaut pour éviter les "Undefined variable" si la vue est rendue
    // directement (sans passer par le controller qui fournit les données).
    $indicateursMacro = $indicateursMacro ?? [];
    $previsionsMacro = $previsionsMacro ?? [];
    $croissanceSectorielle = $croissanceSectorielle ?? [];
    $postesBudgetaires = $postesBudgetaires ?? [];
    $secteursPorteurs = $secteursPorteurs ?? [];

    if (!isset($helper)) {
      // Fournir un helper minimal si ViewHelper n'est pas injecté par le controller.
      $helper = new class {
        public function formatNumber($n) {
          if ($n === null || $n === '') return '';
          if (is_numeric($n)) {
            // Si entier, pas de décimales ; sinon 1 décimale.
            return number_format($n, (floor($n) == $n) ? 0 : 1, ',', ' ');
          }
          return htmlspecialchars((string)$n, ENT_QUOTES, 'UTF-8');
        }
      };
    }
    ?>
    
    <!-- INTRODUCTION -->
    <section class="card">
      <h2>Perspectives Économiques 2025</h2>
      <p>En 2025, l'économie malgache devrait connaître une <strong>croissance de 5,0%</strong>, soutenue par des performances solides dans plusieurs secteurs stratégiques. Cette dynamique positive repose sur des investissements massifs dans l'agriculture, l'industrie extractive et le secteur tertiaire.</p>
    </section>

    <!-- INDICATEURS MACROÉCONOMIQUES CLÉS -->
    <section class="card">
      <h2>Indicateurs Macroéconomiques Clés</h2>
      <div class="stats-grid">
        <?php foreach ($indicateursMacro as $indicateur): ?>
          <?php
            $isNegative = ($indicateur['variation'] && $indicateur['variation'] < 0) ? 'negative' : '';
            $valeurFormatted = $helper->formatNumber($indicateur['valeur']);
            $variationText = $indicateur['variation'] 
              ? ($indicateur['variation'] > 0 ? '+' : '') . $indicateur['variation'] . ' pts vs 2024'
              : 'Moyenne période';
          ?>
          <div class="stat-box <?= $isNegative ?>">
            <div class="label"><?= $indicateur['indicateur'] ?></div>
            <div class="value"><?= $valeurFormatted ?></div>
            <div class="change"><?= $variationText ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- TABLEAU 1 : PRÉVISIONS MACROÉCONOMIQUES -->
    <section class="card">
      <h2>Tableau 1 : Prévisions Macroéconomiques (2024-2026)</h2>
      <table>
        <thead>
          <tr>
            <th>Agrégats Macroéconomiques</th>
            <th class="number">2024</th>
            <th class="number">2025</th>
            <th class="number">2026</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $previsions = [];
            foreach ($previsionsMacro as $prevision) {
              $previsions[$prevision['agregat']][$prevision['annee']] = $prevision['valeur'];
            }
            foreach ($previsions as $agregat => $annees):
          ?>
          <tr>
            <td><?= $agregat ?></td>
            <td class="number"><?= isset($annees[2024]) ? $helper->formatNumber($annees[2024]) : '' ?></td>
            <td class="number"><strong><?= isset($annees[2025]) ? $helper->formatNumber($annees[2025]) : '' ?></strong></td>
            <td class="number"><?= isset($annees[2026]) ? $helper->formatNumber($annees[2026]) : '' ?></td>
          </tr>
          <?php endforeach; ?>
          <tr>
            <td>Indice des prix (fin de période, %)</td>
            <td class="number">8,2</td>
            <td class="number"><strong>7,1</strong></td>
            <td class="number">7,2</td>
          </tr>
          <tr>
            <td>Ratio dépenses publiques (% PIB)</td>
            <td class="number">16,2</td>
            <td class="number"><strong>18,4</strong></td>
            <td class="number">17,8</td>
          </tr>
          <tr>
            <td>Solde global base caisse (% PIB)</td>
            <td class="number">-4,3</td>
            <td class="number"><strong>-4,1</strong></td>
            <td class="number">-4,1</td>
          </tr>
          <tr>
            <td>Solde primaire base caisse (Mds Ar)</td>
            <td class="number">214,2</td>
            <td class="number"><strong>1 097,6</strong></td>
            <td class="number">866,0</td>
          </tr>
          <tr>
            <td><strong>Taux de change (moyenne)</strong></td>
            <td class="number"></td>
            <td class="number"></td>
            <td class="number"></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;Dollars/Ariary</td>
            <td class="number">4 508,6</td>
            <td class="number"><strong>4 688,8</strong></td>
            <td class="number">4 853,2</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;Euro/Ariary</td>
            <td class="number">4 905,5</td>
            <td class="number"><strong>5 275,2</strong></td>
            <td class="number">5 532,7</td>
          </tr>
          <tr>
            <td><strong>Taux d'investissement (% PIB)</strong></td>
            <td class="number"></td>
            <td class="number"></td>
            <td class="number"></td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;Public</td>
            <td class="number">6,1</td>
            <td class="number"><strong>9,6</strong></td>
            <td class="number">8,3</td>
          </tr>
          <tr>
            <td>&nbsp;&nbsp;Privé</td>
            <td class="number">14,6</td>
            <td class="number"><strong>12,0</strong></td>
            <td class="number">13,7</td>
          </tr>
          <tr>
            <td>Taux de pression fiscale (% PIB)</td>
            <td class="number">10,6</td>
            <td class="number"><strong>11,2</strong></td>
            <td class="number">11,8</td>
          </tr>
        </tbody>
      </table>
      <p style="font-size: 0.9rem; color: #666; margin-top: 1rem;"><em>Source : LF 2025, Tome 1</em></p>
    </section>

    <!-- CROISSANCE SECTORIELLE : GRAPHIQUE -->
    <section class="card">
      <h2>Figure 1 : Évolution des Croissances Sectorielles</h2>
      <p>Comparaison entre la Loi de Finances Rectificative 2024 et la Loi de Finances Initiale 2025 :</p>
      
      <div class="chart-container">
        <div class="bar-chart">
          <div class="bar-item">
            <div class="bar-label">Secteur Primaire</div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 78%; background: linear-gradient(90deg, #388E3C 0%, #66BB6A 100%);">7,8%</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label">Secteur Secondaire</div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 34%; background: linear-gradient(90deg, #1565C0 0%, #42A5F5 100%);">3,4%</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label">Secteur Tertiaire</div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 54%; background: linear-gradient(90deg, #F57C00 0%, #FFB74D 100%);">5,4%</div>
            </div>
          </div>
        </div>
      </div>

      <div style="margin-top: 2rem; display: flex; gap: 2rem; flex-wrap: wrap;">
        <div style="flex: 1; min-width: 250px;">
          <h3 style="color: #388E3C;">Secteur Primaire : +7,8%</h3>
          <p>Forte croissance portée par l'agriculture (+9,5%)</p>
        </div>
        <div style="flex: 1; min-width: 250px;">
          <h3 style="color: #1565C0;">Secteur Secondaire : +3,4%</h3>
          <p>Rebond après la baisse de 2024 (-3,3%)</p>
        </div>
        <div style="flex: 1; min-width: 250px;">
          <h3 style="color: #F57C00;">Secteur Tertiaire : +5,4%</h3>
          <p>Soutenu par le tourisme et les télécommunications</p>
        </div>
      </div>
    </section>

    <!-- TABLEAU 2 : CROISSANCE PAR SECTEUR -->
    <section class="card">
      <h2>Tableau 2 : Taux de Croissance Sectorielle Détaillés</h2>
      
      <h3>Secteur Primaire</h3>
      <table>
        <thead>
          <tr>
            <th>Sous-secteur</th>
            <th class="number">2024 (%)</th>
            <th class="number">2025 (%)</th>
            <th class="number">Évolution</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $secteursPrincipaux = array_filter($croissanceSectorielle, function($item) {
            return $item['sous_secteur'] === null;
          });
          $sousSecteurs = array_filter($croissanceSectorielle, function($item) {
            return $item['sous_secteur'] !== null;
          });

          foreach ($secteursPrincipaux as $secteur) {
            $sousSecteursFiltered = array_filter($sousSecteurs, function($item) use ($secteur) {
              return $item['secteur'] === $secteur['secteur'];
            });

            // Afficher secteur principal
            $variationClass = $secteur['variation'] > 0 ? 'success' : ($secteur['variation'] < 0 ? 'danger' : 'info');
            $variationText = $secteur['variation'] > 0 ? '+' . $secteur['variation'] . ' pts' : $secteur['variation'] . ' pts';
            ?>
            <tr>
              <td><strong><?= $secteur['secteur'] ?></strong></td>
              <td class="number"><strong><?= $helper->formatNumber($secteur['taux_croissance_precedent']) ?></strong></td>
              <td class="number"><strong><?= $helper->formatNumber($secteur['taux_croissance']) ?></strong></td>
              <td class="number"><span class="badge <?= $variationClass ?>"><?= $variationText ?></span></td>
            </tr>

            <?php
            // Afficher sous-secteurs
            foreach ($sousSecteursFiltered as $sousSecteur) {
              $variationClass = $sousSecteur['variation'] > 0 ? 'success' : ($sousSecteur['variation'] < 0 ? 'danger' : 'info');
              $variationText = $sousSecteur['variation'] > 0 ? '+' . $sousSecteur['variation'] . ' pts' : $sousSecteur['variation'] . ' pts';
              ?>
              <tr>
                <td>&nbsp;&nbsp;<?= $sousSecteur['sous_secteur'] ?></td>
                <td class="number"><?= $helper->formatNumber($sousSecteur['taux_croissance_precedent']) ?></td>
                <td class="number"><?= $helper->formatNumber($sousSecteur['taux_croissance']) ?></td>
                <td class="number"><span class="badge <?= $variationClass ?>"><?= $variationText ?></span></td>
              </tr>
            <?php
            }
          }
        ?>
        </tbody>
      </table>
      <p style="font-size: 0.9rem; color: #666; margin-top: 1rem;"><em>Source : LF 2025, Tome 1</em></p>
    </section>

    <!-- SECTEURS PORTEURS -->
    <section class="card">
      <h2>Secteurs Porteurs de la Croissance 2025</h2>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
        <?php
        $colors = [
          'Agriculture' => ['#388E3C', '#F1F8E9'],
          'Industrie Extractive' => ['#1565C0', '#E3F2FD'],
          'Tourisme' => ['#F57C00', '#FFF3E0'],
          'Télécommunications' => ['#7B1FA2', '#F3E5F5']
        ];
        
        foreach ($secteursPorteurs as $secteur): 
          $color = isset($colors[$secteur['secteur']]) ? $colors[$secteur['secteur']][0] : '#333333';
          $bgColor = isset($colors[$secteur['secteur']]) ? $colors[$secteur['secteur']][1] : '#F5F5F5';
        ?>
        <div style="border-left: 5px solid <?= $color ?>; padding: 1rem; background: <?= $bgColor ?>;">
          <h3 style="color: <?= $color ?>; margin-top: 0;"><?= $secteur['secteur'] ?> : <?= $helper->formatNumber($secteur['croissance']) ?>%</h3>
          <ul class="styled-list">
            <?php 
            $points = explode("\n", $secteur['points_cles']);
            foreach ($points as $point): 
            ?>
              <li><?= $point ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <!-- CRÉATION DE POSTES -->
    <section class="card">
      <h2>Création de Postes Budgétaires 2025</h2>
      <p>Pour assurer une <strong>qualité des services publics efficace et pérenne</strong>, l'État envisage en 2025 d'aménager <span class="highlight">6 650 postes budgétaires</span> (dont 2 150 à recruter par voie de concours).</p>
      
      <table style="margin-top: 1.5rem;">
        <thead>
          <tr>
            <th>Ministère / Institution</th>
            <th class="number">Postes Autorisés</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $totalPostes = 0;
          foreach ($postesBudgetaires as $poste):
            $totalPostes += $poste['postes_autorises'];
          ?>
          <tr>
            <td><?= $poste['ministere'] ?></td>
            <td class="number"><?= $poste['postes_autorises'] >= 1000 ? "<strong>" : "" ?><?= $helper->formatNumber($poste['postes_autorises']) ?><?= $poste['postes_autorises'] >= 1000 ? "</strong>" : "" ?></td>
          </tr>
          <?php endforeach; ?>
          <tr style="background: #FFF3E0; font-weight: bold;">
            <td><strong>TOTAL</strong></td>
            <td class="number"><strong><?= $helper->formatNumber($totalPostes) ?></strong></td>
          </tr>
        </tbody>
      </table>
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