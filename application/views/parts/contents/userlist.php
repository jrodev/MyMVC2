<table border="0" align="center">
    <thead>
        <tr><th colspan="10" align="center">LISTADO DE USUARIOS</td></tr>
        <tr>
            <th>Cod</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th>Dni</th>
            <th>E-Mail</th>
            <th>Telefono</th>
            <th>Estado</th>
            <th>Deleted</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($params['rows'] as $row):?>
        <tr>
            <td><?php echo $row['u_id']?></td>
            <td><?php echo $row['u_apellido']?></td>
            <td><?php echo $row['u_nombre']?></td>
            <td><?php echo $row['u_dni']?></td>
            <td><?php echo $row['u_correo']?></td>
            <td><?php echo $row['u_telefono']?></td>
            <td><?php echo $row['u_estado']?></td>
            <td>
                <a href="<?php echo BASE_URL?>?ctrll=index&acti=userlist&del=<?php echo $row['u_id']?>">
                    eliminar
                </a>
            </td>
            <td><a href="<?php echo BASE_URL?>?ctrll=index&acti=userupd&edit=<?php echo $row['u_id']?>">
                    Editar
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>