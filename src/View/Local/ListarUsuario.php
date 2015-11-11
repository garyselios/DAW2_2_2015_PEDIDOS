<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lista de Usuarios</title>
    </head>
    <body>
        <h1>Lista de Usuarios</h1>
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
                <?php foreach ($usuarios as $us):?>
                <tr>
                    <td><?php echo $us['id']?></td>
                    <td><?php echo $us['nombre']?></td>
                    <td><?php echo $us['apellido']?></td>
                    <td><?php echo $us['username']?></td>
                    <td><?php echo $us['email']?></td>
                    <td><?php echo $us['tipo']?></td>
                    <td><?php echo $us['documento']?></td>
                    <td><?php echo $us['edad']?></td>
                    <td><?php echo $us['telefono']?></td>
                    <td><?php echo $us['direccion']?></td>
                    <td><?php echo $us['ciudad']?></td>
                    <td><?php echo $us['barrio']?></td>
                    <td><a href="index.php?Controller=UsuarioController&Action=atualizar&id=<?php echo $us['id']?>">Actualizar</a></td>
                    
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </body>
</html>
