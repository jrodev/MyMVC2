<?php $row = $params['row'];var_dump($row);?>
<form method="post" action="<?php echo BASE_URL?>?ctrll=index&acti=userreg">
    <input type="hidden" name="u_id" value="<?php echo $row['u_id']?>" />
    <table align="center">
        <tr>
            <td colspan="2" align="center"><b>Registrar usuario</b></td></tr>
        <tr>
            <td>apellido: </td>
            <td><input name="u_apellido" type="text" value="<?php echo $row['u_apellido']?>" /></td>
        </tr>
        <tr>
            <td>nombre: </td>
            <td><input name="u_nombre" type="text" value="<?php echo $row['u_nombre']?>" /></td>
        </tr>
        <tr>
            <td>dni: </td>
            <td><input name="u_dni" type="text" value="<?php echo $row['u_dni']?>" /></td>
        </tr>
        <tr>
            <td>correo: </td>
            <td><input name="u_correo" type="text" value="<?php echo $row['u_correo']?>" /></td>
        </tr>
        <tr>
            <td>usuario: </td>
            <td><input name="u_usuario" type="text" value="<?php echo $row['u_usuario']?>" /></td>
        </tr>
        <tr>
            <td>clave: </td>
            <td><input name="u_clave" type="text" value="<?php echo $row['u_clave']?>" /></td>
        </tr>
        <tr>
            <td>telefono: </td>
            <td><input name="u_telefono" type="text" value="<?php echo $row['u_telefono']?>" /></td>
        </tr>
        <tr>
            <td>estado: </td>
            <td><input name="u_estado" type="text" value="1" value="<?php echo $row['u_estado']?>" /></td>
        </tr>
        <tr style="display:none;">
            <td>admin: </td>
            <td><input name="u_admin" type="text" value="1" value="<?php echo $row['u_admin']?>" /></td>
        </tr>    
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="EDITAR" />
            </td>
        </tr>
    </table>
</form>