<?php
use app\helpers\ViewHelper;

$title = "Dépenses par Ministère 2025";
$breadcrumb = ['/' => 'Accueil', '/depenses' => 'Dépenses', '/depenses/ministeres' => 'Par ministère'];

// Début du contenu
ob_start();
?>

    <!-- INTRODUCTION -->
    <section class="card">
      <h2>Répartition des Dépenses par Ministère 2025</h2>
      <p>Cette section présente la répartition détaillée du budget de l'État selon le rattachement administratif. Le budget total des institutions et ministères s'élève à <span class="highlight">14 408,9 milliards d'Ariary</span> pour 2025, en augmentation de <strong>26,4%</strong> par rapport à 2024.</p>
    </section>

    <!-- TOP MINISTÈRES -->
    <section class="card">
      <h2>Top 5 des Ministères par Budget 2025</h2>
      
      <div class="chart-container">
        <div class="bar-chart">
          <div class="bar-item">
            <div class="bar-label"><strong>Ministère des Travaux Publics</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 100%; background: linear-gradient(90deg, #1565C0 0%, #42A5F5 100%);">2 327,5 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Ministère de l'Économie et des Finances</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 100%; background: linear-gradient(90deg, #388E3C 0%, #66BB6A 100%);">2 332,7 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Ministère de l'Éducation Nationale</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 67.1%; background: linear-gradient(90deg, #F57C00 0%, #FFB74D 100%);">1 562,0 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Ministère de l'Énergie et des Hydrocarbures</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 57.2%; background: linear-gradient(90deg, #7B1FA2 0%, #BA68C8 100%);">1 332,0 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Ministère de la Santé Publique</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 39.6%; background: linear-gradient(90deg, #D32F2F 0%, #EF5350 100%);">921,0 Mds</div>
            </div>
          </div>
        </div>
      </div>

      <div style="margin-top: 2rem; display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
        <div style="text-align: center; padding: 1rem; background: #E3F2FD; border-radius: 8px;">
          <div style="font-size: 1.2rem; font-weight: bold; color: #1565C0;">Travaux Publics</div>
          <div style="font-size: 1.5rem; font-weight: bold;">2 327 Mds</div>
          <div style="font-size: 0.9rem; color: #666;">+91,2% vs 2024</div>
        </div>
        <div style="text-align: center; padding: 1rem; background: #E8F5E9; border-radius: 8px;">
          <div style="font-size: 1.2rem; font-weight: bold; color: #388E3C;">Économie & Finances</div>
          <div style="font-size: 1.5rem; font-weight: bold;">2 333 Mds</div>
          <div style="font-size: 0.9rem; color: #666;">-18,1% vs 2024</div>
        </div>
        <div style="text-align: center; padding: 1rem; background: #FFF3E0; border-radius: 8px;">
          <div style="font-size: 1.2rem; font-weight: bold; color: #F57C00;">Éducation Nationale</div>
          <div style="font-size: 1.5rem; font-weight: bold;">1 562 Mds</div>
          <div style="font-size: 0.9rem; color: #666;">+1,9% vs 2024</div>
        </div>
        <div style="text-align: center; padding: 1rem; background: #F3E5F5; border-radius: 8px;">
          <div style="font-size: 1.2rem; font-weight: bold; color: #7B1FA2;">Énergie</div>
          <div style="font-size: 1.5rem; font-weight: bold;">1 332 Mds</div>
          <div style="font-size: 0.9rem; color: #666;">+226,6% vs 2024</div>
        </div>
      </div>
    </section>

    <!-- TABLEAU 10 : RÉPARTITION ADMINISTRATIVE COMPLÈTE -->
    <section class="card">
      <h2>Tableau 10 : Répartition du Budget par Rattachement Administratif</h2>
      
      <h3>Institutions et Ministères</h3>
      <table>
        <thead>
          <tr>
            <th>Institutions / Ministères</th>
            <th class="number">LFR 2024 (Mds Ar)</th>
            <th class="number">LF 2025 (Mds Ar)</th>
            <th class="number">Évolution</th>
            <th class="number">Variation (%)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Présidence de la République</td>
            <td class="number">177,1</td>
            <td class="number"><strong>224,7</strong></td>
            <td class="number">+47,6</td>
            <td class="number"><span class="badge success">+26,9%</span></td>
          </tr>
          <tr>
            <td>Sénat</td>
            <td class="number">22,1</td>
            <td class="number"><strong>21,3</strong></td>
            <td class="number">-0,8</td>
            <td class="number"><span class="badge danger">-3,6%</span></td>
          </tr>
          <tr>
            <td>Assemblée Nationale</td>
            <td class="number">87,4</td>
            <td class="number"><strong>85,9</strong></td>
            <td class="number">-1,5</td>
            <td class="number"><span class="badge danger">-1,7%</span></td>
          </tr>
          <tr>
            <td>Haute Cour Constitutionnelle</td>
            <td class="number">11,9</td>
            <td class="number"><strong>9,3</strong></td>
            <td class="number">-2,6</td>
            <td class="number"><span class="badge danger">-21,8%</span></td>
          </tr>
          <tr>
            <td>Primature</td>
            <td class="number">278,3</td>
            <td class="number"><strong>339,9</strong></td>
            <td class="number">+61,6</td>
            <td class="number"><span class="badge success">+22,1%</span></td>
          </tr>
          <tr>
            <td>Conseil du Famphavanana Malagasy</td>
            <td class="number">6,7</td>
            <td class="number"><strong>6,3</strong></td>
            <td class="number">-0,4</td>
            <td class="number"><span class="badge danger">-6,0%</span></td>
          </tr>
          <tr>
            <td>Commission Électorale Nationale Indépendante</td>
            <td class="number">113,3</td>
            <td class="number"><strong>16,4</strong></td>
            <td class="number">-96,9</td>
            <td class="number"><span class="badge danger">-85,5%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de la Défense Nationale</strong></td>
            <td class="number">557,0</td>
            <td class="number"><strong>543,2</strong></td>
            <td class="number">-13,8</td>
            <td class="number"><span class="badge danger">-2,5%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère des Affaires Étrangères</strong></td>
            <td class="number">99,2</td>
            <td class="number"><strong>104,7</strong></td>
            <td class="number">+5,5</td>
            <td class="number"><span class="badge success">+5,5%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de la Justice</strong></td>
            <td class="number">199,6</td>
            <td class="number"><strong>219,8</strong></td>
            <td class="number">+20,2</td>
            <td class="number"><span class="badge success">+10,1%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Intérieur</strong></td>
            <td class="number">150,2</td>
            <td class="number"><strong>134,7</strong></td>
            <td class="number">-15,5</td>
            <td class="number"><span class="badge danger">-10,3%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Économie et des Finances</strong></td>
            <td class="number">2 848,0</td>
            <td class="number"><strong>2 332,7</strong></td>
            <td class="number">-515,3</td>
            <td class="number"><span class="badge danger">-18,1%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de la Sécurité Publique</strong></td>
            <td class="number">228,3</td>
            <td class="number"><strong>229,2</strong></td>
            <td class="number">+0,9</td>
            <td class="number"><span class="badge info">+0,4%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Industrialisation et du Commerce</strong></td>
            <td class="number">113,2</td>
            <td class="number"><strong>119,6</strong></td>
            <td class="number">+6,4</td>
            <td class="number"><span class="badge success">+5,7%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de la Décentralisation et de l'Aménagement du Territoire</strong></td>
            <td class="number">356,8</td>
            <td class="number"><strong>568,1</strong></td>
            <td class="number">+211,3</td>
            <td class="number"><span class="badge success">+59,2%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère du Travail, de l'Emploi et de la Fonction Publique</strong></td>
            <td class="number">31,8</td>
            <td class="number"><strong>33,7</strong></td>
            <td class="number">+1,9</td>
            <td class="number"><span class="badge success">+6,0%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère du Tourisme et de l'Artisanat</strong></td>
            <td class="number">19,2</td>
            <td class="number"><strong>43,9</strong></td>
            <td class="number">+24,7</td>
            <td class="number"><span class="badge success">+128,6%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Enseignement Supérieur et de la Recherche Scientifique</strong></td>
            <td class="number">284,2</td>
            <td class="number"><strong>285,6</strong></td>
            <td class="number">+1,4</td>
            <td class="number"><span class="badge info">+0,5%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Environnement et du Développement Durable</strong></td>
            <td class="number">94,4</td>
            <td class="number"><strong>188,8</strong></td>
            <td class="number">+94,4</td>
            <td class="number"><span class="badge success">+100,0%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Éducation Nationale</strong></td>
            <td class="number">1 532,8</td>
            <td class="number"><strong>1 562,0</strong></td>
            <td class="number">+29,2</td>
            <td class="number"><span class="badge success">+1,9%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère des Transports et de la Météorologie</strong></td>
            <td class="number">63,9</td>
            <td class="number"><strong>216,3</strong></td>
            <td class="number">+152,4</td>
            <td class="number"><span class="badge success">+238,5%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de la Santé Publique</strong></td>
            <td class="number">716,6</td>
            <td class="number"><strong>921,0</strong></td>
            <td class="number">+204,4</td>
            <td class="number"><span class="badge success">+28,5%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de la Communication et de la Culture</strong></td>
            <td class="number">38,4</td>
            <td class="number"><strong>32,1</strong></td>
            <td class="number">-6,3</td>
            <td class="number"><span class="badge danger">-16,4%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère des Travaux Publics</strong></td>
            <td class="number">1 217,3</td>
            <td class="number"><strong>2 327,5</strong></td>
            <td class="number">+1 110,2</td>
            <td class="number"><span class="badge success">+91,2%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère des Mines et des Ressources Stratégiques</strong></td>
            <td class="number">18,3</td>
            <td class="number"><strong>18,1</strong></td>
            <td class="number">-0,2</td>
            <td class="number"><span class="badge danger">-1,1%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Énergie et des Hydrocarbures</strong></td>
            <td class="number">407,9</td>
            <td class="number"><strong>1 332,0</strong></td>
            <td class="number">+924,1</td>
            <td class="number"><span class="badge success">+226,6%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Eau, de l'Assainissement et de l'Hygiène</strong></td>
            <td class="number">306,1</td>
            <td class="number"><strong>600,2</strong></td>
            <td class="number">+294,1</td>
            <td class="number"><span class="badge success">+96,1%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Agriculture et de l'Élevage</strong></td>
            <td class="number">469,8</td>
            <td class="number"><strong>795,5</strong></td>
            <td class="number">+325,7</td>
            <td class="number"><span class="badge success">+69,3%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de la Pêche et de l'Économie Bleue</strong></td>
            <td class="number">29,9</td>
            <td class="number"><strong>28,8</strong></td>
            <td class="number">-1,1</td>
            <td class="number"><span class="badge danger">-3,7%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Enseignement Technique et de la Formation Professionnelle</strong></td>
            <td class="number">103,7</td>
            <td class="number"><strong>94,8</strong></td>
            <td class="number">-8,9</td>
            <td class="number"><span class="badge danger">-8,6%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de l'Artisanat et des Métiers</strong></td>
            <td class="number">2,5</td>
            <td class="number"><strong>-</strong></td>
            <td class="number">-2,5</td>
            <td class="number"><span class="badge danger">-100,0%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère du Développement Numérique, des Postes et des Télécommunications</strong></td>
            <td class="number">8,4</td>
            <td class="number"><strong>8,8</strong></td>
            <td class="number">+0,4</td>
            <td class="number"><span class="badge success">+4,8%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de la Population et des Solidarités</strong></td>
            <td class="number">99,1</td>
            <td class="number"><strong>193,4</strong></td>
            <td class="number">+94,3</td>
            <td class="number"><span class="badge success">+95,2%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère de la Jeunesse et des Sports</strong></td>
            <td class="number">40,5</td>
            <td class="number"><strong>58,1</strong></td>
            <td class="number">+17,6</td>
            <td class="number"><span class="badge success">+43,5%</span></td>
          </tr>
          <tr>
            <td><strong>Secrétariat d'État en charge des Nouvelles Villes et de l'Habitat</strong></td>
            <td class="number">247,1</td>
            <td class="number"><strong>138,8</strong></td>
            <td class="number">-108,3</td>
            <td class="number"><span class="badge danger">-43,8%</span></td>
          </tr>
          <tr>
            <td><strong>Ministère délégué chargé de la Gendarmerie</strong></td>
            <td class="number">414,8</td>
            <td class="number"><strong>446,4</strong></td>
            <td class="number">+31,6</td>
            <td class="number"><span class="badge success">+7,6%</span></td>
          </tr>
          <tr>
            <td><strong>Secrétariat d'État en charge de la Souveraineté Alimentaire</strong></td>
            <td class="number">-</td>
            <td class="number"><strong>127,3</strong></td>
            <td class="number">+127,3</td>
            <td class="number"><span class="badge success">Nouveau</span></td>
          </tr>
          <tr style="background: #FFF3E0; font-weight: bold;">
            <td><strong>Total Institutions et Ministères</strong></td>
            <td class="number"><strong>11 395,9</strong></td>
            <td class="number"><strong>14 408,9</strong></td>
            <td class="number"><strong>+3 013,0</strong></td>
            <td class="number"><span class="badge success">+26,4%</span></td>
          </tr>
        </tbody>
      </table>

      <h3 style="margin-top: 2rem;">Organes Constitutionnels</h3>
      <table>
        <thead>
          <tr>
            <th>Organes Constitutionnels</th>
            <th class="number">LFR 2024 (Mds Ar)</th>
            <th class="number">LF 2025 (Mds Ar)</th>
            <th class="number">Évolution</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Haut Conseil pour la Défense de la Démocratie et de l'État de Droit (HCDDED)</td>
            <td class="number">2,1</td>
            <td class="number"><strong>2,0</strong></td>
            <td class="number">-0,1</td>
          </tr>
          <tr>
            <td>Commission Nationale Indépendante des Droits de l'Homme (CNIDH)</td>
            <td class="number">2,1</td>
            <td class="number"><strong>2,0</strong></td>
            <td class="number">-0,1</td>
          </tr>
          <tr style="background: #E3F2FD;">
            <td><strong>Total « Organes Constitutionnels »</strong></td>
            <td class="number"><strong>4,2</strong></td>
            <td class="number"><strong>4,0</strong></td>
            <td class="number"><strong>-0,2</strong></td>
          </tr>
          <tr>
            <td>Haute Cour de Justice</td>
            <td class="number">3,7</td>
            <td class="number"><strong>3,5</strong></td>
            <td class="number">-0,2</td>
          </tr>
          <tr style="background: #FFF3E0; font-weight: bold;">
            <td><strong>Total Hors « Opérations d'ordre »</strong></td>
            <td class="number"><strong>11 403,8</strong></td>
            <td class="number"><strong>14 416,4</strong></td>
            <td class="number"><strong>+3 012,6</strong></td>
          </tr>
        </tbody>
      </table>
      <p style="font-size: 0.9rem; color: #666; margin-top: 1rem;"><em>Source : LF 2025, Article 6</em></p>
    </section>

    <!-- ANALYSE DES TENDANCES -->
    <section class="card">
      <h2>Analyse des Tendances Budgétaires</h2>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="border-left: 5px solid #388E3C; padding: 1rem; background: #E8F5E9;">
          <h3 style="color: #388E3C; margin-top: 0;">Croissances Significatives</h3>
          <ul class="styled-list">
            <li><strong>Énergie et Hydrocarbures</strong> : +226,6% (investissements énergétiques)</li>
            <li><strong>Transports et Météorologie</strong> : +238,5% (infrastructures routières)</li>
            <li><strong>Travaux Publics</strong> : +91,2% (grands projets d'infrastructure)</li>
            <li><strong>Tourisme et Artisanat</strong> : +128,6% (relance du secteur touristique)</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #D32F2F; padding: 1rem; background: #FFEBEE;">
          <h3 style="color: #D32F2F; margin-top: 0;">Baisses Notables</h3>
          <ul class="styled-list">
            <li><strong>Commission Électorale</strong> : -85,5% (fin de cycle électoral)</li>
            <li><strong>Économie et Finances</strong> : -18,1% (rationalisation)</li>
            <li><strong>Nouvelles Villes et Habitat</strong> : -43,8% (réorientation)</li>
            <li><strong>Communication et Culture</strong> : -16,4% (optimisation)</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #1565C0; padding: 1rem; background: #E3F2FD;">
          <h3 style="color: #1565C0; margin-top: 0;">Secteurs Prioritaires</h3>
          <ul class="styled-list">
            <li><strong>Infrastructures</strong> : 4 660 Mds Ar (Travaux Publics + Transports)</li>
            <li><strong>Énergie</strong> : 1 332 Mds Ar (transition énergétique)</li>
            <li><strong>Éducation</strong> : 1 847 Mds Ar (Éducation Nationale + Enseignement Supérieur)</li>
            <li><strong>Santé</strong> : 921 Mds Ar (système de santé)</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- NAVIGATION -->
    <section class="card">
      <h2>Explorer les Autres Analyses des Dépenses</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
  <a href="/depenses-nature" style="text-decoration: none;">
          <div style="border: 2px solid #1565C0; border-radius: 8px; padding: 1rem; text-align: center; background: #E3F2FD; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #1565C0;">Par Nature Économique</div>
            <div style="font-size: 0.9rem; color: #666;">→ Voir le détail</div>
          </div>
        </a>
  <a href="/depenses-investissements" style="text-decoration: none;">
          <div style="border: 2px solid #F57C00; border-radius: 8px; padding: 1rem; text-align: center; background: #FFF3E0; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #F57C00;">Programmes d'Investissement</div>
            <div style="font-size: 0.9rem; color: #666;">→ Voir le détail</div>
          </div>
        </a>
  <a href="/depenses" style="text-decoration: none;">
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