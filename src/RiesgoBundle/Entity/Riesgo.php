<?php

namespace RiesgoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Riesgo
 *
 * @ORM\Table(name="riesgo")
 * @ORM\Entity(repositoryClass="RiesgoBundle\Repository\RiesgoRepository")
 */
class Riesgo
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
     * @var int
     *
     * @ORM\Column(name="disponibilidad", type="integer", nullable=true)
     */
    private $disponibilidad;

    /**
     * @var int
     *
     * @ORM\Column(name="confidencialidad", type="integer", nullable=true)
     */
    private $confidencialidad;

    /**
     * @var int
     *
     * @ORM\Column(name="integridad", type="integer", nullable=true)
     */
    private $integridad;

    /**
     * @var int
     *
     * @ORM\Column(name="valor_activo", type="integer", nullable=true)
     */
    private $valorActivo;

    /**
     * @var float
     *
     * @ORM\Column(name="degradacion", type="float", nullable=true)
     */
    private $degradacion;

    /**
     * @var float
     *
     * @ORM\Column(name="impacto", type="float", nullable=true)
     */
    private $impacto;

    /**
     * @var float
     *
     * @ORM\Column(name="prob_ocurrencia", type="float", nullable=true)
     */
    private $probOcurrencia;

    /**
     * @var float
     *
     * @ORM\Column(name="estimacion_riesgo", type="float", nullable=true)
     */
    private $estimacionRiesgo;


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
     * Set disponibilidad
     *
     * @param integer $disponibilidad
     * @return Riesgo
     */
    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;
    
        return $this;
    }

    /**
     * Get disponibilidad
     *
     * @return integer 
     */
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }

    /**
     * Set confidencialidad
     *
     * @param integer $confidencialidad
     * @return Riesgo
     */
    public function setConfidencialidad($confidencialidad)
    {
        $this->confidencialidad = $confidencialidad;
    
        return $this;
    }

    /**
     * Get confidencialidad
     *
     * @return integer 
     */
    public function getConfidencialidad()
    {
        return $this->confidencialidad;
    }

    /**
     * Set integridad
     *
     * @param integer $integridad
     * @return Riesgo
     */
    public function setIntegridad($integridad)
    {
        $this->integridad = $integridad;
    
        return $this;
    }

    /**
     * Get integridad
     *
     * @return integer 
     */
    public function getIntegridad()
    {
        return $this->integridad;
    }

    /**
     * Set valorActivo
     *
     * @param integer $valorActivo
     * @return Riesgo
     */
    public function setValorActivo($valorActivo)
    {
        $this->valorActivo = $valorActivo;
    
        return $this;
    }

    /**
     * Get valorActivo
     *
     * @return integer 
     */
    public function getValorActivo()
    {
        return $this->valorActivo;
    }

    /**
     * Set degradacion
     *
     * @param float $degradacion
     * @return Riesgo
     */
    public function setDegradacion($degradacion)
    {
        $this->degradacion = $degradacion;
    
        return $this;
    }

    /**
     * Get degradacion
     *
     * @return float 
     */
    public function getDegradacion()
    {
        return $this->degradacion;
    }

    /**
     * Set impacto
     *
     * @param float $impacto
     * @return Riesgo
     */
    public function setImpacto($impacto)
    {
        $this->impacto = $impacto;
    
        return $this;
    }

    /**
     * Get impacto
     *
     * @return float 
     */
    public function getImpacto()
    {
        return $this->impacto;
    }

    /**
     * Set probOcurrencia
     *
     * @param float $probOcurrencia
     * @return Riesgo
     */
    public function setProbOcurrencia($probOcurrencia)
    {
        $this->probOcurrencia = $probOcurrencia;
    
        return $this;
    }

    /**
     * Get probOcurrencia
     *
     * @return float 
     */
    public function getProbOcurrencia()
    {
        return $this->probOcurrencia;
    }

    /**
     * Set estimacionRiesgo
     *
     * @param float $estimacionRiesgo
     * @return Riesgo
     */
    public function setEstimacionRiesgo($estimacionRiesgo)
    {
        $this->estimacionRiesgo = $estimacionRiesgo;
    
        return $this;
    }

    /**
     * Get estimacionRiesgo
     *
     * @return float 
     */
    public function getEstimacionRiesgo()
    {
        return $this->estimacionRiesgo;
    }
}
