<?php
/* Smarty version 3.1.32, created on 2018-11-18 08:52:55
  from 'C:\xampp\htdocs\prestashop1740\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bf11a57e5f900_49367031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3eb1c385709a6372b0b4ad082f7126a0a9a88f42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop1740\\themes\\classic\\templates\\page.tpl',
      1 => 1541868528,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bf11a57e5f900_49367031 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2099634535bf11a57dea6d9_10647977', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_6440977475bf11a57deb4c3_22707673 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_1257160055bf11a57deadb0_53816863 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6440977475bf11a57deb4c3_22707673', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_4036895755bf11a57e5d255_95187048 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_17153389355bf11a57e5dc23_76821919 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_21299873455bf11a57e5cc92_61856404 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4036895755bf11a57e5d255_95187048', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17153389355bf11a57e5dc23_76821919', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_7221685835bf11a57e5eb62_50471882 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_14290863965bf11a57e5e6e1_21194494 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7221685835bf11a57e5eb62_50471882', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_2099634535bf11a57dea6d9_10647977 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2099634535bf11a57dea6d9_10647977',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_1257160055bf11a57deadb0_53816863',
  ),
  'page_title' => 
  array (
    0 => 'Block_6440977475bf11a57deb4c3_22707673',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_21299873455bf11a57e5cc92_61856404',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4036895755bf11a57e5d255_95187048',
  ),
  'page_content' => 
  array (
    0 => 'Block_17153389355bf11a57e5dc23_76821919',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_14290863965bf11a57e5e6e1_21194494',
  ),
  'page_footer' => 
  array (
    0 => 'Block_7221685835bf11a57e5eb62_50471882',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1257160055bf11a57deadb0_53816863', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21299873455bf11a57e5cc92_61856404', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14290863965bf11a57e5e6e1_21194494', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
