<?php

namespace App\Http\Controllers;

use App\Model\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        abort(404);
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
        $d = new Task;
        $d->card_id = $request->input("card_id");
        $d->priority = $request->input("priority");
        $d->name = $request->input("name");
        $d->description = $request->input("description");
        // $d->started_at = $request->input("started_at");
        // $d->ended_at = $request->input("ended_at");

        $d->save();

        return back()->with("alertStore", $request->input('name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $d = $task;
        $d->card_id = $request->input("card_id");
        $d->priority = $request->input("priority");
        $d->name = $request->input("name");
        $d->description = $request->input("description");
        // $d->started_at = $request->input("started_at");
        // $d->ended_at = $request->input("ended_at");

        $d->save();

        return back()->with("alertStore", $request->input('name'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
