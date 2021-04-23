<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use App\Models\CourseClass;
use App\Models\Course;
use App\Models\Student;

class CourseClassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courseclasses = CourseClass::all();
        $courses = Course::all();
        $students = Student::all();

        return view('courseclasses.courseclasses', [
            'courseclasses' => $courseclasses,
            'courses' => $courses,
            'students' => $students,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $courseclasses = CourseClass::all();
        $courses = DB::select('select * from courses');

        return view('courseclasses.create', [
            'courseclasses' => $courseclasses,
            'courses' => $courses
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $courseclass = CourseClass::create([
            'course_id' => $request->input('course_id'),
            'name' => $request->input('name'),
            'subject' => $request->input('subject'),
            'description' => $request->input('description')
        ]);

        return redirect('/courses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $courseclass = CourseClass::find($id);
        $student = Student::all()
            ->where('course_id', null, $courseclass->course_id);

        return view('courseclasses.show')
            ->with('courseclass', $courseclass)
            ->with('student', $student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courseclass = CourseClass::find($id);
        $courses = DB::select('select * from courses');
        
        return view('courseclasses.edit')
            ->with('courseclass', $courseclass)
            ->with('courses', $courses);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $courseclass = CourseClass::where('id', $id)
            ->update([
                'course_id' => $request->input('course_id'),
                'name' => $request->input('name'),
                'subject' => $request->input('subject'),
                'description' => $request->input('description')
        ]);

        return redirect('/courses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseClass $courseclass)
    {
        $courseclass->delete();

        return redirect('/courses');
    }
}
