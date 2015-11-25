<?php /* Smarty version 3.1.27, created on 2015-11-10 19:24:22
         compiled from "C:\xampp\htdocs\Integrador\views\aplicaciones\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1667256423656cf8d34_94552015%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a987252b235424101fc83c0d7338eafca70bbc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Integrador\\views\\aplicaciones\\index.tpl',
      1 => 1447179846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1667256423656cf8d34_94552015',
  'variables' => 
  array (
    'aplicaciones' => 0,
    '_layoutParams' => 0,
    'datos_app' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56423656d69ce5_58746971',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56423656d69ce5_58746971')) {
function content_56423656d69ce5_58746971 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1667256423656cf8d34_94552015';
if (isset($_smarty_tpl->tpl_vars['aplicaciones']->value) && count($_smarty_tpl->tpl_vars['aplicaciones']->value)) {?>
    <?php if (Session::get('tipo_v') == 'Administrador') {?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
aplicaciones/nuevo">Agregar App</a>
    <?php }?>
    <div class="aplicaciones">
    <?php
$_from = $_smarty_tpl->tpl_vars['aplicaciones']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['datos_app'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['datos_app']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['datos_app']->value) {
$_smarty_tpl->tpl_vars['datos_app']->_loop = true;
$foreach_datos_app_Sav = $_smarty_tpl->tpl_vars['datos_app'];
?>
        <div class="aplicacion">
            <?php if (!Session::get('autenticado')) {?>
                <a class="hv_apps" href="<?php echo $_smarty_tpl->tpl_vars['datos_app']->value['app_url'];?>
" target="_blank">
            <?php } else { ?>
                <a class="hv_apps" href="<?php echo $_smarty_tpl->tpl_vars['datos_app']->value['app_url'];?>
?usr=<?php echo base64_encode(Session::get('usuario'));?>
&pass=<?php echo base64_encode(Session::get('contraseña'));?>
" target="_blank">
            <?php }?>
                <img class="img_apps" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/apps/<?php echo $_smarty_tpl->tpl_vars['datos_app']->value['app_img'];?>
"/>
                <h3 class="nomb_apps"><?php echo $_smarty_tpl->tpl_vars['datos_app']->value['app_nom'];?>
</h3>
            </a>
            <p class="desc_apps"><?php echo $_smarty_tpl->tpl_vars['datos_app']->value['app_descp'];?>
</p>
        </div>
    <?php
$_smarty_tpl->tpl_vars['datos_app'] = $foreach_datos_app_Sav;
}
?>
    </div>
<?php } else { ?>
    <p>No hay APPS</p>
<?php }
}
}
?>