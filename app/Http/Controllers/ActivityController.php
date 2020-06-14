<?php

namespace App\Http\Controllers;

use App\Model\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->q;
        if(!empty($q)){
            $d['activities'] = Activity::where("name", "LIKE", "%$q%")->orWhere("description", "LIKE", "%$q%")->orderBy('id', 'DESC')->paginate(8);
        }
        else{
            $d['activities'] = Activity::orderBy('id', 'DESC')->paginate(8);
        }

        return view('app.Activity.index', $d);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'color' => 'required|max:255',
        ]);

        $d = new Activity;
        $d->name = $request->input('name');
        $d->description = $request->input('description');
        $d->color = $request->input('color');

        $d->save();

        return redirect()->route('activities.index')->with("alertStore", $request->input('name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Activity $activity)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        $d = $activity;
        $name = $d->name;
        $d->delete();

        return redirect()->route('activities.index')->with("alertDestroy", $name);
    }
}
