<?php /* Smarty version 3.1.27, created on 2015-11-10 19:42:23
         compiled from "C:\xampp\htdocs\Integrador\views\aplicaciones\nuevo.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2315256423a8f971881_74711585%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b1fe2fa1559fb39ed3f08df0154641b01a5c0cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Integrador\\views\\aplicaciones\\nuevo.tpl',
      1 => 1447180934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2315256423a8f971881_74711585',
  'variables' => 
  array (
    '_layoutParams' => 0,
    'titulo' => 0,
    'datos' => 0,
    'tipo_app' => 0,
    'app' => 0,
    '_confirmacion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56423a8fa26023_67005983',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56423a8fa26023_67005983')) {
function content_56423a8fa26023_67005983 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2315256423a8f971881_74711585';
?>
<form id="form1" method="post" action="<?php echo $_smarty_tpl->tpl_vars['_layoutParams']->value['root'];?>
aplicaciones/nuevo" enctype="multipart/form-data">
    <input type="hidden" name="guardar" value="1" />
    <div id="reg_principal">
        <fieldset class="field_reg" id="info_aplicacion">
            <legend><h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1></legend>
            <div class="form-group">
                <label>Nombre:</label>
                <input class="form-control" type="text" name="nombre" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['nombre'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
"  <?php }
}?> placeholder="Nombre"/>
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <textarea class="form-control" name="descp" placeholder="Descripción"><?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['descp'] != '') {
echo $_smarty_tpl->tpl_vars['datos']->value['descp'];?>
  <?php }
}?></textarea>
            </div>
            <div class="form-group">
                <label>URL:</label>
                <input class="form-control" type="text" name="url" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['url'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['url'];?>
"  <?php }
}?> placeholder="www.ejemplo.com"/>
            </div>
            <div>
                <label>Seleccione Imagen:</label>
                <input type="file" name="imagen"/><br><br>
            </div>
            <div class="form-group">
                <label>Tipo:</label>
                <select name="tipo" id="tipo">
                    <?php
$_from = $_smarty_tpl->tpl_vars['tipo_app']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['app'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['app']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->_loop = true;
$foreach_app_Sav = $_smarty_tpl->tpl_vars['app'];
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['app']->value['tipo_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['app']->value['tipo_nom'];?>
</option>
                    <?php
$_smarty_tpl->tpl_vars['app'] = $foreach_app_Sav;
}
?>
                </select>
            </div>
            <div id="seg_tip">
                <div class="form-group">
                    <label>Host:</label>
                    <input class="form-control" id="host" type="text" name="host" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['host'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['host'];?>
"  <?php }
}?> placeholder="Ej: localhost"/>
                </div>
                <div class="form-group">
                    <label>Usuario:</label>
                    <input class="form-control" type="text" name="usu" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['usu'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['usu'];?>
"  <?php }
}?> placeholder="Nombre Usuario"/>
                </div>
                <div class="form-group">
                    <label>Clave:</label>
                    <input class="form-control" type="text" name="clave" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['clave'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['clave'];?>
"  <?php }
}?> placeholder="Clave"/>
                </div>
                <div class="form-group">
                    <label>Nombre Base de Datos:</label>
                    <input class="form-control" type="text" name="nom_bd" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['nom_bd'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nom_bd'];?>
"  <?php }
}?> placeholder="Nombre BD"/>
                </div>
                <div class="form-group">
                    <label>Puerto:</label>
                    <input class="form-control" type="text" name="puerto" <?php if (isset($_smarty_tpl->tpl_vars['datos']->value)) {
if ($_smarty_tpl->tpl_vars['datos']->value['puerto'] != '') {?>value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['puerto'];?>
"  <?php }
}?> placeholder="Ej: 5432"/>
                </div>
            </div>
        </fieldset>
    </div>
    <input type="submit" class="tests_reg" value="Guardar"/>
    <?php if (isset($_smarty_tpl->tpl_vars['_confirmacion']->value)) {?>
        <div id="dialog" title="Mensaje"><p><?php echo $_smarty_tpl->tpl_vars['_confirmacion']->value;?>
</p></div>
        <?php echo '<script'; ?>
>
            $(document).ready(function(){
                $("#dialog").dialog({
                    modal: true
                });
            });
        <?php echo '</script'; ?>
>
    <?php }?>
</form><?php }
}
?>