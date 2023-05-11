<?php

namespace ContainerCKGMCp9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BHKMwQvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BHKMwQv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BHKMwQv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'postLike' => ['privates', '.errored..service_locator.BHKMwQv.App\\Entity\\PostLike', NULL, 'Cannot autowire service ".service_locator.BHKMwQv": it references class "App\\Entity\\PostLike" but no such service exists.'],
            'postLikeRepository' => ['privates', 'App\\Repository\\PostLikeRepository', 'getPostLikeRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'postLike' => 'App\\Entity\\PostLike',
            'postLikeRepository' => 'App\\Repository\\PostLikeRepository',
        ]);
    }
}
