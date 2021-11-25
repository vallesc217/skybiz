<?php /* Smarty version Smarty-3.1.7, created on 2021-07-10 03:38:16
         compiled from "/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/SPFunnelCharts/DetailHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140232688060e916287dc088-69936665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09eb154e5d72d056c4b93a360d6eebd3cdbdca6d' => 
    array (
      0 => '/home/skybiztravel17/public_html/crm.skybiztravel.com/includes/runtime/../../layouts/v7/modules/SPFunnelCharts/DetailHeader.tpl',
      1 => 1625021677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140232688060e916287dc088-69936665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_60e91628bdc9a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_60e91628bdc9a')) {function content_60e91628bdc9a($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


    <div class="container-fluid app-nav">
        <div class="row">
            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </div>
        </nav>    
        
<div class="container-fluid">
 
    <div id="modnavigator" class="module-nav editViewModNavigator">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    <div class="editViewPageDiv viewContent"> 
    <div class="reportHeader row">
        <div class="textAlignCenter">
            <h3><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getName();?>
</h3>
        </div>
    </div>
    <div class="row">
        <div class="btn-toolbar pull-right padding-right15">
            <?php if ($_smarty_tpl->tpl_vars['MODEL']->value->isEditable()==true){?>
                <div class="btn-group">
                    <button onclick="window.location.href=&quot;<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getEditViewUrl();?>
&quot;" type="button" class="cursorPointer btn btn-default">
                        <strong><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong>&nbsp;
                        <i class="icon-pencil"></i>
                    </button>
                </div>
            <?php }?>
            <div class="btn-group">
                <button onclick="window.location.href=&quot;<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDuplicateRecordUrl();?>
&quot;" type="button" class="cursorPointer btn btn-default">
                    <strong><?php echo vtranslate('LBL_DUPLICATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong>
                </button>
            </div>
        </div>
   </div>
   </div>
</div>
            <?php }} ?>