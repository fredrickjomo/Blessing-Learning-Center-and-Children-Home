<?php

namespace App\Http\Controllers;

use App\Children;
use App\Sponsorship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class SponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $countries=DB::table('countries')->pluck('name');
        //$child=DB::table('childrens')->pluck('id');
        $children=Children::all();
       $child_count=1;



       // dd($countries);
        //dd($child);
        return view('Sponsor.index',compact('countries','children','child_count'));
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

        if (Auth::check()){
            $input=request()->validate([
                'amount_per_month'=>'required|max:5',
                'method_of_payment'=>'required'
            ],[
                'amount_per_month.required'=>'Enter correct amount of sponsorship'
            ]);
               $input=request()->all();

            $sponsorship=Sponsorship::create([
               'user_id'=>$request->user()->id,
                'first_name'=>$request->user()->first_name,
                'last_name'=>$request->user()->last_name,
                'nationality'=>$request->user()->nationality,
                'child_id'=>$request->input('child_name'),
                'amount_per_month'=>$request->input('amount_per_month'),
                'method_of_payment'=>$request->input('method_of_payment'),

            ]);
            if($sponsorship){
                return redirect()->route('Sponsor.index')->with('success','Application sent successfully.Kindly wait for our response.Thank you');
            }

        }
        //return back()->withInput()->with('errors','Application NOT SENT..Retry....');
        return redirect()->route('login');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sponsorship  $sponsorship
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsorship $sponsorship)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sponsorship  $sponsorship
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsorship $sponsorship)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sponsorship  $sponsorship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sponsorship $sponsorship)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sponsorship  $sponsorship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsorship $sponsorship)
    {
        //
    }
}
