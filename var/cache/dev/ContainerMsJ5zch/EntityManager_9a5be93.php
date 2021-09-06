<?php

namespace ContainerMsJ5zch;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder37975 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer78570 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiese2724 = [
        
    ];

    public function getConnection()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getConnection', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getMetadataFactory', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getExpressionBuilder', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'beginTransaction', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getCache', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getCache();
    }

    public function transactional($func)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'transactional', array('func' => $func), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->transactional($func);
    }

    public function commit()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'commit', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->commit();
    }

    public function rollback()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'rollback', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getClassMetadata', array('className' => $className), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'createQuery', array('dql' => $dql), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'createNamedQuery', array('name' => $name), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'createQueryBuilder', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'flush', array('entity' => $entity), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'clear', array('entityName' => $entityName), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->clear($entityName);
    }

    public function close()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'close', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->close();
    }

    public function persist($entity)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'persist', array('entity' => $entity), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'remove', array('entity' => $entity), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'refresh', array('entity' => $entity), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'detach', array('entity' => $entity), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'merge', array('entity' => $entity), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getRepository', array('entityName' => $entityName), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'contains', array('entity' => $entity), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getEventManager', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getConfiguration', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'isOpen', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getUnitOfWork', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getProxyFactory', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'initializeObject', array('obj' => $obj), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'getFilters', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'isFiltersStateClean', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'hasFilters', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return $this->valueHolder37975->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer78570 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder37975) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder37975 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder37975->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, '__get', ['name' => $name], $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        if (isset(self::$publicPropertiese2724[$name])) {
            return $this->valueHolder37975->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37975;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder37975;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37975;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder37975;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, '__isset', array('name' => $name), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37975;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder37975;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, '__unset', array('name' => $name), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder37975;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder37975;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, '__clone', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        $this->valueHolder37975 = clone $this->valueHolder37975;
    }

    public function __sleep()
    {
        $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, '__sleep', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;

        return array('valueHolder37975');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer78570 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer78570;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer78570 && ($this->initializer78570->__invoke($valueHolder37975, $this, 'initializeProxy', array(), $this->initializer78570) || 1) && $this->valueHolder37975 = $valueHolder37975;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder37975;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder37975;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
