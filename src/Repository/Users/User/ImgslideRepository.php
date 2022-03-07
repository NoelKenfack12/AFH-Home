<?php

namespace App\Repository\Users\User;

use Doctrine\ORM\EntityRepository;

/**
 * ImgslideRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ImgslideRepository extends EntityRepository
{
public function myFindAll()
{
	$query = $this->createQueryBuilder('i')
	              ->leftJoin('i.souscategorie','s')
				  ->addSelect('s')
	              ->orderBy('i.date','DESC')
                  ->getQuery();
	return $query->getResult();
}
}
