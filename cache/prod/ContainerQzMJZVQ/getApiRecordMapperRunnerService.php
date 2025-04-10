<?php

namespace ContainerQzMJZVQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiRecordMapperRunnerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Data\Service\Record\ApiRecordMappers\ApiRecordMapperRunner' shared autowired service.
     *
     * @return \App\Data\Service\Record\ApiRecordMappers\ApiRecordMapperRunner
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'RecordMapperRunnerInterface.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'RecordMapperRunner.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'ApiRecordMappers'.\DIRECTORY_SEPARATOR.'ApiRecordMapperRunner.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'ModuleMapperTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'RecordFieldMapperTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'BaseFieldMapperRegistry.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'BaseFieldMapperRegistryFactory.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'BaseFieldTypeMapperRegistry.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'BaseFieldTypeMapperRegistryFactory.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'RecordMapperTrait.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'BaseRecordMapperRegistry.php';
        include_once \dirname(__DIR__, 3).''.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'backend'.\DIRECTORY_SEPARATOR.'Data'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Record'.\DIRECTORY_SEPARATOR.'Mappers'.\DIRECTORY_SEPARATOR.'BaseRecordMapperRegistryFactory.php';

        return $container->privates['App\\Data\\Service\\Record\\ApiRecordMappers\\ApiRecordMapperRunner'] = new \App\Data\Service\Record\ApiRecordMappers\ApiRecordMapperRunner(\App\Data\Service\Record\Mappers\BaseFieldMapperRegistryFactory::create(new RewindableGenerator(fn () => new \EmptyIterator(), 0)), \App\Data\Service\Record\Mappers\BaseFieldTypeMapperRegistryFactory::create(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['App\\Module\\Service\\Fields\\LineItems\\Mappers\\LineItemsListApiMapper'] ?? $container->load('getLineItemsListApiMapperService'));
            yield 1 => ($container->privates['App\\Module\\Service\\Fields\\LineItems\\Mappers\\LineItemsRetrieveApiMapper'] ?? $container->load('getLineItemsRetrieveApiMapperService'));
            yield 2 => ($container->privates['App\\Module\\Service\\Fields\\LineItems\\Mappers\\LineItemsSaveApiMapper'] ?? $container->load('getLineItemsSaveApiMapperService'));
        }, 3)), \App\Data\Service\Record\Mappers\BaseRecordMapperRegistryFactory::create(new RewindableGenerator(fn () => new \EmptyIterator(), 0)), ($container->privates['App\\FieldDefinitions\\LegacyHandler\\FieldDefinitionsHandler'] ?? $container->load('getFieldDefinitionsHandlerService')));
    }
}
