<?php
/**
DCA für inrec für btools
© 2016 Markus Schenker, Phi Network
 */
/**
 * Table tl_inrec
 */
$GLOBALS['TL_DCA']['tl_inrec'] = array
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
			'mode'                    => 4,
			'fields'                  => array('sorting'),
			'headerFields'			=> array('grund','datum'),
			'panelLayout'             => 'filter;sort,search,limit')
		),
		'label' => array
		(
			'fields'                  => array('grund'),
			'format'                  => '%s',
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
				'label'               => &$GLOBALS['TL_LANG']['tl_inrec']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_inrec']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			/*'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_inrec']['toggle'],
				'icon'                => 'visible.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
				'button_callback'     => array('tl_costrec', 'toggleIcon')
			),*/
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_inrec']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif',
				'attributes'          => 'style="margin-right:3px"'
			),
		)
	),

	// Palettes
	'palettes' => array
	(
		'default'	=> 'id,memberid,kontoid,subkontoid,datum,grund,betrag'
	),

	// Fields
	'fields' => array
	(
		'id' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'sorting' => array
		(
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'tstamp' => array
		(
			'sql'                     => "timestamp NOT NULL default CURRENT_TIMESTAMP"
		),
		// id_member
		'memberid'     => array
		(
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),
		'kontoid'     => array
		(
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),
		'subkontoid'     => array
		(
			'sql' => "int(10) unsigned NOT NULL default '0'"
		),
		'datum' => array
		(
			'label'			=> &$GLOBALS['TL_LANG']['tl_inrec']['datum'],
			'exclude'                 => true,
			'inputType'               => 'text',
			'eval'                    => array('rgxp'=>'date', 'mandatory'=>true, 'doNotCopy'=>true, 'datepicker'=>true, 'tl_class'=>'w50 wizard'),
			'sql'				=> "int(10) unsigned NOT NULL default '0'"
		),
        	'grund' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_inrec']['grund'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 11,
			'search'                  => true,
			'eval'                    => array('mandatory'=>true, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'amount' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_inrec']['amount'],
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
			'label'                   => &$GLOBALS['TL_LANG']['tl_inrec']['descript'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 11,
			'search'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
        	'typ'     => array
		(
			'sql' => "int(1) unsigned NOT NULL default '1'"
		),
	)
);

