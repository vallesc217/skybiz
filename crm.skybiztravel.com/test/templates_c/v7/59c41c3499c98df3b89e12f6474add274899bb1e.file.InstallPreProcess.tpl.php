<?php /* Smarty version Smarty-3.1.7, created on 2021-06-20 06:23:41
         compiled from "/home/skybiztravel17/public_html/cross.skybiztravel.com/cross/includes/runtime/../../layouts/v7/modules/Install/InstallPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163146917960ced0dd140bd7-61262162%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59c41c3499c98df3b89e12f6474add274899bb1e' => 
    array (
      0 => '/home/skybiztravel17/public_html/cross.skybiztravel.com/cross/includes/runtime/../../layouts/v7/modules/Install/InstallPreProcess.tpl',
      1 => 1624087284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163146917960ced0dd140bd7-61262162',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60ced0dd1bc7a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60ced0dd1bc7a')) {function content_60ced0dd1bc7a($_smarty_tpl) {?>

<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo vimage_path('logo.png');?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }} ?>