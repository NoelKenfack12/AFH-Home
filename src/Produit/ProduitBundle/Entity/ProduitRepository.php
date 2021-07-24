<?php

namespace Produit\ProduitBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProduitRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProduitRepository extends EntityRepository
{
public function myFindBy($id)
{
	$query = $this->createQueryBuilder('p')
	              ->leftJoin('p.souscategorie','s')
				  ->addSelect('s')
				  ->where('s.id = :id')
				  ->setParameter('id',$id)
	              ->orderBy('p.prixlivraison','ASC')
                  ->getQuery();
	return $query->getResult();
}
public function findAppliType($type,$nbresult=60)
{
	$query = $this->createQueryBuilder('p')
	              ->leftJoin('p.souscategorie','s')
	              ->leftJoin('s.categorie','c')
				  ->addSelect('s')
				  ->addSelect('c')
				  ->where('s.nom LIKE  :nom')
				  ->setParameter('nom','%'.$type.'%')
				  ->orderBy('p.rang','asc')
				  ->setMaxResults($nbresult)
				  ->getQuery();
	return $query->getResult();
}

public function myfindAll()
{
	$query = $this->createQueryBuilder('p')
	              ->leftJoin('p.souscategorie','s')
				  ->addSelect('s')
	              ->orderBy('p.date','DESC')
                  ->getQuery();
	return $query->getResult();
}
public function findBestProduit($nbre)
{
	$query = $this->createQueryBuilder('p')
	              ->leftJoin('p.souscategorie','s')
				  ->addSelect('s')
	              ->orderBy('p.nblike','DESC')
				  ->setMaxResults($nbre)
                  ->getQuery();
	return $query->getResult();
}
public function orderCroissant()
{
		$query = $this->createQueryBuilder('p')
	              ->leftJoin('p.souscategorie','s')
				  ->addSelect('s')
	              ->orderBy('p.nblike','ASC')
                  ->getQuery();
	return $query->getResult();
}
public function topProduit($id)
{
	$query = $this->createQueryBuilder('p')
	              ->leftJoin('p.souscategorie','s')
				  ->addSelect('s')
	              ->orderBy('p.nbvente','DESC')
				  ->setMaxResults($id)
                  ->getQuery();
	return $query->getResult();
}
public function topLike($id)
{
	$query = $this->createQueryBuilder('p')
	              ->leftJoin('p.souscategorie','s')
				  ->addSelect('s')
	              ->orderBy('p.nblike','DESC')
				  ->setMaxResults($id)
                  ->getQuery();
	return $query->getResult();
}
public function findProduit($donnee)
{
	$query = $this->createQueryBuilder('p')
	              ->leftJoin('p.souscategorie','c')
				  ->addSelect('c')
				  ->where('p.nom LIKE :n')
				  ->orWhere('p.contenu LIKE :n')
				  ->orWhere('p.description LIKE :n')
				  ->setParameter('n','%'.$donnee.'%')
                  ->orderBy('p.nom', 'ASC')
                  ->getQuery();
return $query->getResult();
}

public function findOneProduit($donnee)
{
	$query = $this->createQueryBuilder('p')
	              ->leftJoin('p.souscategorie','c')
				  ->addSelect('c')
				  ->where('p.nom LIKE :n')
				  ->setParameter('n','%'.$donnee.'%')
                  ->setMaxResults(1)
                  ->getQuery();
return $query->getOneOrNullResult();
}
}
