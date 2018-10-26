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
 * Description of TermImage
 * 
 * @ORM\Entity()
 * @ORM\Table()
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 */
class TermImage extends ClassBase {
    
    /**
     * @ORM\ManyToOne(targetEntity="Term", inversedBy="images")
     * @var \App\Entities\Term
     */
    protected $term;
    
    /**
     * @ORM\Column(length=128)
     * @var string
     */
    protected $imageUrl;
    
    /**
     * @ORM\Column(length=64, nullable=true)
     * @var string
     */
    protected $creator;
    
    /**
     * @ORM\Column(length=64, nullable=true)
     * @var string
     */
    protected $rights;
    
    /**
     * @ORM\Column(length=64, nullable=true)
     * @var string
     */
    protected $license;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     * @var string
     */
    protected $caption;
    
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
    public function setTerm(\App\Entities\Term $term)
    {
        $this->term = $term;
    }
    
    /**
     * 
     * @return string
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }
    
    /**
     * 
     * @param string $url
     */
    public function setImageUrl($url)
    {
        $this->imageUrl = $url;
    }
    
    /**
     * 
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }
    
    /**
     * 
     * @param string $creator
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;
    }
    
    /**
     * 
     * @return string
     */
    public function getRights()
    {
        return $this->right;
    }
    
    /**
     * 
     * @param string $rights
     */
    public function setRights($rights)
    {
        $this->rights = $rights;
    }
    
    /**
     * 
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }
    
    /**
     * 
     * @param string $license
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }
    
    /**
     * 
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }
    
    /**
     * 
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }
}
