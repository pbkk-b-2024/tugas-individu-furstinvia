<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\BarangResource; // Pastikan Anda mengimpor BarangResource
use App\Models\Barang;
use Illuminate\Http\Request;
use Validator;

class BarangController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/barang",
     *     tags={"Barang"},
     *     summary="Get List of Barang",
     *     description="Retrieve all barang with pagination",
     *     operationId="barangIndex",
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
        return BarangResource::collection(Barang::with('kategori')->get());
    }

    /**
     * @OA\Get(
     *     path="/api/barang/{id}",
     *     tags={"Barang"},
     *     summary="Get Barang by ID",
     *     description="Retrieve specific barang by its ID",
     *     operationId="barangSingle",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the Barang",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful operation",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Barang not found"
     *     )
     * )
     */
    public function single($id)
    {
        $barang = Barang::with('kategori')->find($id);

        if (!$barang) {
            return response()->json(['message' => 'Barang tidak ditemukan'], 404);
        }

        return new BarangResource($barang);
    }

    /**
     * @OA\Post(
     *     path="/api/barang",
     *     tags={"Barang"},
     *     summary="Create new Barang",
     *     description="Create new barang with required data",
     *     operationId="barangStore",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"kode_barang", "nama_barang", "id_kategori", "harga", "jumlah"},
     *             @OA\Property(property="kode_barang", type="string"),
     *             @OA\Property(property="nama_barang", type="string"),
     *             @OA\Property(property="id_kategori", type="integer"),
     *             @OA\Property(property="harga", type="number"),
     *             @OA\Property(property="jumlah", type="integer"),
     *         )
     *     ),
     *     @OA\Response(
     *         response="201",
     *         description="Barang successfully created",
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Unexpected error"
     *     )
     * )
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'id_kategori' => 'required|integer|exists:kategori,id',
            'harga' => 'required|numeric',
            'jumlah' => 'required|integer',
        ]);

        try {
            $barang = Barang::create($request->all());
            return response()->json(['message' => 'Barang berhasil ditambahkan', 'data' => new BarangResource($barang)], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    /**
     * @OA\Put(
     *     path="/api/barang/{id}",
     *     tags={"Barang"},
     *     summary="Update Barang",
     *     description="Update barang by its ID",
     *     operationId="barangUpdate",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the Barang",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"kode_barang", "nama_barang", "id_kategori", "harga", "jumlah"},
     *             @OA\Property(property="kode_barang", type="string"),
     *             @OA\Property(property="nama_barang", type="string"),
     *             @OA\Property(property="id_kategori", type="integer"),
     *             @OA\Property(property="harga", type="number"),
     *             @OA\Property(property="jumlah", type="integer"),
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Barang successfully updated",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Barang not found"
     *     )
     * )
     */
    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        if (!$barang) {
            return response()->json(['message' => 'Barang tidak ditemukan'], 404);
        }

        $request->validate([
            'kode_barang' => 'required|string|max:255',
            'nama_barang' => 'required|string|max:255',
            'id_kategori' => 'required|integer|exists:kategori,id',
            'harga' => 'required|numeric',
            'jumlah' => 'required|integer',
        ]);

        $barang->update($request->all());

        return response()->json(['message' => 'Barang berhasil diperbarui', 'data' => new BarangResource($barang)], 200);
    }

    /**
     * @OA\Delete(
     *     path="/api/barang/{id}",
     *     tags={"Barang"},
     *     summary="Delete Barang",
     *     description="Delete barang by its ID",
     *     operationId="barangDelete",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of the Barang",
     *         required=true,
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Barang successfully deleted",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Barang not found"
     *     )
     * )
     */
    public function destroy($id)
    {
        $barang = Barang::find($id);

        if (!$barang) {
            return response()->json(['message' => 'Barang tidak ditemukan'], 404);
        }

        $barang->delete();

        return response()->json(['message' => 'Barang berhasil dihapus'], 200);
    }

    /**
     * @OA\Get(
     *     path="/api/barang/search",
     *     tags={"Barang"},
     *     summary="Search Barang",
     *     description="Search barang by keyword in nama_barang",
     *     operationId="barangSearch",
     *     @OA\Parameter(
     *         name="search",
     *         in="query",
     *         description="Keyword to search for barang",
     *         required=false,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Barang search result",
     *     ),
     *     @OA\Response(
     *         response="default",
     *         description="Unexpected error"
     *     )
     * )
     */
    public function search(Request $request)
    {
        $keyword = $request->input('search');

        $barang = $keyword 
            ? Barang::with('kategori')->where('nama_barang', 'like', "%" . $keyword . "%")->paginate(5)
            : Barang::with('kategori')->paginate(5);

        return BarangResource::collection($barang);
    }
}
