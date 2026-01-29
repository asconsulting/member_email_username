<?php

/**
 * Member Username
 *
 * Copyright (C) 2019-2026 Andrew Stevens Consulting
 *
 * @package    asconsulting/member_email_username
 * @link       https://andrewstevens.consulting
 */


namespace EmailUsername\ContaoManager;

use EmailUsername\EmailUsernameBundle;
use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(EmailUsernameBundle::class)->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
