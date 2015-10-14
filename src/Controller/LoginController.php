<?php
class LoginController{   
    
    public function entrar(){
        
        if(isset($_POST['submit'])){
            
            $objLoginModel = new LoginModel();
            
            $objLoginModel->setUsername($_POST['username']);
            $objLoginModel->setSenha($_POST['senha']);
            
            if($objLoginModel->logar()){
                $login = $objLoginModel->logar();
                var_dump($login);
                if($login[0]['tipo'] == 'USER'){
                    $_SESSION['user'] = $login;
                } elseif($login[0]['tipo'] == 'CLIENT'){
                    $_SESSION['client'] = $login;
                } elseif($login[0]['tipo'] == 'ADMIN'){
                    $_SESSION['admin'] = $login;
                }
            }
            header('Location:index.php');
        }
        include 'View/Login.php';
    }
    
    public function salir(){
       
        if(session_status() == PHP_SESSION_ACTIVE){
            session_destroy();
            $msj = "Loguot";
            header('Location:index.php');
        }
    }
    
}
