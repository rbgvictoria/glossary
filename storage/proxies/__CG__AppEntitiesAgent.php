<?php

namespace DoctrineProxies\__CG__\App\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Agent extends \App\Entities\Agent implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'agentType', 'name', 'firstName', 'lastName', 'initials', 'legalName', 'ipni', 'email', 'group', 'organization', 'id', 'guid', 'version', 'createdBy', 'modifiedBy', 'timestampCreated', 'timestampModified'];
        }

        return ['__isInitialized__', 'agentType', 'name', 'firstName', 'lastName', 'initials', 'legalName', 'ipni', 'email', 'group', 'organization', 'id', 'guid', 'version', 'createdBy', 'modifiedBy', 'timestampCreated', 'timestampModified'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Agent $proxy) {
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
    public function getAgentType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgentType', []);

        return parent::getAgentType();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgentType($agentType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgentType', [$agentType]);

        return parent::setAgentType($agentType);
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
    public function getFirstName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName($firstName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName($lastName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getInitials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInitials', []);

        return parent::getInitials();
    }

    /**
     * {@inheritDoc}
     */
    public function setInitials($initials)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInitials', [$initials]);

        return parent::setInitials($initials);
    }

    /**
     * {@inheritDoc}
     */
    public function getLegalName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLegalName', []);

        return parent::getLegalName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLegalName($legalName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLegalName', [$legalName]);

        return parent::setLegalName($legalName);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser($user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getIpni()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIpni', []);

        return parent::getIpni();
    }

    /**
     * {@inheritDoc}
     */
    public function setIpni($ipni)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIpni', [$ipni]);

        return parent::setIpni($ipni);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrganization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrganization', []);

        return parent::getOrganization();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrganization($organization)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrganization', [$organization]);

        return parent::setOrganization($organization);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroup', []);

        return parent::getGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroup($group)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroup', [$group]);

        return parent::setGroup($group);
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
