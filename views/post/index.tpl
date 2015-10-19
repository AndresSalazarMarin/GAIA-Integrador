{if isset($posts) && count($posts)}

<table border="1px" id="posts">
    <tr>
        <td>Id</td>
        <td>Titulo</td>
        <td>Cuerpo</td>
    </tr>
    {foreach item=datos from=$posts}
    
    <tr>
        <td>{$datos.id}</td>
        <td>{$datos.titulo}</td>
        <td>{$datos.cuerpo}</td>
        <td>
            {if isset($datos.imagen)}
                <a href="{$_layoutParams.root}public/img/post/{$datos.imagen}" target="_blank">
                    <img src="{$_layoutParams.root}public/img/post/thumb/thumb_{$datos.imagen}" />
                </a>
            {/if}
        </td>
        <td><a href="{$_layoutParams.root}post/editar/{$datos.id}">Editar</a></td>
        <td><a href="{$_layoutParams.root}post/eliminar/{$datos.id}">Eliminar</a></td>
    </tr>
    
    {/foreach}
</table>

{else}

<p><strong>No hay Posts...</strong></p>

{/if}

{$paginacion|default:""}

{if $_acl->permiso('nuevo_post')}
<p><a href="{$_layoutParams.root}post/nuevo">Agregar Post</a></p>
{/if}