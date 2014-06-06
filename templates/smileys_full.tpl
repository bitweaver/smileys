{if $gBitSystem->isPackageActive( 'smileys' ) && $gBitUser->hasPermission('p_smileys_use')}
<div class="form-group smileys">
	{forminput}
		{include file="bitpackage:smileys/smileys.tpl"}
	{/forminput}
</div>
{/if}
