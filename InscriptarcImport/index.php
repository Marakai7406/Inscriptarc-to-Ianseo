<?php
// Point d'entree du module : controle d'acces IANSEO puis envoi de l'outil HTML autonome.
// Aucune donnee n'est envoyee au serveur, tout le traitement se fait dans le navigateur.
require_once(dirname(__FILE__, 4) . '/config.php');

// Meme niveau de droit que les autres modules generiques (ex. Modules/Average)
checkFullACL(AclModules, 'modGeneric', AclReadOnly);

header('Content-Type: text/html; charset=utf-8');
readfile(dirname(__FILE__) . '/generateur_import_ianseo_v2.html');
