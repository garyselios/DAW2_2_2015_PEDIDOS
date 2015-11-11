<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
        
        <form action="" method="POST">
            <input type="text" id="i" name="i" disabled value="<?php echo $cliente[0]['id']?>"><br><br>
            <input type="text" id="nombre" name="nombre" required value="<?php echo $cliente[0]['nombre']?>"><br><br>
            <input type="text" id="apellido" name="apellido" value="<?php echo $cliente[0]['apellido']?>"required><br><br>
            <input type="text" id="username" name="username" required value="<?php echo $cliente[0]['username']?>"><br><br>
            <input type="email" id="email" name="email" required value="<?php echo $cliente[0]['email']?>"><br><br>
            <input type="password" id="contrasena" name="contrasena" required value="<?php echo $cliente[0]['contrasena']?>"><br><br>
            <input type="text" id="documento" name="documento" value="<?php echo $cliente[0]['documento']?>" required><br><br>
            <input type="number" id="edad" name="edad" value="<?php echo $cliente[0]['edad']?>" required><br><br>
            <input type="text" id="telefono" name="telefono" value="<?php echo $cliente[0]['telefono']?>" required><br><br>
            <input type="text" id="direccion" name="direccion" value="<?php echo $cliente[0]['direccion']?>" required><br><br>
            <input type="text" id="ciudad" name="ciudad" value="<?php echo $cliente[0]['ciudad']?>" required><br><br>
            <input type="text" id="barrio" name="barrio" value="<?php echo $cliente[0]['barrio']?>" required><br><br>
            <input type="hidden" id="id" name="id" value="<?php echo $cliente[0]['id']?>"><br><br>
            
            <input type="submit" value="atualizar" name="submit">
        </form>
    </body>
</html>
