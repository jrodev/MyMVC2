<table align="center" border="0" width="85%">
    <thead>
        <tr><th colspan="10" align="center">LISTADO DE ASISTENCIA</th></tr>
        <tr>
            <th>ID</th>
            <th>Nom.</th>
            <th>Ape.</th>
            <th>Dni</th>
            <th>Cisco</th>
            <th>Admision</th>
            <th>Comtel</th>
            <th>Curso</th>
            <th>Eliminar</th>
            <th>Editar</th>
        </tr>
    </thead>
    <?php foreach($params['rows'] as $i=>$row):?>
    <tr>
        <td><?php echo $row['a_id']?></td>
        <td><?php echo $row['a_nombre']?></td>
        <td><?php echo $row['a_apellido']?></td>
        <td><?php echo $row['a_dni']?></td>
        <td><?php echo $row['a_cisco']?></td>
        <td><?php echo $row['a_admision']?></td>
        <td><?php echo $row['a_comtel']?></td>
        <td><?php echo $row['a_curso']?></td>
        <td>
            <a href="<?php echo BASE_URL?>?ctrll=index&acti=asistlist&del=<?php echo $row['a_id']?>">
                eliminar
            </a>
        </td>
        <td>
            <a href="<?php echo BASE_URL?>?c=index&a=asistreg&edit=<?php echo $row['a_id']?>">
                Editar
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>