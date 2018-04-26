<?php
/* Smarty version 3.1.30, created on 2018-04-24 16:22:35
  from "D:\wamp64\www\app_ca_phe\smarty\templates\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5adf59cbcf29b3_17247669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ec9c715297ffe26b9fb19522a1dfb9012ee1119' => 
    array (
      0 => 'D:\\wamp64\\www\\app_ca_phe\\smarty\\templates\\layout.tpl',
      1 => 1524586538,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:nav.tpl' => 1,
    'file:content.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5adf59cbcf29b3_17247669 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
