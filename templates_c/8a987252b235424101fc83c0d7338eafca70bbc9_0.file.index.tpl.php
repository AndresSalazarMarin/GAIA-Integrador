<?php /* Smarty version 3.1.27, created on 2015-10-16 18:56:31
         compiled from "C:\xampp\htdocs\Integrador\views\aplicaciones\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:667556212c3f915415_90189464%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a987252b235424101fc83c0d7338eafca70bbc9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Integrador\\views\\aplicaciones\\index.tpl',
      1 => 1444772056,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '667556212c3f915415_90189464',
  'variables' => 
  array (
    'aplicaciones' => 0,
    'datos' => 0,
    '_layoutParams' => 0,
    'acceso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56212c3fe070d3_24214126',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56212c3fe070d3_24214126')) {
function content_56212c3fe070d3_24214126 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '667556212c3f915415_90189464';
if (isset($_smarty_tpl->tpl_vars['aplicaciones']->value) && count($_smarty_tpl->tpl_vars['aplicaciones']->value)) {?>
    <!--<table border="1px" id="posts">
        <tr>
            <td>Id</td>
            <td>Aplicación</td>
            <td>Imagen</td>
        </tr>
        <?php
$_from = $_smarty_tpl->tpl_vars['aplicaciones']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['datos']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
$foreach_datos_Sav = $_smarty_tpl->tpl_vars['datos'];
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['app_id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['datos']->value['app_nom'];?>
</td>
                <td>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/apps/<?php echo $_smarty_tpl->tpl_vars['datos']->value['app_img'];?>
" />
                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['datos'] = $foreach_datos_Sav;
}
?>
    </table>-->
    <?php if (isset($_smarty_tpl->tpl_vars['acceso']->value) && count($_smarty_tpl->tpl_vars['acceso']->value)) {?>
        <?php if ($_smarty_tpl->tpl_vars['acceso']->value == 'admin_access') {?>
            <a href="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
aplicaciones/nuevo">Agregar App</a>
        <?php }?>
    <?php }?>
    <div class="aplicaciones">
    <?php
$_from = $_smarty_tpl->tpl_vars['aplicaciones']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['datos'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['datos']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['datos']->value) {
$_smarty_tpl->tpl_vars['datos']->_loop = true;
$foreach_datos_Sav = $_smarty_tpl->tpl_vars['datos'];
?>
        <div class="aplicacion">
            <?php if (!Session::get('autenticado')) {?>
                <a class="hv_apps" href="<?php echo $_smarty_tpl->tpl_vars['datos']->value['app_url'];?>
" target="_blank">
            <?php } else { ?>
                <a class="hv_apps" href="<?php echo $_smarty_tpl->tpl_vars['datos']->value['app_url'];?>
?usr=<?php echo base64_encode(Session::get('usuario'));?>
&pass=<?php echo base64_encode(Session::get('contraseña'));?>
" target="_blank">
            <?php }?>
                <img class="img_apps" src="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
public/img/apps/<?php echo $_smarty_tpl->tpl_vars['datos']->value['app_img'];?>
"/>
                <h3 class="nomb_apps"><?php echo $_smarty_tpl->tpl_vars['datos']->value['app_nom'];?>
</h3>
            </a>
            <p class="desc_apps"><?php echo $_smarty_tpl->tpl_vars['datos']->value['app_descp'];?>
</p>
        </div>
    <?php
$_smarty_tpl->tpl_vars['datos'] = $foreach_datos_Sav;
}
?>
    </div>
<?php } else { ?>
    <p>No hay APPS</p>
<?php }
}
}
?>