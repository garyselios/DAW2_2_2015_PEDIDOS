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
            <input type="text" id="nome" name="nome" placeholder="Nome" required><br><br>
            <input type="number" id="preco" name="preco" placeholder="Preco" required><br><br>
            <input type="number" id="custo" name="custo" placeholder="Custo" required><br><br>
            <input type="text" id="ingredientes" name="ingredientes" placeholder="Ingredientes" required><br><br>
            
            <input type="submit" name="submit" value="cadastrar">
        </form>
    </body>
</html>
