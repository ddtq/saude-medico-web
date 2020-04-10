<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SecretkeyadminRepository")
 */
class Secretkeyadmin
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_superadmin;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $login;

    /**
     * @ORM\Column(type="string", length=14)
     */
    private $passwd;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Superadmin", mappedBy="secretkeyadmin")
     */
    private $superadmin;

    public function getSuperadmin(): ?Superadmin
    {
        return $this->superadmin;
    }

    public function setSuperadmin(?Superadmin $superadmin): self
    {
        $this->superadmin = $superadmin;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSuperadmin(): ?int
    {
        return $this->id_superadmin;
    }

    public function setIdSuperadmin(int $id_superadmin): self
    {
        $this->id_superadmin = $id_superadmin;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPasswd(): ?string
    {
        return $this->passwd;
    }

    public function setPasswd(string $passwd): self
    {
        $this->passwd = $passwd;

        return $this;
    }
}
