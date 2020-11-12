<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Task::orderBy('title','asc')->paginate(10); 
        return view('task.index')->with('items',$items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
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
            'title'=>'required|unique:task',
            'task1'=>'required',
            'task2'=>'required',
            'task3'=>'required',
            'task4'=>'required'
        ]);

        // submit button
        $item = new Task;
        $item->title = $request->input('title');
        $item->task1 = $request->input('task1');
        $item->task2 = $request->input('task2');
        $item->task3 = $request->input('task3');
        $item->task4 = $request->input('task4');
        $item->save();

        return redirect('/task')->with('success','Tasks Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $item = Task::find($id);
        return view('task.show')->with('item',$item);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Task::find($id);
        return view('task.edit')->with('item',$item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'title'=>'required|unique:task',
            'task1'=>'required',
            'task2'=>'required',
            'task3'=>'required',
            'task4'=>'required'
        ]);

        // submit button
        $item = Task::find($id);
        $item->title = $request->input('title');
        $item->task1 = $request->input('task1');
        $item->task2 = $request->input('task2');
        $item->task3 = $request->input('task3');
        $item->task4 = $request->input('task4');
        $item->save();

        return redirect('/task')->with('success','Task Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item =Task::find($id);
        $item ->delete();
        return redirect('/task')->with('success','Task Removed');
    }
}
