<?php

/**
 * Member Username
 *
 * Copyright (C) 2019 Andrew Stevens Consulting
 *
 * @package    asconsulting/member_email_username
 * @link       https://andrewstevens.consulting
 */


$GLOBALS['TL_HOOKS']['createNewUser'][]	= array('Asc\EmailUsername', 'setUsername');