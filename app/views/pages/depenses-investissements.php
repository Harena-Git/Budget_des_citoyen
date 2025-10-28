<!DOCTYPE html>
<html lang="fr">
<?php
use app\helpers\ViewHelper;

$title = "Investissements Publics (PIP) 2025";
$breadcrumb = ['/' => 'Accueil', '/depenses' => 'Dépenses', '/depenses/investissements' => 'Investissements'];

// Début du contenu
ob_start();
?>

    <!-- INTRODUCTION -->
      <p>Le montant des investissements publics s'élève à <span class="highlight">8 537,2 milliards d'Ariary</span> en 2025, marquant une augmentation conséquente de <strong>82,9%</strong> par rapport à 2024. Cette hausse s'explique par la priorisation des investissements dans les secteurs structurants pour le développement économique et social du pays.</p>
    </section>

    <!-- CHIFFRES CLÉS -->
    <section class="card">
      <h2>Chiffres Clés des Investissements 2025</h2>
      <div class="stats-grid">
        <div class="stat-box">
          <div class="label">Total Investissements</div>
          <div class="value">8 537 Mds Ar</div>
          <div class="change">+82,9% vs 2024</div>
        </div>
        <div class="stat-box">
          <div class="label">Financement Interne</div>
          <div class="value">2 377 Mds Ar</div>
          <div class="change">27,8% du total</div>
        </div>
        <div class="stat-box">
          <div class="label">Financement Externe</div>
          <div class="value">6 160 Mds Ar</div>
          <div class="change">72,2% du total</div>
        </div>
        <div class="stat-box">
          <div class="label">Part du Budget Total</div>
          <div class="value">52,4%</div>
          <div class="change">Priorité nationale</div>
        </div>
      </div>
    </section>

    <!-- FIGURE 5 : ÉVOLUTION INVESTISSEMENTS -->
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
        <p style="margin: 0;"><strong>Analyse :</strong> La croissance spectaculaire de 82,9% des investissements publics est principalement portée par le financement externe (+72,3%), reflétant l'engagement des partenaires techniques et financiers dans les projets de développement structurants.</p>
      </div>
    </section>

    <!-- PIP ÉNERGIE ET TRANSITION ÉCOLOGIQUE -->
    <section class="card">
      <h2>Énergie et Transition Écologique</h2>
      <p>Investissements majeurs dans le secteur énergétique pour assurer la sécurité énergétique et la transition vers des sources renouvelables.</p>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="border-left: 5px solid #F57C00; padding: 1rem; background: #FFF3E0;">
          <h3 style="color: #F57C00; margin-top: 0;">Renforcement Énergétique</h3>
          <ul class="styled-list">
            <li><strong>Projets hydroélectriques</strong> Mandraka III et Volobe</li>
            <li>Augmentation de la production d'électricité nationale</li>
            <li>Diversification du mix énergétique</li>
            <li>Réduction de la dépendance aux importations</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #388E3C; padding: 1rem; background: #E8F5E9;">
          <h3 style="color: #388E3C; margin-top: 0;">Énergie Solaire et Foyers</h3>
          <ul class="styled-list">
            <li><strong>Installation de 150 MW</strong> de centrales solaires</li>
            <li>Extension des kits solaires 3 kW (projet Hazavana ho anao)</li>
            <li>Promotion des technologies de cuisson écologiques</li>
            <li>Développement de l'éthanol, biogaz et charbon écologique</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #1565C0; padding: 1rem; background: #E3F2FD;">
          <h3 style="color: #1565C0; margin-top: 0;">Infrastructures Énergétiques</h3>
          <ul class="styled-list">
            <li><strong>Hybridation des sources d'énergie</strong></li>
            <li>Développement de la production locale</li>
            <li>Modernisation du réseau de distribution</li>
            <li>Renforcement de la résilience énergétique</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #7B1FA2; padding: 1rem; background: #F3E5F5;">
          <h3 style="color: #7B1FA2; margin-top: 0;">Transformation des Déchets</h3>
          <ul class="styled-list">
            <li><strong>Développement de projets</strong> de valorisation énergétique</li>
            <li>Production de 20 à 30 MW à partir des déchets</li>
            <li>Réduction de l'impact environnemental</li>
            <li>Économie circulaire et durable</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- PIP AGRICULTURE DURABLE -->
    <section class="card">
      <h2>Agriculture Durable et Sécurité Alimentaire</h2>
      <p>Investissements pour moderniser le secteur agricole, augmenter la production et assurer la sécurité alimentaire nationale.</p>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="border-left: 5px solid #388E3C; padding: 1rem; background: #E8F5E9;">
          <h3 style="color: #388E3C; margin-top: 0;">Production de Riz</h3>
          <ul class="styled-list">
            <li><strong>Distribution de semences hybrides</strong> améliorées</li>
            <li>Mécanisation des processus agricoles</li>
            <li>Soutien aux projets Titre vert et Ankohonana miarina</li>
            <li>Objectif : <strong>+1 million de tonnes</strong> de paddy</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #F57C00; padding: 1rem; background: #FFF3E0;">
          <h3 style="color: #F57C00; margin-top: 0;">Réhabilitation des Infrastructures</h3>
          <ul class="styled-list">
            <li><strong>Modernisation des systèmes d'irrigation</strong></li>
            <li>Réhabilitation des barrages et périmètres irrigués</li>
            <li>Construction de canaux d'irrigation et digues</li>
            <li>Systèmes de gestion de l'eau et stockage</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #1565C0; padding: 1rem; background: #E3F2FD;">
          <h3 style="color: #1565C0; margin-top: 0;">Mécanisation et Modernisation</h3>
          <ul class="styled-list">
            <li><strong>Techniques PFUMVUDZA</strong> pour améliorer la productivité</li>
            <li>Introduction de technologies agricoles modernes</li>
            <li>Formation des agriculteurs aux nouvelles méthodes</li>
            <li>Augmentation des rendements par hectare</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #7B1FA2; padding: 1rem; background: #F3E5F5;">
          <h3 style="color: #7B1FA2; margin-top: 0;">Usines d'Engrais</h3>
          <ul class="styled-list">
            <li><strong>Construction d'usines locales</strong> de production d'engrais</li>
            <li>Réduction de la dépendance aux importations</li>
            <li>Soutien à la productivité agricole</li>
            <li>Prix compétitifs pour les agriculteurs</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #D32F2F; padding: 1rem; background: #FFEBEE;">
          <h3 style="color: #D32F2F; margin-top: 0;">Développement de l'Aquaculture</h3>
          <ul class="styled-list">
            <li><strong>Renforcement de l'aquaculture</strong> nationale</li>
            <li>Diversification des sources de protéines</li>
            <li>Contribution à la sécurité alimentaire</li>
            <li>Création d'emplois dans les zones côtières</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- PIP INFRASTRUCTURES -->
    <section class="card">
      <h2>Infrastructures et Aménagement du Territoire</h2>
      <p>Investissements structurants dans les infrastructures pour améliorer la connectivité, la mobilité et le développement économique.</p>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="border-left: 5px solid #1565C0; padding: 1rem; background: #E3F2FD;">
          <h3 style="color: #1565C0; margin-top: 0;">Infrastructures Routières</h3>
          <ul class="styled-list">
            <li><strong>Poursuite des travaux sur la RN13</strong></li>
            <li>Autoroute reliant Antananarivo à Toamasina</li>
            <li>Amélioration de la connectivité nationale</li>
            <li>Facilitation du transport des marchandises</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #388E3C; padding: 1rem; background: #E8F5E9;">
          <h3 style="color: #388E3C; margin-top: 0;">Projets Urbains</h3>
          <ul class="styled-list">
            <li><strong>Aménagement du flyover Anosizato</strong></li>
            <li>Développement du Kianja Maki Andohatapenaka</li>
            <li>Création de corridors économiques</li>
            <li>Dynamisation des échanges commerciaux</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #F57C00; padding: 1rem; background: #FFF3E0;">
          <h3 style="color: #F57C00; margin-top: 0;">Pipeline Efaho</h3>
          <ul class="styled-list">
            <li><strong>Construction du pipeline Efaho</strong></li>
            <li>Approvisionnement en eau dans le sud du pays</li>
            <li>Lutte contre la sécheresse</li>
            <li>Amélioration de l'accès à l'eau potable</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #7B1FA2; padding: 1rem; background: #F3E5F5;">
          <h3 style="color: #7B1FA2; margin-top: 0;">Transport Urbain</h3>
          <ul class="styled-list">
            <li><strong>Développement du train urbain</strong></li>
            <li>Installation de lignes de transport par câble</li>
            <li>Amélioration de la mobilité urbaine</li>
            <li>Réduction de la congestion routière</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #D32F2F; padding: 1rem; background: #FFEBEE;">
          <h3 style="color: #D32F2F; margin-top: 0;">Aménagement Urbain</h3>
          <ul class="styled-list">
            <li><strong>Projet Lake Village d'Ivato</strong></li>
            <li>Développement urbain intégré</li>
            <li>Amélioration des infrastructures locales</li>
            <li>Création d'espaces de vie modernes</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- PIP SANTÉ ET ÉDUCATION -->
    <section class="card">
      <h2>Santé et Éducation</h2>
      <p>Investissements dans le capital humain pour améliorer l'accès aux services sociaux de base et renforcer les compétences.</p>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="border-left: 5px solid #D32F2F; padding: 1rem; background: #FFEBEE;">
          <h3 style="color: #D32F2F; margin-top: 0;">Santé</h3>
          <ul class="styled-list">
            <li><strong>Opérationnalisation de centres de santé</strong></li>
            <li>Distribution de vaccins et médicaments essentiels</li>
            <li>Programmes de santé publique</li>
            <li>Lutte contre les maladies transmissibles</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #1565C0; padding: 1rem; background: #E3F2FD;">
          <h3 style="color: #1565C0; margin-top: 0;">Éducation</h3>
          <ul class="styled-list">
            <li><strong>Construction d'écoles</strong> et salles de classe</li>
            <li>Distribution de kits scolaires</li>
            <li>Mise en place de cantines scolaires</li>
            <li>Amélioration des conditions d'apprentissage</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #388E3C; padding: 1rem; background: #E8F5E9;">
          <h3 style="color: #388E3C; margin-top: 0;">Formation Professionnelle</h3>
          <ul class="styled-list">
            <li><strong>Centres de formation de masse</strong></li>
            <li>Renforcement des compétences techniques</li>
            <li>Adaptation aux besoins du marché du travail</li>
            <li>Insertion professionnelle des jeunes</li>
          </ul>
        </div>

        <div style="border-left: 5px solid #7B1FA2; padding: 1rem; background: #F3E5F5;">
          <h3 style="color: #7B1FA2; margin-top: 0;">Digitalisation</h3>
          <ul class="styled-list">
            <li><strong>Distribution des karinem-pokontany</strong> avec QR code</li>
            <li>Amélioration de la traçabilité des aides</li>
            <li>Modernisation de l'administration</li>
            <li>Services publics numérisés</li>
          </ul>
        </div>

      </div>
    </section>

    <!-- IMPACT ATTENDU -->
    <section class="card">
      <h2>Impact Économique et Social Attendue</h2>
      
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 1.5rem;">
        
        <div style="text-align: center; padding: 1.5rem; background: #E8F5E9; border-radius: 8px;">
          <div style="font-size: 2rem; font-weight: bold; color: #388E3C;">5,0%</div>
          <div style="font-size: 0.9rem; color: #388E3C;">Croissance économique</div>
        </div>

        <div style="text-align: center; padding: 1.5rem; background: #E3F2FD; border-radius: 8px;">
          <div style="font-size: 2rem; font-weight: bold; color: #1565C0;">6 650</div>
          <div style="font-size: 0.9rem; color: #1565C0;">Postes créés</div>
        </div>

        <div style="text-align: center; padding: 1.5rem; background: #FFF3E0; border-radius: 8px;">
          <div style="font-size: 2rem; font-weight: bold; color: #F57C00;">+1M</div>
          <div style="font-size: 0.9rem; color: #F57C00;">Tonnes de paddy</div>
        </div>

        <div style="text-align: center; padding: 1.5rem; background: #F3E5F5; border-radius: 8px;">
          <div style="font-size: 2rem; font-weight: bold; color: #7B1FA2;">150 MW</div>
          <div style="font-size: 0.9rem; color: #7B1FA2;">Énergie solaire</div>
        </div>

      </div>

      <div style="margin-top: 2rem; padding: 1rem; background: #E3F2FD; border-radius: 8px;">
        <p style="margin: 0;"><strong>Vision stratégique :</strong> Ces investissements massifs visent à créer un effet multiplicateur sur l'économie nationale, à améliorer les conditions de vie des populations et à poser les bases d'une croissance durable et inclusive.</p>
      </div>
    </section>

    <!-- NAVIGATION -->
    <section class="card">
      <h2>Explorer les Autres Analyses des Dépenses</h2>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; margin-top: 1.5rem;">
        <a href="depenses-nature.html" style="text-decoration: none;">
          <div style="border: 2px solid #1565C0; border-radius: 8px; padding: 1rem; text-align: center; background: #E3F2FD; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #1565C0;">Par Nature Économique</div>
            <div style="font-size: 0.9rem; color: #666;">→ Voir le détail</div>
          </div>
        </a>
        <a href="depenses-ministeres.html" style="text-decoration: none;">
          <div style="border: 2px solid #388E3C; border-radius: 8px; padding: 1rem; text-align: center; background: #E8F5E9; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #388E3C;">Par Ministère</div>
            <div style="font-size: 0.9rem; color: #666;">→ Voir le détail</div>
          </div>
        </a>
        <a href="depenses.html" style="text-decoration: none;">
          <div style="border: 2px solid #F57C00; border-radius: 8px; padding: 1rem; text-align: center; background: #FFF3E0; transition: transform 0.3s;">
            <div style="font-weight: 600; color: #F57C00;">Vue d'Ensemble</div>
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