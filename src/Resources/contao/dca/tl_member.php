<?php
/*
*	DCA für pbtime
*	© 2017 Markus Schenker, Phi Network
* Ergänzung tl_member
* 
*/

$GLOBALS['TL_DCA']['tl_member']['palettes']['default'] = str_replace 
( 
    'dateOfBirth', 
    'dateOfBirth, active', 
    $GLOBALS['TL_DCA']['tl_member']['palettes']['default'] 
);

// Hinzufügen der Feld-Konfiguration 

$GLOBALS['TL_DCA']['tl_member']['fields']['active'] = array 
		(
			'label'     => &$GLOBALS['TL_LANG']['tl_member']['active'],
			'inputType' => 'text',
			'exclude'   => true,
			'sorting'   => true,
			'default'	=> 0,
			'flag'      => 11,
            'search'    => true,
			'eval'      => array(
				'mandatory'   => true,
            	'unique'         => false,
				'tl_class'        => 'w50',
			),
			'sql'       => "int(1) unsigned NOT NULL default '0'"
		);
