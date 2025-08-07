<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all(); //Where('age', '>=', '18')->get(); // Fetch all users from the database
        return view('user.index', compact('users')); // ["users" => $users] Logic to display a list of users
    }

    public function create()
    {
        $user = new User; // Create a new instance of User
        $user->name = 'Jose Andres'; // Set the name property
        $user->email = 'joseandresrando@gmail.com'; // Set the email property
        $user->password = Hash::make('123456'); // Set the password property, hashed
        $user->age = 47; // Set the age property
        $user->address = 'Vergara 2764'; // Set the address property
        $user->zip_code = 7600; // Set the zip_code property
        $user->save(); // Save the user to the database

        User::create([
            'name' => 'Milo',
            'email' => 'milorando12@gmail.com',
            'password' => Hash::make('123456'),
            'age' => 12,
            'address' => 'Vergara 2764',
            'zip_code' => 7600,
        ]); // Create and save another user using the create method

        User::create([
            'name' => 'Gael',
            'email' => 'gaelrando12@gmail.com',
            'password' => Hash::make('123456'),
            'age' => 9,
            'address' => 'Vergara 2764',
            'zip_code' => 7600,
        ]);

        return redirect()->route('user.index');  // Redirect to the index route after creating users
    }
}
