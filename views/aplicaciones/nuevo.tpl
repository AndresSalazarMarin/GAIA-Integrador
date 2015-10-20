<form id="form1" method="post" action="{$_layoutParams.root}aplicaciones/nuevo" enctype="multipart/form-data">
    <input type="hidden" name="guardar" value="1" />
    <div id="reg_principal">
        <fieldset class="field_reg" id="info_aplicacion">
            <legend><h1>{$titulo}</h1></legend>
            <div class="form-group">
                <label>Nombre:</label>
                <input class="form-control" type="text" name="nombre" {if isset($datos)}{if $datos['nombre'] neq ''}value="{$datos['nombre']}"  {/if}{/if} placeholder="Nombres"/>
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <textarea class="form-control" name="descp" placeholder="Descripción">{if isset($datos)}{if $datos['descp'] neq ''}{$datos['descp']}  {/if}{/if}</textarea>
            </div>
            <div class="form-group">
                <label>URL:</label>
                <input class="form-control" type="text" name="url" {if isset($datos)}{if $datos['url'] neq ''}value="{$datos['url']}"  {/if}{/if} placeholder="www.ejemplo.com"/>
            </div>
            <div class="form-group">
                <label>Host:</label>
                <input class="form-control" type="text" name="host" {if isset($datos)}{if $datos['host'] neq ''}value="{$datos['host']}"  {/if}{/if} placeholder="Ej: localhost"/>
            </div>
            <div class="form-group">
                <label>Usuario:</label>
                <input class="form-control" type="text" name="usu" {if isset($datos)}{if $datos['usu'] neq ''}value="{$datos['usu']}"  {/if}{/if} placeholder="Nombre Usuario"/>
            </div>
            <div class="form-group">
                <label>Clave:</label>
                <input class="form-control" type="text" name="clave" {if isset($datos)}{if $datos['clave'] neq ''}value="{$datos['clave']}"  {/if}{/if} placeholder="Clave"/>
            </div>
            <div class="form-group">
                <label>Nombre Base de Datos:</label>
                <input class="form-control" type="text" name="nom_bd" {if isset($datos)}{if $datos['nom_bd'] neq ''}value="{$datos['nom_bd']}"  {/if}{/if} placeholder="Nombre BD"/>
            </div>
            <div class="form-group">
                <label>Puerto:</label>
                <input class="form-control" type="text" name="puerto" {if isset($datos)}{if $datos['puerto'] neq ''}value="{$datos['puerto']}"  {/if}{/if} placeholder="Ej: 5432"/>
            </div>
            <div class="form-group">
                <label>Tipo:</label>
                <select name="tipo">
                    {foreach item=datos from=$tipo_app}
                        <option value="{$datos.tipo_id}">{$datos.tipo_nom}</option>
                    {/foreach}
                </select>
            </div>
            <div>
                <label>Seleccione Imagen:</label>
                <input type="file" name="imagen"/><br><br>
            </div>
        </fieldset>
    </div>
    <input type="submit" class="tests_reg" value="Guardar"/>
    {if isset($_confirmacion)}
        <div id="dialog" title="Mensaje"><p>{$_confirmacion}</p></div>
        <script>
            $(document).ready(function(){
                $("#dialog").dialog({
                    modal: true
                });
            });
        </script>
    {/if}
</form>