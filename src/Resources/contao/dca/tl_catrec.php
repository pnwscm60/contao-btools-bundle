<?php
/*
*	DCA für tl_catrec
*	btools
*	© 2021 Markus Schenker, Phi Network
 * 	Table tl_catrec
 */
$GLOBALS['TL_DCA']['tl_catrec'] = array
(
	// Config
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		),
	),

	// List
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 1,
			'fields'                  => array('start'),
			'flag'                    => 8,
			'panelLayout'             => 'filter;sort,search,limit'
		),
		'label' => array
		(
			'fields'                  => array('start', 'title'),
			'format'                  => '%s %s',
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_catrec']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'header.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_catrec']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_catrec']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif',
				'attributes'          => 'style="margin-right:3px"'
			),
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'	=> 'title,descript'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'sql'                     => "timestamp NOT NULL default CURRENT_TIMESTAMP"
		),
		'memberid'     => array
		(
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),
		'categoryid'     => array
		(
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),
		'subcatid'     => array
		(
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),
        'amount' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_catrec']['amount'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 11,
			'search'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>8, 'tl_class'=>'w50'),
			'sql'                     => "float(5,2) unsigned NOT NULL default '0.00'"
		),
	'descript' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_catrec']['descript'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 11,
			'search'                  => true,
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
	'datum' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_catrec']['datum'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'date', 'mandatory'=>true, 'doNotCopy'=>true, 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'				=> "int(10) unsigned NOT NULL default '0'"
		),
	'zieldat' => array
		(
			'label'				=> &$GLOBALS['TL_LANG']['tl_catrec']['zieldat'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'date', 'mandatory'=>true, 'doNotCopy'=>true, 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'				=> "int(10) unsigned NOT NULL default '0'"
		)
	)
);
