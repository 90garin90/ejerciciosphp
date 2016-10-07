<?php
//Probando los métodos mágicos
class Rectangulo
{
    private $_base;
    private $_altura;

    public function __construct($base, $altura)   //así los públicos
    {
        $this->_base = $base;
        $this->_altura = $altura;
    }

    public function perimetro()
    {
        return (2 * $this->_base) + (2 * $this->_altura);
    }

    public function superficie()
    {
        return $this->_base * $this->_altura;
    }

    public function getBase()
    {
        return $base;
    }

    public function setBase($base)
    {
        $this->_base = $base;
    }

    public function getAltura()
    {
        return $_altura;
    }

    public function setAltura($altura)
    {
        $this->_altura = $altura;
    }
}
