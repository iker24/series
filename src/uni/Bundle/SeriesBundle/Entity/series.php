<?php

namespace uni\Bundle\SeriesBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * series
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class series
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
     * @ORM\Column(name="NombreSerie", type="string", length=20)
     */
    private $nombreSerie;

    /**
     * @var string
     *
     * @ORM\Column(name="Foto", type="string", length=255)
     */
    private $foto;

    /**
     * @var string
     *
     * @ORM\Column(name="Sipnosis", type="text")
     */
    private $sipnosis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaComienzo", type="date")
     */
    private $fechaComienzo;


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
     * Set nombreSerie
     *
     * @param string $nombreSerie
     * @return series
     */
    public function setNombreSerie($nombreSerie)
    {
        $this->nombreSerie = $nombreSerie;

        return $this;
    }

    /**
     * Get nombreSerie
     *
     * @return string 
     */
    public function getNombreSerie()
    {
        return $this->nombreSerie;
    }

    /**
     * Set foto
     *
     * @param string $foto
     * @return series
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string 
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set sipnosis
     *
     * @param string $sipnosis
     * @return series
     */
    public function setSipnosis($sipnosis)
    {
        $this->sipnosis = $sipnosis;

        return $this;
    }

    /**
     * Get sipnosis
     *
     * @return string 
     */
    public function getSipnosis()
    {
        return $this->sipnosis;
    }

    /**
     * Set fechaComienzo
     *
     * @param \DateTime $fechaComienzo
     * @return series
     */
    public function setFechaComienzo($fechaComienzo)
    {
        $this->fechaComienzo = $fechaComienzo;

        return $this;
    }

    /**
     * Get fechaComienzo
     *
     * @return \DateTime 
     */
    public function getFechaComienzo()
    {
        return $this->fechaComienzo;
    }
    
 /**
* @ORM\ManyToOne(targetEntity="categorias", inversedBy="allseries", cascade={"remove"})
* @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
*/
protected $categoria;
 


    /**
     * Set categoria
     *
     * @param \uni\Bundle\SeriesBundle\Entity\categorias $categoria
     * @return series
     */
    public function setCategoria(\uni\Bundle\SeriesBundle\Entity\categorias $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \uni\Bundle\SeriesBundle\Entity\categorias 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
    /**
* @ORM\ManyToMany(targetEntity="premios", inversedBy="allseries")

*/

private $allpremios;

public function __construct() {
$this->allpremios = new ArrayCollection();
$this->allnoticias = new ArrayCollection();
}

    /**
     * Add allpremios
     *
     * @param \uni\Bundle\SeriesBundle\Entity\premios $allpremios
     * @return series
     */
    public function addAllpremio(\uni\Bundle\SeriesBundle\Entity\premios $allpremios)
    {
        $this->allpremios[] = $allpremios;

        return $this;
    }

    /**
     * Remove allpremios
     *
     * @param \uni\Bundle\SeriesBundle\Entity\premios $allpremios
     */
    public function removeAllpremio(\uni\Bundle\SeriesBundle\Entity\premios $allpremios)
    {
        $this->allpremios->removeElement($allpremios);
    }

    /**
     * Get allpremios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAllpremios()
    {
        return $this->allpremios;
    }
    
      public function __toString() {
     return $this->nombreSerie;
}


 /**
* @ORM\OneToMany(targetEntity="noticias", mappedBy="serie", cascade={"remove"})
*/
    protected $allnoticias;
    
  

    /**
     * Add allnoticias
     *
     * @param \uni\Bundle\SeriesBundle\Entity\noticias $allnoticias
     * @return series
     */
    public function addAllnoticia(\uni\Bundle\SeriesBundle\Entity\noticias $allnoticias)
    {
        $this->allnoticias[] = $allnoticias;

        return $this;
    }

    /**
     * Remove allnoticias
     *
     * @param \uni\Bundle\SeriesBundle\Entity\noticias $allnoticias
     */
    public function removeAllnoticia(\uni\Bundle\SeriesBundle\Entity\noticias $allnoticias)
    {
        $this->allnoticias->removeElement($allnoticias);
    }

    /**
     * Get allnoticias
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAllnoticias()
    {
        return $this->allnoticias;
    }
}
