<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Annotation;

class UserController extends Controller
{

    public function index()
    {

        return response()->json(User::all());

    }

    public function store(Request $request)
    {

        $user = User::create($request->all());

        return response()->json($user, 201);

    }
}
