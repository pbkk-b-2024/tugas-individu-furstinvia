<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class LoginController extends Controller
{
    /**
 * @OA\Post(
 *     path="/api/login",
 *     tags={"Auth"},
 *     summary="User Login",
 *     description="Authenticate user and return a token.",
 *     operationId="userLogin",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"email", "password"},
 *             @OA\Property(property="email", type="string", format="email", example="user@example.com"),
 *             @OA\Property(property="password", type="string", example="password123"),
 *         )
 *     ),
 *     @OA\Response(
 *         response="200",
 *         description="Login successful",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Login berhasil"),
 *             @OA\Property(property="token", type="string", example="your_access_token"),
 *             @OA\Property(property="user", type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="name", type="string", example="John Doe"),
 *                 @OA\Property(property="email", type="string", example="user@example.com")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response="422",
 *         description="Validation error",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="The provided credentials are incorrect."),
 *             @OA\Property(property="errors", type="object",
 *                 @OA\Property(property="email", type="array",
 *                     @OA\Items(type="string", example="The provided credentials are incorrect.")
 *                 )
 *             )
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
        // Validasi request
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Cari user berdasarkan email
        $user = User::where('email', $credentials['email'])->first();

        // Cek apakah user ada dan password sesuai
        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        // Membuat token untuk user yang berhasil login
        $token = $user->createToken('user login')->plainTextToken;

        // Mengembalikan response dengan token
        return response()->json([
            'message' => 'Login berhasil',
            'token' => $token,
            'user' => $user // Optional: Mengembalikan data user yang login
        ], 200);
    }
}
