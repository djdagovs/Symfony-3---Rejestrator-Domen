<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Firma
 *
 * @ORM\Table(name="firma")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FirmaRepository")
 */
class Firma
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
     * @ORM\Column(name="adres", type="string", length=255)
     */
    private $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="nip", type="string",length=11)
     */
    private $nip;

    /**
     * @var string
     *
     * @ORM\Column(name="regon", type="string", length=9)
     */
    private $regon;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var int
     *
     * @ORM\Column(name="fax", type="integer")
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="inne", type="text")
     */
    private $inne;


    /**
     * @var int
     *
     * @ORM\Column(name="konto_id", type="integer")
     */
    private $kontoId = 0;


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
     * @return Firma
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
     * Set adres
     *
     * @param string $adres
     *
     * @return Firma
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set nip
     *
     * @param string $nip
     *
     * @return Firma
     */
    public function setNip($nip)
    {
        $this->nip = $nip;

        return $this;
    }

    /**
     * Get nip
     *
     * @return string
     */
    public function getNip()
    {
        return $this->nip;
    }

    /**
     * Set regon
     *
     * @param string $regon
     *
     * @return Firma
     */
    public function setRegon($regon)
    {
        $this->regon = $regon;

        return $this;
    }

    /**
     * Get regon
     *
     * @return string
     */
    public function getRegon()
    {
        return $this->regon;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Firma
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

    /**
     * Set tel
     *
     * @param integer $tel
     *
     * @return Firma
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return int
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param integer $fax
     *
     * @return Firma
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return int
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set inne
     *
     * @param string $inne
     *
     * @return Firma
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
     * Set kontoId
     *
     * @param integer $kontoId
     *
     * @return Firma
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
}

