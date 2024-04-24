<?php
/* Smarty version 4.5.2, created on 2024-04-25 00:52:53
  from 'C:\xampp\htdocs\kalkulator_bankowy\app\bankowy_calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_66298d451e9ba5_08529850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5117860c4cf0edba841a8c1269ae8aaea593e42b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator_bankowy\\app\\bankowy_calc.tpl',
      1 => 1713999165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66298d451e9ba5_08529850 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28743109066298d451da1e4_36013470', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137105017666298d451daab1_14104502', 'content');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_129362913166298d451e8b35_36630631', 'Highlights');
?>



<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_28743109066298d451da1e4_36013470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_28743109066298d451da1e4_36013470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_137105017666298d451daab1_14104502 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_137105017666298d451daab1_14104502',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section>
        <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/bankowy_calc.php" method="post">
            <div class="row gtr-50">
                <div class="col-6 col-12-small">
                    <input type="text" name="kwota" id="contact-name" placeholder="Kwota kredytu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" />
                </div>
                <div class="col-6 col-12-small">
                    <input type="text" name="lata" id="contact-email" placeholder="Lata kredytowania" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['lata'];?>
" />
                </div>
                <div class="col-6 col-12-small">
                    <input type="text" name="procent" id="contact-email" placeholder="Oprocentowanie kredytu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['procent'];?>
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

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>



</div>

<?php
}
}
/* {/block 'content'} */
/* {block 'Highlights'} */
class Block_129362913166298d451e8b35_36630631 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Highlights' => 
  array (
    0 => 'Block_129362913166298d451e8b35_36630631',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
        <section id="highlights" class="wrapper style3">
            <div class="title">Obliczona rata kredytu</div>
            <div class="container">
                <h4>Wynik</h4>
                <p class="res">
                    Rata wyniesie <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł miesięcznie.
                </p>
            </div>
        </section>   
    <?php }
}
}
/* {/block 'Highlights'} */
}