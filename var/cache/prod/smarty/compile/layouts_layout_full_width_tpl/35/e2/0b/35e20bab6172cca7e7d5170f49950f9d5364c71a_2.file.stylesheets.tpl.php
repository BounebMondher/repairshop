<?php
/* Smarty version 3.1.32, created on 2018-11-18 08:52:56
  from 'C:\xampp\htdocs\prestashop1740\themes\classic\templates\_partials\stylesheets.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf11a58a9cd30_13086054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35e20bab6172cca7e7d5170f49950f9d5364c71a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1740\\themes\\classic\\templates\\_partials\\stylesheets.tpl',
      1 => 1541868527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf11a58a9cd30_13086054 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['external'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
  <link rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['uri'], ENT_QUOTES, 'UTF-8');?>
" type="text/css" media="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['media'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['stylesheets']->value['inline'], 'stylesheet');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['stylesheet']->value) {
?>
  <style>
    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['stylesheet']->value['content'], ENT_QUOTES, 'UTF-8');?>

  </style>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
