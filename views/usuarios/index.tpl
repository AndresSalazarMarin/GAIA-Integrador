<h2>Usuarios</h2>

{if isset($usuarios) && count($usuarios)}
    <table>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Role</th>
            <th></th>
        </tr>
        {foreach item=us from=$usuarios}
            <tr>
                <td>{$us.id}</td>
                <td>{$us.usuario}</td>
                <td>{$us.role}</td>
                <td>
                    <a href='{$_layoutParams.root}usuarios/permisos/{$us.id}'>
                        Permisos
                    </a>
                </td>
            </tr>
        {/foreach}
    </table>
{/if}