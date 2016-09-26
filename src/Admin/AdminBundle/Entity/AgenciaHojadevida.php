<?php

namespace Admin\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AgenciaUsuario
 *
 * @ORM\Table(name="agencia_hojadevida", indexes={@ORM\Index(name="Id_Agencia", columns={"id"}), @ORM\Index(name="Id_Hojadevida", columns={"id"})})
 * @ORM\Entity
 */
class AgenciaHojadevida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \Agencia
     *
     * @ORM\ManyToOne(targetEntity="Agencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Agencia", referencedColumnName="id")
     * })
     */
    private $idAgencia;

    /**
     * @var \Hojadevida
     *
     * @ORM\ManyToOne(targetEntity="Hojadevida" ,cascade={"persist"})
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Hojadevida", referencedColumnName="id")
     * })
     */
    private $idHojadevida;
     /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=10, nullable=true)
     */
    private $Estado;

    /**
     * @var string
     *
     * @ORM\Column(name="Tags", type="string", length=255, nullable=true)
     */
    private $Tags;
     /**
     * @var string
     *
     * @ORM\Column(name="Categoria", type="string", length=30, nullable=true)
     */
    private $categoria;
    /**
     * @var \Activo
     *
     * @ORM\Column(name="Activo", type="boolean", nullable=true)
     */
    private $Activo;
     /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaUpdate", type="datetime", nullable=true)
     */
    private $fechaupdate;


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
     * Set idAgencia
     *
     * @param \Admin\AdminBundle\Entity\Agencia $idAgencia
     *
     * @return AgenciaHojadevida
     */
    public function setIdAgencia(\Admin\AdminBundle\Entity\Agencia $idAgencia = null)
    {
        $this->idAgencia = $idAgencia;

        return $this;
    }

    /**
     * Get idAgencia
     *
     * @return \Admin\AdminBundle\Entity\Agencia
     */
    public function getIdAgencia()
    {
        return $this->idAgencia;
    }

    /**
     * Set idHojadevida
     *
     * @param \Admin\AdminBundle\Entity\Hojadevida $idHojadevida
     *
     * @return AgenciaHojadevida
     */
    public function setIdHojadevida(\Admin\AdminBundle\Entity\Hojadevida $idHojadevida = null)
    {
        $this->idHojadevida = $idHojadevida;

        return $this;
    }

    /**
     * Get idHojadevida
     *
     * @return \Admin\AdminBundle\Entity\Hojadevida
     */
    public function getIdHojadevida()
    {
        return $this->idHojadevida;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return AgenciaHojadevida
     */
    public function setEstado($estado)
    {
        $this->Estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * Set tags
     *
     * @param string $tags
     *
     * @return AgenciaHojadevida
     */
    public function setTags($tags)
    {
        $this->Tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->Tags;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return AgenciaHojadevida
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return AgenciaHojadevida
     */
    public function setActivo($activo)
    {
        $this->Activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->Activo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return AgenciaHojadevida
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechaupdate
     *
     * @param \DateTime $fechaupdate
     *
     * @return AgenciaHojadevida
     */
    public function setFechaupdate($fechaupdate)
    {
        $this->fechaupdate = $fechaupdate;

        return $this;
    }

    /**
     * Get fechaupdate
     *
     * @return \DateTime
     */
    public function getFechaupdate()
    {
        return $this->fechaupdate;
    }
}