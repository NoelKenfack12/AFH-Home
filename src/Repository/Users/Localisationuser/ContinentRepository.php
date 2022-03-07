<?php

namespace App\Repository\Users\Localisationuser;

use Doctrine\ORM\EntityRepository;

/**
 * ContinentRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ContinentRepository extends EntityRepository
{
public function myFindBy()
{
	$query = $this->createQueryBuilder('c')
				  ->orderBy('c.nom','ASC')
				  ->getQuery();
	return $query->getResult();
}
}
