<?php
class Cube extends Rectangle
{
    public $z;

    public function getZ()
    {
        return $this->$z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function getArea()
    {
        2 * $x * $y + 2 * $x * $z + 2 * $y * $z;
    }
    public function getVolume()
    {
        $x * $y * $z;
    }
}
?>