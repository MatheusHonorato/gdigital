<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Annotation;

class AnnotationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {

        $users = User::all();

        return $users;
    }

    public function store(Request $request)
    {

        $annotation = Annotation::create($request->all());

        return response()->json($user, 201);

    }

}
