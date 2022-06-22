<?php

namespace App\Http\Controllers;

use App\Http\Resources\TodoResource;
use App\Models\Todo;
use Exception;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        return TodoResource::collection(Todo::all());
    }

    public function store(Request $request)
    {
        try {
            return response()->json(new TodoResource(Todo::create($request->all())));
        } catch (Exception $exception) {
            return response()->json(['exception' => $exception->getMessage()],400);
        }
    }

    public function show($id)
    {
        try {
            return response()->json(new TodoResource(Todo::find($id)));
        } catch (Exception $exception) {
            return response()->json(['exception' => $exception->getMessage()],400);
        }
    }
}
