<?php

namespace Doshibu\AfkWatchBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * MovieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MovieRepository extends EntityRepository
{
	public function getAll($hasArray=false)
	{
		$qb = $this
			->createQueryBuilder('m')
			->getQuery();

		return ($hasArray) ? $qb->getResult(Query::HYDRATE_ARRAY) : $qb->getResult();
	}

	public function getAllWithGenres($hasArray=false)
	{
		$qb = $this
			->createQueryBuilder('m')
			->leftJoin('m.genders', 'genres')
			->addSelect('genres')
			->getQuery();

		return ($hasArray) ? $qb->getResult(Query::HYDRATE_ARRAY) : $qb->getResult();
	}

	public function getByGenre($slug, $page, $nbPerPage)
	{
		$query = $this->createQueryBuilder('m')
			->leftJoin('m.genders', 'genres')
			->addSelect('genres')
			->where('genres.slug = :slug')
			->setParameter('slug', $slug)
			->orderBy('m.addedAt', 'DESC')
			->getQuery();

		$query->setFirstResult(($page-1) * $nbPerPage)
			->setMaxResults($nbPerPage);

		return new Paginator($query, true);
	}

	public function getByPays($slug, $page, $nbPerPage)
	{
		$query = $this->createQueryBuilder('m')
			->leftJoin('m.country', 'pays')
			->addSelect('pays')
			->where('pays.slug = :slug')
			->setParameter('slug', $slug)
			->orderBy('m.addedAt', 'DESC')
			->getQuery();

		$query->setFirstResult(($page-1) * $nbPerPage)
			->setMaxResults($nbPerPage);

		return new Paginator($query, true);
	}
}
