<?php

namespace App\Http\Controllers;

use App\Children;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Contacts;

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
        return view('Children.index')->with(compact('users','children'));

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


        $request=request();
       $profileImage=$request->file('photo');
        $profileImageSaveAsName=time().$children->id."-profile".
        $profileImage->getClientOriginalExtension();
        $upload_path='children_photo/';
        $profileImage_url=$upload_path.$profileImageSaveAsName;
        $success=$profileImage->move($upload_path,$profileImageSaveAsName);
        //

        if (Auth::check()){
            $children=Children::create([
                'full_name'=>$request->input('full_name'),
                'gender'=>$request->input('gender'),
                'age'=>$request->input('age'),
                'vulnerability'=>$request->input('vulnerability'),
                'education_level'=>$request->input('education_level'),
                'photo'=>$profileImage_url,
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
    public function edit(Children $children)
    {
        //

        $children=Children::where('id',$children->id)->first();


        return view('Admin/children.editFile',['children'=>$children]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Children $children)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Children  $children
     * @return \Illuminate\Http\Response
     */
    public function destroy(Children $children)
    {
        //
        $findChild=Children::find($children->id);
        dd($findChild);
        if($findChild->delete()){

            return redirect()->route('Admin.deleteChild');
        }
        return back()->withInput();
    }
}
