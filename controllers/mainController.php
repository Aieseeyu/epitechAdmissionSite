<?php

//on inclut la classe qui va nous servir pour la validation des formulaires
require_once(DIR_PATH.'controllers/class_validate.php');

//on vérifie si un formulaire a été soumis
if(!empty($_POST)){
    //on vérifie qu'on ait nos 2 champs cachés pour appeler le contrôleur adéquate
    if(!empty($_POST['c']) && !empty($_POST['m']) && ctype_alpha($_POST['c']) && ctype_alpha($_POST['m'])){
        $urlC = DIR_PATH.'controllers/'.lcfirst($_POST['c']).'Controller.php';
        if(file_exists($urlC)){
            $v = new Validate($_POST); //on instancie la class Validate pour pouvoir valider les formulaires par la suite
            require_once($urlC);
            $nameController = ucfirst($_POST['c']).'Controller';
            $objet = new $nameController($v); //on instancie notre contrôleur avec l'objet $v qui contient l'instance de Validate

            $method = $_POST['m']; //on récupère le nom de la méthode à appeler
            //on vérifie que la méthode existe dans le controleur avant de la soliciter
            if(method_exists($objet, $method)){ 
                $objet->$method(); //on lance la méthode souhaitée
            }
        }
    }
}


?>