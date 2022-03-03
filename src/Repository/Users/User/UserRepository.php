<?php

namespace Users\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends EntityRepository
{
public function findTeam($nbresult = 20){
	$query = $this->createQueryBuilder('u')
				  ->where('u.roles LIKE  :nom or u.roles LIKE  :nom2')
				  ->setParameter('nom','%ROLE_ADMIN%')
				  ->setParameter('nom2','%ROLE_TEAM%')
				  ->orderBy('u.nom','asc')
				  ->setMaxResults($nbresult)
				  ->getQuery();
	return $query->getResult();
}
}
