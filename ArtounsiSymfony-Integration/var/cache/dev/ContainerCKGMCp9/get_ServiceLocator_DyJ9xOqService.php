<?php

namespace ContainerCKGMCp9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DyJ9xOqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dyJ9xOq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dyJ9xOq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'videoRepository' => ['privates', 'App\\Repository\\VideoRepository', 'getVideoRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'videoRepository' => 'App\\Repository\\VideoRepository',
        ]);
    }
}
