<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:30',
            'email' => 'required|email|max:50|unique:teachers,email',
            'language' => 'required|string|max:30',
            'phone_number' => 'required|string|max:11',
        ]);

        Teacher::create($validated);

        return redirect('/teachers')->with('success', 'Teacher created successfully.');
    }

    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:30',
            'surname' => 'required|string|max:30',
            'email' => 'required|email|max:50|unique:teachers,email,' . $teacher->id,
            'language' => 'required|string|max:30',
            'phone_number' => 'required|string|max:11',
        ]);

        $teacher->update($validated);

        return redirect('/teachers')->with('success', 'Teacher updated successfully.');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect('/teachers')->with('success', 'Teacher deleted successfully.');
    }
}
