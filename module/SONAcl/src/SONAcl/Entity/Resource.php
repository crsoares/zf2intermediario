<?php

namespace SONAcl\Entity;

use Doctrine\ORM\Mapping as ORM;

use Zend\Stdlib\Hydrator;

/**
 * @ORM\Entity(repositoryClass="SONAcl\Entity\ResourceRepository")
 * @ORM\Table(name="sonacl_resources")
 * @ORM\HasLifecycleCallbacks
 */
class Resource
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     * @var string
     */
    protected $nome;

    /**
     * @ORM\Column(name="created_at", type="datetime")
     *
     * @var datetime
     */
    protected $createdAt;

    /**
     * @ORM\Column(name="updated_at", type="datetime")
     *
     * @var datetime
     */
    protected $updatedAt;

    public function __construct(array $options = array())
    {
        (new Hydrator\ClassMethods)->hydrate($options, $this);
        $this->createdAt = new \DateTime('now');
        $this->updatedAt = new \DateTime('now');
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt)
    {
        $this->createdAt = new \DateTime('now');
        return $this;
    }

    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = new \DateTime('now');
        return $this;
    }

    public function toArray()
    {
        return (new Hydrator\ClassMethods)->extract($this);
    }
}
