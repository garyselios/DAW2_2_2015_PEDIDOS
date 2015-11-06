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
                    <th>Tipo</th>
                    <th>Atualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $us):?>
                <tr>
                    <td><?php echo $us['id']?></td>
                    <td><?php echo $us['nome']?></td>
                    <td><?php echo $us['username']?></td>
                    <td><?php echo $us['email']?></td>
                    <td><?php echo $us['tipo']?></td>
                    <td><a href="index.php?Controller=UsuarioController&Action=atualizar&id=<?php echo $us['id']?>">Atualizar</a></td>
                    
                </tr>
                <?php endforeach;?>
            </tbody>
            
            <?php var_dump($usuarios);?>
        </table>
    </body>
</html>
