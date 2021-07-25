<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use App\Models\Link;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Link $link)
    {
        $models = [];
        return view('statistcs.index',['models'=> $models]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Statistic  $statistic
     * @return \Illuminate\Http\Response
     */
    public function show(statistic $statistic)
    {
        return view('link.add',['model'=> new Link()]);
    }

}
