<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storemst_userRequest;
use App\Http\Requests\Updatemst_userRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\mst_user;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MstUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function handleLogin(Request $request) {
        // request()->validate(
        //     [
        //         'username' => 'required',
        //         'password' => 'required',
        //     ]);

        //     $kredensil = $request->only('username','password');

        //     if (Auth::guard('user')->attempt($kredensil)) {
        //         $user = Auth::user();
        //         if ($user->level == 'admin') {
        //             return redirect()->intended('home');
        //         } elseif ($user->level == 'editor') {
        //             return redirect()->intended('home');
        //         }
        //         return redirect()->intended('/');
        //     }

        // return redirect('login')
        // $kredensil = $request->only('username','password');
        if (Auth::guard('user')->attempt(['username'=> $request->username,'password'=>$request->password], $request->remember)){
            return redirect('home');
        }
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storemst_userRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(mst_user $mst_user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(mst_user $mst_user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatemst_userRequest $request, mst_user $mst_user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(mst_user $mst_user)
    {
        //
    }
}
