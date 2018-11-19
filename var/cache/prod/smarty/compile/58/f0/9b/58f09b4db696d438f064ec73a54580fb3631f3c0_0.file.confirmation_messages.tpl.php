<?php
/* Smarty version 3.1.32, created on 2018-11-18 08:54:30
  from 'C:\xampp\htdocs\prestashop1740\admin285xkxgxy\themes\new-theme\template\components\layout\confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf11ab61dd160_24301093',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58f09b4db696d438f064ec73a54580fb3631f3c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1740\\admin285xkxgxy\\themes\\new-theme\\template\\components\\layout\\confirmation_messages.tpl',
      1 => 1541868588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf11ab61dd160_24301093 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
