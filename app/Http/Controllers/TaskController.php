<?php

namespace App\Http\Controllers;

use App\Model\Task;
use App\Model\UserTask;
use App\User;
use Illuminate\Http\Request;

use DB;

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
        $d->started_at = date("Y-m-d", strtotime($request->input("started_at")));
        $d->ended_at = date("Y-m-d", strtotime($request->input("ended_at")));

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
        $data = "";
        $users = User::orderBy("name", "ASC")->get();
        foreach($task->userTasks as $res){
            $data .= $res->user_id.', ';
        }
        $de = explode(', ', $data);
        foreach($users as $res){
            if(in_array($res->id, $de)){
                echo '<option value="'.$res->id.'" selected>'.$res->name.'</option>';
            }
            else{
                echo '<option value="'.$res->id.'">'.$res->name.'</option>';
            }
        }
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
        if(!empty($request->input("card_id"))){
            $d->card_id = $request->input("card_id");
        }
        $d->priority = $request->input("priority");
        $d->name = $request->input("name");
        $d->description = $request->input("description");
        $d->started_at = date("Y-m-d", strtotime($request->input("started_at")));
        $d->ended_at = date("Y-m-d", strtotime($request->input("ended_at")));

        $d->save();

        $usertasks = $request->input('usertasks');

        $whereArray = array('task_id' => $task->id);
        $query = DB::Table('user_tasks');
        foreach($whereArray as $field => $value) {
            $query->where($field, $value);
        }
        $query->delete();

        if(!empty($usertasks)){
            foreach($usertasks as $res){
                $e = new UserTask;
                $e->user_id = $res;
                $e->task_id = $task->id; 
    
                $e->save();
            }
        }

        return back()->with("alertUpdate", $request->input('name'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $d = $task;
        $name = $d->name;
        $d->delete();

        return back()->with("alertDestroy", $name);
    }
}
