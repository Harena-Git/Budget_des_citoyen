<?php
use app\helpers\ViewHelper;

$title = "Dépenses 2025";
$breadcrumb = ['/' => 'Accueil', '/depenses' => 'Dépenses'];

// Début du contenu
ob_start();
?>

    <!-- INTRODUCTION -->
    <section class="card">
      <h2>Dépenses Publiques 2025</h2>
      <p>En 2025, les dépenses publiques atteignent <span class="highlight">16 304,9 milliards d'Ariary</span>, soit une augmentation de <strong>27,6%</strong> par rapport à 2024. Cette hausse est principalement due à la priorisation des investissements dans les secteurs sociaux de base, tels que la santé, l'éducation, l'énergie, l'eau et les infrastructures.</p>
      <p>Le budget général hors opérations d'ordre et intérêts de la dette s'élève à <strong>14 416,4 milliards d'Ariary</strong>.</p>
    </section>

    <!-- CHIFFRES CLÉS -->
    <section class="card">
      <h2>Chiffres Clés des Dépenses 2025</h2>
      <div class="stats-grid">
        <div class="stat-box">
          <div class="label">Dépenses d'Investissement</div>
          <div class="value">8 537 Mds Ar</div>
          <div class="change">+82,9% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Masse Salariale</div>
          <div class="value">3 846 Mds Ar</div>
          <div class="change">+0,8% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Fonctionnement Hors Solde</div>
          <div class="value">2 304 Mds Ar</div>
          <div class="change">-24,9% vs 2024</div>
        </div>
        <div class="stat-box negative">
          <div class="label">Intérêts de la Dette</div>
          <div class="value">757 Mds Ar</div>
          <div class="change">+12,6% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Part Investissement</div>
          <div class="value">52,4%</div>
          <div class="change">du budget total</div>
        </div>
        <div class="stat-box">
          <div class="label">Dépenses Total</div>
          <div class="value">16 305 Mds Ar</div>
          <div class="change">+27,6% vs 2024</div>
        </div>
      </div>
    </section>

    <!-- TABLEAU 7 : VENTILATION DES DÉPENSES -->
    <section class="card">
      <h2>Tableau 7 : Ventilation des Dépenses par Rubrique</h2>
      <table>
        <thead>
          <tr>
            <th>Rubriques</th>
            <th class="number">LFR 2024 (Mds Ar)</th>
            <th class="number">LF 2025 (Mds Ar)</th>
            <th class="number">Évolution</th>
            <th class="number">Variation (%)</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Intérêts de la dette</strong></td>
            <td class="number">672,0</td>
            <td class="number"><strong>756,5</strong></td>
            <td class="number">+84,5</td>
            <td class="number"><span class="badge danger">+12,6%</span></td>
          </tr>
          <tr>
            <td><strong>Dépenses courantes de solde (hors indemnités)</strong></td>
            <td class="number">3 814,5</td>
            <td class="number"><strong>3 846,4</strong></td>
            <td class="number">+31,9</td>
            <td class="number"><span class="badge info">+0,8%</span></td>
          </tr>
          <tr>
            <td><strong>Dépenses courantes hors solde</strong></td>
            <td class="number">3 069,0</td>
            <td class="number"><strong>2 304,3</strong></td>
            <td class="number">-764,7</td>
            <td class="number"><span class="badge success">-24,9%</span></td>
          </tr>
          <tr>
            <td style="padding-left: 2rem;">Indemnités</td>
            <td class="number">244,8</td>
            <td class="number">244,8</td>
            <td class="number">0</td>
            <td class="number"><span class="badge info">0%</span></td>
          </tr>
          <tr>
            <td style="padding-left: 2rem;">Biens/Services</td>
            <td class="number">573,2</td>
            <td class="number">504,7</td>
            <td class="number">-68,5</td>
            <td class="number"><span class="badge success">-11,9%</span></td>
          </tr>
          <tr>
            <td style="padding-left: 2rem;">Transferts et subventions</td>
            <td class="number">2 251,0</td>
            <td class="number">1 554,8</td>
            <td class="number">-696,2</td>
            <td class="number"><span class="badge success">-30,9%</span></td>
          </tr>
          <tr>
            <td><strong>Dépenses d'investissement</strong></td>
            <td class="number">4 836,8</td>
            <td class="number"><strong>8 537,2</strong></td>
            <td class="number">+3 700,4</td>
            <td class="number"><span class="badge success">+76,5%</span></td>
          </tr>
          <tr>
            <td style="padding-left: 2rem;">PIP sur financement interne</td>
            <td class="number">1 262,5</td>
            <td class="number">2 377,3</td>
            <td class="number">+1 114,8</td>
            <td class="number"><span class="badge success">+88,3%</span></td>
          </tr>
          <tr>
            <td style="padding-left: 2rem;">PIP sur financement externe</td>
            <td class="number">3 574,3</td>
            <td class="number">6 159,9</td>
            <td class="number">+2 585,6</td>
            <td class="number"><span class="badge success">+72,3%</span></td>
          </tr>
          <tr>
            <td><strong>Autres opérations nettes du trésor</strong></td>
            <td class="number">390,2</td>
            <td class="number"><strong>860,6</strong></td>
            <td class="number">+470,4</td>
            <td class="number"><span class="badge success">+120,6%</span></td>
          </tr>
          <tr style="background: #FFF3E0; font-weight: bold;">
            <td><strong>TOTAL</strong></td>
            <td class="number"><strong>12 782,4</strong></td>
            <td class="number"><strong>16 304,9</strong></td>
            <td class="number"><strong>+3 522,5</strong></td>
            <td class="number"><span class="badge success">+27,6%</span></td>
          </tr>
        </tbody>
      </table>
      <p style="font-size: 0.9rem; color: #666; margin-top: 1rem;"><em>Source : LF 2025, Tome I, OGT</em></p>
    </section>

    <!-- NAVIGATION VERS SOUS-PAGES -->
    <section class="card">
      <h2>Explorer les Dépenses en Détail</h2>
      <p>Accédez aux analyses détaillées par nature économique et par ministère :</p>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
        
        <a href="depenses-nature.html" style="text-decoration: none;">
          <div style="border: 3px solid #1565C0; border-radius: 8px; padding: 1.5rem; background: #E3F2FD; transition: transform 0.3s;">
            <h3 style="color: #1565C0; margin-top: 0; display: flex; align-items: center; gap: 0.5rem;">
              Par Nature Économique
            </h3>
            <p style="margin: 0.5rem 0; color: #424242;"><strong>Analyse détaillée</strong></p>
            <p style="margin: 0; font-size: 0.9rem; color: #666;">Dette, salaires, fonctionnement, investissements</p>
            <div style="margin-top: 1rem; color: #1565C0; font-weight: 600;">→ Voir le détail</div>
          </div>
        </a>

        <a href="depenses-ministeres.html" style="text-decoration: none;">
          <div style="border: 3px solid #388E3C; border-radius: 8px; padding: 1.5rem; background: #E8F5E9; transition: transform 0.3s;">
            <h3 style="color: #388E3C; margin-top: 0; display: flex; align-items: center; gap: 0.5rem;">
              Par Ministère
            </h3>
            <p style="margin: 0.5rem 0; color: #424242;"><strong>Répartition administrative</strong></p>
            <p style="margin: 0; font-size: 0.9rem; color: #666;">Budget par institution et ministère</p>
            <div style="margin-top: 1rem; color: #388E3C; font-weight: 600;">→ Voir le détail</div>
          </div>
        </a>

        <a href="depenses-investissements.html" style="text-decoration: none;">
          <div style="border: 3px solid #F57C00; border-radius: 8px; padding: 1.5rem; background: #FFF3E0; transition: transform 0.3s;">
            <h3 style="color: #F57C00; margin-top: 0; display: flex; align-items: center; gap: 0.5rem;">
              Programmes d'Investissement
            </h3>
            <p style="margin: 0.5rem 0; color: #424242;"><strong>8 537 Mds Ar</strong></p>
            <p style="margin: 0; font-size: 0.9rem; color: #666;">PIP énergie, agriculture, infrastructures, santé</p>
            <div style="margin-top: 1rem; color: #F57C00; font-weight: 600;">→ Voir le détail</div>
          </div>
        </a>

      </div>
    </section>

    <!-- RÉPARTITION GRAPHIQUE -->
    <section class="card">
      <h2>Répartition des Dépenses 2025</h2>
      
      <div class="chart-container">
        <div class="bar-chart">
          <div class="bar-item">
            <div class="bar-label"><strong>Investissements (52,4%)</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 52.4%; background: linear-gradient(90deg, #388E3C 0%, #66BB6A 100%);">8 537 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Salaires & Pensions (23,6%)</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 23.6%; background: linear-gradient(90deg, #1565C0 0%, #42A5F5 100%);">3 846 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Fonctionnement (14,1%)</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 14.1%; background: linear-gradient(90deg, #F57C00 0%, #FFB74D 100%);">2 304 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Intérêts Dette (4,6%)</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 4.6%; background: linear-gradient(90deg, #D32F2F 0%, #EF5350 100%);">757 Mds</div>
            </div>
          </div>
          <div class="bar-item">
            <div class="bar-label"><strong>Autres (5,3%)</strong></div>
            <div class="bar-track">
              <div class="bar-fill" style="width: 5.3%; background: linear-gradient(90deg, #7B1FA2 0%, #BA68C8 100%);">861 Mds</div>
            </div>
          </div>
        </div>
      </div>

      <div style="margin-top: 2rem; padding: 1rem; background: #E8F5E9; border-radius: 8px;">
        <p style="margin: 0;"><strong>💡 Priorité à l'investissement :</strong> Plus de la moitié du budget (52,4%) est consacrée aux investissements publics, reflétant la volonté de moderniser les infrastructures et de stimuler la croissance économique.</p>
      </div>
    </section>

    <!-- ÉVOLUTION DES INVESTISSEMENTS -->
    <section class="card">
      <h2>Figure 5 : Évolution des Investissements Publics par Source de Financement</h2>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; margin-top: 2rem;">
        
        <div style="text-align: center;">
          <h3 style="color: #1565C0;">2024 (LFR)</h3>
          <div style="position: relative; width: 200px; height: 200px; margin: 2rem auto; background: conic-gradient(#1565C0 0% 26.1%, #42A5F5 26.1% 100%); border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.2);"></div>
          <div style="margin-top: 1rem;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin: 0.5rem 0;">
              <span style="display: inline-block; width: 20px; height: 20px; background: #1565C0; border-radius: 3px;"></span>
              <span><strong>PIP Interne :</strong> 1 262,5 Mds (26,1%)</span>
            </div>
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin: 0.5rem 0;">
              <span style="display: inline-block; width: 20px; height: 20px; background: #42A5F5; border-radius: 3px;"></span>
              <span><strong>PIP Externe :</strong> 3 574,3 Mds (73,9%)</span>
            </div>
            <div style="margin-top: 1rem; font-size: 1.2rem; font-weight: bold; color: #424242;">
              Total : 4 836,8 Mds Ar
            </div>
          </div>
        </div>

        <div style="text-align: center;">
          <h3 style="color: #388E3C;">2025 (LF)</h3>
          <div style="position: relative; width: 200px; height: 200px; margin: 2rem auto; background: conic-gradient(#388E3C 0% 27.8%, #66BB6A 27.8% 100%); border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.2);"></div>
          <div style="margin-top: 1rem;">
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin: 0.5rem 0;">
              <span style="display: inline-block; width: 20px; height: 20px; background: #388E3C; border-radius: 3px;"></span>
              <span><strong>PIP Interne :</strong> 2 377,3 Mds (27,8%)</span>
            </div>
            <div style="display: flex; align-items: center; justify-content: center; gap: 0.5rem; margin: 0.5rem 0;">
              <span style="display: inline-block; width: 20px; height: 20px; background: #66BB6A; border-radius: 3px;"></span>
              <span><strong>PIP Externe :</strong> 6 159,9 Mds (72,2%)</span>
            </div>
            <div style="margin-top: 1rem; font-size: 1.2rem; font-weight: bold; color: #424242;">
              Total : 8 537,2 Mds Ar
            </div>
          </div>
        </div>

      </div>

      <div style="margin-top: 2rem; padding: 1rem; background: #E3F2FD; border-radius: 8px;">
        <p style="margin: 0;"><strong>Croissance des investissements :</strong> +3 700,4 Mds Ar (+76,5%) | <strong>Financement externe dominant :</strong> 72,2% des investissements</p>
      </div>
    </section>

  </main>

<?php
$content = ob_get_clean();
require dirname(__DIR__) . '/layouts/main.php';
?>