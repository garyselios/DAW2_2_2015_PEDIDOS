<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>If Burguer</title>
    </head>
    <body>

        <p>Estas en el site</p>
        <?php if (isset($_SESSION['usuario'])): ?>
            <a href="index.php?Controller=LoginController&Action=salir">Logout</a><br><br>
            Bienvenido: <strong><?php echo $_SESSION['usuario'][0]['nome']; ?></strong><br><br>
        <?php else: ?>
            <a href="index.php?Controller=LoginController&Action=entrar">Login</a><br>
            <a href="index.php?Controller=SiteController&Action=inserir">Registrar Cliente</a><br>
        <?php endif; ?>
        <br><br>

    </body>
</html>
