<?php /* Smarty version Smarty-3.1.7, created on 2021-06-26 22:10:35
         compiled from "/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/EmailTemplates/DetailViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43994398060d7a5dbb54aa6-85448966%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '944e90b585c0d3616c0187a642ea7a24753d8748' => 
    array (
      0 => '/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/EmailTemplates/DetailViewPreProcess.tpl',
      1 => 1624168824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43994398060d7a5dbb54aa6-85448966',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60d7a5dbba52f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60d7a5dbba52f')) {function content_60d7a5dbba52f($_smarty_tpl) {?>


<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
	<div class="row">
		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
</nav>
<div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
	<div class="data">
	</div>
	<div class="modal-dialog">
	</div>
</div>
<div class="container-fluid main-container">
	<div class="row">
		<div id="modnavigator" class="module-nav detailViewModNavigator clearfix">
			<div class="hidden-xs hidden-sm mod-switcher-container">
				<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		</div>
		<div class="detailViewContainer viewContent clearfix">
			<div class="content-area container-fluid">
<?php }} ?>