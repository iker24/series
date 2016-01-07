<?php

namespace uni\Bundle\SeriesBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * categorias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class categorias
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
     * @ORM\Column(name="nombreCategorias", type="string", length=20)
     */
    private $nombreCategorias;


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
     * Set nombreCategorias
     *
     * @param string $nombreCategorias
     * @return categorias
     */
    public function setNombreCategorias($nombreCategorias)
    {
        $this->nombreCategorias = $nombreCategorias;

        return $this;
    }

    /**
     * Get nombreCategorias
     *
     * @return string 
     */
    public function getNombreCategorias()
    {
        return $this->nombreCategorias;
    }
    
     /**
* @ORM\OneToMany(targetEntity="series", mappedBy="categoria", cascade={"remove"})
*/
    protected $allseries;
    
    public function __construct() {
    $this->allseries = new ArrayCollection();}
    

    /**
     * Add allseries
     *
     * @param \uni\Bundle\SeriesBundle\Entity\series $allseries
     * @return categorias
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
    return $this->nombreCategorias;}
}
