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

/**
 * Description of Relationship
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 * 
 * @ORM\Entity()
 * @ORM\Table()
 */
class Relationship extends ClassBase {

    /**
     * @ORM\ManyToOne(targetEntity="RelationshipType")
     * @ORM\JoinColumn(name="relationship_type_id", referencedColumnName="id", nullable=false)
     * @var \App\Entities\RelationshipType 
     */
    protected $relationshipType;
    
    /**
     * @ORM\ManyToOne(targetEntity="term", inversedBy="relationships")
     * @ORM\JoinColumn(name="term_id", referencedColumnName="id", nullable=false)
     * @var \App\Entities\Term 
     */
    protected $term;
    
    /**
     * @ORM\ManyToOne(targetEntity="term")
     * @ORM\JoinColumn(name="related_term_id", referencedColumnName="id", nullable=false)
     * @var \App\Entities\Term 
     */
    protected $relatedTerm;
    
    /**
     * @ORM\ManyToOne(targetEntity="Limitation")
     * @ORM\JoinColumn(name="limitation_id", referencedColumnName="id")
     * @var \App\Entities\Limitation
     */
    protected $limitation;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @var bool 
     */
    protected $isMisapplied;
    
    /**
     * @ORM\Column(type="boolean", nullable=true)
     * @var bool 
     */
    protected $isDiscouraged;
    
    /**
     * 
     * @return \App\Entities\RelationshipType
     */
    public function getRelationshipType():RelationshipType
    {
        return $this->relationshipType;
    }
    
    /**
     * 
     * @param \App\Entities\RelationshipType $type
     */
    public function setRelationshipType(RelationshipType $type)
    {
        $this->relationshipType = $type;
    }
    
    /**
     * 
     * @return \App\Entities\Term
     */
    public function getTerm():Term
    {
        return $this->term;
    }
    
    /**
     * 
     * @param \App\Entities\Term $term
     */
    public function setTerm(Term $term)
    {
        $this->term = $term;
    }
    
    /**
     * 
     * @return \App\Entities\Term
     */
    public function getRelatedTerm():Term
    {
        return $this->relatedTerm;
    }
    
    /**
     * 
     * @param \App\Entities\Term $term
     */
    public function setRelatedTerm(Term $term)
    {
        $this->term = $term;
    }
    
    /**
     * 
     * @return \App\Entities\Limitation
     */
    public function getLimitation()
    {
        return $this->limitation;
    }
    
    /**
     * 
     * @param \App\Entities\Limitation $limitation
     */
    public function setLimitation($limitation)
    {
        $this->limitation = $limitation;
    }
    
    /**
     * 
     * @return bool
     */
    public function getIsMisapplied()
    {
        return $this->isMisapplied;
    }
    
    /**
     * 
     * @return bool
     */
    public function setIsMisapplied($isMisapplied)
    {
        $this->isMisapplied = $isMisapplied;
    }
    
    /**
     * 
     * @return bool
     */
    public function getIsDiscouraged()
    {
        return $this->isMisapplied;
    }
    
    /**
     * 
     * @return bool
     */
    public function setIsDiscouraged($isMisapplied)
    {
        $this->isMisapplied = $isMisapplied;
    }
}

