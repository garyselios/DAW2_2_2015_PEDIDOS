<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Useername</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuario as $us):?>
                <tr>
                    <td><?php echo $us['id']?></td>
                    <td><?php echo $us['nome']?></td>
                    <td><?php echo $us['username']?></td>
                    <td><?php echo $us['email']?></td>
                    <td><?php echo $us['senha']?></td>
                    <td><?php echo $us['senha_admin']?></td>
                    
                </tr>
                <?php endforeach;?>
            </tbody>
            
            <?php var_dump($usuarios);?>
        </table>
    </body>
</html>
