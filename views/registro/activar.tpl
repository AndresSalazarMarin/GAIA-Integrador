<h2>Activación de Cuenta</h2>

<p></p>

<a href="{$_layoutParams.root}">Ir al Inicio</a>

{if !Session::get('autenticado')}

<a href="{$_layoutParams.root}login">Iniciar Sesión</a>

{/if}