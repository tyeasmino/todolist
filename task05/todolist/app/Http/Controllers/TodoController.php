<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

    protected $todo;
    public function __construct() {
        $this->todo = new Todo();
    }

    public function index()
    {
        try {
            return response()->json($this->todo->all(), 200);
        } catch(\Exception $e) {
            return response()->json(['error' => 'Internal server error'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $todo = $this->todo->create($request->all());
            return response()->json($todo, 201);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 500);
        }
    }
 
    public function show(string $id)
    {
        try {
            $todo = $this->todo->find($id);
            if(!$todo) {
                return response()->json(['error' => 'Todo not found'], 404);
            }
            return response()->json($todo, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => $e], 500);
        }
    } 

    public function update(Request $request, string $id)
    {
        try {
            $todo = $this->todo->find($id);
            if(!$todo) {
                return response()->json(['error' => 'Todo not found'], 404);
            }
            $todo->update($request->all());
            return response()->json($todo, 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            $todo = $this->todo->find($id);
            if(!$todo) {
                return response()->json(['error' => 'Todo not found'], 404);
            }
            $todo->delete();
            return response()->json(['error' => 'Todo Deleted Successfully'], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Internal Server Error'], 500);
        }
    }
}
