<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard/dashboard');
    }

public function tarefas(Request $request){

//    $value = $request->session()->get('key');

    return view('dashboard/dashboard', compact('data1'));



//    $resultsemail = DB::select('select * from login where Email = :id', ['id' => $email ]);
}

}
