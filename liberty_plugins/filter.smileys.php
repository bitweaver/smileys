<?php
/**
 * @version  $Header$
 * @package  liberty
 * @subpackage plugins_filter
 */

/**
 * definitions ( guid character limit is 16 chars )
 */
define( 'PLUGIN_GUID_FILTERSMILEYS', 'filtersmileys' );

global $gLibertySystem, $gBitSystem;

$pluginParams = array(
	'title'              => 'Smileys',
	'description'        => 'If you are using the smileys package, you need to enable this filter to insert smileys where needed.',
	'auto_activate'      => TRUE,
	'plugin_type'        => FILTER_PLUGIN,

	// filter functions
	'presplit_function'  => 'smileys_filter',
	'postparse_function' => 'smileys_filter',
);
$gLibertySystem->registerPlugin( PLUGIN_GUID_FILTERSMILEYS, $pluginParams );

function smileys_filter( &$pData, &$pFilterHash ) {
	global $gBitSystem, $gBitSmarty;
	if( $gBitSystem->isPackageActive( 'smileys' ) ) {
		preg_match_all( "/\(:([^:]+):\)/", $pData, $smileys );
		$smileys[0] = array_unique( $smileys[0] );
		$smileys[1] = array_unique( $smileys[1] );

		if( !empty( $smileys[1] ) ) {
			$gBitSmarty->loadPlugin( 'smarty_function_biticon' );
			foreach( $smileys[1] as $key => $smiley ) {
				$biticon = array(
					'ipackage' => 'smileys',
					'iname' => $smiley,
					'iexplain' => $smiley,
					'iforce' => 'icon',
				);
				$pData = preg_replace( "/".preg_quote( $smileys[0][$key] )."/", smarty_function_biticon( $biticon, $gBitSmarty ), $pData );
			}
		}
	}
}
?>
