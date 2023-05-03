<?php

namespace Controllers;

use Model\Usuario;
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
        $alertas = [];
        $usuario =  new Usuario;
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario->sincronizar($_POST);
            $alertas = $usuario->validarNuevaCuenta();

            if (empty($alertas)) {
                $existeUsuario = Usuario::where('email', $usuario->email);

            if ($existeUsuario) {
                Usuario::setAlerta('error', 'El usuario ya esta registrado');
                $alertas = Usuario::getAlertas();
            }else{
                //hashear password
                $usuario-> hashPassword();
                //eliminar password 2
                unset($usuario->password2);
                //crear token
                $usuario->crearToken();

                $resultado = $usuario->guardar();

                if ($resultado) {
                    header('Location: /mensaje');
                }
            }
            }
        }

        $router->render('auth/crear',[
            'titulo' => 'Crea tu cuenta en UpTask',
            'usuario' => $usuario,
            'alertas' => $alertas
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