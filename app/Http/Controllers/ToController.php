<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\toRequest;
use Illuminate\Http\Request;

class ToController extends Controller
{
    public function create(){
        return view("to_samp.index");
    }

    public function store(Request $request){
        $formFields = $request->validate([ //check if values are available before submiting for database input
            'tin'               => ['required'], 
            'name'              => ['required'], 
            'position'          => ['required'], 
            'salary'            => ['required'], 
            'division'          => ['required'], 
            'departure_date'    => ['required'], 
            'arrival_date'      => ['required'], 
            'official_station'  => ['required'], 
            'destination'       => ['required'], 
            'purpose_of_travel' => ['required'], 
            'per_diems'         => ['required'], 
            'to_type'           => ['required']
        ]);

        toRequest::create($formFields); //this will be the query that will store the data such as the formFields

        return redirect('/')->with('message', 'Travel order created successfully');
    }
}
