<?php /* Smarty version 3.1.27, created on 2015-10-15 23:52:44
         compiled from "C:\xampp\htdocs\Integrador\views\index\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:190995620202ce2b574_24687887%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '979ef9377da716bc69fbfa273788a77551c8b857' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Integrador\\views\\index\\index.tpl',
      1 => 1443514321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190995620202ce2b574_24687887',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5620202ce3b609_40380128',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5620202ce3b609_40380128')) {
function content_5620202ce3b609_40380128 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '190995620202ce2b574_24687887';
?>
Vista Index
<?php if (Session::get('autenticado')) {?>
    <p><?php echo Session::get('id_usuario');?>
</p>
    <p>Autenticado</p>
<?php } else { ?>
    <p>No Autenticado</p>
<?php }
}
}
?>