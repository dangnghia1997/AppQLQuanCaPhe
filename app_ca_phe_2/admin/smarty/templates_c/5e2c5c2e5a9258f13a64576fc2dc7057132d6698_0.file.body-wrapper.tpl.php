<?php
/* Smarty version 3.1.30, created on 2018-05-01 05:46:34
  from "E:\wamp64\www\app_ca_phe_2\admin\smarty\templates\body-wrapper.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ae7ff3ab41da6_08600212',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e2c5c2e5a9258f13a64576fc2dc7057132d6698' => 
    array (
      0 => 'E:\\wamp64\\www\\app_ca_phe_2\\admin\\smarty\\templates\\body-wrapper.tpl',
      1 => 1525153023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sidebar.tpl' => 1,
    'file:main-content.tpl' => 1,
  ),
),false)) {
function content_5ae7ff3ab41da6_08600212 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <!-- End #sidebar -->
		
		<?php $_smarty_tpl->_subTemplateRender("file:main-content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <!-- End #main-content -->
	</div>
</body>
</html>
<?php }
}
