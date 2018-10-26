<?php

namespace DoctrineProxies\__CG__\App\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TermImage extends \App\Entities\TermImage implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'term', 'imageUrl', 'creator', 'rights', 'license', 'caption', 'id', 'guid', 'version', 'createdBy', 'modifiedBy', 'timestampCreated', 'timestampModified'];
        }

        return ['__isInitialized__', 'term', 'imageUrl', 'creator', 'rights', 'license', 'caption', 'id', 'guid', 'version', 'createdBy', 'modifiedBy', 'timestampCreated', 'timestampModified'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (TermImage $proxy) {
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
    public function getTerm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTerm', []);

        return parent::getTerm();
    }

    /**
     * {@inheritDoc}
     */
    public function setTerm(\App\Entities\Term $term)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTerm', [$term]);

        return parent::setTerm($term);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageUrl', []);

        return parent::getImageUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageUrl', [$url]);

        return parent::setImageUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreator', []);

        return parent::getCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreator($creator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreator', [$creator]);

        return parent::setCreator($creator);
    }

    /**
     * {@inheritDoc}
     */
    public function getRights()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRights', []);

        return parent::getRights();
    }

    /**
     * {@inheritDoc}
     */
    public function setRights($rights)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRights', [$rights]);

        return parent::setRights($rights);
    }

    /**
     * {@inheritDoc}
     */
    public function getLicense()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLicense', []);

        return parent::getLicense();
    }

    /**
     * {@inheritDoc}
     */
    public function setLicense($license)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLicense', [$license]);

        return parent::setLicense($license);
    }

    /**
     * {@inheritDoc}
     */
    public function getCaption()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCaption', []);

        return parent::getCaption();
    }

    /**
     * {@inheritDoc}
     */
    public function setCaption($caption)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCaption', [$caption]);

        return parent::setCaption($caption);
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
