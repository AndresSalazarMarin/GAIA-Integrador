{if isset($aplicaciones) && count($aplicaciones)}
    {if Session::get('tipo_v') eq 'Administrador'}
        <a href="{$_layoutParams.root}aplicaciones/nuevo">Agregar App</a>
    {/if}
    <div class="aplicaciones">
    {foreach item=datos_app from=$aplicaciones}
        <div class="aplicacion">
            {if !Session::get('autenticado')}
                <a class="hv_apps" href="{$datos_app.app_url}" target="_blank">
            {else}
                <a class="hv_apps" href="{$datos_app.app_url}?usr={Session::get('usuario')|base64_encode}&pass={Session::get('contraseña')|base64_encode}" target="_blank">
            {/if}
                <img class="img_apps" src="{$_layoutParams.root}public/img/apps/{$datos_app.app_img}"/>
                <h3 class="nomb_apps">{$datos_app.app_nom}</h3>
            </a>
            <p class="desc_apps">{$datos_app.app_descp}</p>
        </div>
    {/foreach}
    </div>
{else}
    <p>No hay APPS</p>
{/if}