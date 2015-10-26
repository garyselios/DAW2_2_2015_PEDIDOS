<?php
class LoginController{   
    
    public function entrar(){
        
        if(isset($_POST['submit'])){
            
            $objLoginModel = new LoginModel();
            
            $objLoginModel->setUsername($_POST['username']);
            $objLoginModel->setSenha($_POST['senha']);
            
            if($objLoginModel->logar()){
                
                $_SESSION['usuario'] = $objLoginModel->logar();
                
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
    
    public function recuperar() {

        if (isset($_POST['submit'])) {
            
            $objLoginModel = new LoginModel();

            $objLoginModel->setEmail($_POST['email']);
            
            $recuperar = $objLoginModel->recuperarSenha();
            
            include 'Mailer/mail.php';
        }

        include 'View/ConfirmaEmail.php';
    }
    
}
    