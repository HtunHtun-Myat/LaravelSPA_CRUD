<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * 
     *
     * @return $user
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('index', compact('users'));
    }

    /**
     * Create user
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        $user = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('secret'),
            'created_at' => now(),
            'updated_at' => now(),
        ];

        User::create($user);
        
        // return redirect()->route('index');
    }
}
