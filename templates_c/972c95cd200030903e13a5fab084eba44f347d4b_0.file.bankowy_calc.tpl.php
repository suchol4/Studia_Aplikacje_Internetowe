<?php
/* Smarty version 4.5.2, created on 2024-05-12 23:58:11
  from 'C:\xampp\htdocs\kalkulator_bankowy\app\views\bankowy_calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66413b7333db14_37133456',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '972c95cd200030903e13a5fab084eba44f347d4b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator_bankowy\\app\\views\\bankowy_calc.tpl',
      1 => 1715551089,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66413b7333db14_37133456 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_165418829866413b7332a462_35552758', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10388429066413b7332b237_22866610', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185550821266413b7333ba34_56368033', 'Highlights');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_165418829866413b7332a462_35552758 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_165418829866413b7332a462_35552758',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_10388429066413b7332b237_22866610 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_10388429066413b7332b237_22866610',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
            <div class="row gtr-50">
                <div class="col-6 col-12-small">
                    <input type="text" name="kwota" id="contact-name" placeholder="Kwota kredytu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" />
                </div>
                <div class="col-6 col-12-small">
                    <input type="text" name="lata" id="contact-email" placeholder="Lata kredytowania" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
" />
                </div>
                <div class="col-6 col-12-small">
                    <input type="text" name="procent" id="contact-email" placeholder="Oprocentowanie kredytu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->procent;?>
" />
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input type="submit" class="style1" value="Oblicz" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>





    <div class="messages">

                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
            <h4>Informacje: </h4>
            <ol class="inf">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
                    <li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>



    </div>

<?php
}
}
/* {/block 'content'} */
/* {block 'Highlights'} */
class Block_185550821266413b7333ba34_56368033 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Highlights' => 
  array (
    0 => 'Block_185550821266413b7333ba34_56368033',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
        <section id="highlights" class="wrapper style3">
            <div class="title">Obliczona rata kredytu</div>
            <div class="container">
                <h4>Wynik</h4>
                <p class="res">
                    Rata wyniesie <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>
 zł miesięcznie.
                </p>
            </div>
        </section>   
    <?php }
}
}
/* {/block 'Highlights'} */
}
