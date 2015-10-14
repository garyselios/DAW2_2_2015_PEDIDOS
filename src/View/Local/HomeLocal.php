<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>If Burguer</title>
    </head>
    <body>
        <?php if(isset($_SESSION['user'])):?>
            <a href="index.php?Controller=LoginController&Action=salir">Logout</a><br><br>
            Bienvenido: <strong><?php echo $_SESSION['user'][0]['nome']; ?></strong><br><br>
            <a href="index.php?Controller=UsuarioController&Action=listar">Listar Usuario</a><br>
            <a href="index.php?Controller=UsuarioController&Action=inserir">Registrar Usuario</a><br>
            <!--<a href="index.php?Controller=UsuarioController&Action=listarCliente">Listar Cliente - Usuario</a><br>-->
            <a href="index.php?Controller=UsuarioController&Action=inserirCliente">Registrar Cliente - Usuario</a><br>
        <?php elseif(isset($_SESSION['admin'])):?>
            <a href="index.php?Controller=LoginController&Action=salir">Logout</a><br><br>
            Bienvenido: <strong><?php echo $_SESSION['admin'][0]['nome']; ?></strong><br><br>
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
