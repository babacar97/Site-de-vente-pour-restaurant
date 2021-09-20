<?php
/* Smarty version 3.1.39, created on 2021-09-16 16:55:57
  from 'C:\xampp\htdocs\prestashop_1.7.7.6\themes\leo_trump\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61435afdf08cd1_75718609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0dd3f0327f61f1045e920dfcfad485d2e0823292' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop_1.7.7.6\\themes\\leo_trump\\templates\\page.tpl',
      1 => 1631614371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61435afdf08cd1_75718609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107230749261435afdefc255_36213725', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_168749351861435afdefd415_27592625 extends Smarty_Internal_Block
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
class Block_34723435061435afdefca84_84423185 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168749351861435afdefd415_27592625', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_169199771361435afdf03d40_81728785 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_82486439061435afdf04d43_87186607 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_176314841961435afdf03100_36247077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169199771361435afdf03d40_81728785', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82486439061435afdf04d43_87186607', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_144880553561435afdf07010_77699292 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_68900959661435afdf06565_92509677 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144880553561435afdf07010_77699292', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_107230749261435afdefc255_36213725 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_107230749261435afdefc255_36213725',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_34723435061435afdefca84_84423185',
  ),
  'page_title' => 
  array (
    0 => 'Block_168749351861435afdefd415_27592625',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_176314841961435afdf03100_36247077',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_169199771361435afdf03d40_81728785',
  ),
  'page_content' => 
  array (
    0 => 'Block_82486439061435afdf04d43_87186607',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_68900959661435afdf06565_92509677',
  ),
  'page_footer' => 
  array (
    0 => 'Block_144880553561435afdf07010_77699292',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_34723435061435afdefca84_84423185', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176314841961435afdf03100_36247077', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_68900959661435afdf06565_92509677', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
