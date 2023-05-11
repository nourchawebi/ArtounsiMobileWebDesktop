<?php

namespace ContainerCKGMCp9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HK7FhIPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HK7FhIP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HK7FhIP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'video' => ['privates', '.errored..service_locator.HK7FhIP.App\\Entity\\Video', NULL, 'Cannot autowire service ".service_locator.HK7FhIP": it references class "App\\Entity\\Video" but no such service exists.'],
            'viewRepository' => ['privates', 'App\\Repository\\ViewRepository', 'getViewRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'doctrine' => '?',
            'video' => 'App\\Entity\\Video',
            'viewRepository' => 'App\\Repository\\ViewRepository',
        ]);
    }
}
