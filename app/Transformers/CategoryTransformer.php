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
 * Description of CategoryTransformer
 *
 * @SWG\Definition(
 *   definition="Category",
 *   type="object",
 *   required={"name"}
 * )
 * 
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 */
class CategoryTransformer extends OrmTransformer {

    protected $availableIncludes = [
        'term',
        'glossary'
    ];
    
    /**
     * 
     * @SWG\Property(
     *   property="id",
     *   type="integer",
     *   format="int32"
     * ),
     * @SWG\Property(
     *   property="name",
     *   type="string"
     * ),
     * 
     * @param \App\Entities\Category $category
     * @return array
     */
    public function transform(\App\Entities\Category $category)
    {
        return [
            'id' => $category->getId(),
            'name' => $category->getName()
        ];
    }
    
    /**
     * 
     * @SWG\Property(
     *   property="glossary",
     *   ref="#/definitions/Glossary"
     * )
     * 
     * @param \App\Entities\Category $category
     * @return \League\Fractal\Resource\Item
     */
    public function includeGlossary(\App\Entities\Category $category)
    {
        return new Fractal\Resource\Item($category->getGlossary(), 
                new GlossaryTransformer, 'glossaries');
    }
    
    /**
     * 
     * @SWG\Property(
     *   property="term",
     *   ref="#/definitions/Term"
     * )
     * 
     * @param \App\Entities\Category $category
     * @return \League\Fractal\Resource\Item
     */
    public function includeTerm(\App\Entities\Category $category)
    {
        $term = $category->getTerm();
        if ($term) {
            return new Fractal\Resource\Item($term, new GlossaryTermTransformer, 
                    'terms');
        }
    }
}
