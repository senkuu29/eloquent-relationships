<?php

namespace App\Http\Controllers;
// mengimport model user
use App\Models\User;

class UserController extends Controller
{    
    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        //get users form Model
        $users = User::latest()->get();

        //passing user to view
        // mengirimkan data user ke dalam view menggunakan helper compact
        return view('users', compact('users'));
    }
}