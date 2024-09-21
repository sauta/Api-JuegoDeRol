<?php

namespace App\Http\Controllers;

use App\Models\Elemento;
use Illuminate\Http\Request;

class ElementoController extends Controller
{
    /**
     * Mostrar una lista de todos los elementos (GET).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // Traer todos los elementos, incluyendo sus relaciones con elementos débiles y fuertes
        $elementos = Elemento::with(['elementoDebil', 'elementoFuerte'])->get();

        // Retornar los elementos como JSON
        return response()->json($elementos, 200);
    }

    /**
     * Almacenar un nuevo elemento (POST).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $validatedData = $request->validate([
            'elemento' => 'required|string|max:100',
            'id_elemento_debil' => 'nullable|integer|exists:elementos,id_elemento',
            'id_elemento_fuerte' => 'nullable|integer|exists:elementos,id_elemento',
            'descripcion' => 'nullable|string|max:100',
        ]);

        // Crear el nuevo elemento
        $elemento = Elemento::create($validatedData);

        // Retornar el elemento creado como JSON
        return response()->json([
            'message' => 'Elemento creado exitosamente',
            'elemento' => $elemento,
        ], 201);
    }

    /**
     * Mostrar un elemento específico (GET).
     *
     * @param  \App\Models\Elemento  $elemento
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Elemento $elemento)
    {
        // Cargar las relaciones de elementos débiles y fuertes
        $elemento->load(['elementoDebil', 'elementoFuerte']);

        // Retornar el elemento como JSON
        return response()->json($elemento, 200);
    }

    /**
     * Actualizar un elemento existente (PUT/PATCH).
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Elemento  $elemento
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Elemento $elemento)
    {
        // Validar los datos recibidos
        $validatedData = $request->validate([
            'elemento' => 'required|string|max:100',
            'id_elemento_debil' => 'nullable|integer|exists:elementos,id_elemento',
            'id_elemento_fuerte' => 'nullable|integer|exists:elementos,id_elemento',
            'descripcion' => 'nullable|string|max:100',
        ]);

        // Actualizar el elemento
        $elemento->update($validatedData);

        // Retornar el elemento actualizado como JSON
        return response()->json([
            'message' => 'Elemento actualizado exitosamente',
            'elemento' => $elemento,
        ], 200);
    }

    /**
     * Eliminar un elemento (DELETE).
     *
     * @param  \App\Models\Elemento  $elemento
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Elemento $elemento)
    {
        // Eliminar el elemento
        $elemento->delete();

        // Retornar una respuesta exitosa
        return response()->json([
            'message' => 'Elemento eliminado exitosamente',
        ], 200);
    }
}
