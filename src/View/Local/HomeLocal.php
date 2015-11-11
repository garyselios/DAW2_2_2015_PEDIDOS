<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>If Burguer</title>
    </head>
    <body>
        <?php if($_SESSION['usuario'][0]['tipo'] == 'USER'):?>
            <a href="index.php?Controller=LoginController&Action=salir">Logout</a><br><br>
            <h1>USUARIOS</h1>
            Bienvenido: <strong><?php echo $_SESSION['usuario'][0]['nombre']; ?></strong><br><br>
            <a href="index.php?Controller=UsuarioController&Action=inserirCliente">Registrar Cliente</a><br>
        <?php elseif($_SESSION['usuario'][0]['tipo'] == 'ADMIN'):?>
            <a href="index.php?Controller=LoginController&Action=salir">Logout</a><br><br>
            <h1>ADMINISTRADOR</h1>
            Bienvenido: <strong><?php echo $_SESSION['usuario'][0]['nombre']; ?></strong><br><br>
            <a href="index.php?Controller=ClienteController&Action=listar">Listar Cliente</a><br>
            <a href="index.php?Controller=ClienteController&Action=inserir">Registrar Cliente</a><br>
            <a href="index.php?Controller=UsuarioController&Action=listar">Listar Usuario</a><br>
            <a href="index.php?Controller=UsuarioController&Action=inserir">Registrar Usuario</a><br>
        <?php else:?>
            <a href="index.php?Controller=LoginController&Action=entrar">Login</a><br>
        <?php endif;?>
        <br><br>
        
    </body>
</html>
