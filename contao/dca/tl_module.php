<?php

/**
 * Member Username
 *
 * Copyright (C) 2019-2026 Andrew Stevens Consulting
 *
 * @package    asconsulting/member_email_username
 * @link       https://andrewstevens.consulting
 */


use Contao\CoreBundle\DataContainer\PaletteManipulator;

/**
 * Table tl_module
 */
$GLOBALS['TL_DCA']['tl_module']['fields']['reg_emailUsername'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_module']['reg_emailUsername'],
	'exclude'                 => true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'m12'),
	'sql'                     => "char(1) NOT NULL default ''"
);

PaletteManipulator::create()->addField('reg_emailUsername', 'reg_allowLogin')->applyToPalette('registration', 'tl_module');
