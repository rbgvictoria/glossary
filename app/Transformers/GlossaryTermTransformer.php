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
 * Description of GlossaryTermTransformer
 *
 * @SWG\Definition(
 *   definition="Term",
 *   type="object",
 *   required={"name", "definition"}
 * )
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 */
class GlossaryTermTransformer extends OrmTransformer {

    protected $defaultIncludes = [
        'glossary'
    ];

    protected $availableIncludes = [
        'relationships',
        'category',
        'limitations'
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
     * @SWG\Property(
     *   property="definition",
     *   type="string"
     * ),
     *
     * @param \App\Entities\Term $term
     * @return array
     */
    public function transform(\App\Entities\Term $term)
    {
        return [
            'id' => $term->getId(),
            'name' => $term->getName(),
            'definition' => $term->getDefinition()
        ];
    }

    /**
     *
     * @SWG\Property(
     *   property="glossary",
     *   ref="#/definitions/Glossary"
     * )
     *
     * @param  \App\Entities\Term $term
     * @return \App\Entities\GlossaryTransformer
     */
    public function includeGlossary(\App\Entities\Term $term)
    {
        return new Fractal\Resource\Item($term->getGlossary(),
                new GlossaryTransformer);
    }

    /**
     *
     * @SWG\Property(
     *   property="relationships",
     *   type="array",
     *   @SWG\Items(
     *     ref="#/definitions/Relationship"
     *   )
     * ),
     *
     * @param  AppEntitiesTerm $term [description]
     * @return [type]                [description]
     */
    public function includeRelationships(\App\Entities\Term $term)
    {
        $relationships = $term->getRelationships();
        if ($relationships) {
            return new Fractal\Resource\Collection($relationships,
                    new \App\Transformers\GlossaryTermRelationshipTransformer,
                    'relationships');
        }
    }
    
    /**
     * 
     * @SWG\Property(
     *   property="category",
     *   ref="#/definitions/Category"
     * )
     * 
     * @param \App\Entities\Term $term
     * @return \League\Fractal\Resource\Item
     */
    public function includeCategory(\App\Entities\Term $term)
    {
        $category = $term->getCategory();
        if ($category) {
            return new Fractal\Resource\Item($category, new CategoryTRansformer, 
                    'categories');
        }
    }
    
    /**
     * @SWG\Property(
     *   property="limitations",
     *   type="array",
     *   @SWG\Items(
     *     ref="#/definitions/Limitation"
     *   )
     * )
     * 
     * @param \App\Entities\Term $term
     * @return \League\Fractal\Resource\Collection
     */
    public function includeLimitations(\App\Entities\Term $term)
    {
        return new Fractal\Resource\Collection($term->getLimitations(), 
                new LimitationTransformer, 'limitations');
    }
}
