<?php /* Smarty version 3.1.27, created on 2015-11-10 19:14:38
         compiled from "C:\xampp\htdocs\Integrador\views\layout\default\template.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:261945642340e95a698_74366901%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe4caf2f178230e995525e876ddcbb0cf0b59fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Integrador\\views\\layout\\default\\template.tpl',
      1 => 1446756005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261945642340e95a698_74366901',
  'variables' => 
  array (
    'titulo' => 0,
    '_layoutParams' => 0,
    'js' => 0,
    'it' => 0,
    '_item_style' => 0,
    'datos' => 0,
    'roles' => 0,
    'data' => 0,
    '_error' => 0,
    '_mensaje' => 0,
    '_contenido' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5642340ea92a89_62220986',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5642340ea92a89_62220986')) {
function content_5642340ea92a89_62220986 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\Integrador\\libs\\smarty\\libs\\plugins\\modifier.capitalize.php';

$_smarty_tpl->properties['nocache_hash'] = '261945642340e95a698_74366901';
?>
<!-- En linux se debe dar permisos a la carpte tmp

En la consola de LINUX escribir: 

    sudo chmod -R 777 /var/www/NOMBRE DE PROYECTO/tmp

-->

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo (($tmp = @$_smarty_tpl->tpl_vars['titulo']->value)===null||$tmp==='' ? "Sin titulo" : $tmp);?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
estilo.css" rel="stylesheet" type="text/css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/js/jquery.validate.js" type="text/javascript"><?php echo '</script'; ?>
>
        
        
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
fss/fss-reset.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
fss/fss-layout.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
fss/fss-text.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_css'];?>
fss/print.css" media="print" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/css/fss/fss-theme-bw-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/css/fss/fss-theme-wb-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/css/fss/fss-theme-by-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/css/fss/fss-theme-yb-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/css/fss/fss-theme-lgdg-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/css/fss/fss-text-prefsEditor.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/lib/jquery/ui/css/fl-theme-by/by.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/lib/jquery/ui/css/fl-theme-yb/yb.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/lib/jquery/ui/css/fl-theme-bw/bw.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/lib/jquery/ui/css/fl-theme-wb/wb.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/lib/jquery/ui/css/fl-theme-lgdg/lgdg.css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/css/PrefsEditor.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/css/SeparatedPanelPrefsEditor.css" rel="stylesheet" type="text/css" />

        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/infusion-custom.js"><?php echo '</script'; ?>
>
        
        
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
        <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"><?php echo '</script'; ?>
>
        <!-- BOOTSTRAP
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <?php echo '<script'; ?>
 src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        -->
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_js'];?>
floe.js"><?php echo '</script'; ?>
>
        <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['js']) && count($_smarty_tpl->tpl_vars['_layoutParams']->value['js'])) {?>
            <?php
$_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['js'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['js'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['js']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['js']->value) {
$_smarty_tpl->tpl_vars['js']->_loop = true;
$foreach_js_Sav = $_smarty_tpl->tpl_vars['js'];
?>
                <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['js']->value;?>
" type="text/javascript"><?php echo '</script'; ?>
>
            <?php
$_smarty_tpl->tpl_vars['js'] = $foreach_js_Sav;
}
?>
        <?php }?>
        <?php echo '<script'; ?>
>
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
        <?php echo '</script'; ?>
>
    </head>
    <body>
        <header id="unalTop">
        <?php if (Session::get('tipo_v') == 'Estudiante' || Session::get('tipo_v') == 'Profesor') {?>
            <?php echo '<script'; ?>
 type="text/javascript">
                // Barra Accesibilidad FLOE
                $(document).ready(function () {
                    floe.setupUIO({
                        templatePrefix: "<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/html/",
                        messagePrefix: "<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/messages/",
                        tocTemplate: "<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/components/tableOfContents/html/TableOfContents.html",
                        template: "<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
libs/infusion/framework/preferences/html/SeparatedPanelPrefsEditor.html"
                    });
                });
            <?php echo '</script'; ?>
>
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
        <?php }?>
            <div class="logo">
                <a href="http://unal.edu.co">
                    <img alt="Escudo de la Universidad Nacional de Colombia" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
escudoUnal.png"/>
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
                    </div><?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>

                </div>
                <div class="menu">
                    <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['menu'])) {?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['_layoutParams']->value['menu'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['it'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['it']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['it']->value) {
$_smarty_tpl->tpl_vars['it']->_loop = true;
$foreach_it_Sav = $_smarty_tpl->tpl_vars['it'];
?>
                            <?php if (isset($_smarty_tpl->tpl_vars['_layoutParams']->value['item']) && $_smarty_tpl->tpl_vars['_layoutParams']->value['item'] == $_smarty_tpl->tpl_vars['it']->value['id']) {?>
                                <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_Variable('current', null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["_item_style"] = new Smarty_Variable('', null, 0);?>
                            <?php }?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['it']->value['enlace'];?>
"><div id="<?php echo $_smarty_tpl->tpl_vars['_item_style']->value;?>
" class="btn"><?php echo $_smarty_tpl->tpl_vars['it']->value['titulo'];?>
</div></a>
                        <?php
$_smarty_tpl->tpl_vars['it'] = $foreach_it_Sav;
}
?>
                    <?php }?>
                </div>
            </div>
            <div class="seal">
                <img alt="Escudo de la República de Colombia" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
sealColombia.png" width="66" height="66" />
            </div>

        </header>
        <div class="header">
            <div class="up" id="img_gaia">
                <a id="linklogo" href="#">
                    <img class="logogaia" alt="Logo GAIA" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['ruta_img'];?>
logogaia.gif" />
                </a>
            </div>
            <div class="up" id="tit_gaia"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</div>
            <div class="up" id="login_gaia">
                <?php if (!Session::get('autenticado')) {?>
                <form id="form1" name="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login">
                    <input type="hidden" value="1" name="enviar"/>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['item'];?>
" name="de_donde"/>
                    <div id="arealoggin">
                        <input type="text" class="user" name="usuario" placeholder="Usuario" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value['usuario'])) {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['usuario'];?>
"<?php }?>/>
                        <br>
                        <input type="password" class="user" placeholder="Contraseña" name="pass"/>
                        <br><br>
                        <input type="submit" class="defaultButton" value="Enviar"/>
                        <br><br>
                        <?php if ($_smarty_tpl->tpl_vars['_layoutParams']->value['item'] != 'registro') {?>
                        <a class="link" href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
registro/">Registrarse</a>
                        <br>
                        <a class="link" href="#">Olvidé mi contraseña</a>
                        <?php }?>
                    </div>
                </form>
                <?php } else { ?>
                    <fieldset class="field_usu">
                        <legend><?php echo smarty_modifier_capitalize(Session::get('nombre'));?>
 (<?php echo Session::get('tipo_v');?>
)</legend>
                        <div id="arealoggin">
                            <li class="defaultButton"><a href="">Mi Perfil</a></li>
                            <?php if (isset($_smarty_tpl->tpl_vars['roles']->value)) {?>
                                <li class="defaultButton" id="roles"><a>Rol</a>
                                    <ul>
                                    <?php
$_from = $_smarty_tpl->tpl_vars['roles']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['data'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['data']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
$foreach_data_Sav = $_smarty_tpl->tpl_vars['data'];
?>
                                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
rol/?num=<?php echo base64_encode($_smarty_tpl->tpl_vars['data']->value['rol']);?>
&band=<?php echo base64_encode($_smarty_tpl->tpl_vars['_layoutParams']->value['item']);?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value['rol'];?>
</a></li>
                                    <?php
$_smarty_tpl->tpl_vars['data'] = $foreach_data_Sav;
}
?>
                                    </ul>
                                </li>
                            <?php }?>
                            <li class="defaultButton">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
login/cerrar/">Cerrar Sesión</a>
                            </li>
                        </div>
                    </fieldset>
                <?php }?>
            </div>
        </div>
        <div id="content">
            <noscript><p>
            Para el correcto funcionamiento de la aplicación debe tener el soporte de JavaScript habilitado
            </p></noscript>
            <?php if (isset($_smarty_tpl->tpl_vars['_error']->value)) {?>
            <div id="error"><?php echo $_smarty_tpl->tpl_vars['_error']->value;?>
</div>
            <?php }?>

            <?php if (isset($_smarty_tpl->tpl_vars['_mensaje']->value)) {?>
            <div id="mensaje"><?php echo $_smarty_tpl->tpl_vars['_mensaje']->value;?>
</div>
            <?php }?>
            
            <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['_contenido']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        </div>
        <div id="footer">
            <div class="foot" id="info">
                Izquierda<!--gaia_man@unal.edu.co-->
            </div>
            <div class="foot" id="medio">
                Medio
            </div>
            <div class="foot" id="contacto">
                Derecha<!--Copyright &copy;2015 <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
GAIA" target="_blank">Sitio Web Oficial</a>-->
            </div>
        </div>
    </body>
</html><?php }
}
?>