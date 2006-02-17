<?php
global $gBitInstaller;
$gBitInstaller->registerPackageInfo( SMILEYS_PKG_NAME, array(
	'description' => "Smileys are emoticons that can be added to text.",
	'license' => '<a href="http://www.gnu.org/licenses/licenses.html#LGPL">LGPL</a>',
	'version' => '0.1',
	'state' => 'stable',
	'dependencies' => '',
) );

// ### Default UserPermissions
$gBitInstaller->registerUserPermissions( STICKIES_PKG_NAME, array(
	array('bit_p_use_smileys', 'Can use smilies', 'basic', SMILEYS_PKG_NAME),
) );


?>
