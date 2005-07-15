{if $gBitSystem->isPackageActive( 'smileys' )}
<div class="row smileys">
	{forminput}
		{include file="bitpackage:smileys/smileys.tpl"}
	{/forminput}
</div>
{/if}