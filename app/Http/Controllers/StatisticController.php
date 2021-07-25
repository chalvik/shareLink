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
    public function index($hash)
    {
        $link = Link::findOrFailForHash($hash);
        $query = Statistic::where(['link_id'=>$link->id])->with('link');
        $models = $query->paginate(5);

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
        return view('statistcs.show',['model'=> Statistic::findOrFaul($statistic)]);
    }

}
