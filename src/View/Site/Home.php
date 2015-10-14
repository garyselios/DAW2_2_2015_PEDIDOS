<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>If Burguer</title>
    </head>
    <body>
        
        Estas en el site
        <?php if(isset($_SESSION['client'])):?>
            <a href="index.php?Controller=LoginController&Action=salir">Logout</a><br><br>
            Bienvenido: <strong><?php echo $_SESSION['client'][0]['nome']; ?></strong><br><br>
            <a href="index.php?Controller=ClienteController&Action=inserir">Registrar Cliente</a><br>
        
        <?php else:?>
            <a href="index.php?Controller=LoginController&Action=entrar">Login</a><br>
        <?php endif;?>
        <br><br>
        
    </body>
</html>
