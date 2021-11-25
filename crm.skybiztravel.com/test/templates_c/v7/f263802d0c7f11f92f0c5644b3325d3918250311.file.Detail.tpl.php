<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 03:38:16
         compiled from "/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/SPFunnelCharts/Detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58877707060e91628cac6a6-87510552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f263802d0c7f11f92f0c5644b3325d3918250311' => 
    array (
      0 => '/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/SPFunnelCharts/Detail.tpl',
      1 => 1625021677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58877707060e91628cac6a6-87510552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WIDGET' => 0,
    'WIDGETDOMID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e91628cbac6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e91628cbac6')) {function content_60e91628cbac6($_smarty_tpl) {?>
<div class="contentsDiv  span10 marginLeftZero spFullenDetailContainer" id="rightPanel" style="min-height:550px;"><div class="dashBoardContainer clearfix"><div id="tab_1" data-tabid="1" data-tabname="name1" class="tab-pane fade in active"><div class="dashBoardTabContents clearfix"><div class="gridster"><ul class="spDiagrammContainer"><?php $_smarty_tpl->tpl_vars['WIDGETDOMID'] = new Smarty_variable($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid'), null, 0);?><li id="<?php echo $_smarty_tpl->tpl_vars['WIDGETDOMID']->value;?>
" class="dashboardWidget salesFunnelDetail" data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
" data-mode="open" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
" style="position: inherit;"></li></ul></div></div></div></div></div><?php }} ?>