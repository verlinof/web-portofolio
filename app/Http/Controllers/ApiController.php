<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

/**
 * @OA\Info(
 *     description="Contoh API doc menggunakan OpenAPI/Swagger",
 *     version="0.0.1",
 *     title="Contoh API documentation",
 *     termsOfService="http://swagger.io/terms/",
 *     @OA\Contact(
 *         email="choirudin.emcha@gmail.com"
 *     ),
 *     @OA\License(
 *         name="Apache 2.0",
 *         url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *     )
 * )
 */

class ApiController extends Controller
{
    /**
     * @OA\Get(
     *   path="/api/gallery",
     *   tags={"gallery"},
     *   summary="Returns a Gallery API",
     *   description="API for accessing the Gallery",
     *   operationId="gallery",
     *   @OA\Response(
     *     response="default",
     *     description="successful operation"
     *   )
     * )
     */

    public function index()
    {
        $post = Post::all();

        return response()->json([
            "data" => $post 
        ]);
    }
}