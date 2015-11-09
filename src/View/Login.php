<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        if(isset($msj)){
            echo $msj;
        }
        
        if(isset($_SESSION['user'])){
         echo 'logado';
        }
        ?>
        
        <form action="" method="POST">
            <input type="text" id="username" name="username" placeholder="Username o Email" required><br><br>
            <input type="password" id="senha" name="senha" placeholder="Contraseña" required><br><br>
            
            <a href="index.php?Controller=LoginController&Action=recuperar">Olvide mi Contraseña</a><br><br>

            <input type="submit" value="Entrar" name="submit">
        </form>
    </body>
</html>
