<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/** @ORM\Entity */
class User
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /** @ORM\Column(name="first_name", type="string") */
    private $firstName;
    /** @ORM\Column(name="last_name", type="string") */
    private $lastName;
    /** @ORM\Column(name="email", type="string") */
    private $email;
    /** @ORM\Column(name="psw", type="string") */
    private $password;

    public function getID()
    {
        return $this->id;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPsw()
    {
        return $this->password;
    }
 // faire les setters pour que ça "fonctionne"

    public function setID($unID)
    {
        $this->id = $unID;
    }
    public function setFirstName($unFirst)
    {
        $this->firstName = $unFirst;
    }
    public function setLastName($unLast)
    {
        $this->lastName = $unLast;
    }
    public function setEmail($unMail)
    {
        $this->email = $unMail;
    }
    public function setPsw($unPsw)
    {
        $this->password = $unPsw;
    }


}