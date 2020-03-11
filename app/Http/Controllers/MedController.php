<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Med;

class MedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $meds = Med::all();
        return view('meds.index')->with('meds', $meds);
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
                'date' => 'required|string|max:255',
                'title' => 'required|string|max:255',
            ]);

            // create a new incomplete task with the given title
//            tasks()->create([
//                'title' => $data['title'],
//                'is_complete' => false,
//            ]);
            //create post
            $med = new Med;
//            $post->user_id = auth()->user()->id;
            $med->date = $request->input('date');
            $med->title = $request->input('title');
            $med->is_complete = false;
            $med->save();

            // flash a success message to the session
            session()->flash('status', 'Medicine Added!');

            // redirect to tasks index
            return redirect('/health');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id)
    {
//        $task = Task::find($id);
//        return view('tasks.show')->with('task', $task);
////        return(view('tasks.show'));
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
     * @param $med
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, $id)
    {
        {
            // check if the authenticated user can complete the task
//            $this->authorize('complete', $task);

            // mark the task as complete and save it
            $med = Med::find($id);
            $med->is_complete = true;
            $med->save();

            // flash a success message to the session
            session()->flash('status', 'Precaution Completed!');

            // redirect to tasks index
            return redirect('/health');
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