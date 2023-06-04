<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todolist;

class TodolistController extends Controller
{
    public function index()
    {
        return redirect('/todolist/view');
    }
    public function create()
    {
        // $url = url('/todolist');
        $title= "ADD TODO";
        // $data = compact('url','title');
        $data = compact('title');
        return view('todolist')->with($data);
        // return view('todolist');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'task' => 'required',
                'priority' =>'required',
                'status' =>'required'
            ]
        );
        $todolist = new Todolist;
        $todolist->task = $request['task'];
        $todolist->priority = $request['priority'];
        $todolist->status = $request['status'];
        $todolist->save();

        return redirect('/todolist/view');
    }
    public function view()
    {
        $todolist = Todolist::all();
        $data = compact('todolist');
        return view('todolist-view')->with($data);
    }
    public function delete($id)
    {
        $todolist = Todolist::find($id);
        if(!is_null($todolist)){
            $todolist->delete();
        }
        return redirect('/todolist/view');
    }
    public function edit($id)
     {
        $todolist = Todolist::find($id);
        if(is_null($todolist)){
            return redirect('/todolist/view');
        }
        else{
            $url = url('/todolist/update') ."/" .$id;
            // $title= "UPDATE TODO";

            $data = compact('todolist','url');
            return view('edit')->with($data);
        }
     }  
     public function update($id, Request $request)
     {
        $request->validate(
            [
                'task' => 'required',
                'priority' =>'required',
                'status' =>'required'
            ]
        );
        $todolist = Todolist::find($id);
        $todolist->task = $request['task'];
        $todolist->priority = $request['priority'];
        $todolist->status = $request['status'];
        $todolist->save();
        return redirect('/todolist/view');
     }

}
