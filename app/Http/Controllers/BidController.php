<?php

namespace App\Http\Controllers;

use App\Models\BidMng;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;

class BidController extends Controller
{
    public function index(){
        $bid = BidMng::orderBy('bid', 'desc')->get();
        $highestbid = BidMng::max('bid');
        $lowestbid = BidMng::min('bid');
        $bidCount = $bid->count();
        return view('company.index', [
            'bid' => $bid,
            'bidCount' => $bidCount,
            'highestbid' => $highestbid,
            'lowestbid' => $lowestbid
        ]);

    }

    public function showLargest(){
        $bid = BidMng::orderBy('bid', 'desc')->get();
        $highestbid = BidMng::max('bid');
        $bidCount = $bid->count();
        return view('company.bidLargest', [
            'bid' => $bid,
            'bidCount' => $bidCount,
            'highestbid' => $highestbid
        ]);

    }

    //for creating new bid
    public function create(){
        return view('company.create');
    }
    public function store(Request $request){
        //dd($request->file('logo'));
        $formFields = $request->validate([ //check if values are available before submiting for database input
            'company' => ['required', Rule::unique('bid_mng', 'company')], //RULE::unique will only take values that have no similraties to any value available in the table 'listings' in column 'company'
            'address' => 'required',
            'bid' => ['required'],
        ]);

        BidMng::create($formFields); //this will be the query that will store the data such as the formFields

        return redirect('/')->with('message', 'Bid created successfully');
    }

    //for editing bid
    public function edit(BidMng $item){
        return view('company.edit', ['item' => $item]);
    }
    public function update(Request $request,BidMng $item){
        $formFields = $request->validate([ //check if values are available before submiting for database input
            'company' => ['required'], //RULE::unique will only take values that have no similraties to any value available in the table 'listings' in column 'company'
            'address' => 'required',
            'bid' => ['required'],
        ]);

        $item->update($formFields); //this will be the query that will store the data such as the formFields

        return redirect('/')->with('message', 'Bid information updated successfully');
    
    }

    //destroy
    public function destroy(BidMng $item){
        $item->delete();
        return redirect('/')->with('message', 'Item deleted successfully');
    }
    
}
