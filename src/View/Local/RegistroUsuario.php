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
            <input type="text" id="username" name="username" placeholder="Username" required><br><br>
            <input type="email" id="email" name="email" placeholder="Email" required><br><br>
            <input type="password" id="senha" name="senha" placeholder="Senha" required><br><br>
            <input type="text" id="admin" name="admin" placeholder="Admin" required><br><br>
            
            <input type="submit">
        </form>
    </body>
</html>
