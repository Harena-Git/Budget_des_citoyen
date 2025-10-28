<?php
use app\helpers\ViewHelper;

// Définit le titre de la page
$title = "Recettes 2025";

// Initialise les liens du fil d'Ariane
$breadcrumb = [
    '/' => 'Accueil',
    '/recettes' => 'Recettes'
];

// Formate les données pour l'affichage
$recettes_format = [];
foreach ($categories as $key => $data) {
    $recettes_format[$key] = [
        'montant' => ViewHelper::formatMontant($data['montant']),
        'variation' => ViewHelper::formatVariation($data['variation'])
    ];
}

// Début du contenu de la page
    
    <!-- INTRODUCTION -->
    <section class="card">
      <h2>Recettes Totales de l'État 2025</h2>
      <p>Pour l'année 2025, le total des <strong>recettes et des dons</strong> s'élèvera à <span class="highlight">12 626,7 milliards d'Ariary</span>, soit une augmentation de <strong>31,8%</strong> par rapport à 2024. Cette progression résulte de réformes fiscales majeures, de l'élargissement de l'assiette fiscale et de l'optimisation de la collecte des recettes douanières.</p>
    </section>

    <!-- CHIFFRES CLÉS -->
    <section class="card">
      <h2>Chiffres Clés des Recettes 2025</h2>
      <div class="stats-grid">
        <div class="stat-box">
          <div class="label">Recettes Fiscales Intérieures</div>
          <div class="value">5 628 Mds Ar</div>
          <div class="change">+21,4% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Recettes Douanières</div>
          <div class="value">4 366 Mds Ar</div>
          <div class="change">+15,9% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Recettes Non Fiscales</div>
          <div class="value">492 Mds Ar</div>
          <div class="change">+42,2% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Dons</div>
          <div class="value">2 477 Mds Ar</div>
          <div class="change">+128% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Total Recettes + Dons</div>
          <div class="value">12 627 Mds Ar</div>
          <div class="change">+31,8% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Taux de Pression Fiscale</div>
          <div class="value">11,2%</div>
          <div class="change">+0,6 pts vs 2024</div>
        </div>
      </div>
    </section>

    <!-- FIGURE 2 : RECETTES PAR SOURCE -->
    <section class="card">
      <h2>Figure 2 : Recettes Totales par Source</h2>
      <p>Comparaison détaillée entre 2024 et 2025 (en milliards d'Ariary) :</p>
      
      <div class="chart-container">
        <div class="bar-chart">
          <div class="bar-item">
            <div class="bar-label"><strong>Impôts (Fiscales Intérieures)</strong></div>
            <div class="bar-track">
              <div class="bar-fill recettes" style="width: 100%;">5 628,4 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label" style="padding-left: 1rem; font-size: 0.85rem;">→ LFR 2024</div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 82.4%; background: #90CAF9;">4 636,5 Mds</div>
            </div>
          </div>

          <div class="bar-item" style="margin-top: 1rem;">
            <div class="bar-label"><strong>Douanes</strong></div>
            <div class="bar-track">
              <div class="bar-fill recettes" style="width: 77.6%;">4 366,0 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label" style="padding-left: 1rem; font-size: 0.85rem;">→ LFR 2024</div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 67%; background: #90CAF9;">3 768,0 Mds</div>
            </div>
          </div>

          <div class="bar-item" style="margin-top: 1rem;">
            <div class="bar-label"><strong>Recettes Non Fiscales</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 8.7%; background: linear-gradient(90deg, #F57C00 0%, #FFB74D 100%);">491,7 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label" style="padding-left: 1rem; font-size: 0.85rem;">→ LFR 2024</div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 6.1%; background: #FFCC80;">345,8 Mds</div>
            </div>
          </div>

          <div class="bar-item" style="margin-top: 1rem;">
            <div class="bar-label"><strong>Dons</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 44%; background: linear-gradient(90deg, #388E3C 0%, #66BB6A 100%);">2 476,6 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label" style="padding-left: 1rem; font-size: 0.85rem;">→ LFR 2024</div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 19.3%; background: #A5D6A7;">1 086,3 Mds</div>
            </div>
          </div>
        </div>
      </div>

      <div style="margin-top: 2rem; padding: 1rem; background: #E3F2FD; border-radius: 8px;">
        <p style="margin: 0;"><strong>💡 Note :</strong> L'augmentation significative des dons (+128%) s'explique par l'intensification des dons projets (2 445,6 Mds Ar) et la reconstitution des fonds de contre-valeur (FCV).</p>
      </div>
    </section>

    <!-- RÉPARTITION RECETTES FISCALES VS DOUANIÈRES -->
    <section class="card">
      <h2>Figure 3 : Évolution des Recettes Fiscales et Douanières</h2>
      <p>Les recettes fiscales intérieures et douanières atteignent un total de <strong>9 994,4 milliards d'Ariary</strong> en 2025, marquant une augmentation de <strong>1 589,9 milliards d'Ariary</strong> par rapport aux prévisions de 2024 (taux d'augmentation de <strong>18,9%</strong>).</p>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 2rem;">
        
        <div style="text-align: center;">
          <h3 style="color: #1565C0;">2024 (LFR)</h3>
          <div style="position: relative; width: 250px; height: 250px; margin: 2rem auto; background: conic-gradient(#1565C0 0% 55.1%, #42A5F5 55.1% 100%); border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.2);"></div>
          <div style="margin-top: 1rem;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin: 0.5rem 0;">
              <span style="display: inline-block; width: 20px; height: 20px; background: #1565C0; border-radius: 3px;"></span>
              <span><strong>Impôts :</strong> 4 636,5 Mds (55,1%)</span>
            </div>
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin: 0.5rem 0;">
              <span style="display: inline-block; width: 20px; height: 20px; background: #42A5F5; border-radius: 3px;"></span>
              <span><strong>Douanes :</strong> 3 768,0 Mds (44,9%)</span>
            </div>
            <div style="margin-top: 1rem; font-size: 1.2rem; font-weight: bold; color: #424242;">
              Total : 8 404,5 Mds Ar
            </div>
          </div>
        </div>

        <div style="text-align: center;">
          <h3 style="color: #388E3C;">2025 (LF)</h3>
          <div style="position: relative; width: 250px; height: 250px; margin: 2rem auto; background: conic-gradient(#388E3C 0% 56.3%, #66BB6A 56.3% 100%); border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.2);"></div>
          <div style="margin-top: 1rem;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin: 0.5rem 0;">
              <span style="display: inline-block; width: 20px; height: 20px; background: #388E3C; border-radius: 3px;"></span>
              <span><strong>Impôts :</strong> 5 628,4 Mds (56,3%)</span>
            </div>
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin: 0.5rem 0;">
              <span style="display: inline-block; width: 20px; height: 20px; background: #66BB6A; border-radius: 3px;"></span>
              <span><strong>Douanes :</strong> 4 366,0 Mds (43,7%)</span>
            </div>
            <div style="margin-top: 1rem; font-size: 1.2rem; font-weight: bold; color: #424242;">
              Total : 9 994,4 Mds Ar
            </div>
          </div>
        </div>

      </div>

      <div style="margin-top: 2rem; padding: 1rem; background: #E8F5E9; border-radius: 8px;">
        <p style="margin: 0;"><strong>Croissance :</strong> +1 589,9 Mds Ar (+18,9%) | <strong>Pression fiscale brute :</strong> 11,2% du PIB</p>
      </div>
    </section>

    <!-- NAVIGATION VERS SOUS-PAGES -->
    <section class="card">
      <h2>Explorer les Recettes en Détail</h2>
      <p>Accédez aux analyses détaillées par catégorie de recettes :</p>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
        
        <a href="recettes-fiscales.html" style="text-decoration: none;">
          <div style="border: 3px solid #1565C0; border-radius: 8px; padding: 1.5rem; background: #E3F2FD; transition: transform 0.3s;">
            <h3 style="color: #1565C0; margin-top: 0; display: flex; align-items: center; gap: 0.5rem;">
              Recettes Fiscales Intérieures
            </h3>
            <p style="margin: 0.5rem 0; color: #424242;"><strong>5 628,4 milliards Ar</strong></p>
            <p style="margin: 0; font-size: 0.9rem; color: #666;">TVA, impôts sur les revenus, droits d'accise, nouvelles taxes (TTM)</p>
            <div style="margin-top: 1rem; color: #1565C0; font-weight: 600;">→ Voir le détail</div>
          </div>
        </a>

        <a href="recettes-douanes.html" style="text-decoration: none;">
          <div style="border: 3px solid #388E3C; border-radius: 8px; padding: 1.5rem; background: #E8F5E9; transition: transform 0.3s;">
            <h3 style="color: #388E3C; margin-top: 0; display: flex; align-items: center; gap: 0.5rem;">
              Recettes Douanières
            </h3>
            <p style="margin: 0.5rem 0; color: #424242;"><strong>4 366,0 milliards Ar</strong></p>
            <p style="margin: 0; font-size: 0.9rem; color: #666;">Droits de douane, TVA à l'importation, taxes pétrolières, réformes ZES</p>
            <div style="margin-top: 1rem; color: #388E3C; font-weight: 600;">→ Voir le détail</div>
          </div>
        </a>

        <a href="recettes-non-fiscales.html" style="text-decoration: none;">
          <div style="border: 3px solid #F57C00; border-radius: 8px; padding: 1.5rem; background: #FFF3E0; transition: transform 0.3s;">
            <h3 style="color: #F57C00; margin-top: 0; display: flex; align-items: center; gap: 0.5rem;">
              Recettes Non Fiscales
            </h3>
            <p style="margin: 0.5rem 0; color: #424242;"><strong>491,7 milliards Ar</strong></p>
            <p style="margin: 0; font-size: 0.9rem; color: #666;">Dividendes, redevances minières, produits d'activités, redevances de pêche</p>
            <div style="margin-top: 1rem; color: #F57C00; font-weight: 600;">→ Voir le détail</div>
          </div>
        </a>

        <a href="recettes-dons.html" style="text-decoration: none;">
          <div style="border: 3px solid #7B1FA2; border-radius: 8px; padding: 1.5rem; background: #F3E5F5; transition: transform 0.3s;">
            <h3 style="color: #7B1FA2; margin-top: 0; display: flex; align-items: center; gap: 0.5rem;">
              Dons
            </h3>
            <p style="margin: 0.5rem 0; color: #424242;"><strong>2 476,6 milliards Ar</strong></p>
            <p style="margin: 0; font-size: 0.9rem; color: #666;">Dons projets, dons courants, reconstitution FCV, aides budgétaires</p>
            <div style="margin-top: 1rem; color: #7B1FA2; font-weight: 600;">→ Voir le détail</div>
          </div>
        </a>

      </div>
    </section>

    <!-- TABLEAU RÉCAPITULATIF -->
    <section class="card">
      <h2>Tableau Récapitulatif : Recettes 2024 vs 2025</h2>
      <table>
        <thead>
          <tr>
            <th>Catégorie de Recettes</th>
            <th class="number">LFR 2024 (Mds Ar)</th>
            <th class="number">LF 2025 (Mds Ar)</th>
            <th class="number">Évolution</th>
            <th class="number">Variation (%)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Recettes Fiscales Intérieures</strong></td>
            <td class="number">4 636,5</td>
            <td class="number"><strong>5 628,4</strong></td>
            <td class="number">+991,9</td>
            <td class="number"><span class="badge success">+21,4%</span></td>
          </tr>
          <tr>
            <td><strong>Recettes Douanières</strong></td>
            <td class="number">3 768,0</td>
            <td class="number"><strong>4 366,0</strong></td>
            <td class="number">+598,0</td>
            <td class="number"><span class="badge success">+15,9%</span></td>
          </tr>
          <tr style="background: #E3F2FD;">
            <td><strong>Total Recettes Fiscales</strong></td>
            <td class="number"><strong>8 404,5</strong></td>
            <td class="number"><strong>9 994,4</strong></td>
            <td class="number"><strong>+1 589,9</strong></td>
            <td class="number"><span class="badge success">+18,9%</span></td>
          </tr>
          <tr>
            <td><strong>Recettes Non Fiscales</strong></td>
            <td class="number">345,8</td>
            <td class="number"><strong>491,7</strong></td>
            <td class="number">+145,9</td>
            <td class="number"><span class="badge success">+42,2%</span></td>
          </tr>
          <tr>
            <td><strong>Dons</strong></td>
            <td class="number">1 086,3</td>
            <td class="number"><strong>2 476,6</strong></td>
            <td class="number">+1 390,3</td>
            <td class="number"><span class="badge success">+128,0%</span></td>
          </tr>
          <tr style="background: #FFF3E0; font-weight: bold;">
            <td><strong>TOTAL RECETTES + DONS</strong></td>
            <td class="number"><strong>9 836,6</strong></td>
            <td class="number"><strong>12 962,7</strong></td>
            <td class="number"><strong>+3 126,1</strong></td>
            <td class="number"><span class="badge success">+31,8%</span></td>
          </tr>
        </tbody>
      </table>
      <p style="font-size: 0.9rem; color: #666; margin-top: 1rem;"><em>Source : LF 2025, Tome I</em></p>
    </section>

    <!-- RÉFORMES MAJEURES -->
    <section class="card">
      <h2>Réformes Majeures pour l'Optimisation des Recettes</h2>
      
      <div style="display: grid; gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="border-left: 5px solid #1565C0; padding: 1rem; background: #E3F2FD;">
          <h3 style="color: #1565C0; margin-top: 0;">Nouvelles Taxes</h3>
          <ul class="styled-list">
            <li><strong>Taxe sur les Transactions Mobiles (TTM)</strong> : Taux de 0,5% sur les transferts d'argent (recettes prévisionnelles : 143 Mds Ar)</li>
            <li><strong>Droit d'accise</strong> sur les produits nuisibles à l'environnement et à la santé (plastiques, cigarettes électroniques)</li>
            <li><strong>Taxe environnementale</strong> intégrée aux droits d'accise</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #388E3C; padding: 1rem; background: #E8F5E9;">
          <h3 style="color: #388E3C; margin-top: 0;">Élargissement de l'Assiette Fiscale</h3>
          <ul class="styled-list">
            <li><strong>Retaxation</strong> des intérêts bancaires et contrats d'assurance à la TVA (+144,23 Mds Ar)</li>
            <li><strong>Suppression d'exonérations</strong> sur certains produits (chaussures de sport, verres de lunetterie, etc.)</li>
            <li><strong>Révision TVA</strong> sur gaz butane : taux fixé à 10%</li>
            <li>Recettes complémentaires attendues : <strong>784,3 milliards Ar</strong></li>
          </ul>
        </div>

        <div style="border-left: 5px solid #F57C00; padding: 1rem; background: #FFF3E0;">
          <h3 style="color: #F57C00; margin-top: 0;">Modernisation & Digitalisation</h3>
          <ul class="styled-list">
            <li><strong>Dématérialisation</strong> des exonérations pour un contrôle fiscal renforcé</li>
            <li><strong>Surveillance accrue</strong> des Zones Franches et des importateurs</li>
            <li><strong>Digitalisation</strong> des services fiscaux et douaniers</li>
            <li><strong>Système Harmonisé 2022</strong> : Alignement sur les standards internationaux</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #7B1FA2; padding: 1rem; background: #F3E5F5;">
          <h3 style="color: #7B1FA2; margin-top: 0;">Réformes Douanières</h3>
          <ul class="styled-list">
            <li><strong>Encadrement des ZES</strong> (Zones Économiques Spéciales)</li>
            <li><strong>Augmentation des droits</strong> sur produits de luxe et biens technologiques</li>
            <li><strong>Harmonisation tarifaire</strong> et renforcement des déclarations en douane</li>
            <li><strong>Protection de l'industrie locale</strong> via une fiscalité adaptée</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- PROJECTIONS MOYEN TERME -->
    <section class="card">
      <h2>Projections à Moyen Terme (2025-2028)</h2>
      <p>Les projections des recettes fiscales prévoient une croissance progressive, avec un taux de pression fiscale brut maintenu entre 6,13% et 6,31% du PIB.</p>
      
      <table style="margin-top: 1.5rem;">
        <thead>
          <tr>
            <th>Année</th>
            <th class="number">Recettes Fiscales Intérieures (Mds Ar)</th>
            <th class="number">Pression Fiscale (%)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>2025</td>
            <td class="number"><strong>5 628,4</strong></td>
            <td class="number">6,31%</td>
          </tr>
          <tr>
            <td>2026</td>
            <td class="number">6 234,7</td>
            <td class="number">6,24%</td>
          </tr>
          <tr>
            <td>2027</td>
            <td class="number">6 872,1</td>
            <td class="number">6,19%</td>
          </tr>
          <tr>
            <td>2028</td>
            <td class="number">7 571,6</td>
            <td class="number">6,13%</td>
          </tr>
        </tbody>
      </table>

      <div style="margin-top: 1.5rem; padding: 1rem; background: #E3F2FD; border-radius: 8px;">
        <p style="margin: 0;"><strong>Objectifs :</strong> Digitalisation continue, modernisation des infrastructures douanières et gestion optimisée des risques pour atteindre un taux de pression fiscale douanière estimé à <strong>6,1% du PIB</strong> à moyen terme.</p>
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