<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registro Cliente</title>
    </head>
    <body>
        
        <h1>Registro Cliente</h1>
        <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
        
        <form action="" method="POST">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre" required><br><br>
            <input type="text" id="apellido" name="apellido" placeholder="Apellido" required><br><br>
            <input type="text" id="username" name="username" placeholder="Username" required><br><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br><br>
            <input type="password" id="contrasena" name="contrasena" placeholder="Contraeña" required><br><br>
            <input type="text" id="documento" name="documento" placeholder="Documento" required><br><br>
            <input type="number" id="edad" name="edad" placeholder="Edad" required><br><br>
            <input type="text" id="telefono" name="telefono" placeholder="Telefono" required><br><br>
            <input type="text" id="direccion" name="direccion" placeholder="Direccion" required><br><br>
            <input type="text" id="ciudad" name="ciudad" placeholder="Ciudad" required><br><br>
            <input type="text" id="barrio" name="barrio" placeholder="Barrio" required><br><br>
            
            <input type="submit" value="cadastrar" name="submit">
        </form>
    </body>
</html>
