<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $query = Course::with('teacher');

        if ($request->has('language') && $request->language != '') {
            $query->where('language', $request->language);
        }

        $courses = $query->get();
        $languages = Course::select('language')->distinct()->pluck('language');

        return view('courses.index', compact('courses', 'languages'));
    }

    public function home()
    {
        $courses = Course::with('teacher')->get();
        return view('home', compact('courses'));
    }

    public function create()
    {
        $teachers = Teacher::all();
        return view('courses.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'language' => 'required|string|max:40',
            'teacher_id' => 'required|exists:teachers,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        Course::create($validated);

        return redirect('/courses')->with('success', 'Course created successfully.');
    }

    public function edit(Course $course)
    {
        $teachers = Teacher::all();
        return view('courses.edit', compact('course', 'teachers'));
    }

    public function update(Request $request, Course $course)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:50',
            'language' => 'required|string|max:40',
            'teacher_id' => 'required|exists:teachers,id',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date' => 'required|date|after_or_equal:start_date',
        ]);

        $course->update($validated);

        return redirect('/courses')->with('success', 'Course updated successfully.');
    }

    public function destroy(Course $course)
    {
        $course->delete();

        return redirect('/courses')->with('success', 'Course deleted successfully.');
    }
}
