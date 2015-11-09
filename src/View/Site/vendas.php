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
            <input type="number" id="usuario" name="usuario" placeholder="usuario" required><br><br>
            <input type="number" id="producto" name="producto" placeholder="Producto" required><br><br>
            <input type="date" id="fecha" name="fecha" value="<?php echo date("Y/m/d");?>" required><br><br>
            <input type="number" id="cantidad" name="cantidad" placeholder="cantidad" required><br><br>
            
            <input type="submit" name="submit" value="cadastrar">
        </form>
    </body>
</html>
