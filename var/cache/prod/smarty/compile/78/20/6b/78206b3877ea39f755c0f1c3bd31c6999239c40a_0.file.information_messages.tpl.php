<?php
/* Smarty version 3.1.32, created on 2018-11-10 22:01:03
  from 'C:\xampp\htdocs\prestashop1740\admin285xkxgxy\themes\new-theme\template\components\layout\information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be7470fa43cf7_27883353',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78206b3877ea39f755c0f1c3bd31c6999239c40a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1740\\admin285xkxgxy\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1541868588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be7470fa43cf7_27883353 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['informations']->value) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
