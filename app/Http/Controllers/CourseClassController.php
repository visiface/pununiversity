<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseClass;
use App\Models\Course;

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

        return view('courseclasses.courseclasses', [
            'courseclasses' => $courseclasses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        
        return view('courseclasses.create')
            ->with('courses', $courses);
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

        return view('courses.show')
            ->with('courseclass', $courseclass);
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
        $courses = Course::all();
        

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
