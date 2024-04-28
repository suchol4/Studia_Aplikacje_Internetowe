<?php
/* Smarty version 4.5.2, created on 2024-04-29 00:10:00
  from 'C:\xampp\htdocs\kalkulator_bankowy\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_662ec938dc5cd2_18993551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88b0bf0d86c8810cce8d5a3b45191f2074f5ea48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\kalkulator_bankowy\\templates\\main.tpl',
      1 => 1714340063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_662ec938dc5cd2_18993551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
    <head>
        <title>No Sidebar - Escape Velocity by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css">
    </head>

    <body class="no-sidebar is-preload">
        <div id="page-wrapper">
            <!-- Header -->
            <section id="header" class="wrapper">

                <!-- Logo -->
                <div id="logo">
                    <h1><a href="index.html">Kalkulator bankowy</a></h1>
                    <p>Strona została stworzona na potrzeby ćwiczeń labolatoryjnych</p>
                </div>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Home</a></li>
                        <li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Strona testowa</a></li>
                    </ul>
                </nav>

            </section>

            <!-- Main -->
            <div id="main" class="wrapper style2">
                <div class="title">Kalkulator</div>
                <div class="container">
                    <!-- Content -->
                    <div id="content">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59930702662ec938dc4d84_44949108', 'content');
?>

                    </div>
                </div>
            </div>


            <!-- Highlights -->
            
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_862611754662ec938dc55f2_32787032', 'Highlights');
?>

            
            <!-- Footer -->
            <section id="footer" class="wrapper">
                <div class="title">Dane kontaktowe</div>
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-12-medium">
                            <!-- Contact -->
                            <section class="feature-list small">
                                <div class="row">
                                    <div class="col-6 col-12-small">
                                        <section>
                                            <h3 class="icon solid fa-home style1">Adres</h3>
                                            <p>
                                                31-422, Kraków<br />
                                                Strzelców 9A/82<br />
                                            </p>
                                        </section>
                                    </div>
                                    <div class="col-6 col-12-small">
                                        <section>
                                            <h3 class="icon solid fa-comment">Social</h3>
                                            <p>
                                                <a href="#">@untitled-corp</a><br />
                                                <a href="#">linkedin.com/untitled</a><br />
                                                <a href="#">facebook.com/untitled</a>
                                            </p>
                                        </section>
                                    </div>
                                    <div class="col-6 col-12-small">
                                        <section>
                                            <h3 class="icon solid fa-envelope">Email</h3>
                                            <p>
                                                <a href="#">j.dynowski@o365.us.edu.pl</a>
                                            </p>
                                        </section>
                                    </div>
                                    <div class="col-6 col-12-small">
                                        <section>
                                            <h3 class="icon solid fa-phone">Phone</h3>
                                            <p>
                                                555 222 999
                                            </p>
                                        </section>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                    <div id="copyright">
                        <ul>
                            <li>&copy; JD_UŚ</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>

        <?php echo '<script'; ?>
 src="assets/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/browser.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/util.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="assets/js/main.js"><?php echo '</script'; ?>
>
        
    </body>
</html><?php }
/* {block 'content'} */
class Block_59930702662ec938dc4d84_44949108 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_59930702662ec938dc4d84_44949108',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
/* {block 'Highlights'} */
class Block_862611754662ec938dc55f2_32787032 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'Highlights' => 
  array (
    0 => 'Block_862611754662ec938dc55f2_32787032',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'Highlights'} */
}
