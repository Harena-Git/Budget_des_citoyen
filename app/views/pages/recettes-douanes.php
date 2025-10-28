<?php
use app\helpers\ViewHelper;

// Définit le titre de la page
$title = "Recettes Douanières 2025";

// Initialise les liens du fil d'Ariane
$breadcrumb = [
    '/' => 'Accueil',
    '/recettes' => 'Recettes',
    '/recettes/douanes' => 'Recettes Douanières'
];

// Début du contenu
ob_start();

  <!-- MAIN CONTENT -->
  <main>
    
    <!-- INTRODUCTION -->
    <section class="card">
      <h2>Recettes Douanières 2025</h2>
      <p>La prévision des recettes douanières pour l'année 2025 s'élève à <span class="highlight">4 366,0 milliards d'Ariary</span>, soit une hausse de <strong>15,9%</strong> par rapport à la prévision de 2024. Cette progression est portée par plusieurs réformes stratégiques de modernisation et d'optimisation des processus douaniers.</p>
    </section>

    <!-- CHIFFRES CLÉS -->
    <section class="card">
      <h2>Chiffres Clés des Recettes Douanières</h2>
      <div class="stats-grid">
        <div class="stat-box">
          <div class="label">Objectif 2025</div>
          <div class="value">4 366 Mds Ar</div>
          <div class="change">+15,9% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">TVA à l'Importation</div>
          <div class="value">2 148 Mds Ar</div>
          <div class="change">+21,5% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Droit de Douane</div>
          <div class="value">1 011 Mds Ar</div>
          <div class="change">+19,3% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Taxes Pétrolières</div>
          <div class="value">1 205 Mds Ar</div>
          <div class="change">+5,8% vs 2024</div>
        </div>
      </div>
    </section>

    <!-- TABLEAU 4 : RECETTES DOUANIÈRES -->
    <section class="card">
      <h2>Tableau 4 : Recettes Douanières Détaillées</h2>
      <table>
        <thead>
          <tr>
            <th>Nature des Droits et Taxes</th>
            <th class="number">LFR 2024 (Mds Ar)</th>
            <th class="number">LF 2025 (Mds Ar)</th>
            <th class="number">Évolution</th>
            <th class="number">Variation (%)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Droit de douane</strong></td>
            <td class="number">847,5</td>
            <td class="number"><strong>1 010,7</strong></td>
            <td class="number">+163,2</td>
            <td class="number"><span class="badge success">+19,3%</span></td>
          </tr>
          <tr>
            <td><strong>TVA à l'importation</strong></td>
            <td class="number">1 768,3</td>
            <td class="number"><strong>2 148,3</strong></td>
            <td class="number">+380,0</td>
            <td class="number"><span class="badge success">+21,5%</span></td>
          </tr>
          <tr>
            <td><strong>Taxe sur les produits pétroliers</strong></td>
            <td class="number">308,0</td>
            <td class="number"><strong>326,0</strong></td>
            <td class="number">+18,0</td>
            <td class="number"><span class="badge success">+5,8%</span></td>
          </tr>
          <tr>
            <td><strong>TVA sur les produits pétroliers</strong></td>
            <td class="number">842,8</td>
            <td class="number"><strong>879,0</strong></td>
            <td class="number">+36,2</td>
            <td class="number"><span class="badge success">+4,3%</span></td>
          </tr>
          <tr>
            <td><strong>Droit de navigation</strong></td>
            <td class="number">1,2</td>
            <td class="number"><strong>1,9</strong></td>
            <td class="number">+0,7</td>
            <td class="number"><span class="badge success">+58,3%</span></td>
          </tr>
          <tr>
            <td><strong>Autres</strong></td>
            <td class="number">0,2</td>
            <td class="number"><strong>0,1</strong></td>
            <td class="number">-0,1</td>
            <td class="number"><span class="badge danger">-50,0%</span></td>
          </tr>
          <tr style="background: #FFF3E0; font-weight: bold;">
            <td><strong>TOTAL</strong></td>
            <td class="number"><strong>3 768,0</strong></td>
            <td class="number"><strong>4 366,0</strong></td>
            <td class="number"><strong>+598,0</strong></td>
            <td class="number"><span class="badge success">+15,9%</span></td>
          </tr>
        </tbody>
      </table>
      <p style="font-size: 0.9rem; color: #666; margin-top: 1rem;"><em>Source : LF 2025</em></p>
    </section>

    <!-- RÉPARTITION GRAPHIQUE -->
    <section class="card">
      <h2>Répartition des Recettes Douanières 2025</h2>
      
      <div class="chart-container">
        <div class="bar-chart">
          <div class="bar-item">
            <div class="bar-label"><strong>TVA à l'importation</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 49.2%; background: linear-gradient(90deg, #1565C0 0%, #42A5F5 100%);">2 148 Mds (49,2%)</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Droit de douane</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 23.1%; background: linear-gradient(90deg, #388E3C 0%, #66BB6A 100%);">1 011 Mds (23,1%)</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>TVA produits pétroliers</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 20.1%; background: linear-gradient(90deg, #F57C00 0%, #FFB74D 100%);">879 Mds (20,1%)</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Taxe produits pétroliers</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 7.5%; background: linear-gradient(90deg, #D32F2F 0%, #EF5350 100%);">326 Mds (7,5%)</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Autres</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 0.1%; background: linear-gradient(90deg, #455A64 0%, #78909C 100%);">2 Mds (0,1%)</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- RÉFORMES DOUANIÈRES -->
    <section class="card">
      <h2>Réformes Douanières Stratégiques 2025</h2>
      
      <div style="display: grid; gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="border-left: 5px solid #1565C0; padding: 1rem; background: #E3F2FD;">
          <h3 style="color: #1565C0; margin-top: 0;">Modernisation des Processus</h3>
          <ul class="styled-list">
            <li><strong>Dématérialisation des exonérations</strong> pour un contrôle fiscal renforcé</li>
            <li><strong>Surveillance accrue des Zones Franches</strong> et des importateurs</li>
            <li><strong>Optimisation de la gestion des recettes</strong> par la digitalisation</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #388E3C; padding: 1rem; background: #E8F5E9;">
          <h3 style="color: #388E3C; margin-top: 0;">Révision du Code des Douanes</h3>
          <ul class="styled-list">
            <li><strong>Encadrement des Zones Économiques Spéciales (ZES)</strong></li>
            <li><strong>Renforcement des déclarations en douane</strong></li>
            <li><strong>Harmonisation des mesures tarifaires</strong></li>
            <li><strong>Application du Système Harmonisé 2022</strong></li>
          </ul>
        </div>

        <div style="border-left: 5px solid #F57C00; padding: 1rem; background: #FFF3E0;">
          <h3 style="color: #F57C00; margin-top: 0;">Modification Tarifaire</h3>
          <ul class="styled-list">
            <li><strong>Augmentation des droits sur les produits de luxe</strong> et les biens technologiques</li>
            <li><strong>Fiscalité adaptée</strong> pour encourager la production locale</li>
            <li><strong>Protection de l'industrie nationale</strong> via des barrières tarifaires stratégiques</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #7B1FA2; padding: 1rem; background: #F3E5F5;">
          <h3 style="color: #7B1FA2; margin-top: 0;">Conformité Internationale</h3>
          <ul class="styled-list">
            <li><strong>Alignement sur le Système Harmonisé 2022</strong></li>
            <li><strong>Respect des accords commerciaux internationaux</strong></li>
            <li><strong>Sécurisation des recettes douanières</strong> par la conformité</li>
          </ul>
        </div>

      </div>

      <div style="margin-top: 1.5rem; padding: 1rem; background: #E8F5E9; border-radius: 8px;">
        <p style="margin: 0;"><strong>Objectifs :</strong> Ces initiatives visent à <strong>maximiser les revenus</strong>, <strong>soutenir l'économie locale</strong> et <strong>renforcer la compétitivité</strong> de Madagascar sur les marchés internationaux.</p>
      </div>
    </section>

    <!-- IMPACT ATTENDU -->
    <section class="card">
      <h2>Impact Économique des Réformes Douanières</h2>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="text-align: center; padding: 1.5rem; background: #F1F8E9; border-radius: 8px;">
          <div style="font-size: 2rem; font-weight: bold; color: #388E3C;">+598 Mds</div>
          <div style="font-size: 0.9rem; color: #388E3C;">Augmentation des recettes</div>
        </div>

        <div style="text-align: center; padding: 1.5rem; background: #E3F2FD; border-radius: 8px;">
          <div style="font-size: 2rem; font-weight: bold; color: #1565C0;">+15,9%</div>
          <div style="font-size: 0.9rem; color: #1565C0;">Taux de croissance</div>
        </div>

        <div style="text-align: center; padding: 1.5rem; background: #FFF3E0; border-radius: 8px;">
          <div style="font-size: 2rem; font-weight: bold; color: #F57C00;">6,1%</div>
          <div style="font-size: 0.9rem; color: #F57C00;">Pression fiscale douanière/PIB</div>
        </div>

      </div>
    </section>

    <!-- NAVIGATION -->
    <section class="card">
      <h2>Explorer les Autres Catégories de Recettes</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
        <a href="recettes-fiscales.html" style="text-decoration: none;">
          <div style="border: 2px solid #1565C0; border-radius: 8px; padding: 1rem; text-align: center; background: #E3F2FD; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #1565C0;">Recettes Fiscales</div>
            <div style="font-size: 0.9rem; color: #666;">→ Voir le détail</div>
          </div>
        </a>
        <a href="recettes-non-fiscales.html" style="text-decoration: none;">
          <div style="border: 2px solid #F57C00; border-radius: 8px; padding: 1rem; text-align: center; background: #FFF3E0; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #F57C00;">Recettes Non Fiscales</div>
            <div style="font-size: 0.9rem; color: #666;">→ Voir le détail</div>
          </div>
        </a>
        <a href="recettes-dons.html" style="text-decoration: none;">
          <div style="border: 2px solid #7B1FA2; border-radius: 8px; padding: 1rem; text-align: center; background: #F3E5F5; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #7B1FA2;">Dons</div>
            <div style="font-size: 0.9rem; color: #666;">→ Voir le détail</div>
          </div>
        </a>
      </div>
    </section>

  </main>

<?php
$content = ob_get_clean();
require dirname(__DIR__) . '/layouts/main.php';
?>