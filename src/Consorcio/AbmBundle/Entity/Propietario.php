<?php

namespace Consorcio\AbmBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Propietario
 *
 * @ORM\Table(name="tbl_propietario")
 * @ORM\Entity(repositoryClass="Consorcio\AbmBundle\Entity\PropietarioRepository")
 */
class Propietario
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
     * @ORM\Column(name="tipo_documento", type="string", length=15,nullable=false)
     */
    private $tipo_documento;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_documento", type="bigint",nullable=false)
     */
    private $numero_documento;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=50,nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=50,nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_fijo", type="string", length=50,nullable=true)
     */
    private $telefono_fijo;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_celular", type="string", length=50,nullable=true)
     */
    private $telefono_celular;

    /**
     * @var string
     *
     * @ORM\Column(name="contacto_auxiliar", type="string", length=1000,nullable=true)
     */
    private $contacto_auxiliar;

    /**
     * @var string
     *
     * @ORM\Column(name="observaciones", type="text",nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string",length=100,nullable=true)
     */
    private $email;

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
     * Set tipo_documento
     *
     * @param string $tipoDocumento
     * @return Propietario
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipo_documento = $tipoDocumento;
    
        return $this;
    }

    /**
     * Get tipo_documento
     *
     * @return string 
     */
    public function getTipoDocumento()
    {
        return $this->tipo_documento;
    }

    /**
     * Set numero_documento
     *
     * @param integer $numeroDocumento
     * @return Propietario
     */
    public function setNumeroDocumento($numeroDocumento)
    {
        $this->numero_documento = $numeroDocumento;
    
        return $this;
    }

    /**
     * Get numero_documento
     *
     * @return integer 
     */
    public function getNumeroDocumento()
    {
        return $this->numero_documento;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Propietario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido
     *
     * @param string $apellido
     * @return Propietario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set telefono_fijo
     *
     * @param string $telefonoFijo
     * @return Propietario
     */
    public function setTelefonoFijo($telefonoFijo)
    {
        $this->telefono_fijo = $telefonoFijo;
    
        return $this;
    }

    /**
     * Get telefono_fijo
     *
     * @return string 
     */
    public function getTelefonoFijo()
    {
        return $this->telefono_fijo;
    }

    /**
     * Set telefono_celular
     *
     * @param string $telefonoCelular
     * @return Propietario
     */
    public function setTelefonoCelular($telefonoCelular)
    {
        $this->telefono_celular = $telefonoCelular;
    
        return $this;
    }

    /**
     * Get telefono_celular
     *
     * @return string 
     */
    public function getTelefonoCelular()
    {
        return $this->telefono_celular;
    }

    /**
     * Set contacto_auxiliar
     *
     * @param string $contactoAuxiliar
     * @return Propietario
     */
    public function setContactoAuxiliar($contactoAuxiliar)
    {
        $this->contacto_auxiliar = $contactoAuxiliar;
    
        return $this;
    }

    /**
     * Get contacto_auxiliar
     *
     * @return string 
     */
    public function getContactoAuxiliar()
    {
        return $this->contacto_auxiliar;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Propietario
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
    
        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Propietario
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
}