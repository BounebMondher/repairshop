<?php
/* Smarty version 3.1.32, created on 2018-11-10 20:24:27
  from 'C:\xampp\htdocs\prestashop1740\admin285xkxgxy\themes\default\template\controllers\modules\modal_translation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be7306b626f42_32043393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a466c1da480dce8012a01d16214240ca015080c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1740\\admin285xkxgxy\\themes\\default\\template\\controllers\\modules\\modal_translation.tpl',
      1 => 1541868595,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be7306b626f42_32043393 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
	<div class="input-group">
		<button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
			<i class="icon-flag"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage translations'),$_smarty_tpl ) );?>

			<span class="caret"></span>
		</button>
		<ul class="dropdown-menu">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
				<li>
					<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['translateLinks']->value[$_smarty_tpl->tpl_vars['language']->value['iso_code']],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['name'],'html','UTF-8' ));?>
</a>
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
