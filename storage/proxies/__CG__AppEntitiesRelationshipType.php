<?php

namespace DoctrineProxies\__CG__\App\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RelationshipType extends \App\Entities\RelationshipType implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'shorthand', 'name', 'uri', 'label', 'description', 'id', 'guid', 'version', 'createdBy', 'modifiedBy', 'timestampCreated', 'timestampModified'];
        }

        return ['__isInitialized__', 'shorthand', 'name', 'uri', 'label', 'description', 'id', 'guid', 'version', 'createdBy', 'modifiedBy', 'timestampCreated', 'timestampModified'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RelationshipType $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getShorthand()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShorthand', []);

        return parent::getShorthand();
    }

    /**
     * {@inheritDoc}
     */
    public function setShorthand($shorthand)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShorthand', [$shorthand]);

        return parent::setShorthand($shorthand);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getUri()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUri', []);

        return parent::getUri();
    }

    /**
     * {@inheritDoc}
     */
    public function setUri(string $uri)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUri', [$uri]);

        return parent::setUri($uri);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', []);

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel(string $label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', [$label]);

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', []);

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', []);

        return parent::setVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function incrementVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incrementVersion', []);

        return parent::incrementVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function getGuid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGuid', []);

        return parent::getGuid();
    }

    /**
     * {@inheritDoc}
     */
    public function setGuid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGuid', []);

        return parent::setGuid();
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedBy', []);

        return parent::getCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedBy', []);

        return parent::setCreatedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getModifiedBy', []);

        return parent::getModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function setModifiedBy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setModifiedBy', []);

        return parent::setModifiedBy();
    }

    /**
     * {@inheritDoc}
     */
    public function getTimestampCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimestampCreated', []);

        return parent::getTimestampCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimestampCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimestampCreated', []);

        return parent::setTimestampCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function getTimestampModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimestampModified', []);

        return parent::getTimestampModified();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimestampModified()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimestampModified', []);

        return parent::setTimestampModified();
    }

}
