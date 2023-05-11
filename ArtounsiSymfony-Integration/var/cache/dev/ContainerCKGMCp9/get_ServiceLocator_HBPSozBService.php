<?php

namespace ContainerCKGMCp9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HBPSozBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HBPSozB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HBPSozB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'post' => ['privates', '.errored..service_locator.HBPSozB.App\\Entity\\Post', NULL, 'Cannot autowire service ".service_locator.HBPSozB": it references class "App\\Entity\\Post" but no such service exists.'],
            'postRepository' => ['privates', 'App\\Repository\\PostRepository', 'getPostRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'post' => 'App\\Entity\\Post',
            'postRepository' => 'App\\Repository\\PostRepository',
        ]);
    }
}
