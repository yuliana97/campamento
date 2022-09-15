<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return response() -> json([ "success"=> true,
                                   "data" => Bootcamp::all()] ,200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //verificar si llegaron los datos del payload
        //analiza unba variable ver_dump

        return response() -> json(["success"=> true,
                                   "data" => Bootcamp::create($request->all())
                                   ] ,201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response() -> json(["success"=> true,
                                   "data" => Bootcamp::find($id)] ,200);

    } 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //1. seleccionar el bootcamp a actualizar
        $b = bootcamp::find($id);
        //2.Actualizar ese bootcamp
        $b->update($request->all());
        //3.Enviar el bootcamp acttualizado
        return $b;     

        return response() -> json(["success"=> true,
                                   "data" => $b
                                   ] ,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Bootcamp::find($id);
        $b->delete();
        return $b;

        return response() -> json(["success"=> true,
                                   "data" => $b
                                  ] ,200);
    }
}
