<?php

namespace uni\Bundle\SeriesBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * premios
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class premios
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombrePremios", type="string", length=50)
     */
    private $nombrePremios;

    /**
     * @var string
     *
     * @ORM\Column(name="descPremios", type="text")
     */
    private $descPremios;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoPremios", type="string", length=50)
     */
    private $fotoPremios;


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
     * Set nombrePremios
     *
     * @param string $nombrePremios
     * @return premios
     */
    public function setNombrePremios($nombrePremios)
    {
        $this->nombrePremios = $nombrePremios;

        return $this;
    }

    /**
     * Get nombrePremios
     *
     * @return string 
     */
    public function getNombrePremios()
    {
        return $this->nombrePremios;
    }

    /**
     * Set descPremios
     *
     * @param string $descPremios
     * @return premios
     */
    public function setDescPremios($descPremios)
    {
        $this->descPremios = $descPremios;

        return $this;
    }

    /**
     * Get descPremios
     *
     * @return string 
     */
    public function getDescPremios()
    {
        return $this->descPremios;
    }

    /**
     * Set fotoPremios
     *
     * @param string $fotoPremios
     * @return premios
     */
    public function setFotoPremios($fotoPremios)
    {
        $this->fotoPremios = $fotoPremios;

        return $this;
    }

    /**
     * Get fotoPremios
     *
     * @return string 
     */
    public function getFotoPremios()
    {
        return $this->fotoPremios;
    }
    
    
    /**
* @ORM\ManyToMany(targetEntity="series", mappedBy="allpremios")
*
*/
private $allseries;

public function __construct() {
$this->allseries = new ArrayCollection();
}

    /**
     * Add allseries
     *
     * @param \uni\Bundle\SeriesBundle\Entity\series $allseries
     * @return premios
     */
    public function addAllseries(\uni\Bundle\SeriesBundle\Entity\series $allseries)
    {
        $this->allseries[] = $allseries;

        return $this;
    }

    /**
     * Remove allseries
     *
     * @param \uni\Bundle\SeriesBundle\Entity\series $allseries
     */
    public function removeAllseries(\uni\Bundle\SeriesBundle\Entity\series $allseries)
    {
        $this->allseries->removeElement($allseries);
    }

    /**
     * Get allseries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAllseries()
    {
        return $this->allseries;
    }
    
      public function __toString() {
     return $this->nombrePremios;
}
}
