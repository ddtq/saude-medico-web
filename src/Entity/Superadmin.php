<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SuperadminRepository")
 */
class Superadmin
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $cpf;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $rg;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $crm;
 
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Secretkeyadmin", inversedBy="superadmin")
     */
    private $secretkeyadmin;

    public function getSecretkeyadmin(): ?Secretkeyadmin
    {
        return $this->secretkeyadmin;
    }

    public function setSecretkeyadmin(?Secretkeyadmin $secretkeyadmin): self
    {
        $this->secretkeyadmin = $secretkeyadmin;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCpf(): ?string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf): self
    {
        $this->cpf = $cpf;

        return $this;
    }

    public function getRg(): ?string
    {
        return $this->rg;
    }

    public function setRg(string $rg): self
    {
        $this->rg = $rg;

        return $this;
    }

    public function getCrm(): ?string
    {
        return $this->crm;
    }

    public function setCrm(string $crm): self
    {
        $this->crm = $crm;

        return $this;
    }
    
}//final class
