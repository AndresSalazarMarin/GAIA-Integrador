<h2>{if $mensaje} {$mensaje} {/if}</h2>

<p>&nbsp;</p>

<a href="{$_layoutParams.root}">Ir al Inicio</a> |
<a href="javascript:history.back()">Volver a la página anterior</a>

{if !Session::get('autenticado')}

| <a href="{$_layoutParams.root}login">Iniciar Sesión</a>

{/if}