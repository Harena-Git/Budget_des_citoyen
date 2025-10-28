<?php

namespace app\helpers;

class ViewHelper {
    /**
     * Formate un montant en milliards d'Ariary
     */
    public static function formatMontant($montant, $precision = 1) {
        return number_format($montant, $precision, ',', ' ') . ' Mds Ar';
    }

    /**
     * Formate un pourcentage
     */
    public static function formatPourcentage($pourcentage, $precision = 1) {
        return number_format($pourcentage, $precision, ',', ' ') . '%';
    }

    /**
     * Génère une classe CSS pour les variations
     */
    public static function getVariationClass($variation) {
        if ($variation > 0) {
            return 'positive';
        } elseif ($variation < 0) {
            return 'negative';
        }
        return '';
    }

    /**
     * Formate une variation avec signe et couleur
     */
    public static function formatVariation($variation) {
        $signe = $variation > 0 ? '+' : '';
        $classe = self::getVariationClass($variation);
        return '<span class="variation ' . $classe . '">' . $signe . self::formatPourcentage($variation) . '</span>';
    }

    /**
     * Formate une valeur pour un graphique
     */
    public static function formatGraphValue($value) {
        return number_format($value, 1, '.', '');
    }

    /**
     * Génère un lien de navigation
     */
    public static function generateNavLink($url, $title, $isActive = false) {
        $activeClass = $isActive ? ' class="active"' : '';
        return '<li><a href="' . $url . '"' . $activeClass . '>' . htmlspecialchars($title) . '</a></li>';
    }

    /**
     * Génère un fil d'Ariane
     */
    public static function generateBreadcrumb($items) {
        $html = '<div class="breadcrumb">';
        $last = end($items);
        foreach ($items as $url => $title) {
            if ($title !== $last) {
                $html .= '<a href="' . $url . '">' . htmlspecialchars($title) . '</a> > ';
            } else {
                $html .= htmlspecialchars($title);
            }
        }
        $html .= '</div>';
        return $html;
    }
}