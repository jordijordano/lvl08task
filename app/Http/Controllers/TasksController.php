<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;
use App\Project;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($projectId)
    {
        /*$tasks = Task::all();
        return view('tasks.index')->with('tasks', $tasks);*/

        $tasks = Project::find($projectId)->tasks;
        return view('tasks.index')->with('tasks', $tasks)->with('projectid', $projectId);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($projectid)
    {
       return view('tasks.create')->with('projectid', $projectid);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $newtask = Task::create($request->all());
        //return redirect('projects');
        //return view('tasks.index')->with('projectId',$newtask->project_id);
        $tasks = Project::find($newtask->project_id)->tasks;
        return view('tasks.index')->with('tasks', $tasks)->with('projectid', $newtask->project_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($projectid,$id)
    {
        $task = Task::find($id);
        return view('tasks.show')->with('task', $task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($projectid, $id)
    {
        $task= Task::find($id);
        return view('tasks.edit')->with('task', $task)->with('projectid', $projectid);
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
        $task = Task::find($id);
        $task->update($request->all());
        return redirect('tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($projectid, $taskid)
    {
         $task = Task::find($taskid);
        $task->delete();
        return redirect('projects/'.$projectid.'/tasks');

    }
}
