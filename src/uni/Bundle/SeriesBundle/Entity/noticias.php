<?php

namespace uni\Bundle\SeriesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * noticias
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class noticias
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
     * @ORM\Column(name="tituloNoticias", type="string", length=50)
     */
    private $tituloNoticias;

    /**
     * @var string
     *
     * @ORM\Column(name="fotoNoticias", type="string", length=50)
     */
    private $fotoNoticias;

    /**
     * @var string
     *
     * @ORM\Column(name="descNoticias", type="text")
     */
    private $descNoticias;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaNoticias", type="date")
     */
    private $fechaNoticias;

    /**
     * @var string
     *
     * @ORM\Column(name="autorNoticias", type="string", length=15)
     */
    private $autorNoticias;


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
     * Set tituloNoticias
     *
     * @param string $tituloNoticias
     * @return noticias
     */
    public function setTituloNoticias($tituloNoticias)
    {
        $this->tituloNoticias = $tituloNoticias;

        return $this;
    }

    /**
     * Get tituloNoticias
     *
     * @return string 
     */
    public function getTituloNoticias()
    {
        return $this->tituloNoticias;
    }

    /**
     * Set fotoNoticias
     *
     * @param string $fotoNoticias
     * @return noticias
     */
    public function setFotoNoticias($fotoNoticias)
    {
        $this->fotoNoticias = $fotoNoticias;

        return $this;
    }

    /**
     * Get fotoNoticias
     *
     * @return string 
     */
    public function getFotoNoticias()
    {
        return $this->fotoNoticias;
    }

    /**
     * Set descNoticias
     *
     * @param string $descNoticias
     * @return noticias
     */
    public function setDescNoticias($descNoticias)
    {
        $this->descNoticias = $descNoticias;

        return $this;
    }

    /**
     * Get descNoticias
     *
     * @return string 
     */
    public function getDescNoticias()
    {
        return $this->descNoticias;
    }

    /**
     * Set fechaNoticias
     *
     * @param \DateTime $fechaNoticias
     * @return noticias
     */
    public function setFechaNoticias($fechaNoticias)
    {
        $this->fechaNoticias = $fechaNoticias;

        return $this;
    }

    /**
     * Get fechaNoticias
     *
     * @return \DateTime 
     */
    public function getFechaNoticias()
    {
        return $this->fechaNoticias;
    }

    /**
     * Set autorNoticias
     *
     * @param string $autorNoticias
     * @return noticias
     */
    public function setAutorNoticias($autorNoticias)
    {
        $this->autorNoticias = $autorNoticias;

        return $this;
    }

    /**
     * Get autorNoticias
     *
     * @return string 
     */
    public function getAutorNoticias()
    {
        return $this->autorNoticias;
    }
    
       
 /**
* @ORM\ManyToOne(targetEntity="series", inversedBy="allnoticias", cascade={"remove"})
* @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
*/
protected $serie;

    /**
     * Set serie
     *
     * @param \uni\Bundle\SeriesBundle\Entity\series $serie
     * @return noticias
     */
    public function setSerie(\uni\Bundle\SeriesBundle\Entity\series $serie = null)
    {
        $this->serie = $serie;

        return $this;
    }

    /**
     * Get serie
     *
     * @return \uni\Bundle\SeriesBundle\Entity\series 
     */
    public function getSerie()
    {
        return $this->serie;
    }
}
