<?php
/**
 * Back end modules
 * Front end modules
 */
use Pnwscm60\BtoolsBundle\Module\ModuleEntry;
use Pnwscm60\BtoolsBundle\Module\ModuleCategory;
use Pnwscm60\BtoolsBundle\Module\ModuleAdmin;
use Pnwscm60\BtoolsBundle\Module\ModuleProfil;
use Pnwscm60\BtoolsBundle\Module\ModuleReport;
$GLOBALS['FE_MOD']['pbtime'] = [ 
	'entry' => ModuleErfassen::class,
	'category' => ModuleCategory::class,
	'admin' => ModuleAdmin::class,
	'profil' => ModuleProfil::class,
	'report' => ModuleReport::class
];  
