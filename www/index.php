<?php
/*
    Si nous sommes sur l'url /login alors il faut instancier
    la class (controller) Security et appeler la method (Action) login
    Si l'url ne correspond à rien  alors il faut instancier
    la class (controller) Main et appeler la method (Action) page404
*/

//Récupérer l'URL et ne garder que l'URI, exemple /login
//Nettoyage de la chaîne

//Récupérer le contenu du fichier routes.yaml

//Comparer son URI avec ce que l'on a dans le fichier routes et voir s'il y a une correspondance

//S'il n'y a pas de correspondance => page 404

//S'il y a une correspandance on doit récupérer le controller et l'action
//On fait toutes les vérifications nécessaires et on fait
//une instance du controller et l'appel de l'action