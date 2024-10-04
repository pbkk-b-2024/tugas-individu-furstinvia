<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController
{
    /**
 * @OA\Post(
 *     path="/api/register",
 *     tags={"Auth"},
 *     summary="User Registration",
 *     description="Register a new user.",
 *     operationId="userRegister",
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(
 *             required={"nama", "email", "password"},
 *             @OA\Property(property="nama", type="string", example="John Doe"),
 *             @OA\Property(property="email", type="string", format="email", example="johndoe@example.com"),
 *             @OA\Property(property="password", type="string", format="password", example="password1234")
 *         )
 *     ),
 *     @OA\Response(
 *         response=201,
 *         description="Registration successful",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="Register berhasil"),
 *             @OA\Property(
 *                 property="data", 
 *                 type="object",
 *                 @OA\Property(property="id", type="integer", example=1),
 *                 @OA\Property(property="nama", type="string", example="John Doe"),
 *                 @OA\Property(property="email", type="string", example="johndoe@example.com"),
 *                 @OA\Property(property="level", type="string", example="pengunjung")
 *             )
 *         )
 *     ),
 *     @OA\Response(
 *         response=422,
 *         description="Validation error",
 *         @OA\JsonContent(
 *             @OA\Property(property="message", type="string", example="The given data was invalid."),
 *             @OA\Property(property="errors", type="object")
 *         )
 *     )
 * )
 */

    public function __invoke(Request $request)
    {
        $validated = $this->validator($request->all())->validate();
        $user = $this->create($validated);

        return (new UserResource($user))->additional([
            'message' => 'Register berhasil',
        ]);
    }

    protected function create(array $data): User
    {
        return User::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'level' => 'Admin', // Atur default level pengguna
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:3'],
        ]);
    }
}
