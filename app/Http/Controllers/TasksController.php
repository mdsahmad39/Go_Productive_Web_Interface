<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        {
            // validate the given request
            $data = $this->validate($request, [
                'title' => 'required|string|max:255',
            ]);

            // create a new incomplete task with the given title
//            tasks()->create([
//                'title' => $data['title'],
//                'is_complete' => false,
//            ]);
            //create post
            $task = new Task;
//            $post->user_id = auth()->user()->id;
            $task->title = $request->input('title');
            $task->is_complete = false;
            $task->save();

            // flash a success message to the session
            session()->flash('status', 'Task Created!');

            // redirect to tasks index
            return redirect('/tasks');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @param $task
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, $id)
    {
        {
            // check if the authenticated user can complete the task
//            $this->authorize('complete', $task);

            // mark the task as complete and save it
            $task = Task::find($id);
            $task->is_complete = true;
            $task->save();

            // flash a success message to the session
            session()->flash('status', 'Task Completed!');

            // redirect to tasks index
            return redirect('/tasks');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
