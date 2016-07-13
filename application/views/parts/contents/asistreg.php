<form method="post" action="<?php echo BASE_URL?>?ctrll=index&acti=asistreg">
    <table align="center" width="33%">
        <tr>
            <th colspan="2" align="center">
                <b>Registro de Usuario</b>
            </th>
        </tr>
        <tr>
            <td>nombre: </td>
            <td><input name="a_nombre" type="text" /></td>
        </tr>
        <tr>
            <td>apellido: </td>
            <td><input name="a_apellido" type="text" /></td>
        </tr>
        <tr>
            <td>correo: </td>
            <td><input name="a_correo" type="text" /></td>
        </tr>
        <tr>
            <td>dni: </td>
            <td><input name="a_dni" type="text" /></td>
        </tr>
        <tr>
            <td>telefonof: </td>
            <td><input name="a_telefonof" type="text" /></td>
        </tr>
        <tr>
            <td>telefonoc: </td>
            <td><input name="a_telefonoc" type="text" /></td>
        </tr>
        <tr>
            <td>cisco: </td>
            <td><input name="a_cisco" type="checkbox" value="1" /></td>
        </tr>
        <tr>
            <td>admision: </td>
            <td><input name="a_admision" type="checkbox" value="1" /></td>
        </tr>
        <tr>
            <td>admin: </td>
            <td><input name="a_comtel" type="checkbox" value="1" /></td>
        </tr> 
        <tr>
            <td>curso: </td>
            <td><input name="a_curso" type="checkbox" value="1" /></td>
        </tr> 
        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="REGISTRAR" />
            </td>
        </tr>
    </table>
</form>