<?php

namespace App\Http\Controllers;

use App\Model\Activity;
use App\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $d['users'] = User::orderBy("name", "ASC")->get();
        return view('home', $d);
    }

    public function test_statistic()
    {
        $userId = 2;

        $activities = Activity::with(
            [
                'cards.tasks.userTasks',
            ]
        )
            ->whereHas('cards.tasks.userTasks', function ($query) use ($userId) {
                return $query->where('user_id', $userId);
            })
            ->get();

        return $activities;
    }
}
