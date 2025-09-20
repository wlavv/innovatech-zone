<?php
/* Smarty version 4.3.4, created on 2025-09-20 14:43:58
  from 'C:\xampp\htdocs\innovatech-zone\admin\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_68ceaf9e110f59_84518770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71b4471d699904fb926ec4cb07d67dde198f61a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\innovatech-zone\\admin\\themes\\default\\template\\content.tpl',
      1 => 1756996832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68ceaf9e110f59_84518770 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
