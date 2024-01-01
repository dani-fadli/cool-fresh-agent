<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    /**
     * Create new personal access token to user.
     *
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function login(LoginRequest $request): JsonResponse
    {
        if (Auth::attempt($request->only(['code', 'password']))) {
            $request->session()->regenerate();

            return response()->json([
                'message' => 'Login successful',
                'data' => [
                    'user' => Auth::user()->only([
                        'id', 'code', 'name', 'avatar_url'
                    ]),
                    'token' => Auth::user()->createToken('auth')->plainTextToken
                ]
            ]);
        }

        return response()->json([
            'message' => 'Login failed'
        ], Response::HTTP_UNAUTHORIZED);
    }

    /**
     * Delete personal access tokens of a user
     *
     * @return JsonResponse
     */
    public function logout(): JsonResponse
    {
        Auth::user()->tokens()->delete();

        return response()->json([
            'message' => 'Logout successful'
        ]);
    }
}
