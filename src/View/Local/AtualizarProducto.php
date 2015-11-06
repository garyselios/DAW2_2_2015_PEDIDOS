<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        var_dump($producto);

        if(isset($msg)){
            echo $msg;
        }
        ?>
        
        <form action="" method="POST">
            <input type="text" id="i" name="i" disabled value="<?php echo $producto[0]['id']?>"><br><br>
            <input type="text" id="nome" name="nome" required value="<?php echo $producto[0]['nome']?>"><br><br>
            <input type="number" id="preco" name="preco" required value="<?php echo $producto[0]['preco']?>"><br><br>
            <input type="number" id="custo" name="custo" required value="<?php echo $producto[0]['custo']?>"><br><br>
            <input type="text" id="ingredientes" name="ingredientes" required value="<?php echo $producto[0]['ingredientes']?>"><br><br>
            <input type="hidden" id="id" name="id" value="<?php echo $producto[0]['id']?>"><br><br>
            
            <input type="submit" name="submit" value="Atualizar">
        </form>
    </body>
</html>
