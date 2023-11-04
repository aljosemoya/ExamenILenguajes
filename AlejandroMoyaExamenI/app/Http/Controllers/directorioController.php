<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\directorio;
use App\Models\contacto;

class directorioController extends Controller
{
    public function showDirectorio(){
        //recuperar todos los directorios en base de datos para luego mostrarlos en la vista directorio
        $directorioVista = directorio::all();
        //llevar a la vista
        return view('directorio', compact ('directorioVista'));
    }
    
    public function AgregarContacto(){
    return view('crearEntrada');
   }
   
   public function EliminarContacto(){
    return view('eliminar');
   }

   public function BuscarContacto(){
    return view('buscar');
   }

   
   public function VerContacto(){
    return view('vercontactos');
   }
   
   public function EliminarAl(){
    return view('directorio');
   }

   public function NewDirectorio(Request $requestDirectorio){
    $Directorio = new directorio();
    $directorio->codigo = $requestDirectorio->input('codigo');
    $directorio->nombre = $requestDirectorio->input('nombre');
    $directorio->apellido = $requestDirectorio->input('apellido');
    $directorio->telefono = $requestDirectorio->input('telefono');
    $directorio->correo = $requestDirectorio->input('correo');

    $directorio->save();
    return view('directorio');
   }
   
   public function BuscarContactos($id){
    $contacto = contacto::fing($id);
   }

}





