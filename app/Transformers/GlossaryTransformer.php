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
 * Description of GlossaryTransformer
 *
 * @SWG\Definition(
 *   definition="Glossary",
 *   type="object",
 *   required={"id", "name"}
 * )
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 */
class GlossaryTransformer extends OrmTransformer {

    protected $availableIncludes = [
        'terms'
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
     *   property="numTerms",
     *   type="integer",
     *   format="int32"
     * )
     *
     * @param \App\Entities\Glossary $glossary
     * @return array
     */
    public function transform(\App\Entities\Glossary $glossary)
    {
        return [
            'id' => $glossary->getId(),
            'name' => $glossary->getName(),
            'numTerms' => $this->em->getRepository('\App\Entities\Glossary')->getNumTerms($glossary->getId())
        ];
    }

    /**
     * @SWG\Property(
     *   property="terms",
     *   type="array",
     *   @SWG\Items(
     *     ref="#/definitions/Term"
     *   )
     * )
     * 
     * @param \App\Entities\Glossary $glossary
     * @return \League\Fractal\Resource\Collection
     */
    public function includeTerms(\App\Entities\Glossary $glossary)
    {
        $terms = $glossary->getTerms();
        return new Fractal\Resource\Collection($terms, new GlossaryTermTransformer(), 'terms');
    }

}
