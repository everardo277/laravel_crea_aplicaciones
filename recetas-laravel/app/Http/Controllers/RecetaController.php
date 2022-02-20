<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetaController extends Controller
{
    /*/metodo que retorna un saludo o vista

    public function hola(){

        //return "Un saludo desde el controlador receta ";
        return view('nosotros');
    }*/

    //cuando solo se tiene un solo metodo en un controlador se nombra invoke
    //para crear un controlador con un invoke se escribe el comando:
    //php artisa make:controller RecetaController -i 

    public function __invoke(Request $request){
        // arreglo para pasar datos del controlador a la vista

        $recetas = ['receta pizza', 'receta hamburguesa', 'receta tacos','receta ensalada'];
        $categorias = ['comida mexicana', 'comida china', 'comida argentina', 'postres'];
        
        //primer forma se coloca primero la carpeta recetas y despues el archivo index con:

        //return view('recetas.index')->with('recetas',$recetas)->with('categorias',$categorias);
        


        
        //segunda forma utilizar el metodo compact
        return view('recetas.index', compact('recetas','categorias'));
            


        /*
        $receta=[
            'nombre'=> 'pizza especial',
            'descripcion'=> 'pizza con peperonni'

        ];

        return $receta;
        */


    }
}
