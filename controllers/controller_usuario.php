<?php

  // Clase controller_Usuario
    class Controller_Usuario {

      // Métodos
        public function mostrarTodos() {
          #1 Cargar el modelo de usuario
            require 'models/model_usuario.php';

          #2 Instancio el objeto Usuario
            $usuario = new model_Usuario('', '', '', '');

          // Lógica de la acción del controlador
          #3 Uso el método del modelo usuario para mostrar todos
            echo $usuario->conseguirTodos();

          #4 Requiero la vista correspondiente al método del modelo
            require_once 'views/usuarios/view_mostrarTodos.php';
        }

        public function crear() {
          #1 Cargar el modelo de usuario
            require 'models/model_usuario.php';

          // Lógica de la acción del controlador
          #2 Instancio el objeto Usuario
            $usuario = new model_Usuario('', '', '', '');

          #3 Uso el método del modelo usuario para crear
            echo $usuario->crear();

          #4 Requiero la vista correspondiente al método del modelo
          require_once 'views/usuarios/view_crear.php';
        }

        public function editar() {

          #1 Cargar el modelo de usuario
            require_once 'models/model_usuario.php';

          // Lógica de la acción del controlador
          #2 Instancio el objeto Usuario
            $usuario = new model_Usuario('', '', '', '');

          #3 Uso el método del modelo usuario para editar
            echo $usuario->editar();

          #4 Requiero la vista correspondiente al método del modelo
            require_once 'views/usuarios/view_editar.php';

        }

    }