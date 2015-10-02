<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
        var_dump($cliente);

        if(isset($msg)){
            echo $msg;
        }
        ?>
        
        <form action="" method="POST">
            <input type="text" id="i" name="i" disabled value="<?php echo $cliente[0]['id']?>"><br><br>
            <input type="text" id="nome" name="nome" required value="<?php echo $cliente[0]['nome']?>"><br><br>
            <input type="text" id="username" name="username" required value="<?php echo $cliente[0]['username']?>"><br><br>
            <input type="email" id="email" name="email" required value="<?php echo $cliente[0]['email']?>"><br><br>
            <input type="password" id="senha" name="senha" required value="<?php echo $cliente[0]['senha']?>"><br><br>
            <input type="hidden" id="id" name="id" value="<?php echo $cliente[0]['id']?>"><br><br>
            
            <input type="submit" value="Atualizar">
        </form>
    </body>
</html>
