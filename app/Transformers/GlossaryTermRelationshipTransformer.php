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
 * Description of GlossaryTermRelationshipTransformer
 *
 * @SWG\Definition(
 *   definition="Relationship",
 *   type="object",
 *   required={"relationshipType", "relatedTerm"}
 * )
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 */
class GlossaryTermRelationshipTransformer extends OrmTransformer {

    /**
     *
     * @var array
     */
    protected $defaultIncludes = [
        'relationshipType',
        'relatedTerm'
    ];

    /**
     *
     * @SWG\Property(
     *   property="id",
     *   type="integer",
     *   format="int32"
     * ),
     *
     * @param \App\Entities\Relationship $relationship
     * @return array
     */
    public function transform(\App\Entities\Relationship $relationship)
    {
        return [
            'id' => $relationship->getId()
        ];
    }

    /**
     *
     * @SWG\Property(
     *   property="relationshipType",
     *   ref="#/definitions/RelationshipType"
     * )
     *
     * @param \App\Entities\Relationship $relationship
     * @return \League\Fractal\Resource\Item
     */
    public function includeRelationshipType(\App\Entities\Relationship
            $relationship)
    {
        return new Fractal\Resource\Item($relationship->getRelationshipType(),
                new RelationshipTypeTransformer, 'relationshipTypes');
    }

    /**
     *
     * @SWG\Property(
     *   property="relatedTerm",
     *   ref="#/definitions/Term"
     * )
     *
     * @param \App\Entities\Relationship $relationship
     * @return \League\Fractal\Resource\Item
     */
    public function includeRelatedTerm(\App\Entities\Relationship $relationship)
    {
        $relatedTerm = $relationship->getRelatedTerm();
        return new Fractal\Resource\Item($relatedTerm,
                new GlossaryTermTransformer, 'terms');
    }
}
