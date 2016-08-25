<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * serwer
 *
 * @ORM\Table(name="serwer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\serwerRepository")
 */
class serwer
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
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $user_id = null;

    /**
     * @var string
     *
     * @ORM\Column(name="api_pass", type="string", length=255)
     */
    private $apiPass;

    /**
     * @var string
     *
     * @ORM\Column(name="api_login", type="string", length=255)
     */
    private $apiLogin;

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
     * @return serwer
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
     * @return serwer
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
     * Set url
     *
     * @param string $url
     *
     * @return serwer
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }


    /**
     * Set user_id
     *
     * @param integer $user_id
     *
     * @return serwer
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;

        return $this;
    }

    /**
     * Get user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->user_id;
    }
    
    /**
     * Set apiLogin
     *
     * @param string $apiLogin
     *
     * @return serwer
     */
    public function setApiLogin($apiLogin)
    {
        $this->apiLogin = $apiLogin;

        return $this;
    }
    /**
     * Get apiLogin
     *
     * @return serwer
     */
    public function getApiLogin()
    {
        return $this->apiLogin;
    }

    /**
     * Set apiPass
     *
     * @param string $apiPass
     *
     * @return serwer
     */
    public function setApiPass($apiPass)
    {
        $this->apiPass = $apiPass;

        return $this;
    }

    /**
     * Get apiPass
     *
     * @return string
     */
    public function getApiPass()
    {
        return $this->apiPass;

    }
}

