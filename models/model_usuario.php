<?php

  // Clase Usuario
    class model_Usuario {

      // Propiedades
        private $nombre;
        private $apellidos;
        private $email;
        private $password;

      // Método constructor
        public function __construct($nombre, $apellidos, $email, $password) {
          $this->nombre = $nombre;
          $this->apellidos = $apellidos;
          $this->email = $email;
          $this->password = $password;
        }


      // Método destructor
        public function __destruct() {}


      // Métodos Getter
        public function getNombre() {
          return $this->nombre;
        }

        public function getApellidos() {
          return $this->apellidos;
        }

        public function getEmail() {
          return $this->email;
        }

        public function getPassword() {
          return $this->password;
        }


      // Métodos Setter
        public function setNombre($nombre) {
          $this->nombre = $nombre;
          return $this;
        }

        public function setApellidos($apellidos) {
          $this->apellidos = $apellidos;
          return $this;
        }

        public function setEmail($email) {
          $this->email = $email;
          return $this;
        }

        public function setPassword($password) {
          $this->password = $password;
          return $this;
        }

        //? MODELO DIDÁCTICO: conseguirTodos()
          public function conseguirTodos() {
            return 'Extraigo y muestro todos los usuarios';
          }

        //? MODELO DIDÁCTICO: crear()
          public function crear() {
            require_once 'views/usuarios/view_crear.php';
          }

        //? MODELO DIDÁCTICO: editar()
          public function editar() {
            require_once 'views/usuarios/view_editar.php';
          }

    }