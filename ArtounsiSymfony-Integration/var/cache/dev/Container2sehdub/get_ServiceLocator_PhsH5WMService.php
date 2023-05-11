<?php

namespace Container2sehdub;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PhsH5WMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PhsH5WM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PhsH5WM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'allusersRepository' => ['privates', 'App\\Repository\\AllusersRepository', 'getAllusersRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'produit' => ['privates', '.errored..service_locator.PhsH5WM.App\\Entity\\Produits', NULL, 'Cannot autowire service ".service_locator.PhsH5WM": it references class "App\\Entity\\Produits" but no such service exists.'],
            'produitRepository' => ['privates', 'App\\Repository\\ProduitsRepository', 'getProduitsRepositoryService', true],
        ], [
            'allusersRepository' => 'App\\Repository\\AllusersRepository',
            'entityManager' => '?',
            'produit' => 'App\\Entity\\Produits',
            'produitRepository' => 'App\\Repository\\ProduitsRepository',
        ]);
    }
}
