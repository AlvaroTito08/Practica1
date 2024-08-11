<?php
include_once "conexion/conexionBase.php";
class Empleado {
    private $codigo_empleado;
    private $nombre;
    private $apellido1;
    private $apellido2;
    private $extension;
    private $emaill;
    private $codigo_jefe;
    private $puesto;
    private $con;

    public function __construct()
    {
        $this->codigo_empleado=null;
        $this->nombre="";
        $this->apellido1="";
        $this->apellido2="";
        $this->extension="";
        $this->emaill="";
        $this->codigo_jefe="";
        $this->puesto="";
        $this->con= new ConexionBase();
    }

    /**
     * Get the value of codigo_cliente
     */
    public function getCodigoEmpleado()
    {
        return $this->codigo_empleado;
    }

    /**
     * Set the value of codigo_cliente
     */
    public function setCodigoEmpleado($codigo_empleado): self
    {
        $this->codigo_empleado = $codigo_empleado;

        return $this;
    }

    /**
     * Get the value of nombre_cliente
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre_cliente
     */
    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of nombre_contacto
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set the value of nombre_contacto
     */
    public function setApellido1($apellido1): self
    {
        $this->apellido1 = $apellido1;

        return $this;
    }

    /**
     * Get the value of apellido_contacto
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set the value of apellido_contacto
     */
    public function setApellido2($apellido2): self
    {
        $this->apellido2 = $apellido2;

        return $this;
    }

    /**
     * Get the value of telefono
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the value of telefono
     */
    public function setExtension($extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get the value of fax
     */
    public function getEmaill()
    {
        return $this->emaill;
    }

    /**
     * Set the value of fax
     */
    public function setEmaill($emaill): self
    {
        $this->emaill = $emaill;

        return $this;
    }

    /**
     * Get the value of linea_direccion1
     */
    public function getCodigoJefe()
    {
        return $this->codigo_jefe;
    }

    /**
     * Set the value of linea_direccion1
     */
    public function setCodigoJefe($codigo_jefe): self
    {
        $this->codigo_jefe = $codigo_jefe;

        return $this;
    }

    /**
     * Get the value of linea_direccion2
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Set the value of linea_direccion2
     */
    public function setPuesto($puesto): self
    {
        $this->puesto = $puesto;

        return $this;
    }

    
    public function registrarEmpleado(){
        $this->con->createConnection();
        $sql="insert into empleado (nombre,
        apellido1,
        apellido2,
        extension,
        emaill,
        codigo_jefe,
        puesto
        ) values (
        '$this->nombre',
        '$this->apellido1',
        '$this->apellido2',
        '$this->extension',
        '$this->emaill',
        '$this->codigo_jefe',
        '$this->puesto',
        )";
        echo $sql;
        echo "<br>";
        $this->con->executeQuery($sql);
    }
}