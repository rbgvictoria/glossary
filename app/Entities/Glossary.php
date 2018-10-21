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

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Description of Glossary
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 * 
 * @ORM\Entity(repositoryClass="GlossaryRepository")
 * @ORM\Table(name="glossaries")
 */
class Glossary extends ClassBase {
    
    /**
     * @ORM\Column(length=128)
     * @var string
     */
    protected $name;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     * @var string
     */
    protected $description;
    
    /**
     * @ORM\OneToMany(targetEntity="Term", mappedBy="glossary")
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $terms;
    
    public function __construct() {
        $this->terms = new ArrayCollection();
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
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * 
     * @param string $desc
     */
    public function setDescription($desc)
    {
        $this->description = $desc;
    }
    
    /**
     * 
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getTerms()
    {
        return $this->terms;
    }
    
    /**
     * 
     * @param \App\Entities\Term $term
     */
    public function addTerm(Term $term)
    {
        $this->terms[] = $term;
    }
}
