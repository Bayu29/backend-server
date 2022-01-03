<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return Student::all();
    }

    public function show($id)
    {
        return Student::find($id);
    }

    public function store(Request $request)
    {
        return Student::create($request->all());
    }

    public function delete(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return 204;
    }
}
