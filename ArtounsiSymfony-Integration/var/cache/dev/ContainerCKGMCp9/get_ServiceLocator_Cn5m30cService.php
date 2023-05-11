<?php

namespace ContainerCKGMCp9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Cn5m30cService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.cn5m30c' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.cn5m30c'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'tutorielRepository' => ['privates', 'App\\Repository\\TutorielRepository', 'getTutorielRepositoryService', true],
            'videoRepository' => ['privates', 'App\\Repository\\VideoRepository', 'getVideoRepositoryService', true],
        ], [
            'Normalizer' => '?',
            'tutorielRepository' => 'App\\Repository\\TutorielRepository',
            'videoRepository' => 'App\\Repository\\VideoRepository',
        ]);
    }
}
