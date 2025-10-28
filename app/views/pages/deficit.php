<?php
use app\helpers\ViewHelper;

// Titre et fil d'Ariane
$title = "Déficit 2025";
$breadcrumb = ['/' => 'Accueil', '/deficit' => 'Déficit'];

// Début du contenu
ob_start();
?>

    <!-- INTRODUCTION -->
    <section class="card">
      <h2>Déficit Budgétaire 2025</h2>
      <p>La Loi de Finances 2025 enregistre un <span class="highlight">déficit base caisse de 3 642,2 milliards d'Ariary</span>, ce qui constitue <strong>4,1% du PIB</strong>. Ce déficit résulte de l'écart entre les recettes totales (incluant les dons) et les dépenses totales de l'État, et sera financé par des ressources intérieures et extérieures.</p>
    </section>

    <!-- CHIFFRES CLÉS -->
    <section class="card">
      <h2>Chiffres Clés du Déficit 2025</h2>
      <div class="stats-grid">
        <div class="stat-box">
          <div class="label">Recettes + Dons</div>
          <div class="value">12 963 Mds Ar</div>
          <div class="change">Total disponible</div>
        </div>
        <div class="stat-box negative">
          <div class="label">Dépenses Totales</div>
          <div class="value">16 305 Mds Ar</div>
          <div class="change">Engagements de l'État</div>
        </div>
        <div class="stat-box negative">
          <div class="label">Déficit Budgétaire</div>
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
          <div class="label">Solde Primaire</div>
          <div class="value">1 098 Mds Ar</div>
          <div class="change">Excédent hors dette</div>
        </div>
      </div>
    </section>

    <!-- NAVIGATION VERS SOUS-PAGES -->
    <section class="card">
      <h2>Analyser le Déficit en Détail</h2>
      <p>Explorez les différentes dimensions du déficit budgétaire 2025 :</p>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
        
        <a href="deficit-situation.html" style="text-decoration: none;">
          <div style="border: 3px solid #1565C0; border-radius: 8px; padding: 1.5rem; background: #E3F2FD; transition: transform 0.3s;">
            <h3 style="color: #1565C0; margin-top: 0; display: flex; align-items: center; gap: 0.5rem;">
              Situation du Déficit
            </h3>
            <p style="margin: 0.5rem 0; color: #424242;"><strong>Analyse détaillée</strong></p>
            <p style="margin: 0; font-size: 0.9rem; color: #666;">Calcul, comparaison avec 2024, solde primaire vs global</p>
            <div style="margin-top: 1rem; color: #1565C0; font-weight: 600;">→ Voir le détail</div>
          </div>
        </a>

        <a href="deficit-financement.html" style="text-decoration: none;">
          <div style="border: 3px solid #388E3C; border-radius: 8px; padding: 1.5rem; background: #E8F5E9; transition: transform 0.3s;">
            <h3 style="color: #388E3C; margin-top: 0; display: flex; align-items: center; gap: 0.5rem;">
              Financement du Déficit
            </h3>
            <p style="margin: 0.5rem 0; color: #424242;"><strong>Sources de financement</strong></p>
            <p style="margin: 0; font-size: 0.9rem; color: #666;">Intérieur vs extérieur, stratégie de gestion</p>
            <div style="margin-top: 1rem; color: #388E3C; font-weight: 600;">→ Voir le détail</div>
          </div>
        </a>

      </div>
    </section>

    <!-- VUE D'ENSEMBLE RAPIDE -->
    <section class="card">
      <h2>Vue d'Ensemble du Déficit 2025</h2>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin: 2rem 0;">
        
        <!-- RECETTES -->
        <div style="text-align: center;">
          <div style="background: linear-gradient(135deg, #1565C0 0%, #42A5F5 100%); color: white; padding: 1.5rem; border-radius: 8px; margin-bottom: 1rem;">
            <h3 style="margin: 0 0 1rem 0; font-size: 1.2rem;">RECETTES + DONS</h3>
            <div style="font-size: 1.5rem; font-weight: bold;">12 962,7</div>
            <div style="font-size: 1rem;">milliards d'Ariary</div>
          </div>
        </div>

        <!-- DÉPENSES -->
        <div style="text-align: center;">
          <div style="background: linear-gradient(135deg, #D32F2F 0%, #EF5350 100%); color: white; padding: 1.5rem; border-radius: 8px; margin-bottom: 1rem;">
            <h3 style="margin: 0 0 1rem 0; font-size: 1.2rem;">DÉPENSES TOTALES</h3>
            <div style="font-size: 1.5rem; font-weight: bold;">16 304,9</div>
            <div style="font-size: 1rem;">milliards d'Ariary</div>
          </div>
        </div>

      </div>

      <!-- DÉFICIT -->
      <div style="text-align: center; margin: 2rem 0;">
        <div style="background: linear-gradient(135deg, #F57C00 0%, #FFB74D 100%); color: white; padding: 1.5rem; border-radius: 8px; display: inline-block; min-width: 250px;">
          <h3 style="margin: 0 0 1rem 0; font-size: 1.2rem;">DÉFICIT BUDGÉTAIRE</h3>
          <div style="font-size: 2rem; font-weight: bold;">3 642,2</div>
          <div style="font-size: 1.1rem;">milliards d'Ariary (4,1% du PIB)</div>
        </div>
      </div>

      <div style="margin-top: 2rem; padding: 1rem; background: #FFF3E0; border-radius: 8px;">
        <p style="margin: 0;"><strong>💡 Calcul du déficit :</strong> Dépenses totales (16 304,9 Mds) - Recettes et dons (12 962,7 Mds) = <strong>3 642,2 milliards d'Ariary</strong></p>
      </div>
    </section>

    <!-- RÉPARTITION FINANCEMENT RAPIDE -->
    <section class="card">
      <h2>Répartition du Financement</h2>
      
      <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-top: 1.5rem;">
        
        <div style="text-align: center;">
          <h3 style="color: #1565C0;">Financement Intérieur</h3>
          <div style="position: relative; width: 150px; height: 150px; margin: 1rem auto; background: conic-gradient(#1565C0 0% 13.6%, #E3F2FD 13.6% 100%); border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.2);"></div>
          <div style="margin-top: 1rem;">
            <div style="font-size: 1.5rem; font-weight: bold; color: #1565C0;">494,6 Mds</div>
            <div style="font-size: 0.9rem; color: #666;">13,6% du déficit</div>
          </div>
        </div>

        <div style="text-align: center;">
          <h3 style="color: #388E3C;">Financement Extérieur</h3>
          <div style="position: relative; width: 150px; height: 150px; margin: 1rem auto; background: conic-gradient(#388E3C 0% 86.4%, #E8F5E9 86.4% 100%); border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.2);"></div>
          <div style="margin-top: 1rem;">
            <div style="font-size: 1.5rem; font-weight: bold; color: #388E3C;">3 147,6 Mds</div>
            <div style="font-size: 0.9rem; color: #666;">86,4% du déficit</div>
          </div>
        </div>

      </div>
    </section>

  </main>

<?php
$content = ob_get_clean();
require dirname(__DIR__) . '/layouts/main.php';
?>