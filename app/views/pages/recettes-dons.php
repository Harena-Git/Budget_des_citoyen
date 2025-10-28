<?php
use app\helpers\ViewHelper;

// Définit le titre de la page
$title = "Dons 2025";

// Initialise les liens du fil d'Ariane
$breadcrumb = [
    '/' => 'Accueil',
    '/recettes' => 'Recettes',
    '/recettes/dons' => 'Dons'
];

// Début du contenu
ob_start();

  <main>
    
    <!-- INTRODUCTION -->
    <section class="card">
      <h2>Dons 2025</h2>
      <p>En 2025, les dons attendus s'élèveront à <span class="highlight">2 476,6 milliards d'Ariary</span>, marquant une augmentation spectaculaire de <strong>128%</strong> par rapport à 2024. Cette hausse significative s'explique principalement par l'intensification des dons projets et la reconstitution des fonds de contre-valeur (FCV).</p>
    </section>

    <!-- CHIFFRES CLÉS -->
    <section class="card">
      <h2>Chiffres Clés des Dons 2025</h2>
      <div class="stats-grid">
        <div class="stat-box">
          <div class="label">Total Dons 2025</div>
          <div class="value">2 477 Mds Ar</div>
          <div class="change">+128% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Dons Projets</div>
          <div class="value">2 446 Mds Ar</div>
          <div class="change">+125% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Dons Courants</div>
          <div class="value">31 Mds Ar</div>
          <div class="change">+10 233% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Part des Dons Projets</div>
          <div class="value">98,7%</div>
          <div class="change">du total des dons</div>
        </div>
      </div>
    </section>

    <!-- TABLEAU 6 : COMPOSITION DES DONS -->
    <section class="card">
      <h2>Tableau 6 : Composition des Dons</h2>
      <table>
        <thead>
          <tr>
            <th>Type de Dons</th>
            <th class="number">LF 2024 (Mds Ar)</th>
            <th class="number">LF 2025 (Mds Ar)</th>
            <th class="number">Évolution</th>
            <th class="number">Variation (%)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Dons Courants</strong></td>
            <td class="number">0,3</td>
            <td class="number"><strong>31,0</strong></td>
            <td class="number">+30,7</td>
            <td class="number"><span class="badge success">+10 233%</span></td>
          </tr>
          <tr>
            <td><strong>Dons Capital (Projets)</strong></td>
            <td class="number">1 086,0</td>
            <td class="number"><strong>2 445,6</strong></td>
            <td class="number">+1 359,6</td>
            <td class="number"><span class="badge success">+125,2%</span></td>
          </tr>
          <tr style="background: #FFF3E0; font-weight: bold;">
            <td><strong>TOTAL</strong></td>
            <td class="number"><strong>1 086,3</strong></td>
            <td class="number"><strong>2 476,6</strong></td>
            <td class="number"><strong>+1 390,3</strong></td>
            <td class="number"><span class="badge success">+128,0%</span></td>
          </tr>
        </tbody>
      </table>
      <p style="font-size: 0.9rem; color: #666; margin-top: 1rem;"><em>Source : LF 2025, Tome I</em></p>
    </section>

    <!-- RÉPARTITION GRAPHIQUE -->
    <section class="card">
      <h2>Répartition des Dons 2025</h2>
      
      <div class="chart-container">
        <div class="bar-chart">
          <div class="bar-item">
            <div class="bar-label"><strong>Dons Projets (Capital)</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 98.7%; background: linear-gradient(90deg, #388E3C 0%, #66BB6A 100%);">2 446 Mds (98,7%)</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Dons Courants</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 1.3%; background: linear-gradient(90deg, #1565C0 0%, #42A5F5 100%);">31 Mds (1,3%)</div>
            </div>
          </div>
        </div>
      </div>

      <div style="margin-top: 2rem; display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
        
        <div style="text-align: center;">
          <h3 style="color: #388E3C;">Dons Projets (98,7%)</h3>
          <div style="font-size: 3rem; font-weight: bold; color: #388E3C; margin: 1rem 0;">2 445,6</div>
          <div style="font-size: 1.2rem; color: #388E3C;">milliards d'Ariary</div>
          <p style="margin: 1rem 0 0 0; font-size: 0.9rem;">Financement de projets spécifiques d'investissement</p>
        </div>

        <div style="text-align: center;">
          <h3 style="color: #1565C0;">Dons Courants (1,3%)</h3>
          <div style="font-size: 3rem; font-weight: bold; color: #1565C0; margin: 1rem 0;">31,0</div>
          <div style="font-size: 1.2rem; color: #1565C0;">milliards d'Ariary</div>
          <p style="margin: 1rem 0 0 0; font-size: 0.9rem;">Aides budgétaires et reconstitution FCV</p>
        </div>

      </div>
    </section>

    <!-- EXPLICATION DES CATÉGORIES -->
    <section class="card">
      <h2>Nature et Utilisation des Dons</h2>
      
      <div style="display: grid; gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="border-left: 5px solid #388E3C; padding: 1rem; background: #E8F5E9;">
          <h3 style="color: #388E3C; margin-top: 0;">Dons Projets (Capital)</h3>
          <ul class="styled-list">
            <li><strong>Financement de projets d'investissement spécifiques</strong></li>
            <li>Infrastructures, santé, éducation, énergie</li>
            <li>Gérés hors budget général de l'État</li>
            <li>Exécutés par les partenaires techniques et financiers</li>
            <li><strong>Montant 2025 : 2 445,6 milliards Ar</strong></li>
          </ul>
        </div>

        <div style="border-left: 5px solid #1565C0; padding: 1rem; background: #E3F2FD;">
          <h3 style="color: #1565C0; margin-top: 0;">Dons Courants</h3>
          <ul class="styled-list">
            <li><strong>Reconstitution des Fonds de Contre-Valeur (FCV)</strong></li>
            <li>Aides budgétaires directes</li>
            <li>Support aux programmes de réformes</li>
            <li>Assistance technique</li>
            <li><strong>Montant 2025 : 31,0 milliards Ar</strong></li>
          </ul>
        </div>

      </div>

      <div style="margin-top: 1.5rem; padding: 1rem; background: #FFF3E0; border-radius: 8px;">
        <p style="margin: 0;"><strong>💡 Fonds de Contre-Valeur (FCV) :</strong> Fonds issus de dons ou d'aides financières, utilisés pour financer des projets spécifiques, comme le développement d'infrastructures ou le soutien à des secteurs prioritaires.</p>
      </div>
    </section>

    <!-- PARTENAIRES ET PROJETS -->
    <section class="card">
      <h2>Partenaires Techniques et Financiers</h2>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="text-align: center; padding: 1.5rem; background: #F1F8E9; border-radius: 8px;">
          <h3 style="color: #388E3C; margin-top: 0;">Banque Mondiale</h3>
          <p>Projets d'infrastructures et de développement social</p>
        </div>

        <div style="text-align: center; padding: 1.5rem; background: #E3F2FD; border-radius: 8px;">
          <h3 style="color: #1565C0; margin-top: 0;">Union Européenne</h3>
          <p>Coopération au développement et appui budgétaire</p>
        </div>

        <div style="text-align: center; padding: 1.5rem; background: #FFF3E0; border-radius: 8px;">
          <h3 style="color: #F57C00; margin-top: 0;">BAD</h3>
          <p>Banque Africaine de Développement</p>
        </div>

        <div style="text-align: center; padding: 1.5rem; background: #F3E5F5; border-radius: 8px;">
          <h3 style="color: #7B1FA2; margin-top: 0;">Nations Unies</h3>
          <p>Programmes de développement durable</p>
        </div>

      </div>
    </section>

    <!-- IMPACT SUR LES INVESTISSEMENTS -->
    <section class="card">
      <h2>Impact sur les Investissements Publics</h2>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 1.5rem;">
        
        <div>
          <h3 style="color: #388E3C;">Financement des PIP</h3>
          <p>Les dons projets représentent une part significative du financement des Programmes d'Investissements Publics (PIP) :</p>
          <ul class="styled-list">
            <li><strong>Énergie et transition écologique</strong></li>
            <li><strong>Agriculture durable</strong></li>
            <li><strong>Infrastructures routières</strong></li>
            <li><strong>Santé et éducation</strong></li>
          </ul>
        </div>

        <div>
          <h3 style="color: #1565C0;">Complémentarité</h3>
          <p>Les dons viennent compléter les financements internes :</p>
          <ul class="styled-list">
            <li><strong>PIP sur financement externe</strong> : 6 159,9 Mds Ar</li>
            <li><strong>Dont dons projets</strong> : 2 445,6 Mds Ar (39,7%)</li>
            <li><strong>Effet de levier</strong> sur l'investissement public total</li>
          </ul>
        </div>

      </div>

      <div style="margin-top: 1.5rem; padding: 1rem; background: #E8F5E9; border-radius: 8px;">
        <p style="margin: 0;"><strong>Synergie :</strong> Les dons projets permettent de réaliser des investissements structurants qui n'auraient pas été possibles avec les seules ressources internes, créant ainsi un effet multiplicateur sur le développement économique.</p>
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
        <a href="recettes-douanes.html" style="text-decoration: none;">
          <div style="border: 2px solid #388E3C; border-radius: 8px; padding: 1rem; text-align: center; background: #E8F5E9; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #388E3C;">Recettes Douanières</div>
            <div style="font-size: 0.9rem; color: #666;">→ Voir le détail</div>
          </div>
        </a>
        <a href="recettes-non-fiscales.html" style="text-decoration: none;">
          <div style="border: 2px solid #F57C00; border-radius: 8px; padding: 1rem; text-align: center; background: #FFF3E0; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #F57C00;">Recettes Non Fiscales</div>
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