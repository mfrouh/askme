<?php

namespace App\Http\Controllers;

use App\ask;
use App\Http\Requests\askstore;
use App\User;
use Illuminate\Http\Request;

class AskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->middleware('auth')->except(['create','store']);
    }
    public function index()
    {
        $questions=ask::where('user_id',auth()->user()->id)->orderby('id','desc')->paginate(3);
        return view('ask.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($username)
    {
        $user=User::where('username',$username)->firstorfail();
        return view('ask.create',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(askstore $request)
    {
        $ask= new ask();
        $ask->create($request->validated());
        return back()->with('message',__('home.send'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function show(ask $ask)
    {
        return view('asl.show',compact('ask'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function edit(ask $ask)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ask $ask)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ask  $ask
     * @return \Illuminate\Http\Response
     */
    public function destroy(ask $ask)
    {
        $ask->delete();
        return back();
    }
}
