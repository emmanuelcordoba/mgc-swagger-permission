<?php

namespace App\Http\Controllers;

use App\Models\EndpointPermission;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class SwaggerController extends Controller
{
    public function filteredDocs(Request $request)
    {
        $permissions = EndpointPermission::where('user_id', auth()->id())->get();

        // Cargar la documentación original
        $filePath = config('l5-swagger.defaults.paths.docs').'/'.config('l5-swagger.documentations.default.paths.docs_json');

        if (!file_exists($filePath)) {
            abort(404, 'Swagger documentation not found.');
        }

        $docs = json_decode(file_get_contents($filePath), true);

        // Filtro de rutas
        $docs['paths'] = array_filter(
            $docs['paths'],
            function ($methods, $route) use ($permissions) {
                // Si la ruta no está en los permisos, exclúyela
                if ($permissions->where('route',$route)->count() === 0) {
                    return false;
                }
                return true;
            }, ARRAY_FILTER_USE_BOTH);

        // Filtro de métodos
        foreach ($docs['paths'] as $route => $method) {
            $docs['paths'][$route] = array_filter($docs['paths'][$route], function ($details, $method) use ($route, $permissions) {
                if ($permissions->where('route', $route)->where('method', $method)->count() === 0) {
                    return false;
                }
                return true;
            },ARRAY_FILTER_USE_BOTH);
        }

        // Devolver la documentación filtrada
        return response()->json($docs);
    }
}
