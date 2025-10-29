<?php
use app\helpers\ViewHelper;

$title = "Situation du Déficit 2025";
$breadcrumb = ['/' => 'Accueil', '/deficit' => 'Déficit', '/deficit/situation' => 'Situation du Déficit'];

// Début du contenu
ob_start();
// Valeurs par défaut
$situation_actuelle = $situation_actuelle ?? ['montant_deficit' => 0];
$evolution = $evolution ?? [];
$pourcentage_pib = $pourcentage_pib ?? 0;
if (!isset($helper)) {
  $helper = new class {
    public function formatNumber($n) {
      if ($n === null || $n === '') return '';
      if (is_numeric($n)) return number_format($n, (floor($n) == $n) ? 0 : 1, ',', ' ');
      return htmlspecialchars((string)$n, ENT_QUOTES, 'UTF-8');
    }
  };
}
?>

    <!-- INTRODUCTION -->
    <section class="card">
      <h2>Situation du Déficit Budgétaire 2025</h2>
      <p>Analyse détaillée de la situation du déficit budgétaire 2025, incluant le calcul, la comparaison avec l'année précédente, et la distinction entre solde primaire et solde global.</p>
    </section>

    <!-- FIGURE 6 : SITUATION DU DÉFICIT -->
    <section class="card">
      <h2>Figure 6 : Prévision du Déficit Budgétaire</h2>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
        
        <!-- RECETTES -->
        <div style="text-align: center;">
          <div style="background: linear-gradient(135deg, #1565C0 0%, #42A5F5 100%); color: white; padding: 2rem; border-radius: 8px; margin-bottom: 1rem;">
            <h3 style="margin: 0 0 1rem 0; font-size: 1.4rem;">RECETTES TOTALES ET DONS</h3>
            <div style="font-size: 2rem; font-weight: bold;">12 962,7</div>
            <div style="font-size: 1.2rem;">milliards d'Ariary</div>
          </div>
          <div style="background: #E3F2FD; padding: 1rem; border-radius: 8px;">
            <p style="margin: 0; font-weight: 600;">Sources :</p>
            <ul style="text-align: left; margin: 0.5rem 0 0 0; padding-left: 1.5rem;">
              <li>Recettes fiscales : 9 994,4 Mds</li>
              <li>Recettes non fiscales : 491,7 Mds</li>
              <li>Dons : 2 476,6 Mds</li>
            </ul>
          </div>
        </div>

        <!-- DÉPENSES -->
        <div style="text-align: center;">
          <div style="background: linear-gradient(135deg, #D32F2F 0%, #EF5350 100%); color: white; padding: 2rem; border-radius: 8px; margin-bottom: 1rem;">
            <h3 style="margin: 0 0 1rem 0; font-size: 1.4rem;">DÉPENSES TOTALES</h3>
            <div style="font-size: 2rem; font-weight: bold;">16 304,9</div>
            <div style="font-size: 1.2rem;">milliards d'Ariary</div>
          </div>
          <div style="background: #FFEBEE; padding: 1rem; border-radius: 8px;">
            <p style="margin: 0; font-weight: 600;">Répartition :</p>
            <ul style="text-align: left; margin: 0.5rem 0 0 0; padding-left: 1.5rem;">
              <li>Investissements : 8 537,2 Mds</li>
              <li>Salaires & pensions : 3 846,4 Mds</li>
              <li>Fonctionnement : 2 304,3 Mds</li>
              <li>Dette : 756,5 Mds</li>
            </ul>
          </div>
        </div>

      </div>

      <!-- DÉFICIT -->
      <div style="text-align: center; margin: 2rem 0;">
        <div style="background: linear-gradient(135deg, #F57C00 0%, #FFB74D 100%); color: white; padding: 2rem; border-radius: 8px; display: inline-block; min-width: 300px;">
          <h3 style="margin: 0 0 1rem 0; font-size: 1.4rem;">DÉFICIT BUDGÉTAIRE</h3>
          <div style="font-size: 2.5rem; font-weight: bold;">3 642,2</div>
          <div style="font-size: 1.3rem;">milliards d'Ariary (4,1% du PIB)</div>
        </div>
      </div>

      <div style="margin-top: 2rem; padding: 1rem; background: #FFF3E0; border-radius: 8px;">
        <p style="margin: 0;"><strong>💡 Calcul du déficit :</strong> Dépenses totales (16 304,9 Mds) - Recettes et dons (12 962,7 Mds) = <strong>3 642,2 milliards d'Ariary</strong></p>
      </div>
    </section>

    <!-- COMPARAISON AVEC 2024 -->
    <section class="card">
      <h2>Évolution du Déficit 2024-2025</h2>
      
      <table>
        <thead>
          <tr>
            <th>Indicateur</th>
            <th class="number">LFR 2024</th>
            <th class="number">LF 2025</th>
            <th class="number">Évolution</th>
            <th class="number">Variation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Déficit budgétaire (Mds Ar)</strong></td>
            <td class="number">3 395,8</td>
            <td class="number"><strong>3 642,2</strong></td>
            <td class="number">+246,4</td>
            <td class="number"><span class="badge danger">+7,3%</span></td>
          </tr>
          <tr>
            <td><strong>Déficit (% PIB)</strong></td>
            <td class="number">4,3%</td>
            <td class="number"><strong>4,1%</strong></td>
            <td class="number">-0,2 pt</td>
            <td class="number"><span class="badge success">Amélioration</span></td>
          </tr>
          <tr>
            <td><strong>Solde primaire (Mds Ar)</strong></td>
            <td class="number">214,2</td>
            <td class="number"><strong>1 097,6</strong></td>
            <td class="number">+883,4</td>
            <td class="number"><span class="badge success">+412,5%</span></td>
          </tr>
          <tr>
            <td><strong>Recettes totales (Mds Ar)</strong></td>
            <td class="number">9 836,6</td>
            <td class="number"><strong>12 962,7</strong></td>
            <td class="number">+3 126,1</td>
            <td class="number"><span class="badge success">+31,8%</span></td>
          </tr>
          <tr>
            <td><strong>Dépenses totales (Mds Ar)</strong></td>
            <td class="number">12 782,4</td>
            <td class="number"><strong>16 304,9</strong></td>
            <td class="number">+3 522,5</td>
            <td class="number"><span class="badge success">+27,6%</span></td>
          </tr>
        </tbody>
      </table>

      <div style="margin-top: 1.5rem; padding: 1rem; background: #E8F5E9; border-radius: 8px;">
        <p style="margin: 0;"><strong>Analyse :</strong> Bien que le déficit nominal augmente en valeur absolue, il s'améliore en pourcentage du PIB (passant de 4,3% à 4,1%). Le solde primaire connaît une amélioration spectaculaire, passant de 214,2 à 1 097,6 milliards d'Ariary, indiquant une meilleure soutenabilité des finances publiques hors service de la dette.</p>
      </div>
    </section>

    <!-- SOLDE PRIMAIRE VS SOLDE GLOBAL -->
    <section class="card">
      <h2>Solde Primaire vs Solde Global</h2>
      <p>Le <strong>solde primaire</strong> représente l'excédent ou le déficit des finances publiques hors charges d'intérêts de la dette. C'est un indicateur important de la soutenabilité des finances publiques.</p>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 2rem;">
        
        <div style="text-align: center; background: #E8F5E9; padding: 2rem; border-radius: 8px;">
          <h3 style="color: #388E3C; margin-top: 0;">Solde Primaire 2025</h3>
          <div style="font-size: 3rem; font-weight: bold; color: #388E3C; margin: 1rem 0;">+1 097,6</div>
          <div style="font-size: 1.2rem; color: #388E3C;">milliards d'Ariary</div>
          <p style="margin: 1rem 0 0 0; font-size: 0.9rem;">Excédent hors charges d'intérêts de la dette</p>
          <div style="margin-top: 1rem; font-size: 0.9rem;">
            <strong>Calcul :</strong> Recettes - (Dépenses - Intérêts dette)
          </div>
        </div>

        <div style="text-align: center; background: #FFEBEE; padding: 2rem; border-radius: 8px;">
          <h3 style="color: #D32F2F; margin-top: 0;">Solde Global 2025</h3>
          <div style="font-size: 3rem; font-weight: bold; color: #D32F2F; margin: 1rem 0;">-3 642,2</div>
          <div style="font-size: 1.2rem; color: #D32F2F;">milliards d'Ariary</div>
          <p style="margin: 1rem 0 0 0; font-size: 0.9rem;">Déficit incluant les charges d'intérêts</p>
          <div style="margin-top: 1rem; font-size: 0.9rem;">
            <strong>Calcul :</strong> Recettes - Dépenses totales
          </div>
        </div>

      </div>

      <div style="margin-top: 2rem; padding: 1rem; background: #E3F2FD; border-radius: 8px;">
        <p style="margin: 0;"><strong>💡 Signification :</strong> Le solde primaire positif indique que, hors service de la dette, les finances publiques dégagent un excédent. Le déficit global est principalement dû aux charges d'intérêts de la dette accumulée, ce qui souligne l'importance de la gestion de la dette publique.</p>
      </div>
    </section>

    <!-- DÉCOMPOSITION DÉTAILLÉE -->
    <section class="card">
      <h2>Décomposition Détaillée du Déficit</h2>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 1.5rem;">
        
        <div>
          <h3 style="color: #1565C0;">Recettes et Dons 2025</h3>
          <table>
            <thead>
              <tr>
                <th>Source</th>
                <th class="number">Montant (Mds Ar)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Recettes fiscales intérieures</td>
                <td class="number">5 628,4</td>
              </tr>
              <tr>
                <td>Recettes douanières</td>
                <td class="number">4 366,0</td>
              </tr>
              <tr>
                <td>Recettes non fiscales</td>
                <td class="number">491,7</td>
              </tr>
              <tr>
                <td>Dons</td>
                <td class="number">2 476,6</td>
              </tr>
              <tr style="background: #E3F2FD; font-weight: bold;">
                <td>Total recettes + dons</td>
                <td class="number">12 962,7</td>
              </tr>
            </tbody>
          </table>
        </div>

        <div>
          <h3 style="color: #D32F2F;">Dépenses 2025</h3>
          <table>
            <thead>
              <tr>
                <th>Nature</th>
                <th class="number">Montant (Mds Ar)</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Dépenses d'investissement</td>
                <td class="number">8 537,2</td>
              </tr>
              <tr>
                <td>Dépenses courantes de solde</td>
                <td class="number">3 846,4</td>
              </tr>
              <tr>
                <td>Dépenses courantes hors solde</td>
                <td class="number">2 304,3</td>
              </tr>
              <tr>
                <td>Intérêts de la dette</td>
                <td class="number">756,5</td>
              </tr>
              <tr>
                <td>Autres opérations</td>
                <td class="number">860,6</td>
              </tr>
              <tr style="background: #FFEBEE; font-weight: bold;">
                <td>Total dépenses</td>
                <td class="number">16 304,9</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
    </section>

    <!-- NAVIGATION -->
    <section class="card">
      <h2>Explorer les Autres Aspects du Déficit</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
  <a href="/deficit-financement" style="text-decoration: none;">
          <div style="border: 2px solid #388E3C; border-radius: 8px; padding: 1rem; text-align: center; background: #E8F5E9; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #388E3C;">Financement du Déficit</div>
            <div style="font-size: 0.9rem; color: #666;">→ Voir le détail</div>
          </div>
        </a>
  <a href="/deficit" style="text-decoration: none;">
          <div style="border: 2px solid #1565C0; border-radius: 8px; padding: 1rem; text-align: center; background: #E3F2FD; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #1565C0;">Vue d'Ensemble</div>
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