<?php

namespace App\Http\Controllers;

use App\Staff_members;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $photo='default.jpg';

        $staff=Staff_members::create([
            'first_name'=>$request->input('first_name'),
            'middle_name'=>$request->input('middle_name'),
            'last_name'=>$request->input('last_name'),
            'age'=>$request->input('age'),
            'gender'=>$request->input('gender'),
            'position'=>$request->input('position'),
            'photo'=>$photo,

        ]);

        if($staff){
            return redirect()->route('Admin.addStaff')->with('success','Staff information added successfully');

        }
        return back()->withInput()->with('error');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff_members  $staff_members
     * @return \Illuminate\Http\Response
     */
    public function show(Staff_members $staff_members)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff_members  $staff_members
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff_members $staff_members)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff_members  $staff_members
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff_members $staff_members)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff_members  $staff_members
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff_members $staff_members)
    {
        //
    }
}
