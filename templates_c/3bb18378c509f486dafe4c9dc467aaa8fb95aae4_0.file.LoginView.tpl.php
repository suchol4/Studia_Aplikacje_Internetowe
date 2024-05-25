<?php
/* Smarty version 4.5.2, created on 2024-05-25 15:39:00
  from 'C:\xampp\htdocs\kalkulator_bankowy\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6651e9f48000b5_35304460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bb18378c509f486dafe4c9dc467aaa8fb95aae4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator_bankowy\\app\\views\\LoginView.tpl',
      1 => 1716644338,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_6651e9f48000b5_35304460 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1861731076651e9f47fb459_50548792', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_1861731076651e9f47fb459_50548792 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1861731076651e9f47fb459_50548792',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<section>
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
            <div class="row gtr-50">
                <div class="col-6 col-12-small">
                    <label for="id_login">Użytkownik: </label>
                    <input type="text" id="id_login" type="text" name="login" placeholder="Kwota kredytu"/>
                </div>
                <div class="col-6 col-12-small">
                    <label for="id_pass">Hasło: </label>
                    <input id="id_pass" type="password" name="pass" />
                </div>
                <div class="col-12">
                    <ul class="actions">
                        <li><input input type="submit" value="zaloguj" class="style1" /></li>
                    </ul>
                </div>
            </div>
        </form>
    </section>	

<?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block 'content'} */
}
