{if $gBitSystem->isPackageActive( 'smileys' ) && $gBitUser->hasPermission('bit_p_use_smileys')}
<div class="row smileys">
	{forminput}
		{include file="bitpackage:smileys/smileys.tpl"}
	{/forminput}
</div>
{/if}