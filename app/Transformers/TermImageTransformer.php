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

namespace App\Transformers;

use League\Fractal;
use Swagger\Annotations as SWG;

/**
 * Description of TermImageTransformer
 * 
 * @SWG\Definition(
 *   definition="TermImage",
 *   type="object",
 *   required={"id", "url"}
 * )
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 */
class TermImageTransformer extends OrmTransformer {
    
    /**
     * @SWG\Property(
     *   property="id",
     *   type="integer",
     *   format="int32"
     * ),
     * @SWG\Property(
     *   property="url",
     *   type="string"
     * ),
     * @SWG\Property(
     *   property="creator",
     *   type="string"
     * ),
     * @SWG\Property(
     *   property="rights",
     *   type="string"
     * ),
     * @SWG\Property(
     *   property="license",
     *   type="string"
     * ),
     * @SWG\Property(
     *   property="caption",
     *   type="string"
     * )
     * 
     * @param \App\Entities\TermImage $image
     * @return array
     */
    public function transform(\App\Entities\TermImage $image)
    {
        return [
            'id' => $image->getId(),
            'url' => $image->getImageUrl(),
            'creator' => $image->getCreator(),
            'rights' => $image->getRights(),
            'licenseUrl' => $image->getLicenseUrl(),
            'licenseLogoUrl' => $image->getLicenseLogoUrl(),
            'caption' => $image->getCaption()
        ];
    }
}
