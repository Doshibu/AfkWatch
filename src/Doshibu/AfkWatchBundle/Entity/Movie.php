<?php

namespace Doshibu\AfkWatchBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Movie
 *
 * @ORM\Table(name="movie")
 * @ORM\Entity(repositoryClass="Doshibu\AfkWatchBundle\Repository\MovieRepository")
 */
class Movie
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
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="film_maker", type="string", length=255)
     */
    private $filmMaker;

    /**
     * @var string
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
    * @Gedmo\Slug(fields={"name"})
    * @ORM\Column(length=128, unique=true)
    */
    private $slug;

    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
    * @ORM\OneToOne(targetEntity="Doshibu\AfkWatchBundle\Entity\Image", cascade={"persist"})
    */
    private $imageLarge;

    /**
    * @ORM\OneToOne(targetEntity="Doshibu\AfkWatchBundle\Entity\Image", cascade={"persist"})
    */
    private $imageSmall;

    /**
    * @ORM\ManyToMany(targetEntity="Doshibu\AfkWatchBundle\Entity\Genre", cascade={"persist"})
    */
    private $genders;

    /**
    * @ORM\ManyToOne(targetEntity="Doshibu\AfkWatchBundle\Entity\Pays", inversedBy="movies")
    * @ORM\JoinColumn(nullable=true)
    */
    private $country;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->genders = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Movie
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
     * Set description
     *
     * @param string $description
     * @return Movie
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set filmMaker
     *
     * @param string $filmMaker
     * @return Movie
     */
    public function setFilmMaker($filmMaker)
    {
        $this->filmMaker = $filmMaker;

        return $this;
    }

    /**
     * Get filmMaker
     *
     * @return string 
     */
    public function getFilmMaker()
    {
        return $this->filmMaker;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     * @return Movie
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Movie
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set imageLarge
     *
     * @param \Doshibu\AfkWatchBundle\Entity\Image $imageLarge
     *
     * @return Movie
     */
    public function setImageLarge(\Doshibu\AfkWatchBundle\Entity\Image $imageLarge = null)
    {
        $this->imageLarge = $imageLarge;

        return $this;
    }

    /**
     * Get imageLarge
     *
     * @return \Doshibu\AfkWatchBundle\Entity\Image
     */
    public function getImageLarge()
    {
        return $this->imageLarge;
    }

    /**
     * Set imageSmall
     *
     * @param \Doshibu\AfkWatchBundle\Entity\Image $imageSmall
     *
     * @return Movie
     */
    public function setImageSmall(\Doshibu\AfkWatchBundle\Entity\Image $imageSmall = null)
    {
        $this->imageSmall = $imageSmall;

        return $this;
    }

    /**
     * Get imageSmall
     *
     * @return \Doshibu\AfkWatchBundle\Entity\Image
     */
    public function getImageSmall()
    {
        return $this->imageSmall;
    }

    /**
     * Add genders
     *
     * @param \Doshibu\AfkWatchBundle\Entity\Genre $genders
     * @return Movie
     */
    public function addGender(\Doshibu\AfkWatchBundle\Entity\Genre $genders)
    {
        $this->genders[] = $genders;

        return $this;
    }

    /**
     * Remove genders
     *
     * @param \Doshibu\AfkWatchBundle\Entity\Genre $genders
     */
    public function removeGender(\Doshibu\AfkWatchBundle\Entity\Genre $genders)
    {
        $this->genders->removeElement($genders);
    }

    /**
     * Get genders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGenders()
    {
        return $this->genders;
    }

    /**
     * Set country
     *
     * @param \Doshibu\AfkWatchBundle\Entity\Pays $country
     * @return Movie
     */
    public function setCountry(\Doshibu\AfkWatchBundle\Entity\Pays $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \Doshibu\AfkWatchBundle\Entity\Pays 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
    * @ORM\PreUpdate
    */
    public function updateDate()
    {
        $this->setUpdatedAt(new \DateTime());
    }
}
