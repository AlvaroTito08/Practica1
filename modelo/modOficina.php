<?php
include_once "conexion/conexionBase.php";
class Oficina {
    private $codigo_oficina;
    private $ciudad;
    private $pais;
    private $region;
    private $codigo_postal;
    private $telefono;
    private $linea_direccion1;
    private $linea_direccion2;
    private $con;

    public function __construct()
    {
        $this->codigo_oficina=null;
        $this->ciudad="";
        $this->pais="";
        $this->region="";
        $this->codigo_postal="";
        $this->telefono="";
        $this->linea_direccion1="";
        $this->linea_direccion2="";
        $this->con= new conexionBase();
    }

    /**
     * Get the value of codigo_cliente
     */
    public function getCodigoOficina()
    {
        return $this->codigo_oficina;
    }

    /**
     * Set the value of codigo_cliente
     */
    public function setCodigoOficina($codigo_oficina): self
    {
        $this->codigo_oficina = $codigo_oficina;

        return $this;
    }

    /**
     * Get the value of nombre_cliente
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set the value of nombre_cliente
     */
    public function setCiudad($ciudad): self
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get the value of nombre_contacto
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of nombre_contacto
     */
    public function setPais($pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of apellido_contacto
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set the value of apellido_contacto
     */
    public function setRegion($region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getCodigoPostal()
    {
        return $this->codigo_postal;
    }

    /**
     * Set the value of telefono
     */
    public function setCodigoPostal($codigo_postal): self
    {
        $this->codigo_postal = $codigo_postal;

        return $this;
    }

    /**
     * Get the value of fax
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of fax
     */
    public function setTelefono($telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of linea_direccion1
     */
    public function getLineaDireccion1()
    {
        return $this->linea_direccion1;
    }

    /**
     * Set the value of linea_direccion1
     */
    public function setLineaDirecccion1($linea_direccion1): self
    {
        $this->linea_direccion1 = $linea_direccion1;

        return $this;
    }

    /**
     * Get the value of linea_direccion2
     */
    public function getLineaDireccion2()
    {
        return $this->linea_direccion2;
    }

    /**
     * Set the value of linea_direccion2
     */
    public function setLineaDirecccion2($linea_direccion2): self
    {
        $this->linea_direccion2 = $linea_direccion2;

        return $this;
    }

    
    public function registrarOficina(){
        $this->con->createConnection();
        $sql="insert into oficina (ciudad,
        pais,
        region,
        codigo_postal,
        telefono,
        linea_direccion1,
        linea_direccion2
        ) values (
        '$this->ciudad',
        '$this->pais',
        '$this->region',
        '$this->codigo_postal',
        '$this->telefono',
        '$this->linea_direccion1',
        '$this->linea_direccion2',
        )";
        echo $sql;
        echo "<br>";
        $this->con->executeQuery($sql);
    }
}