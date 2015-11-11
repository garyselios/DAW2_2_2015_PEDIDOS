<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Clientes</title>
    </head>
    <body>
        <h1>Lista de Clientes</h1>
        <table border="4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Apellido</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Tipo</th>
                    <th>Documento</th>
                    <th>Edad</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Barrio</th>
                    <th>Atualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cli):?>
                <tr>
                    <td><?php echo $cli['id']?></td>
                    <td><?php echo $cli['nombre']?></td>
                    <td><?php echo $cli['apellido']?></td>
                    <td><?php echo $cli['username']?></td>
                    <td><?php echo $cli['email']?></td>
                    <td><?php echo $cli['tipo']?></td>
                    <td><?php echo $cli['documento']?></td>
                    <td><?php echo $cli['edad']?></td>
                    <td><?php echo $cli['telefono']?></td>
                    <td><?php echo $cli['direccion']?></td>
                    <td><?php echo $cli['ciudad']?></td>
                    <td><?php echo $cli['barrio']?></td>
                    <td><a href="index.php?Controller=ClienteController&Action=atualizar&id=<?php echo $cli['id']?>">Atualizar</a></td>
                    
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </body>
</html>
