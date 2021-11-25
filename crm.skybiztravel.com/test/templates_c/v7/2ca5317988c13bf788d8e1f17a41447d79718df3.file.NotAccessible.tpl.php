<?php /* Smarty version Smarty-3.1.7, created on 2021-06-29 03:03:31
         compiled from "/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/Vtiger/NotAccessible.tpl" */ ?>
<?php /*%%SmartyHeaderCode:129388513960da8d83d8cb78-29836887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ca5317988c13bf788d8e1f17a41447d79718df3' => 
    array (
      0 => '/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/Vtiger/NotAccessible.tpl',
      1 => 1624087372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129388513960da8d83d8cb78-29836887',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'TITLE' => 0,
    'BODY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60da8d83de7df',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60da8d83de7df')) {function content_60da8d83de7df($_smarty_tpl) {?>
<div id="sendSmsContainer" class='modal-xs modal-dialog'>
    <div class = "modal-content">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['TITLE']->value), 0);?>


        <div class="modal-body">
        	<?php echo $_smarty_tpl->tpl_vars['BODY']->value;?>

    	</div>

    	<div class="modal-footer">
    	</div>
    </div>
</div><?php }} ?>