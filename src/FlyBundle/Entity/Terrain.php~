<?php

namespace FlyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Terrain
 */
class Terrain
{
    public function __toString()
    {
        return $this->name;
    }



    /** YAML GENERATED CODE */
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $icao;

    /**
     * @var float
     */
    private $latitude;

    /**
     * @var float
     */
    private $longitude;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;


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
     * @return Terrain
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
     * Set icao
     *
     * @param string $icao
     * @return Terrain
     */
    public function setIcao($icao)
    {
        $this->icao = $icao;

        return $this;
    }

    /**
     * Get icao
     *
     * @return string 
     */
    public function getIcao()
    {
        return $this->icao;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     * @return Terrain
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float 
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     * @return Terrain
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float 
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Terrain
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Terrain
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $departures;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departures = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add departures
     *
     * @param \FlyBundle\Entity\Flight $departures
     * @return Terrain
     */
    public function addDeparture(\FlyBundle\Entity\Flight $departures)
    {
        $this->departures[] = $departures;

        return $this;
    }

    /**
     * Remove departures
     *
     * @param \FlyBundle\Entity\Flight $departures
     */
    public function removeDeparture(\FlyBundle\Entity\Flight $departures)
    {
        $this->departures->removeElement($departures);
    }

    /**
     * Get departures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartures()
    {
        return $this->departures;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $arrivals;


    /**
     * Add arrivals
     *
     * @param \FlyBundle\Entity\Flight $arrivals
     * @return Terrain
     */
    public function addArrival(\FlyBundle\Entity\Flight $arrivals)
    {
        $this->arrivals[] = $arrivals;

        return $this;
    }

    /**
     * Remove arrivals
     *
     * @param \FlyBundle\Entity\Flight $arrivals
     */
    public function removeArrival(\FlyBundle\Entity\Flight $arrivals)
    {
        $this->arrivals->removeElement($arrivals);
    }

    /**
     * Get arrivals
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArrivals()
    {
        return $this->arrivals;
    }
}
