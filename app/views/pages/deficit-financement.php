<?php
use app\helpers\ViewHelper;

$title = "Financement du Déficit 2025";
$breadcrumb = ['/' => 'Accueil', '/deficit' => 'Déficit', '/deficit/financement' => 'Financement'];

// Début du contenu
ob_start();
?>

    <!-- INTRODUCTION -->
    <section class="card">
      <h2>Financement du Déficit Budgétaire 2025</h2>
      <p>Le déficit budgétaire pour l'année 2025, s'élevant à <span class="highlight">3 642,2 milliards d'Ariary</span>, sera financé par des ressources intérieures et extérieures. Cette répartition reflète la stratégie de gestion de la dette et la dépendance aux financements concessionnels pour soutenir les investissements publics ambitieux.</p>
    </section>

    <!-- CHIFFRES CLÉS -->
    <section class="card">
      <h2>Structure du Financement 2025</h2>
      <div class="stats-grid">
        <div class="stat-box negative">
          <div class="label">Déficit Total</div>
          <div class="value">3 642 Mds Ar</div>
          <div class="change">4,1% du PIB</div>
        </div>
        <div class="stat-box">
          <div class="label">Financement Intérieur</div>
          <div class="value">495 Mds Ar</div>
          <div class="change">13,6% du déficit</div>
        </div>
        <div class="stat-box">
          <div class="label">Financement Extérieur</div>
          <div class="value">3 148 Mds Ar</div>
          <div class="change">86,4% du déficit</div>
        </div>
        <div class="stat-box">
          <div class="label">Taux Financement Extérieur</div>
          <div class="value">86,4%</div>
          <div class="change">Prédominance externe</div>
        </div>
      </div>
    </section>

    <!-- RÉPARTITION DÉTAILLÉE -->
    <section class="card">
      <h2>Répartition Détaillée du Financement</h2>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-top: 2rem;">
        
        <div style="text-align: center;">
          <h3 style="color: #1565C0;">Financement Intérieur</h3>
          <div style="position: relative; width: 200px; height: 200px; margin: 2rem auto; background: conic-gradient(#1565C0 0% 13.6%, #E3F2FD 13.6% 100%); border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.2);"></div>
          <div style="margin-top: 1rem;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin: 0.5rem 0;">
              <span style="display: inline-block; width: 20px; height: 20px; background: #1565C0; border-radius: 3px;"></span>
              <span><strong>Financement Intérieur :</strong> 494,6 Mds (13,6%)</span>
            </div>
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin: 0.5rem 0;">
              <span style="display: inline-block; width: 20px; height: 20px; background: #E3F2FD; border-radius: 3px;"></span>
              <span><strong>Financement Extérieur :</strong> 3 147,6 Mds (86,4%)</span>
            </div>
          </div>
        </div>

        <div style="text-align: center;">
          <h3 style="color: #388E3C;">Montants Absolus</h3>
          <div style="background: #E8F5E9; padding: 2rem; border-radius: 8px; margin-top: 2rem;">
            <div style="font-size: 1.5rem; font-weight: bold; color: #388E3C; margin-bottom: 1rem;">DÉFICIT TOTAL</div>
            <div style="font-size: 2.5rem; font-weight: bold; color: #D32F2F;">3 642,2 Mds Ar</div>
          </div>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-top: 1.5rem;">
            <div style="background: #E3F2FD; padding: 1rem; border-radius: 8px;">
              <div style="font-size: 1.2rem; font-weight: bold; color: #1565C0;">Intérieur</div>
              <div style="font-size: 1.5rem; font-weight: bold;">494,6 Mds</div>
              <div style="font-size: 0.9rem; color: #666;">13,6%</div>
            </div>
            <div style="background: #E8F5E9; padding: 1rem; border-radius: 8px;">
              <div style="font-size: 1.2rem; font-weight: bold; color: #388E3C;">Extérieur</div>
              <div style="font-size: 1.5rem; font-weight: bold;">3 147,6 Mds</div>
              <div style="font-size: 0.9rem; color: #666;">86,4%</div>
            </div>
          </div>
        </div>

      </div>

      <div style="margin-top: 2rem; padding: 1rem; background: #E3F2FD; border-radius: 8px;">
        <p style="margin: 0;"><strong>Stratégie de financement :</strong> Le financement extérieur dominant (86,4%) reflète la dépendance aux prêts concessionnels et aux dons projets pour soutenir les investissements publics ambitieux, tout en maintenant une part de financement intérieur pour préserver la souveraineté budgétaire.</p>
      </div>
    </section>

    <!-- SOURCES DE FINANCEMENT INTÉRIEUR -->
    <section class="card">
      <h2>Sources de Financement Intérieur</h2>
      
      <div style="border-left: 5px solid #1565C0; padding: 1.5rem; background: #E3F2FD; margin-top: 1.5rem;">
        <h3 style="color: #1565C0; margin-top: 0;">Instruments de Financement Domestique (494,6 Mds Ar)</h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1rem;">
          
          <div style="text-align: center; padding: 1rem; background: #FFFFFF; border-radius: 8px;">
            <h4 style="color: #1565C0; margin-top: 0;">Obligations du Trésor</h4>
            <div style="font-size: 1.2rem; font-weight: bold; color: #1565C0;">Émissions domestiques</div>
            <p style="margin: 0.5rem 0 0 0; font-size: 0.9rem;">Titres de moyen et long terme</p>
          </div>

          <div style="text-align: center; padding: 1rem; background: #FFFFFF; border-radius: 8px;">
            <h4 style="color: #1565C0; margin-top: 0;">Bons du Trésor</h4>
            <div style="font-size: 1.2rem; font-weight: bold; color: #1565C0;">Instruments court terme</div>
            <p style="margin: 0.5rem 0 0 0; font-size: 0.9rem;">Maturités inférieures à 1 an</p>
          </div>

          <div style="text-align: center; padding: 1rem; background: #FFFFFF; border-radius: 8px;">
            <h4 style="color: #1565C0; margin-top: 0;">Avances Banque Centrale</h4>
            <div style="font-size: 1.2rem; font-weight: bold; color: #1565C0;">Dans limites légales</div>
            <p style="margin: 0.5rem 0 0 0; font-size: 0.9rem;">Financement monétaire</p>
          </div>

        </div>

        <div style="margin-top: 1.5rem; padding: 1rem; background: #FFFFFF; border-radius: 8px;">
          <h4 style="color: #1565C0; margin-top: 0;">Conditions de Marché</h4>
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
            <div>
              <div style="font-weight: bold;">Taux d'intérêt moyen pondéré :</div>
              <div style="font-size: 1.5rem; color: #1565C0; font-weight: bold;">13,0%</div>
            </div>
            <div>
              <div style="font-weight: bold;">Maturité moyenne :</div>
              <div style="font-size: 1.2rem; color: #1565C0; font-weight: bold;">2-5 ans</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- SOURCES DE FINANCEMENT EXTÉRIEUR -->
    <section class="card">
      <h2>Sources de Financement Extérieur</h2>
      
      <div style="border-left: 5px solid #388E3C; padding: 1.5rem; background: #E8F5E9; margin-top: 1.5rem;">
        <h3 style="color: #388E3C; margin-top: 0;">Instruments de Financement International (3 147,6 Mds Ar)</h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1rem;">
          
          <div style="text-align: center; padding: 1rem; background: #FFFFFF; border-radius: 8px;">
            <h4 style="color: #388E3C; margin-top: 0;">Prêts Concessionnels</h4>
            <div style="font-size: 1.2rem; font-weight: bold; color: #388E3C;">Partenaires techniques</div>
            <p style="margin: 0.5rem 0 0 0; font-size: 0.9rem;">Taux préférentiels, long terme</p>
          </div>

          <div style="text-align: center; padding: 1rem; background: #FFFFFF; border-radius: 8px;">
            <h4 style="color: #388E3C; margin-top: 0;">Dons Projets</h4>
            <div style="font-size: 1.2rem; font-weight: bold; color: #388E3C;">2 445,6 Mds Ar</div>
            <p style="margin: 0.5rem 0 0 0; font-size: 0.9rem;">Financement non remboursable</p>
          </div>

          <div style="text-align: center; padding: 1rem; background: #FFFFFF; border-radius: 8px;">
            <h4 style="color: #388E3C; margin-top: 0;">Prêts Développement</h4>
            <div style="font-size: 1.2rem; font-weight: bold; color: #388E3C;">Institutions FI</div>
            <p style="margin: 0.5rem 0 0 0; font-size: 0.9rem;">Banque Mondiale, BAD, etc.</p>
          </div>

        </div>

        <div style="margin-top: 1.5rem;">
          <h4 style="color: #388E3C; margin-top: 0;">Partenaires Principaux</h4>
          <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-top: 1rem;">
            <div style="text-align: center; padding: 0.5rem; background: #FFFFFF; border-radius: 6px;">
              <div style="font-weight: bold; color: #388E3C;">Banque Mondiale</div>
            </div>
            <div style="text-align: center; padding: 0.5rem; background: #FFFFFF; border-radius: 6px;">
              <div style="font-weight: bold; color: #388E3C;">Union Européenne</div>
            </div>
            <div style="text-align: center; padding: 0.5rem; background: #FFFFFF; border-radius: 6px;">
              <div style="font-weight: bold; color: #388E3C;">BAD</div>
            </div>
            <div style="text-align: center; padding: 0.5rem; background: #FFFFFF; border-radius: 6px;">
              <div style="font-weight: bold; color: #388E3C;">Nations Unies</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- STRATÉGIE DE GESTION DE LA DETTE -->
    <section class="card">
      <h2>Stratégie de Gestion de la Dette</h2>
      
      <div style="display: grid; gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="border-left: 5px solid #F57C00; padding: 1rem; background: #FFF3E0;">
          <h3 style="color: #F57C00; margin-top: 0;">Optimisation des Coûts</h3>
          <ul class="styled-list">
            <li><strong>Privilégier les prêts concessionnels</strong> avec taux préférentiels</li>
            <li>Négociation des conditions de remboursement avantageuses</li>
            <li>Diversification des sources pour réduire les coûts</li>
            <li>Surveillance continue des marchés financiers</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #7B1FA2; padding: 1rem; background: #F3E5F5;">
          <h3 style="color: #7B1FA2; margin-top: 0;">Gestion des Échéances</h3>
          <ul class="styled-list">
            <li><strong>Allongement des maturités</strong> pour réduire le risque de refinancement</li>
            <li>Lissage du profil d'endettement</li>
            <li>Anticipation des pics de remboursement</li>
            <li>Gestion active de la durée moyenne de la dette</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #388E3C; padding: 1rem; background: #E8F5E9;">
          <h3 style="color: #388E3C; margin-top: 0;">Soutenabilité</h3>
          <ul class="styled-list">
            <li><strong>Surveillance du ratio dette/PIB</strong> pour assurer la soutenabilité</li>
            <li>Analyse de la capacité de remboursement</li>
            <li>Respect des critères de Maastricht adaptés</li>
            <li>Évaluation régulière de la vulnérabilité</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- COMPARAISON 2024-2025 -->
    <section class="card">
      <h2>Évolution du Financement 2024-2025</h2>
      
      <table>
        <thead>
          <tr>
            <th>Indicateur de Financement</th>
            <th class="number">LFR 2024</th>
            <th class="number">LF 2025</th>
            <th class="number">Évolution</th>
            <th class="number">Variation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Financement intérieur (Mds Ar)</strong></td>
            <td class="number">360,0</td>
            <td class="number"><strong>494,6</strong></td>
            <td class="number">+134,6</td>
            <td class="number"><span class="badge success">+37,4%</span></td>
          </tr>
          <tr>
            <td><strong>Financement extérieur (Mds Ar)</strong></td>
            <td class="number">3 035,8</td>
            <td class="number"><strong>3 147,6</strong></td>
            <td class="number">+111,8</td>
            <td class="number"><span class="badge info">+3,7%</span></td>
          </tr>
          <tr>
            <td><strong>Part financement intérieur (%)</strong></td>
            <td class="number">10,6%</td>
            <td class="number"><strong>13,6%</strong></td>
            <td class="number">+3,0 pts</td>
            <td class="number"><span class="badge success">Amélioration</span></td>
          </tr>
          <tr>
            <td><strong>Part financement extérieur (%)</strong></td>
            <td class="number">89,4%</td>
            <td class="number"><strong>86,4%</strong></td>
            <td class="number">-3,0 pts</td>
            <td class="number"><span class="badge success">Réduction</span></td>
          </tr>
        </tbody>
      </table>

      <div style="margin-top: 1.5rem; padding: 1rem; background: #E8F5E9; border-radius: 8px;">
        <p style="margin: 0;"><strong>Tendance positive :</strong> La part du financement intérieur augmente de 3 points de pourcentage, indiquant une réduction progressive de la dépendance aux financements extérieurs et un renforcement de la souveraineté budgétaire.</p>
      </div>
    </section>

    <!-- NAVIGATION -->
    <section class="card">
      <h2>Explorer les Autres Aspects du Déficit</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
  <a href="/deficit-situation" style="text-decoration: none;">
          <div style="border: 2px solid #1565C0; border-radius: 8px; padding: 1rem; text-align: center; background: #E3F2FD; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #1565C0;">Situation du Déficit</div>
            <div style="font-size: 0.9rem; color: #666;">→ Voir le détail</div>
          </div>
        </a>
  <a href="/deficit" style="text-decoration: none;">
          <div style="border: 2px solid #388E3C; border-radius: 8px; padding: 1rem; text-align: center; background: #E8F5E9; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #388E3C;">Vue d'Ensemble</div>
            <div style="font-size: 0.9rem; color: #666;">→ Retour</div>
          </div>
        </a>
      </div>
    </section>

  </main>

<?php
$content = ob_get_clean();
require dirname(__DIR__) . '/layouts/main.php';
?>