<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    //Crear una Review para un Bootcamp
    public function store(Request $request)
    {
        // Verificar los Datos del PayLoad
        // Guardar el nuevo Review
        return response()->json([
                                    "success"=> true,
                                    "data" => Reviews::create($request->all())
                                ], 201); 
    }

    //Actualizar Review con id específico

    public function update(Request $request, $id)
    {
        // 1. Selecionar el Review a actualizar
        $b = Reviews::find($id);

        // 2. Actualizar el Review
        $b->update($request->all());

        // 3. Enviar el Review actualizado
        return response()->json([
                                    "success"=> true,
                                    "data" => $b
                                ], 200); 
    }

    //Obtener un review por id
    public function show($id)
    {
        return response() -> json(["success"=> true,
                                   "data" => Reviews::find($id)] ,200);

    } 
    //Listar todos los reviews
    public function index()
    {
        return response()->json([
                                    "success"=> true,
                                    "data" => Reviews::all()
                                ], 200); 
    }
}
