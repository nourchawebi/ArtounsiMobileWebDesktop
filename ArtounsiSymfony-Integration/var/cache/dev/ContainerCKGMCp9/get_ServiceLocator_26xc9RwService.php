<?php

namespace ContainerCKGMCp9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_26xc9RwService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.26xc9Rw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.26xc9Rw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'artiste' => ['privates', 'App\\Repository\\ArtistepostulerRepository', 'getArtistepostulerRepositoryService', true],
            'offretravailRepository' => ['privates', 'App\\Repository\\OffretravailRepository', 'getOffretravailRepositoryService', true],
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'artiste' => 'App\\Repository\\ArtistepostulerRepository',
            'offretravailRepository' => 'App\\Repository\\OffretravailRepository',
            'paginator' => '?',
        ]);
    }
}
