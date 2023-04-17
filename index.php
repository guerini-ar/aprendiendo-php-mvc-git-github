<?php



  // Requiero el controller_usuario.php
    require_once 'controllers/controller_usuario.php';
    require_once 'models/model_usuario.php';

  // Instancio un Usuario
    $usuario = new model_Usuario('Ger', 'Gue', 'gueri@gmail.com', '1234');
    var_dump($usuario);
    echo $usuario->conseguirTodos();



  // Instancio un usuario
    $usuario2 = new model_Usuario('Mari', 'Guezo', 'mari@gmail.com', '5678');
    var_dump($usuario2);

  // Cargo la vista de crear
    $usuario2->crear();




  // Instancio un usuario
    $usuario3 = new model_Usuario('Milo', 'Guerini Guezo', 'milo@gmail.com', '4321');
    var_dump($usuario3);

  // Cargo la vista de editar
    $usuario3->editar();