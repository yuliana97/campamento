<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{


    //Obtener todos los cursos
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return response() -> json([ "success"=> true,
                                   "data" => Courses::all()] ,200);
    }

    //Crear un curso correspondiente a un bootcamp por id
    public function store(Request $request)
    {
        // Verificar los Datos del PayLoad
        // Guardar el nuevo Review
        return response()->json([
                                    "success"=> true,
                                    "data" => Courses::create($request->all())
                                ], 201); 
    }

    //Actualizar un curso con id especifico
    public function update(Request $request, $id)
    {
        //1. seleccionar el bootcamp a actualizar
        $b = Courses::find($id);
        //2.Actualizar ese bootcamp
        $b->update($request->all());
        //3.Enviar el bootcamp acttualizado
        return $b;     

        return response() -> json(["success"=> true,
                                   "data" => $b
                                   ] ,200);
    }
    //Borrar un curso con id especifico
    public function destroy($id)
    {
        $b = Courses::find($id);
        $b->delete();
        return $b;

        return response() -> json(["success"=> true,
                                   "data" => $b
                                  ] ,200);
    }
    //Obtener un curso por id
    public function show($id)
    {
        return response()->json([
                                    "success"=> true,
                                    "data" => Courses::find($id)
                                ], 200); 
    }
}
