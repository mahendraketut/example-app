<?php

namespace App\Http\Controllers;

use App\Models\School;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $school = School::all();
        return view('school/index', ['school' => $school]);
        // return view('school/index');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //id generator using haruncpi/laravel-id-generator
        $config = [
            'table' => 'schools',
            'field' => 'schoolId',
            'length' => 6,
            'prefix' => 'SCH'
        ];

        //using id generator to save to schoolid column in schools table
        $schoolId = IdGenerator::generate($config);

        $this->validate(request(), [
            //put fields to be validated here
            'schoolname' => 'required',
            'schooladdress' => 'required',
            'schoolcity' => 'required',
        ]);

        $school = new School();
        $school->schoolId = $schoolId;
        $school->schoolname = $request['schoolname'];
        $school->schooladdress = $request['schooladdress'];
        $school->schoolcity = $request['schoolcity'];
        $school->save();
        return redirect()->route('school-index')->with('success', 'School created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function show(School $school)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, School $school)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\School  $school
     * @return \Illuminate\Http\Response
     */
    public function destroy(School $school)
    {
        //
    }
}