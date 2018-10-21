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

use App\Entities\Glossary;
use Doctrine\ORM\EntityRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use LaravelDoctrine\ORM\Pagination\PaginatesFromParams;

/**
 * Description of TermRepository
 *
 * @author Niels.Klazenga <Niels.Klazenga at rbg.vic.gov.au>
 */
class TermRepository extends EntityRepository {
    
    use PaginatesFromParams;
    
    /**
     * 
     * @param int $glossary
     * @param int $perPage
     * @param int $page
     * @return LengthAwarePaginator
     */
    public function getTermsForGlossary($glossary=4, $perPage=20, $page=1): LengthAwarePaginator
    {
        $dql = "SELECT t
            FROM \App\Entities\Term t
            WHERE t.glossary=:glossary
            ORDER BY t.name";
        $query = $this->getEntityManager()->createQuery($dql);
        $query->setParameter('glossary', $glossary);
        return $this->paginate($query, $perPage, $page);
    }
    
    /**
     * 
     * @param array $params
     * @param int $perPage
     * @param int $page
     * @return LengthAwarePaginator|array
     */
    public function findTerms($params, $perPage=20, $page=1)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $qb->select('t')
                ->from('\App\Entities\Term', 't')
                ->where($qb->expr()->eq('t.glossary', ':glossary'))
                ->andWhere($qb->expr()->like('t.name', ':name'))
                ->orderBy('t.name');
        $parameters = [
            'glossary' => isset($params['glossary']) ? $params['glossary'] : 4,
            'name' => isset($params['term']) ? $params['term'] . '%' : 'a%'
        ];
        $query = $qb->getQuery();
        $query->setParameters($parameters);
        if ($perPage) {
            return $this->paginate($query, $perPage, $page);
        }
        else {
            return $query->getResult();
        }
    }
}
