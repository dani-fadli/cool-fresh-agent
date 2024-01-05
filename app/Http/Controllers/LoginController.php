<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Display a listing of the resource.
     */
    public function login()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    /**
     * Create new personal access token to user.
     *
     * @param LoginRequest $request
     * @return JsonResponse
     */
    public function postLogin(LoginRequest $request)
    {
        if (Auth::attempt($request->only(['code', 'password']))) {
            $request->session()->regenerate();

            $login =  response()->json([
                'message' => 'Login successful',
                'data' => [
                    'user' => Auth::user()->only([
                        'id', 'code', 'name', 'avatar_url'
                    ]),
                    'token' => Auth::user()->createToken('auth')->plainTextToken
                ]
            ]);
            $getLogin = Auth::user()->only([
                'id', 'code', 'name', 'avatar_url'
            ]);
            //dd($getLogin);
            return View('homePage',compact('getLogin'));
        }
        return View('homePage');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
