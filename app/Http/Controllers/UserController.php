<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class UserController extends Controller
{
    public function show()
    {
        $users = DB::table('users')->select('name', 'email as userEmail')->get();

        return view('user.show', compact('users'));
    }

    public function all()
    {
        return __METHOD__;
    }

    public function showName($name)
    {
        $users = [
            'petr' => 'minsk',
            'slava' => 'moskow',
            'sergey' => 'pskov'
        ];

        return view('user.showName', [
            'name' => $name,
            'city' => $users[$name] ?? "Не найден",
            'arr' => ['test1', 'test2', 'test3'],
            'bold' => '<b>test</b>',
            'private' => false
        ]);
    }

    public function showFullName($name, $surname)
    {
        return view('user.showFullName', [
            'name' => $name,
            'surname' => $surname
        ]);
    }
}
 