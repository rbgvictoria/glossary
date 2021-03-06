<?php

namespace DoctrineProxies\__CG__\App\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Term extends \App\Entities\Term implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'name', 'definition', 'scope', 'isDiscouraged', 'localId', 'language', 'nameAddendum', 'glossary', 'category', 'limitations', 'relationships', 'images', 'id', 'guid', 'version', 'createdBy', 'modifiedBy', 'timestampCreated', 'timestampModified'];
        }

        return ['__isInitialized__', 'name', 'definition', 'scope', 'isDiscouraged', 'localId', 'language', 'nameAddendum', 'glossary', 'category', 'limitations', 'relationships', 'images', 'id', 'guid', 'version', 'createdBy', 'modifiedBy', 'timestampCreated', 'timestampModified'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Term $proxy) {
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
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefinition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefinition', []);

        return parent::getDefinition();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefinition($definition)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefinition', [$definition]);

        return parent::setDefinition($definition);
    }

    /**
     * {@inheritDoc}
     */
    public function getScope()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getScope', []);

        return parent::getScope();
    }

    /**
     * {@inheritDoc}
     */
    public function setScope($scope)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setScope', [$scope]);

        return parent::setScope($scope);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDiscouraged()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDiscouraged', []);

        return parent::getIsDiscouraged();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDiscouraged($discouraged)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDiscouraged', [$discouraged]);

        return parent::setIsDiscouraged($discouraged);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalId', []);

        return parent::getLocalId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalId', [$id]);

        return parent::setLocalId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getLanguage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLanguage', []);

        return parent::getLanguage();
    }

    /**
     * {@inheritDoc}
     */
    public function setLanguage($lang = 'en')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLanguage', [$lang]);

        return parent::setLanguage($lang);
    }

    /**
     * {@inheritDoc}
     */
    public function getNameAddendum()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNameAddendum', []);

        return parent::getNameAddendum();
    }

    /**
     * {@inheritDoc}
     */
    public function setNameAddendum($addendum)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNameAddendum', [$addendum]);

        return parent::setNameAddendum($addendum);
    }

    /**
     * {@inheritDoc}
     */
    public function getGlossary()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGlossary', []);

        return parent::getGlossary();
    }

    /**
     * {@inheritDoc}
     */
    public function setGlossary(\App\Entities\Glossary $glossary)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGlossary', [$glossary]);

        return parent::setGlossary($glossary);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory($category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getLimitations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLimitations', []);

        return parent::getLimitations();
    }

    /**
     * {@inheritDoc}
     */
    public function addLimitation($limitation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLimitation', [$limitation]);

        return parent::addLimitation($limitation);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelationships()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelationships', []);

        return parent::getRelationships();
    }

    /**
     * {@inheritDoc}
     */
    public function addRelationship($relationship)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRelationship', [$relationship]);

        return parent::addRelationship($relationship);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

    /**
     * {@inheritDoc}
     */
    public function addImage(\App\Entities\TermImage $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$image]);

        return parent::addImage($image);
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
