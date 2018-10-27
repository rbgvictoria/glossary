<?php

/*
 * Copyright 2018 Royal Botanic Gardens Victoria.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Term
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 * 
 * @ORM\Entity(repositoryClass="TermRepository")
 * @ORM\Table()
 */
class Term extends ClassBase {
    
    /**
     * @ORM\Column(type="string", length=64)
     * @var string
     */
    protected $name;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     * @var string
     */
    protected $definition;
    
    /**
     * @ORM\Column(length=8, nullable=true)
     * @var string
     */
    protected $scope;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @var bool
     */
    protected $isDiscouraged;
    
    /**
     * @ORM\Column(length=64, nullable=true)
     * @var string
     */
    protected $localId;
    
    /**
     * @ORM\Column(length=2, nullable=true, options={"default": "en"})
     * @var string
     */
    protected $language;
    
    /**
     * @ORM\Column(length=64, nullable=true)
     * @var string
     */
    protected $nameAddendum;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entities\Glossary")
     * @ORM\JoinColumn(name="glossary_id", referencedColumnName="id")
     * @var App\Entites\Glossary;
     */
    protected $glossary;
    
    /**
     * @ORM\ManyToOne(targetEntity="App\Entities\Category", inversedBy="terms")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
     * @var App\Entites\Category;
     */
    protected $category;
    
    /**
     * @ORM\ManyToMany(targetEntity="Limitation")
     * @ORM\JoinTable(name="terms_limitations",
     *      joinColumns={@ORM\JoinColumn(name="term_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="limitation_id", referencedColumnName="id")}
     *      )
     * @var \Doctrine\Common\Collections\ArrayCollection 
     */
    protected $limitations;
    
    /**
     * @ORM\OneToMany(targetEntity="Relationship", mappedBy="term")
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $relationships;
    
    /**
     * @ORM\OneToMany(targetEntity="TermImage", mappedBy="term")
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $images;
    
    /**
     * 
     */
    public function __construct() {
        $this->limitations = new ArrayCollection();
        $this->relationships = new ArrayCollection();
    }
    
    /**
     * 
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * 
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    /**
     * 
     * @return string
     */
    public function getDefinition()
    {
        return $this->definition;
    }
    
    /**
     * 
     * @param string $definition
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
    }
    
    /**
     * 
     * @return string\
     */
    public function getScope()
    {
        return $this->scope;
    }
    
    /**
     * 
     * @param string $scope
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
    }
    
    /**
     * 
     * @return bool
     */
    public function getIsDiscouraged()
    {
        return $this->isDiscouraged;
    }
    
    /**
     * 
     * @param bool $discouraged
     */
    public function setIsDiscouraged($discouraged)
    {
        $this->isDiscouraged = $discouraged;
    }
    
    /**
     * 
     * @return string
     */
    public function getLocalId()
    {
        return $this->localId;
    }
    
    /**
     * 
     * @param string $id
     */
    public function setLocalId($id)
    {
        $this->localId = $id;
    }
    
    /**
     * 
     * @return string
     */
    public function getLanguage()
    {
        return $this->getLanguage();
    }
    
    /**
     * 
     * @param string $lang
     */
    public function setLanguage($lang='en')
    {
        $this->language = $lang;
    }
    
    /**
     * 
     * @return string
     */
    public function getNameAddendum()
    {
        return $this->nameAddendum;
    }
    
    /**
     * 
     * @param string $addendum
     */
    public function setNameAddendum($addendum)
    {
        $this->nameAddendum = $addendum;
    }
    
    /**
     * 
     * @return \App\Entities\Glossary
     */
    public function getGlossary()
    {
        return $this->glossary;
    }
    
    /**
     * 
     * @param \App\Entities\Glossary $glossary
     */
    public function setGlossary(Glossary $glossary)
    {
        $this->glossary = $glossary;
    }
    
    /**
     * 
     * @return \App\Entities\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
    
    /**
     * 
     * @param \App\Entities\Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
    
    
    /**
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getLimitations()
    {
        return $this->limitations;
    }
    
    /**
     * 
     * @param \App\Entities\Limitation $limitation
     */
    public function addLimitation($limitation)
    {
        $this->limitations[] = $limitation;
    }
    
    /**
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getRelationships()
    {
        return $this->relationships;
    }
    
    /**
     * 
     * @param \App\Entities\Relationship $relationship
     */
    public function addRelationship($relationship)
    {
        $this->relationships[] = $relationship;
    }
    
    /**
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getImages()
    {
        return $this->images;
    }
    
    /**
     * 
     * @param \App\Entities\TermImage $image
     */
    public function addImage(\App\Entities\TermImage $image)
    {
        $this->images[] = $image;
    }
}
