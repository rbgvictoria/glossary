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
 * Description of Category
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 *
 * @ORM\Entity()
 * @ORM\Table(name="categories")
 */
class Category extends ClassBase {

    /**
     * @ORM\Column(length=64)
     * @var string
     */
    protected $name;

    /**
     * @ORM\OneToOne(targetEntity="Term")
     * @ORM\JoinColumn(name="term_id", referencedColumnName="id")
     * @var App\Entities\Term
     */
    protected $term;
    
    /**
     * @ORM\ManyToOne(targetEntity="Glossary")
     * @ORM\JoinColumn(name="glossary_id", referencedColumnName="id")
     * @var \App\Entities\Glossary
     */
    protected $glossary;

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
     * @return \App\Entities\Term
     */
    public function getTerm()
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
     * @return \App\Entities\Glossary
     */
    public function getGlossary()
    {
        return $this->glossary;
    }
    
    /**
     * 
     * @param \App\Entities\Glossary $glossarys
     */
    public function setGlossary(\App\Entities\Glossary $glossary)
    {
        $this->glossary = $glossary;
    }

}
