<?php
/* Smarty version 3.1.32, created on 2018-11-10 20:24:27
  from 'C:\xampp\htdocs\prestashop1740\modules\repairshop\views\templates\admin\configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be7306ba6b0d0_45605149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72767f3278ce01281c7f8e0bbf6d6d9129860095' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1740\\modules\\repairshop\\views\\templates\\admin\\configure.tpl',
      1 => 1541853158,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be7306ba6b0d0_45605149 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
    <div class="panel-heading">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Configuration','mod'=>'repairshop'),$_smarty_tpl ) );?>

    </div>
    <form method="POST">
        <div class="panel-body">

            <label for="rsvalue"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'config value','mod'=>'repairshop'),$_smarty_tpl ) );?>
</label>
            <input type="text" name="rsvalue" id="rsvalue" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['REPAIRSHOP_VALUE']->value;?>
"/>

        </div>
        <div class="panel-footer">
            <button type="submit" name="saversvalue" class="btn btn-default pull-right">
                <i class="process-icon-save"></i>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'repairshop'),$_smarty_tpl ) );?>

            </button>
        </div>
    </form>
</div><?php }
}
