<?php /* Smarty version 3.1.27, created on 2015-10-16 18:58:25
         compiled from "C:\xampp\htdocs\Integrador\views\login\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:520056212cb1272957_11767847%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffe08919a1ddbb96723c02d77aee6840f01f4941' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Integrador\\views\\login\\index.tpl',
      1 => 1440913575,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '520056212cb1272957_11767847',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56212cb1343706_71629203',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56212cb1343706_71629203')) {
function content_56212cb1343706_71629203 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '520056212cb1272957_11767847';
?>
<h2>Iniciar Sesión</h2>
<form name="form1" method="post" action="">
    <input type="hidden" value="1" name="enviar"/>
    <p>
        <label>Usuario: </label>
        <input type="text" name="usuario" value="<?php if (isset($_smarty_tpl->tpl_vars['datos']->value['usuario'])) {?> <?php echo $_smarty_tpl->tpl_vars['datos']->value['usuario'];?>
 <?php }?>"/>
    </p>
    <p>
        <label>Password: </label>
        <input type="password" name="pass"/>
    </p>
    <p>
        <input type="submit" value="Enviar"/>
    </p>
</form><?php }
}
?>