<!-- En linux se debe dar permisos a la carpte tmp

En la consola de LINUX escribir: 

    sudo chmod -R 777 /var/www/NOMBRE DE PROYECTO/tmp

-->

<!DOCTYPE html>
<html>
    <head>
        <title>{$titulo|default:"Sin titulo"}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{$_layoutParams.ruta_css}estilo.css" rel="stylesheet" type="text/css"/>
        <script src="{$_layoutParams.root}public/js/jquery.js" type="text/javascript"></script>
        <script src="{$_layoutParams.root}public/js/jquery.validate.js" type="text/javascript"></script>
        
        
        <link href="{$_layoutParams.ruta_css}fss/fss-reset.css" rel="stylesheet" type="text/css" />
        <link href="{$_layoutParams.ruta_css}fss/fss-layout.css" rel="stylesheet" type="text/css" />
        <link href="{$_layoutParams.ruta_css}fss/fss-text.css" rel="stylesheet" type="text/css" />
        <link href="{$_layoutParams.ruta_css}fss/print.css" media="print" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/framework/preferences/css/fss/fss-theme-bw-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/framework/preferences/css/fss/fss-theme-wb-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/framework/preferences/css/fss/fss-theme-by-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/framework/preferences/css/fss/fss-theme-yb-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/framework/preferences/css/fss/fss-theme-lgdg-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/framework/preferences/css/fss/fss-text-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/lib/jquery/ui/css/fl-theme-by/by.css" />
        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/lib/jquery/ui/css/fl-theme-yb/yb.css" />
        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/lib/jquery/ui/css/fl-theme-bw/bw.css" />
        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/lib/jquery/ui/css/fl-theme-wb/wb.css" />
        <link rel="stylesheet" type="text/css" href="{$_layoutParams.root}libs/infusion/lib/jquery/ui/css/fl-theme-lgdg/lgdg.css" />
        <link href="{$_layoutParams.root}libs/infusion/framework/preferences/css/PrefsEditor.css" rel="stylesheet" type="text/css" />
        <link href="{$_layoutParams.root}libs/infusion/framework/preferences/css/SeparatedPanelPrefsEditor.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" src="{$_layoutParams.root}libs/infusion/infusion-custom.js"></script>
        
        
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <!-- BOOTSTRAP
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        -->
        <script type="text/javascript" src="{$_layoutParams.ruta_js}floe.js"></script>
        {if isset($_layoutParams.js) && count($_layoutParams.js)}
            {foreach item=js from=$_layoutParams.js}
                <script src="{$js}" type="text/javascript"></script>
            {/foreach}
        {/if}
        <script>
            $(document).ready(function(){
                $("#dialog").dialog({
                    modal: true,
                    show: "blind",
                    hide: "explode",
                    buttons:{
                        "Aceptar": function(){
                            $(this).dialog("close");
                        }
                    }
                });
                $("#dialog").dialog("option", "width", 100);
                $("#dialog").dialog("option", "height", 300);
                $("#dialog").dialog("option", "resizable", false);
            });
        </script>
    </head>
    <body>
        <header id="unalTop">
        {if Session::get('tipo_v')=='Estudiante' || Session::get('tipo_v')=='Profesor'}
            <script type="text/javascript">
                // Barra Accesibilidad FLOE
                $(document).ready(function () {
                    floe.setupUIO({
                        templatePrefix: "{$_layoutParams.root}libs/infusion/framework/preferences/html/",
                        messagePrefix: "{$_layoutParams.root}libs/infusion/framework/preferences/messages/",
                        tocTemplate: "{$_layoutParams.root}libs/infusion/components/tableOfContents/html/TableOfContents.html",
                        template: "{$_layoutParams.root}libs/infusion/framework/preferences/html/SeparatedPanelPrefsEditor.html"
                    });
                });
            </script>
            <!-- Barra Accesibilidad FLOE -->
            <div class="flc-prefsEditor-separatedPanel fl-prefsEditor-separatedPanel">
                <div class="flc-slidingPanel-panel flc-prefsEditor-iframe"></div>
                <div class="fl-panelBar">
                    <span class="fl-prefsEditor-buttons">
                        <button id="Reset" class="flc-prefsEditor-reset fl-prefsEditor-reset"><span class="fl-icon-undo"></span> Restaurar</button>
                        <button id="" class="flc-slidingPanel-toggleButton fl-prefsEditor-showHide"> Mostrar/Ocultar</button>
                    </span>
                </div>
            </div>
        {/if}
            <div class="logo">
                <a href="http://unal.edu.co">
                    <img alt="Escudo de la Universidad Nacional de Colombia" src="{$_layoutParams.ruta_img}escudoUnal.png"/>
                </a>
                <div class="diag">
                </div>
            </div>
            <div class="firstMenu">
                <div class="btn-group tx-srlanguagemenu">
                  <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    <!--ES-->
                    <span class="caret"></span>
                  </div>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="http://unal.edu.co/en/">EN</a></li>
                  </ul>
                </div>
                <!--<ul class="socialLinks">
                    <dd>
                        <a>Hola</a>
                    </dd>

                </ul>-->
            </div>
            <div class="navigation">
                <div class="site-url">
                    <div class="icon">
                    </div>{$_layoutParams.root}
                </div>
                <div class="menu">
                    {if isset($_layoutParams.menu)}
                        {foreach item=it from=$_layoutParams.menu}
                            {if isset($_layoutParams.item) && $_layoutParams.item == $it.id}
                                {assign var="_item_style" value='current'}
                            {else}
                                {assign var="_item_style" value=''}
                            {/if}
                            <a href="{$it.enlace}"><div id="{$_item_style}" class="btn">{$it.titulo}</div></a>
                        {/foreach}
                    {/if}
                </div>
            </div>
            <div class="seal">
                <img alt="Escudo de la República de Colombia" src="{$_layoutParams.ruta_img}sealColombia.png" width="66" height="66" />
            </div>

        </header>
        <div class="header">
            <div class="up" id="img_gaia">
                <a id="linklogo" href="#">
                    <img class="logogaia" alt="Logo GAIA" src="{$_layoutParams.ruta_img}logogaia.gif" />
                </a>
            </div>
            <div class="up" id="tit_gaia">{$titulo}</div>
            <div class="up" id="login_gaia">
                {if !Session::get('autenticado')}
                <form id="form1" name="form1" method="post" action="{$_layoutParams.root}login">
                    <input type="hidden" value="1" name="enviar"/>
                    <input type="hidden" value="{$_layoutParams.item}" name="de_donde"/>
                    <div id="arealoggin">
                        <input type="text" class="user" name="usuario" placeholder="Usuario" {if isset($datos['usuario'])}value="{$datos['usuario']}"{/if}/>
                        <br>
                        <input type="password" class="user" placeholder="Contraseña" name="pass"/>
                        <br><br>
                        <input type="submit" class="defaultButton" value="Enviar"/>
                        <br><br>
                        {if $_layoutParams.item != 'registro'}
                        <a class="link" href="{$_layoutParams.root}registro/">Registrarse</a>
                        <br>
                        <a class="link" href="#">Olvidé mi contraseña</a>
                        {/if}
                    </div>
                </form>
                {else}
                    <fieldset class="field_usu">
                        <legend>{Session::get('nombre')|capitalize} ({Session::get('tipo_v')})</legend>
                        <div id="arealoggin">
                            <li class="defaultButton"><a href="">Mi Perfil</a></li>
                            {if isset($roles)}
                                <li class="defaultButton" id="roles"><a>Rol</a>
                                    <ul>
                                    {foreach item=data from=$roles}
                                        <li><a href="{$_layoutParams.root}rol/?num={$data.rol|base64_encode}&band={$_layoutParams.item|base64_encode}">{$data.rol}</a></li>
                                    {/foreach}
                                    </ul>
                                </li>
                            {/if}
                            <li class="defaultButton">
                                <a href="{$_layoutParams.root}login/cerrar/">Cerrar Sesión</a>
                            </li>
                        </div>
                    </fieldset>
                {/if}
            </div>
        </div>
        <div id="content">
            <noscript><p>
            Para el correcto funcionamiento de la aplicación debe tener el soporte de JavaScript habilitado
            </p></noscript>
            {if isset($_error)}
            <div id="error">{$_error}</div>
            {/if}

            {if isset($_mensaje)}
            <div id="mensaje">{$_mensaje}</div>
            {/if}
            
            {include file=$_contenido}
        </div>
        <div id="footer">
            <div class="foot" id="info">
                Izquierda<!--gaia_man@unal.edu.co-->
            </div>
            <div class="foot" id="medio">
                Medio
            </div>
            <div class="foot" id="contacto">
                Derecha<!--Copyright &copy;2015 <a href="{$_layoutParams.root}GAIA" target="_blank">Sitio Web Oficial</a>-->
            </div>
        </div>
    </body>
</html>