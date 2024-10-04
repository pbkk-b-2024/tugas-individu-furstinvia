<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\KategoriResource; // Pastikan Anda mengimpor KategoriResource
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/kategori",
     *     tags={"Kategori"},
     *     summary="Get List of Kategori",
     *     description="Retrieve all kategori with pagination",
     *     operationId="kategoriIndex",
     *     @OA\Response(
     *         response="200",
     *         description="Successful operation",
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Unexpected error"
     *     )
     * )
     */
    public function index()
    {
        return KategoriResource::collection(Kategori::paginate(10)); // Menggunakan pagination
    }

    /**
     * @OA\Get(
     *     path="/api/kategori/{id}",
     *     tags={"Kategori"},
     *     summary="Get Kategori by ID",
     *     description="Retrieve specific kategori by its ID",
     *     operationId="kategoriSingle",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the Kategori",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful operation",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Kategori not found"
     *     )
     * )
     */
    public function single($id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        return new KategoriResource($kategori);
    }

    /**
     * @OA\Post(
     *     path="/api/kategori",
     *     tags={"Kategori"},
     *     summary="Create new Kategori",
     *     description="Create new kategori with required data",
     *     operationId="kategoriStore",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"nama_kategori"},
     *             @OA\Property(property="nama_kategori", type="string"),
     *         )
     *     ),
     *     @OA\Response(
     *         response="201",
     *         description="Kategori successfully created",
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Unexpected error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255', // Sesuaikan aturan validasi
        ]);

        try {
            $kategori = Kategori::create($request->all());
            return response()->json(['message' => 'Kategori berhasil ditambahkan', 'data' => new KategoriResource($kategori)], 201); // Menggunakan KategoriResource
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * @OA\Put(
     *     path="/api/kategori/{id}",
     *     tags={"Kategori"},
     *     summary="Update Kategori",
     *     description="Update kategori by its ID",
     *     operationId="kategoriUpdate",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the Kategori",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"nama_kategori"},
     *             @OA\Property(property="nama_kategori", type="string"),
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Kategori successfully updated",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Kategori not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        $request->validate([
            'nama_kategori' => 'required|string|max:255',
        ]);

        $kategori->update($request->all());

        return response()->json(['message' => 'Kategori berhasil diperbarui', 'data' => new KategoriResource($kategori)], 200);
    }

    /**
     * @OA\Delete(
     *     path="/api/kategori/{id}",
     *     tags={"Kategori"},
     *     summary="Delete Kategori",
     *     description="Delete kategori by its ID",
     *     operationId="kategoriDelete",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the Kategori",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Kategori successfully deleted",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Kategori not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $kategori = Kategori::find($id);

        if (!$kategori) {
            return response()->json(['message' => 'Kategori tidak ditemukan'], 404);
        }

        $kategori->delete();

        return response()->json(['message' => 'Kategori berhasil dihapus'], 200);
    }
}
