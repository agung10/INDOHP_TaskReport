<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Image;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.Profile.index');
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
        abort(404);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = User::find($id);
        $d->name = $request->input('name');
        $d->phone_number = $request->input('phone_number');
        if(!empty($request->input('password'))){
            $d->password = $request->input('password');
        }

        $avatar = $request->file('avatar');
        if(!empty($avatar)){
            $rand = bin2hex(openssl_random_pseudo_bytes(100)).".".$avatar->extension();
            $rand_md5 = md5($rand).".".$avatar->extension();
            $d->avatar = $rand_md5;

            $avatar_resize = Image::make($avatar->getRealPath());              
            $avatar_resize->resize(200, 200, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('img/avatar/' .$rand_md5));
        }

        $d->save();

        return back()->with("alertUpdate", $request->input('name'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
