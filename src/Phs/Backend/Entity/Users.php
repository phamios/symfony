<?php

namespace Phs\Backend\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 */
class Users
{
    /**
     *
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $userpass;

    /**
     * @var integer
     */
    private $usertype;

    /**
     * @var \DateTime
     */
    private $createdate;


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
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set userpass
     *
     * @param string $userpass
     * @return Users
     */
    public function setUserpass($userpass)
    {
        $this->userpass = $userpass;

        return $this;
    }

    /**
     * Get userpass
     *
     * @return string
     */
    public function getUserpass()
    {
        return $this->userpass;
    }

    /**
     * Set usertype
     *
     * @param integer $usertype
     * @return Users
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;

        return $this;
    }

    /**
     * Get usertype
     *
     * @return integer
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set createdate
     *
     * @param \DateTime $createdate
     * @return Users
     */
    public function setCreatedate($createdate)
    {
        $this->createdate = $createdate;

        return $this;
    }

    /**
     * Get createdate
     *
     * @return \DateTime
     */
    public function getCreatedate()
    {
        return $this->createdate;
    }
}
