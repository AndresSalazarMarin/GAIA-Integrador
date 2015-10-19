Vista Index
{if Session::get('autenticado')}
    <p>{Session::get('id_usuario')}</p>
    <p>Autenticado</p>
{else}
    <p>No Autenticado</p>
{/if}