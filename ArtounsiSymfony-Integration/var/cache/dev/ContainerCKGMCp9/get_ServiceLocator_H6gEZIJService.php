<?php

namespace ContainerCKGMCp9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H6gEZIJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H6gEZIJ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H6gEZIJ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'Normalizer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'panierRep' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
            'produitsRep' => ['privates', 'App\\Repository\\ProduitsRepository', 'getProduitsRepositoryService', true],
            'rep' => ['privates', 'App\\Repository\\LignepanierRepository', 'getLignepanierRepositoryService', true],
            'ur' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
        ], [
            'Normalizer' => '?',
            'entityManager' => '?',
            'panierRep' => 'App\\Repository\\PanierRepository',
            'produitsRep' => 'App\\Repository\\ProduitsRepository',
            'rep' => 'App\\Repository\\LignepanierRepository',
            'ur' => 'App\\Repository\\AllusersRepository',
        ]);
    }
}
