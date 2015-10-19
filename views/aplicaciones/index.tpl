{if isset($aplicaciones) && count($aplicaciones)}
    <!--<table border="1px" id="posts">
        <tr>
            <td>Id</td>
            <td>Aplicación</td>
            <td>Imagen</td>
        </tr>
        {foreach item=datos from=$aplicaciones}
            <tr>
                <td>{$datos.app_id}</td>
                <td>{$datos.app_nom}</td>
                <td>
                    <img src="{$_layoutParams.root}public/img/apps/{$datos.app_img}" />
                </td>
            </tr>
        {/foreach}
    </table>-->
    {if isset($acceso) && count($acceso)}
        {if $acceso eq 'admin_access'}
            <a href="{$_layoutParams.root}aplicaciones/nuevo">Agregar App</a>
        {/if}
    {/if}
    <div class="aplicaciones">
    {foreach item=datos from=$aplicaciones}
        <div class="aplicacion">
            {if !Session::get('autenticado')}
                <a class="hv_apps" href="{$datos.app_url}" target="_blank">
            {else}
                <a class="hv_apps" href="{$datos.app_url}?usr={Session::get('usuario')|base64_encode}&pass={Session::get('contraseña')|base64_encode}" target="_blank">
            {/if}
                <img class="img_apps" src="{$_layoutParams.root}public/img/apps/{$datos.app_img}"/>
                <h3 class="nomb_apps">{$datos.app_nom}</h3>
            </a>
            <p class="desc_apps">{$datos.app_descp}</p>
        </div>
    {/foreach}
    </div>
{else}
    <p>No hay APPS</p>
{/if}