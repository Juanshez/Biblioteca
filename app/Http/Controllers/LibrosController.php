<?php

namespace App\Http\Controllers;

use App\Libros_Socios;
use App\Libros;
use App\Socios;
use illuminate\http\Request;
use DB;
use App\Http\Middleware\Authenticate;

class LibrosController extends Controller
{
    function Mostrarlibros(Request $request)
    {
        try {
        if ($request->isMethod('get')) {
            $r = Libros::all();
            $r = array('Exitoso' => 200);
            }    
        } catch (Exception $e) {
            $r = array('Fallido' => 500, 'sms' => $e->getMessage());
        }
        return response()->json($r,200);
    }

    function Ingresarlibros(Request $request)
    {
        try {
            if ($request->isMethod('post')) {
                $r = Libros::create($request->all());
            }
        } catch (Exception $e) {
            $r = array('Fallido' => 500, 'sms' => $e->getMessage());   
        }
        return response()->json($r,200);
    }

    function RegistrarPrestamoLibros(Request $request)
    {
        try {
            if ($request->isMethod('post')) {
                $soc = Libros_Socios::create($request->all());
                $r = array('Registro Exitoso' => 200);
            }
        } catch (Exception $e) {
            $r = array('error' => $e->getMessage());
        }
        return response()->json($r,200);
    }

    function ActualizarLibros(Request $request, $algo)
    {
        try {
            if ($request->isMethod('put')) {
                # code...
                $act = DB::$table()
                ->where();
                $r = array('Registro Exitoso' => 200);
            }
        } catch (Exception $e) {
            $r = array('error' => $e->getMessage());
        }
        return response()->json($r,200);
    }

    function EliminarLibros(Request $request, $algo)
    {
        $del = Libros::find($algo);
        
    }

    function RegistrarSocio(Request $request)
    {
        try {
            if ($request->isMethod('post')) {
                $soc = Socios::create($request->all());
                $r = array('Registro Exitoso' => 200);
            }
        } catch (Exception $e) {
            $r = array('error' => $e->getMessage());
        }
        return response()->json($r,200);
    }
}
