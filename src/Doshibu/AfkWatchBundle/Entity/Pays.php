<?php

namespace Doshibu\AfkWatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Pays
 *
 * @ORM\Table(name="pays")
 * @ORM\Entity(repositoryClass="Doshibu\AfkWatchBundle\Repository\PaysRepository")
 */
class Pays
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
    * @Gedmo\Slug(fields={"name"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;

    /**
    * @ORM\ManyToMany(targetEntity="Doshibu\AfkWatchBundle\Entity\Movie", cascade={"persist"})
    */
    private $movies;

    /**
    * @ORM\ManyToMany(targetEntity="Doshibu\AfkWatchBundle\Entity\Serie", cascade={"persist"})
    */
    private $series;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->movies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Pays
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add movies
     *
     * @param \Doshibu\AfkWatchBundle\Entity\Movie $movies
     * @return Pays
     */
    public function addMovie(\Doshibu\AfkWatchBundle\Entity\Movie $movies)
    {
        $this->movies[] = $movies;

        return $this;
    }

    /**
     * Remove movies
     *
     * @param \Doshibu\AfkWatchBundle\Entity\Movie $movies
     */
    public function removeMovie(\Doshibu\AfkWatchBundle\Entity\Movie $movies)
    {
        $this->movies->removeElement($movies);
    }

    /**
     * Get movies
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     * @return Pays
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Add series
     *
     * @param \Doshibu\AfkWatchBundle\Entity\Serie $series
     *
     * @return Pays
     */
    public function addSerie(\Doshibu\AfkWatchBundle\Entity\Serie $series)
    {
        $this->series[] = $series;

        return $this;
    }

    /**
     * Remove series
     *
     * @param \Doshibu\AfkWatchBundle\Entity\Serie $series
     */
    public function removeSerie(\Doshibu\AfkWatchBundle\Entity\Serie $series)
    {
        $this->series->removeElement($series);
    }

    /**
     * Get series
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSeries()
    {
        return $this->series;
    }
}
