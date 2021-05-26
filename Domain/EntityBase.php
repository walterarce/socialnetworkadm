<?php

use Doctrine\ORM\Mapping as ORM;
/**
 * Class EntityBase
 * @ORM\Entity
 * @ORM\Table(name="EntityBase")
 */
class EntityBase
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue
     */
    protected $Id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     * @return EntityBase
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }
}