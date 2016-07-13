<form method="post" action="<?php echo BASE_URL?>?ctrll=index&acti=userreg">
    
    <table align="center">
        <tr>
            <td colspan="2" align="center"><b>Registrar usuario</b></td></tr>
        <tr>
            <td>apellido: </td>
            <td><input name="u_apellido" type="text" /></td>
        </tr>
        <tr>
            <td>nombre: </td>
            <td><input name="u_nombre" type="text" /></td>
        </tr>
        <tr>
            <td>dni: </td>
            <td><input name="u_dni" type="text" /></td>
        </tr>
        <tr>
            <td>correo: </td>
            <td><input name="u_correo" type="text" /></td>
        </tr>
        <tr>
            <td>usuario: </td>
            <td><input name="u_usuario" type="text" /></td>
        </tr>
        <tr>
            <td>clave: </td>
            <td><input name="u_clave" type="text" /></td>
        </tr>
        <tr>
            <td>telefono: </td>
            <td><input name="u_telefono" type="text" /></td>
        </tr>
        <tr>
            <td>estado: </td>
            <td><input name="u_estado" type="text" value="1" /></td>
        </tr>
        <tr style="display:none;">
            <td>admin: </td>
            <td><input name="u_admin" type="text" value="1" /></td>
        </tr>    
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="REGISTRAR" />
            </td>
        </tr>
    </table>
</form>