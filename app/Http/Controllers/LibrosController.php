<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;

class LibrosController extends Controller
{
    public function index()
    {
        $libro = libro::all();
        return response()->json($libro, 200); // crea un json con los datos de la tabla libros
    }

    public function show($id)
    {
        $libro = libro::find($id);

        if ($libro) {
            return response()->json($libro, 200);
        } else {
            return response()->json('No se encontro el libro', 404);
        }
    }

    public function store(Request $request)
    {
        $datos = $request->validate([
            'titulo' => 'required',
            'precio' => 'required'
        ]);
        
        $libro = Libro::create($datos); // crea un registro en la tabla libros
        return response()->json($libro, 201);
    }

    public function update(Request $request, $id)
    {
        $libro = libro::find($id);
        // validar título y percio que vengan informados y en caso contrario devolver un 400

        if ($request->titulo && $request->precio) {
            return response()->json($libro, 200);
        } else {
            return response()->json('Petición incorrecta o incompleta', 400);
        }
        $libro->update($request->all()); // modifica un registro de la tabla libros

        

    }

    public function delete($id)
    {
        if (libro::destroy($id)) { // elimina un registro de la tabla libros
            return response()->json('Libro eliminado correctamente', 200);
        } else {
            return response()->json('No se encontro el libro', 404);
        }
    }

}


// Path: app\Http\Controllers\LibrosController.php