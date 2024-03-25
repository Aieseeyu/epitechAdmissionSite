<?php

class User extends Db {

    public function __construct()
    {
       parent::__construct();  //lance le connexion à la bdd grâce au constructeur de la classe mère
       $this->table = "users";  //On change la propriété "table" en y mettant le nom de la table dont on aura besoin ici et dans les méthodes de la classe mère
    }

    public function delete($id) {
        return $this->delete_($id);
    }


    public function getById($id) {
        return $this->getById_($id);
    }

    public function getAll($limit=10, $page=1) {
        return $this->getAll_($limit, $page);
    }


    public function update($id){
        try {
            $db = $this->db;
            $updateUser = $db->prepare('UPDATE '.$this->table.' SET firstName = :firstName, lastName = :lastName, mail = :mail, login = :login WHERE id = :id');
            return $updateUser->execute([
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'mail' => $_POST['mail'],
            'login' =>$_POST['login'],
            'id' => $id
            ]);
        } catch (Exception $e) {
          if(DEBUG_MODE) echo $e->getMessage();
        }
        return false;
      }

    public function add($is_admin=0){
        try {
          $db = $this->db;
          $datas = 'INSERT INTO '.$this->table.' (firstName, lastName, email, login, password';
          if($is_admin == 'admin') $datas.=', role';
          $datas.=') VALUES (:firstName, :lastName, :email, :login, :password';
          if($is_admin == 'admin') $datas.=', :role';
          $datas.=')';
          $insertUser = $db->prepare($datas);
      
          $tab = [
            'firstName' => $_POST['firstName'],
            'lastName' => $_POST['lastName'],
            'email' => $_POST['email'],
            'login' => $_POST['login'],
            'password' => password_hash($_POST['password'], PASSWORD_BCRYPT)
          ];
          if($is_admin == 'admin') $tab['role'] = "ADMIN";
          $req = $insertUser->execute($tab);
          if($req) return $db->lastInsertId();
        } catch (Exception $e) {
          if(DEBUG_MODE) echo $e->getMessage();
        }
        return false;
      }
      
    public function login(){
        if(!empty($_POST['login']) && !empty($_POST['password'])){
          try{
            $db = $this->db;
            $getData = $db->prepare('SELECT * FROM '.$this->table.' WHERE login = :login');
            $getData->execute(['login' => $_POST['login']]);
            $req = $getData->fetch();
            if($req){
              if(password_verify($_POST['password'],$req['password'])){
                $_SESSION['id_user'] = $req['id'];
                $_SESSION['login'] = $req['login'];
                $_SESSION['email'] = $req['email'];
                $_SESSION['is_admin'] = $req['role'];
                $_SESSION['connected'] = 1;
                return true;
              }
            }
          } catch (Exception $e) {
            if(DEBUG_MODE) echo $e->getMessage();
          }
          return false;
        }
      }
      
    public static function logout(){
        session_destroy();
        unset($_SESSION);
        return self::is_connected();
      }
      
    public static function is_connected(){
        //if($_SESSION['connected']) return true;
        if(isset($_SESSION['connected'])) return $_SESSION['connected'];
        return false;
      }
      
    public static function is_admin(){
        if(self::is_connected() && isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == 1) return true;
        return false;
      }


    
    public function getByLastName($nom){
      if (!empty($nom)) {
        try {
          $db = $this->db;
          $userQuery = $db->prepare("SELECT * FROM ".$this->table." WHERE nom_utilisateur = :nom");
          $userQuery->execute(['nom' => $nom]);
          return $userQuery->fetch();
        } catch (Exception $e) {
          if (DEBUG_MODE) echo $e->getMessage();
        }
      }
      return false;
    }

    public function getByLogin($login){
      if (!empty($login)) {
        try {
          $db = $this->db;
          $userQuery = $db->prepare("SELECT * FROM ".$this->table." WHERE login = :login");
          $userQuery->execute(['login' => $login]);
          return $userQuery->fetch();
        } catch (Exception $e) {
          if (DEBUG_MODE) echo $e->getMessage();
        }
      }
      return false;
    }

    public function getByEmail($email){
      if (!empty($email)) {
        try {
          $db = $this->db;
          $userQuery = $db->prepare("SELECT * FROM ".$this->table." WHERE email = :email");
          $userQuery->execute(['email' => $email]);
          return $userQuery->fetch();
        } catch (Exception $e) {
          if (DEBUG_MODE) echo $e->getMessage();
        }
      }
      return false;
    }

}