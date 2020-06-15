<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Customer;
use App\Model\CustomerReport;
use App\User;

use DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $d['users'] = User::orderBy("name", "ASC")->get();
        $d['customers'] = Customer::orderBy('id', "DESC")->get();
        return view('app.Customer.index', $d);
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
        $c = Customer::orderBy("id", "DESC")->first();
        $d = new Customer;
        if(!empty($c)){
            $csID = $c->id + 1;
        }
        else{
            $csID = 1;
        }
        $d->id = $csID;
        $d->task = $request->input('task');
        $d->package = $request->input('package');
        $d->price = $request->input('price');
        $d->date_close = $request->input('date_close');
        $d->priority = $request->input('priority');
        $d->payment = $request->input('payment');
        $d->comment = $request->input('comment');

        $d->save();

        $userID = $request->input('user_id');

        $whereArray = array('customer_id' => $csID);
        $query = DB::Table('customer_reports');
        foreach($whereArray as $field => $value) {
            $query->where($field, $value);
        }
        $query->delete();

        if(!empty($userID)){
            foreach($userID as $res){
                $e = new CustomerReport;
                $e->user_id = $res;
                $e->customer_id = $csID;
    
                $e->save();
            }
        }

        return back()->with("alertStore", $request->input('task'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        abort(404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $d = $customer;
        $task = $d->task;
        $d->delete();

        return back()->with("alertDestroy", $task);
    }
}
