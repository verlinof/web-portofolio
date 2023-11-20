<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

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
     *   operationId="Get",
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

    /**
     * @OA\Post(
     *     path="/api/gallery",
     *     tags={"gallery"},
     *     summary="API Upload",
     *     description="API untuk mengirimkan data-data postingan",
     *     operationId="postGallery",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Data untuk mengunggah gambar",
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="title",
     *                     description="Judul Upload",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="description",
     *                     description="Deskripsi Gambar",
     *                     type="string"
     *                 ),
     *                 @OA\Property(
     *                     property="image",
     *                     description="File Gambar",
     *                     type="string",
     *                     format="binary"
     *                 ),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Successful operation"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => "required|max:255",
            "description" => "required",
            "image" => "required|image|max:3999"
        ]);

        if($request->hasFile('image')){
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $filenameSimpan = $filename . "_" . time() . "." . $extension;
            $image = Image::make($request->file('image'));
            $image->save('storage/posts/image/'.$filenameSimpan);

            $pathSquare = ('storage/posts/image_square/'.$filenameSimpan);
            $image->fit(500,500)->save($pathSquare);
                        
            Post::create([
                "title" => $request->title,
                "description" => $request->description,
                "image" => $filenameSimpan
            ]);
        }

        return redirect()->route('posts.index');
    }
}