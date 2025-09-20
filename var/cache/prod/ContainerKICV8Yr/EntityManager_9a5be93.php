<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera2666 = null;
    private $initializer007fa = null;
    private static $publicPropertiesa9713 = [
        
    ];
    public function getConnection()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getConnection', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getMetadataFactory', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getExpressionBuilder', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'beginTransaction', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getCache', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getCache();
    }
    public function transactional($func)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'transactional', array('func' => $func), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'wrapInTransaction', array('func' => $func), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'commit', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->commit();
    }
    public function rollback()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'rollback', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getClassMetadata', array('className' => $className), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'createQuery', array('dql' => $dql), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'createNamedQuery', array('name' => $name), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'createQueryBuilder', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'flush', array('entity' => $entity), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'clear', array('entityName' => $entityName), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->clear($entityName);
    }
    public function close()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'close', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->close();
    }
    public function persist($entity)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'persist', array('entity' => $entity), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'remove', array('entity' => $entity), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'refresh', array('entity' => $entity), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'detach', array('entity' => $entity), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'merge', array('entity' => $entity), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getRepository', array('entityName' => $entityName), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'contains', array('entity' => $entity), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getEventManager', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getConfiguration', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'isOpen', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getUnitOfWork', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getProxyFactory', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'initializeObject', array('obj' => $obj), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getFilters', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'isFiltersStateClean', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'hasFilters', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer007fa = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera2666) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera2666 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera2666->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, '__get', ['name' => $name], $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        if (isset(self::$publicPropertiesa9713[$name])) {
            return $this->valueHoldera2666->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2666;
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
        $targetObject = $this->valueHoldera2666;
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
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2666;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera2666;
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
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, '__isset', array('name' => $name), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2666;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera2666;
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
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, '__unset', array('name' => $name), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera2666;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera2666;
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
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, '__clone', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        $this->valueHoldera2666 = clone $this->valueHoldera2666;
    }
    public function __sleep()
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, '__sleep', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return array('valueHoldera2666');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer007fa = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer007fa;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'initializeProxy', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera2666;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera2666;
    }
}
