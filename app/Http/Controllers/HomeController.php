<?php

namespace App\Http\Controllers;

use App\Models\OrderReturn;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = [
            'total_agent' => 0,
            'total_order' => Auth::user()->orders()->count(),
            'total_return' => OrderReturn::query()->whereHas('order', function ($query) {
                $query->where('agent_id', Auth::user()->id);
            })->count()
        ];
        return view('homePage', compact('data'));
    }
}
