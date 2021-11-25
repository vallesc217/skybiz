{*/* * *******************************************************************************
 * The content of this file is subject to the ITS4YouInstaller license.
 * ("License"); You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is IT-Solutions4You s.r.o.
 * Portions created by IT-Solutions4You s.r.o. are Copyright(C) IT-Solutions4You s.r.o.
 * All Rights Reserved.
 * ****************************************************************************** */*}
<tr>
    <td style="border-left:none;border-right:none;">
        <a class="licenseColors" href="#{if $LICENSE->get('service_usageunit') neq 'Package'}{$LICENSE->get('cf_identifier')}{/if}">
            {$LICENSE_KEY}
        </a>
    </td>
    <td style="border-left:none;border-right:none;">
        {$LICENSE->get('servicename')}
    </td>
    {if $LICENSE->isHostingLicense()}
        <td colspan="3" style="border-left:none;">
            {vtranslate('LBL_HOSTING_LICENSE', $QUALIFIED_MODULE)}
        </td>
    {else}
        <td style="border-left:none;border-right:none;">
            {if $LICENSE->get('due_date') neq ""}{Vtiger_Util_Helper::formatDateIntoStrings($LICENSE->get('due_date'))}{/if}
        </td>
        <td style="border-left:none;border-right:none;">
            {if $LICENSE->get('subscription') eq "1"}
                {vtranslate('LBL_SUBSCRIPTION',$QUALIFIED_MODULE)}
            {elseif $LICENSE->get('demo_free') eq "1"}
                {vtranslate('LBL_DEMO_FREE',$QUALIFIED_MODULE)}
            {else}
                {vtranslate('LBL_FULL',$QUALIFIED_MODULE)}
            {/if}
        </td>
        <td style="border-left:none;border-right:none;">
            {if $LICENSE->isRenewReady()}
                {if $LICENSE->get('subscription') eq "1"}
                    <a class="btn btn-info" target="_blank" href="{$SHOP_LINK}?addidtob={$LICENSE->get('buy_id')}">{vtranslate('LBL_PROLONG_LICENSE',$QUALIFIED_MODULE)}</a>
                {elseif $LICENSE->get('demo_free') eq true}
                    <a class="btn btn-success" target="_blank" href="{$SHOP_LINK}?addidtob={$LICENSE->get('buy_id')}">{vtranslate('LBL_BUY_LICENSE',$QUALIFIED_MODULE)}</a>
                {else}
                    <a class="btn btn-primary" target="_blank" href="{$LICENSE->getRenewUrl()}">{vtranslate('LBL_RENEW_LICENSE',$QUALIFIED_MODULE)}</a>
                {/if}
                &nbsp;&nbsp;
            {/if}
            <button class="btn btn-danger actionLicenses" type="button" data-mode="deactivate" data-license="{$LICENSE_KEY}">{vtranslate('LBL_DEACTIVATE_LICENSES', $QUALIFIED_MODULE)}</button>
        </td>
    {/if}
</tr>