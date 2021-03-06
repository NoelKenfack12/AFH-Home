<?php

namespace Produit\ServiceBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * EvenementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EvenementRepository extends EntityRepository
{
public function myfindAll()
{
	$query = $this->createQueryBuilder('e')
	              ->orderBy('e.date','ASC')
                  ->getQuery();
	return $query->getResult();
}

public function getvaleurAppli($idindicateur, $idapp, $idannee)
{
	$query = $this->createQueryBuilder('e')
	              ->leftJoin('e.indicateur','i')
	              ->leftJoin('e.produit','p')
	              ->leftJoin('e.annee','a')
				  ->addSelect('i')
				  ->addSelect('p')
				  ->addSelect('a')
				  ->where('i.id = :idi AND p.id = :idp AND a.id = :ida')
				  ->setParameter('idi',$idindicateur)
				  ->setParameter('idp',$idapp)
				  ->setParameter('ida',$idannee)
                  ->getQuery();
	return $query->getOneOrNullResult();
}
}
