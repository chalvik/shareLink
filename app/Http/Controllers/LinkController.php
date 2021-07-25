<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Http\Requests\LinkRequest;
use Illuminate\Support\Str;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        return view('link.add',['model'=> new Link()]);
    }

    /**
     * @param LinkRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(LinkRequest $request)
    {
        $model = Link::create([
            'url'=> $request->url,
            'hash'=>  Str::random(5),
        ]);

        return redirect(route('link.show', ['hash'=>$model->hash]));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show($hash)
    {
        $model = Link::where(['hash'=>$hash])->firstOrFail();
        return view('link.show',['model'=> $model]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function redirectTo($hash)
    {
        $model = Link::where(['hash'=>$hash])->firstOrFail();
        return redirect()->away($model->url);
    }

}
