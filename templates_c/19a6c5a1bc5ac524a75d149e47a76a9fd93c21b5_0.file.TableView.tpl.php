<?php
/* Smarty version 4.5.2, created on 2024-05-25 15:30:07
  from 'C:\xampp\htdocs\kalkulator_bankowy\app\views\TableView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6651e7df390ce6_93347228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19a6c5a1bc5ac524a75d149e47a76a9fd93c21b5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator_bankowy\\app\\views\\TableView.tpl',
      1 => 1716643794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6651e7df390ce6_93347228 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_564349306651e7df3863e0_24899326', 'DataView');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18337367316651e7df386d03_38127262', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main_sidebar.tpl");
}
/* {block 'DataView'} */
class Block_564349306651e7df3863e0_24899326 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'DataView' => 
  array (
    0 => 'Block_564349306651e7df3863e0_24899326',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="title">Tabela</div>
<?php
}
}
/* {/block 'DataView'} */
/* {block 'content'} */
class Block_18337367316651e7df386d03_38127262 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18337367316651e7df386d03_38127262',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <table id="tab_kredyt" class="pure-table">
        <thead>
            <tr>
                <th>Kwota</th>
                <th>Lata</th>
                <th>Procent</th>
                <th>Rata</th>
                <th>Data</th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rates']->value, 'r');
$_smarty_tpl->tpl_vars['r']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['r']->value) {
$_smarty_tpl->tpl_vars['r']->do_else = false;
?>
                <tr><td><?php echo $_smarty_tpl->tpl_vars['r']->value["kwota"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["lat"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["procent"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["rata"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['r']->value["data"];?>
</td></tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

    <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
