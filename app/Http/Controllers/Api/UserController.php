<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     title="API Documentation",
 *     version="1.0.0",
 *     description="Documentación de la API."
 * )
 */
class UserController extends Controller
{

    /**
     * @OA\Get(
     *     path="/users",
     *     tags={"Users"},
     *     summary="Listado de usuarios",
     *     description="Descripción del endpoint de ejemplo.",
     *     @OA\Response(
     *         response=200,
     *         description="Respuesta exitosa"
     *     )
     * )
     */
    public function index()
    {
        //
    }

    /**
     * @OA\Post(
     *     path="/users",
     *     tags={"Users"},
     *     summary="Crear un usuario",
     *     description="Descripción del endpoint de ejemplo.",
     *     @OA\Response(
     *         response=200,
     *         description="Respuesta exitosa"
     *     )
     * )
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @OA\Get(
     *     path="/users/{id}",
     *     tags={"Users"},
     *     summary="Mostrar un usuario",
     *     description="Descripción del endpoint de ejemplo.",
     *     @OA\Response(
     *         response=200,
     *         description="Respuesta exitosa"
     *     )
     * )
     */
    public function show(string $id)
    {
        //
    }


    /**
     * @OA\Put(
     *     path="/users/{id}",
     *     tags={"Users"},
     *     summary="Actualizar un usuario",
     *     description="Descripción del endpoint de ejemplo.",
     *     @OA\Response(
     *         response=200,
     *         description="Respuesta exitosa"
     *     )
     * )
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * @OA\Delete(
     *     path="/users/{id}",
     *     tags={"Users"},
     *     summary="Borrar un usuario",
     *     description="Descripción del endpoint de ejemplo.",
     *     @OA\Response(
     *         response=200,
     *         description="Respuesta exitosa"
     *     )
     * )
     */
    public function destroy(string $id)
    {
        //
    }
}
