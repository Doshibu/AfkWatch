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

	public function findByGenre($slug, $page, $nbPerPage)
	{
		$qb = $this->createQueryBuilder('m')
			->leftJoin('m.genders', 'genres')
			->addSelect('genres')
			->where('genres.slug = :slug')
			->setParameter('slug', $slug)
			->orderBy('m.addedAt', 'DESC')
			->getQuery();

		$qb->setFirstResult(($page-1) * $nbPerPage)
			->setMaxResults($nbPerPage);

		return new Paginator($qb, true);
	}

	public function findByPays($slug, $page, $nbPerPage)
	{
		$qb = $this->createQueryBuilder('m')
			->leftJoin('m.countries', 'pays')
			->addSelect('pays')
			->where('pays.slug = :slug')
			->setParameter('slug', $slug)
			->orderBy('m.addedAt', 'DESC')
			->getQuery();

		$qb->setFirstResult(($page-1) * $nbPerPage)
			->setMaxResults($nbPerPage);

		return new Paginator($qb, true);
	}

	public function findMostPopular($limit, $hasArray=false)
	{
		$qb = $this->createQueryBuilder('m')
			->orderBy('m.nbViews', 'DESC')
			->getQuery()
			->setMaxResults($limit);

		return ($hasArray) ? $qb->getResult(Query::HYDRATE_ARRAY) : $qb->getResult();
	}

	public function findMostPopularByGenre($slug, $limit=10, $hasArray=false)
	{
		$qb = $this->createQueryBuilder('m')
			->leftJoin('m.genders', 'genres')
			->addSelect('genres')
			->where('genres.slug = :slug')
			->setParameter('slug', $slug)
			->orderBy('m.nbViews', 'DESC')
			->getQuery()
			->setMaxResults($limit);

		return ($hasArray) ? $qb->getResult(Query::HYDRATE_ARRAY) : $qb->getResult();
	}

	public function findMostPopularByPays($slug, $limit=10, $hasArray=false)
	{
		$qb = $this->createQueryBuilder('m')
			->leftJoin('m.countries', 'pays')
			->addSelect('pays')
			->where('pays.slug = :slug')
			->setParameter('slug', $slug)
			->orderBy('m.nbViews', 'DESC')
			->getQuery()
			->setMaxResults($limit);

		return ($hasArray) ? $qb->getResult(Query::HYDRATE_ARRAY) : $qb->getResult();
	}

	public function findOneById($id)
	{
		$qb = $this->createQueryBuilder('m')
			->leftJoin('m.genders', 'genres')
			->addSelect('genres')
			->leftJoin('m.countries', 'pays')
			->addSelect('pays')
			->where('m.id = :id')
			->setParameter('id', $id)
			->getQuery()
			->getResult();

		return $qb;
	}

	public function findMostPopularByGenres($genres, $limit=10, $hasArray=false)
	{
		$qb = $this->createQueryBuilder('m')
			->leftJoin('m.genders', 'genres')
			->addSelect('genres');

		$i=0;
		foreach($genres as $genre)
		{
			if($i=0)
			{
				$qb->where('genres.slug = :slug')
					->setParameter('slug', $genre->getSlug());
				++$i;
			}
			else
			{
				$qb->andWhere('genres.slug = :slug')
					->setParameter('slug', $genre->getSlug());
			}
		}

		$qb = $qb->orderBy('m.nbViews', 'DESC')->getQuery()->setMaxResults($limit);

		return ($hasArray) ? $qb->getResult(Query::HYDRATE_ARRAY) : $qb->getResult();
	}
}
