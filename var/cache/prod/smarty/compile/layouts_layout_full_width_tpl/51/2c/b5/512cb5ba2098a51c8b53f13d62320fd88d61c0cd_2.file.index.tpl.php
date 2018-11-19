<?php
/* Smarty version 3.1.32, created on 2018-11-18 08:52:55
  from 'C:\xampp\htdocs\prestashop1740\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf11a57cd8236_16683235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '512cb5ba2098a51c8b53f13d62320fd88d61c0cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1740\\themes\\classic\\templates\\index.tpl',
      1 => 1541868526,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf11a57cd8236_16683235 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14595782415bf11a57cd59d3_57198504', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_13265138145bf11a57cd6053_59811469 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12244513865bf11a57cd6dd5_20675803 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_18407413975bf11a57cd6907_48953660 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12244513865bf11a57cd6dd5_20675803', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_14595782415bf11a57cd59d3_57198504 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_14595782415bf11a57cd59d3_57198504',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_13265138145bf11a57cd6053_59811469',
  ),
  'page_content' => 
  array (
    0 => 'Block_18407413975bf11a57cd6907_48953660',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12244513865bf11a57cd6dd5_20675803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13265138145bf11a57cd6053_59811469', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18407413975bf11a57cd6907_48953660', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
