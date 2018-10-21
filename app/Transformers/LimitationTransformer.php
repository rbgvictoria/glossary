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
 * Limitation objecr; at the moment it just contains a name string, but it could be extended so it can contain a reference to a Taxon or Structure.
 * 
 * @SWG\Definition(
 *   definition="Limitation",
 *   type="object",
 *   required={"name"}
 * )
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 */
class LimitationTransformer extends OrmTransformer {
    
    
    /**
     * @SWG\Property(
     *   property="name",
     *   type="string"
     * )
     * 
     * @param \App\Entities\Limitation $limitation
     * @return array
     */
    public function transform(\App\Entities\Limitation $limitation)
    {
        return [
            'name' => $limitation->getName()
        ];
    }
    
}
