<?php

namespace App\Http\Controllers;

use App\train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trains = train::all();

        return view('listng',compact('train') );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\train  $train
     * @return \Illuminate\Http\Response
     */
    public function show(train $train)
    {
        //
    }
