<?php

namespace App\Http\Controllers;

use App\Children;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Contacts;
use Image;
use File;

class ChildrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    protected $table=('childrens');
    public function index()
    {
        //
       // $users=DB::table('childrens')->count(); //-getting total row count
        $users=1;


       // dd($users);

        $children=Children::all();
        return view('children.index')->with(compact('users','children'));

        //return view('Children.index',['children'=>$children]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('Children.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Children $children)
    {
        $validatedData = $request->validate([
            'full_name'=>'required|min:10',
            'gender' => 'required',
            'vulnerability'=>'required',
            'education_level'=>'required',
        ]);


        $photo='default.jpg';
        if($request->hasFile('photo')){
            $destinationPath='/children_photo/';
            $file=$request->photo;
            $extension=$file->getClientOriginalExtension();
            $fileName=rand(0101,9999).$children->id.'-child_photo'.$extension;
            Image::make($file)->resize(400,300)->save(public_path('/children_photo/'.$fileName));
            $file->move($destinationPath,$fileName);

            $photo=$fileName;
        }
        //

        if (Auth::check()){
            $children=Children::create([
                'full_name'=>$request->input('full_name'),
                'gender'=>$request->input('gender'),
                'age'=>$request->input('age'),
                'vulnerability'=>$request->input('vulnerability'),
                'education_level'=>$request->input('education_level'),
                'photo'=>$photo,
            ]);
            if ($children){
                return redirect()->route('Admin.addChild')
                    ->with('success','Child Information Added Successfully');

            }
            return back()->withInput()->with('errors','Error in adding child information...try again!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function show(Children $children)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function edit(Children $child)
    {
        //
        $t_count=1;
        $users=DB::table('users')->count();
        $children=DB::table('childrens')->count();
        $messages=DB::table('contacts')->count();
        $projects=DB::table('projects')->count();
        $events=DB::table('charity_events')->count();

        $all_messages=Contacts::all();
        $children_details=Children::all();

        $child=Children::where('id',$child->id)->first();
       // dd($children);


        return view('Admin/children.editFile')->with(compact('child','t_count','users','children','messages','projects','events'
        ,'all_messages','children_details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Children $child)
    {
        //

        $photo='default.jpg';
        if($request->hasFile('photo')){
            $destinationPath='/children_photo/';
            $file=$request->photo;
            $extension=$file->getClientOriginalExtension();
            $fileName=rand(0101,9999).$child->id.'-child_photo'.$extension;
            Image::make($file)->resize(400,300)->save(public_path('/children_photo/'.$fileName));
            $file->move($destinationPath,$fileName);

            $photo=$fileName;
        }


            $childUpdate = Children::where('id', $child->id)
                ->update([
                    'full_name' => $request->input('full_name'),
                    'gender' => $request->input('gender'),
                    'age' => $request->input('age'),
                    'vulnerability' => $request->input('vulnerability'),
                    'education_level' => $request->input('education_level'),
                    'photo' => $photo,

                ]);

            if ($childUpdate) {
                return redirect()->route('Admin.viewChild')->with('success', 'Child Information updated successfully');
            }

        return back()->withInput();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */

    public function destroy(Children $child)
    {
        $findChild=Children::find($child->id);
        if($findChild->delete()){
            return redirect()->route('Admin.deleteChild')->with('success','Child deleted successfully');
        }
        return back()->withInput()->with('error','Could not delete child..Please try again');



    }
}
