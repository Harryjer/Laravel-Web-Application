<?php

namespace App\Http\Controllers;

use App\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Site::orderBy('title','asc')->paginate(10); 
        return view('site.index')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('site.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|unique:site',
            'start_date'=>'required',
            'end_date'=>'required',
            'no_of_works'=>'required|numeric',
            'location'=>'required|nullable'
        ]);

        // submit button
        $item = new Site;
        $item->title = $request->input('title');
        $item->start_date = $request->input('start_date');
        $item->end_date = $request->input('end_date');
        $item->no_of_works = $request->input('no_of_works');
        $item->location = $request->input('location');
        $item->save();

        return redirect('/site')->with('success','Project Added');
    }
        
    /**
     * Display the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Site::find($id);
        return view('site.show')->with('item',$item);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Site::find($id);
        // dd($item);
        return view('site.edit')->with('item',$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title'=>'required|unique:site',
            'start_date'=>'required',
            'end_date'=>'required',
            'no_of_works'=>'required|numeric',
            'location'=>'required|nullable'
        ]);

        // submit button
        $item = Site::find($id);
        $item->title = $request->input('title');
        $item->start_date = $request->input('start_date');
        $item->end_date = $request->input('end_date');
        $item->no_of_works = $request->input('no_of_works');
        $item->location = $request->input('location');
        $item->save();
        return redirect('/site')->with('success','Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Site  $site
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Site::find($id);
        $item ->delete();
        return redirect('/site')->with('success','Project Removed');
    }

}
