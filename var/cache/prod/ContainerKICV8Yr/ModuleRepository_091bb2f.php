<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera2666 = null;
    private $initializer007fa = null;
    private static $publicPropertiesa9713 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getList', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getInstalledModules', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getMustBeConfiguredModules', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getUpgradableModules', array(), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'setActionUrls', array('collection' => $collection), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        return $this->valueHoldera2666->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer007fa = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldera2666) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldera2666 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldera2666->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer007fa && ($this->initializer007fa->__invoke($valueHoldera2666, $this, '__get', ['name' => $name], $this->initializer007fa) || 1) && $this->valueHoldera2666 = $valueHoldera2666;
        if (isset(self::$publicPropertiesa9713[$name])) {
            return $this->valueHoldera2666->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
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
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
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
