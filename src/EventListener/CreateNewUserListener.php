<?php

/**
 * Member Username
 *
 * Copyright (C) 2019-2026 Andrew Stevens Consulting
 *
 * @package    asconsulting/member_email_username
 * @link       https://andrewstevens.consulting
 */
 
 
namespace EmailUsername\EventListener;

use Contao\CoreBundle\DependencyInjection\Attribute\AsHook;
use Contao\Database;
use Contao\MemberModel;
use Contao\Module;

#[AsHook('createNewUser')]
class CreateNewUserListener
{
    public function __invoke(int $userId, array $userData, Module $module): void
    {
		$objUsername = Database::getInstance()->prepare('SELECT id FROM tl_member WHERE username = ? AND id !=?')->execute($userData['email'], $userId);
		
		if ($objModule->reg_emailUsername && $objUsername->numRows == 0) {
			$objMember = MemberModel::findByIdOrAlias($userId);
			// Update the account
			$objMember->username = $userData['email'];
			$objMember->save();
		}
    }
}
