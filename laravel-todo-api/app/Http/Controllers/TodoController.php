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

    public function update(Request $request, $id)
    {
        try {
            $todo_to_be_updated=Todo::find($id);
            $todo_to_be_updated->update($request->all());
            return response()->json(['response' => 'todo updated successfully']);
        } catch (Exception $exception) {
            return response()->json(['exception' => $exception->getMessage()],400);
        }
    }
}
