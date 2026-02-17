<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{
    public function index(Request $request)
    {
        $admin = Role::create(['name' => 'Admin']);
        $editor = Role::create(['name' => 'Editor']);

        $user = User::create([
            'name' => 'Jass',
            "email" => 'dummy@gmail.com',
            "password" => Hash::make("Jass@123")
        ]);

        $user->roles()->attach([$admin->id, $editor->id]);

        return redirect('fetch-data');
    }

    public function fetchData(Request $request)
    {
       $user = User::with('roles')->find(1);
        return redirect()->back()->with("success", "User Data fetched successfully.");
    }
}
