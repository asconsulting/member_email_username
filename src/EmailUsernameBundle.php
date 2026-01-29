<?php

/**
 * Member Username
 *
 * Copyright (C) 2019-2026 Andrew Stevens Consulting
 *
 * @package    asconsulting/member_email_username
 * @link       https://andrewstevens.consulting
 */


namespace EmailUsername;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;


class EmailUsernameBundle extends AbstractBundle
{
	
    public function loadExtension(
        array $config, 
        ContainerConfigurator $containerConfigurator, 
        ContainerBuilder $containerBuilder,
    ): void
    {
        $containerConfigurator->import('../config/services.yaml');
    }
	
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
