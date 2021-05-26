<?php
use Doctrine\ORM\Mapping as ORM;
/**
 * Class Usuario
 * @ORM\Entity
 * @ORM\Table(name="Usuarios")
 */

class Usuario extends EntityBase
{
    /**
     * @ORM\Nombre
     * @ORM\Column(type="string")
     */
    protected $nombre;

    public function guardarUsuario()
    {

    }
    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     * @return Usuario
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        return $this;
    }
}