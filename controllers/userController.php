<?php

require_once(DIR_PATH.'models/class_users.php');

class UserController {

    public $form;
    public $user;

   function __construct($formObj){
        $this->form = $formObj;
        $this->user = new User();
    }

    function register(){

        $_POST = $this->form->getDatas();

        if (is_strong_password($_POST['password'])) {
            if ($_POST['password'] == $_POST['passwordConfirm']) {
                if(!$this->user->getByEmail($_POST['email'])){
                    if(!$this->user->getByLogin($_POST['login'])){
                        if($this->user->add()){
                            $this->user->login();
                            header('Location: '.URL_SITE);
                            exit;
                        }
                    } else $_SESSION['form_errors'] = array("Un utilisateur existe déjà avec ce login");
                } else $_SESSION['form_errors'] = array("Un utilisateur existe déjà avec cette adresse mail");
            } else $_SESSION['form_errors'] = array("Les deux mots de passe ne correspondent pas");
        } else $_SESSION['form_errors'] = array("Le mot de passe doit contenir au moins 8 caractères dont au moins 1 chiffre, 1 minuscule, 1 majuscule et 1 caractère spécial");    
    }

    function update(){

        $_POST = $this->form->getDatas(); 

            if($_SESSION['email'] == $_POST['email'] || !$this->user->getByEmail($_POST['email'])){
                if($_SESSION['login'] == $_POST['login'] || !$this->user->getByLogin($_POST['login'])){
                    if($this->user->update($_SESSION['id_user'])){
                        header('Location: '.URL_SITE);
                        exit;
                    }
                } else $_SESSION['form_errors'] = array("Un utilisateur existe déjà avec ce login");
            } else $_SESSION['form_errors'] = array("Un utilisateur existe déjà avec cette adresse mail");
        
    }

    function login(){

        $_POST = $this->form->getDatas();

            if($this->user->login()){
                header('Location: '.URL_SITE);
                exit;
            } else $_SESSION['form_errors'] = array("Identifiants incorrects");

    }    
}