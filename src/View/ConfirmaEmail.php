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
            <input type="email" id="email" name="email" placeholder="Email" required><br><br>
           
            
            <input type="submit" value="Entrar" name="submit">
           
            
            
        </form>
    </body>
</html>
