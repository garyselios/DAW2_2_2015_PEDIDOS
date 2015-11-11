<?php
class LoginController extends LoginModel{   
    
    public function entrar(){
        
        if(isset($_POST['submit'])){
            
            $this->setUsername($_POST['username']);
            $this->setContrasena($_POST['contrasena']);
            
            if($this->logar()){
                
                $_SESSION['usuario'] = $this->logar();
                
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
            
            $this->setEmail($_POST['email']);
            
            $recuperar = $this->recuperarContrasena();
            
            include 'Mailer/mail.php';
        }

        include 'View/ConfirmaEmail.php';
    }
    
}
    