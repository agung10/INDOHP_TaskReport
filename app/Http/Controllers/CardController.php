<?php

namespace App\Http\Controllers;

use App\Model\Card;
use App\Model\Activity;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $activity_id = $request->activity_id;
        $d['activity'] = Activity::findOrFail($activity_id);
        $d['cards'] = Card::where("activity_id", $activity_id)->orderBy('id', 'DESC')->get();

        return view('app.Card.index', $d);
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
            'activity_id' => 'required',
            'name' => 'required|max:255',
        ]);
        
        $d = new Card;
        $d->activity_id = $request->input("activity_id");
        $d->name = $request->input("name");

        $d->save();

        return back()->with("alertStore", $request->input('name'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        //
    }
}
