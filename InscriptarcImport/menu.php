<?php
// Module Custom : Import Inscriptarc -> IANSEO (blasons / ##TARGET##)
// Ce fichier est inclus automatiquement par Common/Menu.php lors de la construction du menu.
// Format d'une entree : 'Libelle|lien|||cible' (la cible est lue a l'index 4, d'ou les 3 pipes).
$version='2026-11-14 00:00:00';

$ret['MODS'][] = MENU_DIVIDER;
$ret['MODS'][] = 'Import Inscriptarc (blasons)' . '|' . $CFG->ROOT_DIR . 'Modules/Custom/InscriptarcImport/index.php|||_blank';
