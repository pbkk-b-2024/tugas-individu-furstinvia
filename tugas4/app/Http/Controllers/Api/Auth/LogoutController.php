<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController
{
    /**
 * @OA\Post(
 *     path="/api/logout",
 *     tags={"Auth"},
 *     summary="User Logout",
 *     description="Revoke the token for the authenticated user.",
 *     operationId="userLogout",
 *     security={{"sanctum": {}}},
 *     @OA\Response(
 *         response="200",
 *         description="Logout successful",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Logout berhasil")
 *         )
 *     ),
 *     @OA\Response(
 *         response="401",
 *         description="Unauthorized",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Unauthorized")
 *         )
 *     )
 * )
 */

    public function __invoke(Request $request)
    {
        // Hapus token yang digunakan oleh user saat ini
        $request->user()->currentAccessToken()->delete();

        return response()->json(['message' => 'Logout berhasil'], 200);
    }
}
