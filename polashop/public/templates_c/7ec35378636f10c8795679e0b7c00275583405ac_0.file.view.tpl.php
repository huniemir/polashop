<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-22 16:35:22
  from '/opt/lampp/htdocs/polashop/app/views/templates/dark/view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f6a0baa6b7f74_87116211',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec35378636f10c8795679e0b7c00275583405ac' => 
    array (
      0 => '/opt/lampp/htdocs/polashop/app/views/templates/dark/view.tpl',
      1 => 1600785318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f6a0baa6b7f74_87116211 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Sklep internetowy Polashop</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->template_url;?>
/assets/css/main.css" />

		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->template_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.php">Sklep internetowy Polashop</a></h1>
						<nav>
                                                    <a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							<h2>Menu</h2>
							<ul class="links">
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/welcome">Strona główna</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/offer">Oferta</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/shopcart">Koszyk</a></li>
								<?php if (\core\RoleUtils::inRole("user") || \core\RoleUtils::inRole("admin")) {?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/order_history">Historia zakupów</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/settings">Ustawienia</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/logout">Wyloguj</a></li>
								<?php } else { ?>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/login">Logowanie</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/register">Rejestracja</a></li>
								<?php }?>
								
							</ul>
							<a href="#" class="close">Zamknij</a>
						</div>
					</nav>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- Content -->
							<div class="wrapper">
								<div class="inner">
                                                                    
                                                                    <h2 class="major"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4498630355f6a0baa6aa8d7_97304318', 'title');
?>
</h2>
                                                                    <p><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7881233155f6a0baa6ad393_85492953', 'body');
?>
</p>
                                                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15384044355f6a0baa6ae6c0_89270000', 'content');
?>

									
									

								</div>
							</div>

					</section>

				<!-- Footer -->
					<section id="footer">
                                                <div class="inner">
							<ul class="copyright">
								<li>&copy; Marek Rybczyński Inc. Żadnych praw zastrzeżonych</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
                                                </div>
					</section>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_root;?>
/js/functions.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7918839725f6a0baa6b0c90_23282309', 'script');
echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->template_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->template_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->template_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->template_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->template_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->template_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

	</body>
</html><?php }
/* {block 'title'} */
class Block_4498630355f6a0baa6aa8d7_97304318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_4498630355f6a0baa6aa8d7_97304318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Get in touch<?php
}
}
/* {/block 'title'} */
/* {block 'body'} */
class Block_7881233155f6a0baa6ad393_85492953 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_7881233155f6a0baa6ad393_85492953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Cras mattis ante fermentum, malesuada neque vitae, eleifend erat. Phasellus non pulvinar erat. Fusce tincidunt, nisl eget mattis egestas, purus ipsum consequat orci, sit amet lobortis lorem lacus in tellus. Sed ac elementum arcu. Quisque placerat auctor laoreet.<?php
}
}
/* {/block 'body'} */
/* {block 'content'} */
class Block_15384044355f6a0baa6ae6c0_89270000 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_15384044355f6a0baa6ae6c0_89270000',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                                    <form method="post" action="#">
                                                                            <div class="fields">
                                                                                    <div class="field">
                                                                                            <label for="name">Name</label>
                                                                                            <input type="text" name="name" id="name" />
                                                                                    </div>
                                                                                    <div class="field">
                                                                                            <label for="email">Email</label>
                                                                                            <input type="email" name="email" id="email" />
                                                                                    </div>
                                                                                    <div class="field">
                                                                                            <label for="message">Message</label>
                                                                                            <textarea name="message" id="message" rows="4"></textarea>
                                                                                    </div>
                                                                            </div>
                                                                            <ul class="actions">
                                                                                    <li><input type="submit" value="Send Message" /></li>
                                                                            </ul>
                                                                    </form>
                                                                    <?php
}
}
/* {/block 'content'} */
/* {block 'script'} */
class Block_7918839725f6a0baa6b0c90_23282309 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_7918839725f6a0baa6b0c90_23282309',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'script'} */
}
