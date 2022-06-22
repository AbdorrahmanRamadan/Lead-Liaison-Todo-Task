<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoResource;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return TodoResource::collection(Todo::all());
    }
}
