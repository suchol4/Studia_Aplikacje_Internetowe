<?php
/* Smarty version 4.5.2, created on 2024-05-24 17:31:07
  from 'C:\xampp\htdocs\kalkulator_bankowy\app\views\templates\main_sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6650b2bbd57659_73128239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42d3f42cb166f9f9d6bee8721154c19baa512ecd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator_bankowy\\app\\views\\templates\\main_sidebar.tpl',
      1 => 1716564636,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6650b2bbd57659_73128239 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20117870216650b2bbd56105_23898473', 'Nav');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'Nav'} */
class Block_20117870216650b2bbd56105_23898473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Nav' => 
  array (
    0 => 'Block_20117870216650b2bbd56105_23898473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav id="nav">
        <ul>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Home</a></li>
            <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
tableView"">Tabela</a></li>
            <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout">Wyloguj</a></li>
        </ul>
    </nav>
<?php
}
}
/* {/block 'Nav'} */
}
