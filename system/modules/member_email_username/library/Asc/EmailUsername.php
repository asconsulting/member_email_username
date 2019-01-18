<?php

/**
 * Member Username
 *
 * Copyright (C) 2019 Andrew Stevens Consulting
 *
 * @package    asconsulting/member_email_username
 * @link       https://andrewstevens.consulting
 */

 
namespace Asc;

class EmailUsername extends \Frontend
{
	
	public function setUsername($intId, $arrData, $objModule)
	{
		$objUsername = \Database::getInstance()->prepare('SELECT id FROM tl_member WHERE username = ? AND id !=?')->execute($arrData['email'], $intId);
		
		if ($objModule->reg_emailUsername && $objUsername->numRows) {
			$objMember = \MemberModel::findByIdOrAlias($intId);
			// Update the account
			$objMember->username = $arrData['email'];
			$objMember->save();
		}
		
	}
	
}