<?php

namespace App\Http\Controllers;

use App\Http\Requests\RedeemPointsRequest;
use App\Redeem;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedeemPointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("admin.redeemPoints.index");
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
    public function store(RedeemPointsRequest $request)
    {
        //

        $input = $request->all();
        if ($input['points'] <= Auth::user()->points) {
            Redeem::create([
                'user_id' => Auth::user()->id,
                'points' => $input['points'],
                'status' => 'pending',
            ]);

            Auth::user()->update([
                'points'=> Auth::user()->points - $input['points'],
            ]);

            $request->session()->flash('success', 'Updated Successfully');
            return redirect()->back();
        } else {
            $request->session()->flash('failed', 'failed');
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $transaction = Redeem::findOrFail($id);
        $transaction->update([
            'status'=>'complete',
        ]);

        $request->session()->flash('success', 'updatesSuccessfully');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function transactionHistory() {
        $transactions = Redeem::where('user_id' , Auth::user()->id)->orderBy('created_at' , 'DESC')->get();
        return view('admin.transactions.index' , compact(['transactions']));
    }
}
