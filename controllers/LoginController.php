<?php

namespace Controllers;

use MVC\Router;

class LoginController{

    public static function login(Router $router){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }

        $router->render('auth/login',[
            'titulo' => 'Iniciar Sesión'
        ]);
    }

    public static function logout(){

    
    }

    public static function crear(Router $router){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }

        $router->render('auth/crear',[
            'titulo' => 'Crea tu cuenta en UpTask'
        ]);
    }

    public static function olvide(Router $router){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
        }

        $router->render('auth/olvide',[
            'titulo' => 'Recupera tu cuenta de UpTask'
        ]);
    }

    public static function reestablecer(Router $router){

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
        }

        $router->render('auth/reestablecer',[
            'titulo' => 'Reestablece tu password'
        ]);
    }

    public static function mensaje(Router $router){
    

        $router->render('auth/mensaje',[
            'titulo' => 'Cuenta creada exitosamente'
        ]);
    
    }

    public static function confirmar(Router $router){

        $router->render('auth/confirmar',[
            'titulo' => 'Confirmar Cuenta'
        ]);
    
    }
}