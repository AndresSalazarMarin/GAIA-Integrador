<h2>Ejemplo de AJAX</h2>

<form id="form1" method="post">
    Pais:
    <select id="pais">
        <option value="">&nbsp;</option>
        {foreach item=p from=$paises}
            <option value="{$p.id}">{$p.pais}</option>
        {/foreach}
    </select>
    <br/>
    
    Ciudad:
    <select id="ciudad"></select>
    <br/>
    
    Ciudad a Insertar:
    <input type="text" id="ins_ciudad"/>
    <input type="button" value="Insertar" id="btn_insertar"/>
</form>