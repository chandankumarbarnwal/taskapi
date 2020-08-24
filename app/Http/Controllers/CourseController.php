<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function view()
    {
        return view('course.index');
    }


    public function index()
    {
        $course = Course::all();
        $result = ['status' => 200, 'data' => $course];

        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "string";

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = [
            'course_name' => $request->input('course_name'),
            'course_provider_name' => $request->input('course_provider_name'),
            'thumbnail_url' => $request->input('thumbnail_url'),
            'start_date' => $request->input('start_date'),
            'end_date' => $request->input('end_date')
        ];

        $course = new Course;           
        $course->create($data);
        $result = ['status' => 200, 'message' => "Data created successfully."];

        return $result;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        
        $course = Course::findOrFail($id);
        $course->course_name = $request->input('course_name');
        $course->course_provider_name = $request->input('course_provider_name');
        $course->thumbnail_url = $request->input('thumbnail_url');
        $course->start_date = $request->input('start_date');
        $course->end_date = $request->input('end_date');

        $course->save();
         $result = ['status' => 200, 'message' => "Data updated successfully."];

        return $result;


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $course = Course::findOrFail($id);

        Course::destroy($id);
        $result = ['status' => 200, 'message' => "Data deleted successfully."];

        return $result;
    }
}
