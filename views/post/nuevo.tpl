<form id="form1" method="post" action="{$_layoutParams.root}post/nuevo"
      enctype="multipart/form-data">
    <input type="hidden" name="guardar" value="1" />
    <p>Titulo:<br/>
        <input type="text" name="titulo" value="{if isset($datos['titulo'])} {$datos['titulo']} {/if}" />
    </p>
    <p>Cuerpo:<br/>
        <textarea name="cuerpo" value="{if isset($datos['cuerpo'])} {$datos['cuerpo']} {/if}"/></textarea>
    </p>
    <p>Seleccione Imagen:</p>
    <p><input type="file" name="imagen" /></p>
    <p><input type="submit" value="Guardar" /></p>
</form>