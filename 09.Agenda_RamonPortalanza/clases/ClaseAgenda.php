<?php 

    class Contacto 
    {
        //atributos
        public $_nombre;
        public $_apellido; 
        public $_telefono;

        //CONSTRUCTOR
        function __construct($nombre, $apellido, $telefono) 
        { //se ejecuta siempre al crear el objecto
            $this->_nombre = $nombre;  //this hace referencia al nombre
            $this->_apellido = $apellido;  //this hace referencia al apellido
            $this->_telefono = $telefono;  //this hace referencia a la edad
        }
    }

?>