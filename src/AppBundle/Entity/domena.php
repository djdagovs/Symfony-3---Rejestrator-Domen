<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * domena
 *
 * @ORM\Table(name="domena")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\domenaRepository")
 */
class domena
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
     * @ORM\Column(name="nazwa", type="string", length=255)
     */
    private $nazwa;

    /**
     * @var string
     *
     * @ORM\Column(name="opis", type="text")
     */
    private $opis;

    /**
     * @var int
     *
     * @ORM\Column(name="firma", type="integer")
     */
    private $firma;

    /**
     * @var int
     *
     * @ORM\Column(name="serwer", type="integer")
     */
    private $serwer;

    /**
     * @var int
     *
     * @ORM\Column(name="konto_id", type="integer")
     */
    private $kontoId = 0;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_wyg", type="datetime")
     */
    private $dataWyg = 0;

    /**
     * @var bool
     *
     * @ORM\Column(name="aktywna", type="boolean")
     */
    private $aktywna = 0;

    /**
     * @var text
     *
     * @ORM\Column(name="inne", type="text")
     */
    private $inne;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nazwa
     *
     * @param string $nazwa
     *
     * @return domena
     */
    public function setNazwa($nazwa)
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    /**
     * Get nazwa
     *
     * @return string
     */
    public function getNazwa()
    {
        return $this->nazwa;
    }

    /**
     * Set opis
     *
     * @param string $opis
     *
     * @return domena
     */
    public function setOpis($opis)
    {
        $this->opis = $opis;

        return $this;
    }

    /**
     * Get opis
     *
     * @return string
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * Set inne
     *
     * @param string $inne
     *
     * @return domena
     */
    public function setInne($inne)
    {
        $this->inne = $inne;

        return $this;
    }

    /**
     * Get inne
     *
     * @return string
     */
    public function getInne()
    {
        return $this->inne;
    }

    /**
     * Set firma
     *
     * @param integer $firma
     *
     * @return domena
     */
    public function setFirma($firma)
    {
        $this->firma = $firma;

        return $this;
    }

    /**
     * Get firma
     *
     * @return int
     */
    public function getFirma()
    {
        return $this->firma;
    }

    /**
     * Set serwer
     *
     * @param integer $serwer
     *
     * @return domena
     */
    public function setSerwer($serwer)
    {
        $this->serwer = $serwer;

        return $this;
    }

    /**
     * Get serwer
     *
     * @return int
     */
    public function getSerwer()
    {
        return $this->serwer;
    }

    /**
     * Set kontoId
     *
     * @param integer $kontoId
     *
     * @return domena
     */
    public function setKontoId($kontoId)
    {
        $this->kontoId = $kontoId;

        return $this;
    }

    /**
     * Get kontoId
     *
     * @return int
     */
    public function getKontoId()
    {
        return $this->kontoId;
    }

    /**
     * Set dataWyg
     *
     * @param \DateTime $dataWyg
     *
     * @return domena
     */
    public function setDataWyg($dataWyg)
    {
        $this->dataWyg = $dataWyg;

        return $this;
    }

    /**
     * Get dataWyg
     *
     * @return \DateTime
     */
    public function getDataWyg()
    {
        return $this->dataWyg;
    }

    /**
     * Set aktywna
     *
     * @param boolean $aktywna
     *
     * @return domena
     */
    public function setAktywna($aktywna)
    {
        $this->aktywna = $aktywna;

        return $this;
    }

    /**
     * Get aktywna
     *
     * @return bool
     */
    public function getAktywna()
    {
        return $this->aktywna;
    }
}

