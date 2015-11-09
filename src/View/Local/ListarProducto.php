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
                    <th>Preco</th>
                    <th>Custo</th>
                    <th>Ingredientes</th>
                    <th>Atualizar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $pro):?>
                <tr>
                    <td><?php echo $pro['id']?></td>
                    <td><?php echo $pro['nome']?></td>
                    <td><?php echo $pro['preco']?></td>
                    <td><?php echo $pro['custo']?></td>
                    <td><?php echo $pro['ingredientes']?></td>
                    <td><a href="index.php?Controller=ProductoController&Action=atualizar&id=<?php echo $pro['id']?>">Atualizar</a></td>
                    
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </body>
</html>
